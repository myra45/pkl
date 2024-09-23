<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Nilai;
use Illuminate\Http\Request;
use App\Models\EventPenilian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminNilaiAkhirController extends Controller
{
    public function index()
    {
        $admin = Auth::user()->id;
        $event_nilai = EventPenilian::where('status', 'Aktif')->first();
        $event_nilai_id = null;
        if ($event_nilai) {
            $event_nilai_id = Nilai::where('event_penilaian_id', $event_nilai->id)
                ->where('admin_id', $admin)->first();
        }
        // dd($event_nilai_id);
        return view('admin_eskul.nilai_akhir_show', compact('event_nilai', 'event_nilai_id'));
    }

    public function showNilaiAkhir(Request $request, $event_id)
    {
        $admin = Auth::user()->id;
        $eskul_id = Auth::user()->eskul_id;

        // Ambil input pencarian dari form
        $search = $request->input('search');

        // Mendapatkan data member yang sesuai dengan eskul_id dari admin dengan pagination
        $members = User::where('eskul_id', Auth::user()->eskul_id)
            ->where('role', 'Member')
            ->where(function ($query) use ($search) {
                if ($search) {
                    $query->where('name', 'like', "%{$search}%");
                }
            })
            ->paginate(10);

        // Data nilai
        $nilaiData = Nilai::where('event_penilaian_id', $event_id)
            ->where('eskul_id', Auth::user()->eskul_id)
            ->get();

        // Data event
        $event = EventPenilian::find($event_id);

        return view('admin_eskul.nilai_akhir_detail', compact('members', 'nilaiData', 'event', 'search'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nilai_akhir.*' => 'required',
            'user_id.*' => 'required',
            'eskul_id.*' => 'required',
        ]);

        $eskul_id = Auth::user()->eskul_id;

        // Looping data dari form untuk setiap user
        foreach ($request->user_id as $key => $user_id) {
            $nilai_akhir = $request->nilai_akhir[$key];
            $eskul_id = $request->eskul_id[$key];
            $event_id = $request->event_id;

            // Cek apakah nilai untuk kombinasi user_id, eskul_id, dan event_id sudah ada di database
            $nilai = Nilai::where('user_id', $user_id)
                ->where('eskul_id', $eskul_id)
                ->where('event_penilaian_id', $event_id)
                ->first();

            if ($nilai) {
                // Jika nilai sudah ada, update nilai_akhir
                $nilai->nilai_akhir = $nilai_akhir;
                $nilai->save();
            }
        }

        return redirect()->back()->with('success', 'Data nilai berhasil disimpan!');
    }

    public function history(Request $request)
    {

        $search = $request->input('search');

        $all_event_nilai = EventPenilian::where(function ($query) use ($search) {
            if ($search) {
                $query->where('nama_event', 'like', "%{$search}%")
                    ->orWhere('tanggal', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%");
            }
        })->paginate(5);

        return view('admin_eskul.nilai_akhir_history', compact('search', 'all_event_nilai'));
    }

    public function export($event_id)
    {
        $admin = Auth::user()->id;
        $eskul_id = Auth::user()->eskul_id;
        // Data event
        $event = EventPenilian::find($event_id);

        // Ambil data anggota (member) yang terkait dengan eskul di event tersebut
        $members = User::where('eskul_id', Auth::user()->eskul_id)
            ->where('role', 'Member') // Pastikan hanya user dengan role 'Member' yang diambil
            ->get();

        // Data nilai
        $nilaiData = Nilai::where('event_penilaian_id', $event_id)
            ->where('eskul_id', Auth::user()->eskul_id)
            ->get();

        // Data yang akan dikirimkan ke view PDF
        $data = [
            'event' => $event,
            'members' => $members,
            'nilaiData' => $nilaiData
        ];
        $safeEventName = str_replace(['/', '\\'], '-', $event->nama_event);

        // Buat file PDF dengan view yang sesuai
        $pdf = PDF::loadView('admin_eskul.nilai_akhir_export', $data);


        // Tampilkan pratinjau PDF di browser
        return $pdf->stream('laporan_nilai_' . $safeEventName . '.pdf');
    }
}
