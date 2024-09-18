<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Eskul;
use App\Models\Event;
use App\Models\Presensi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    public function index()
    {
        return view('admin_eskul.presensi_show');
    }

    public function create()
    {
        $user = Auth::user();
        $admin_data = User::with('Extracurricular')->findOrFail($user->id);
        return view('admin_eskul.presensi_create', compact('admin_data'));
    }

    public function store(Request $request)
    {

        // dd($request);

        $request->validate([
            'nama_event' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'tempat' => 'required',
        ]);

        // dd($request->all());
        $event = new Event();
        $event->eskul_id = $request->eskul_id;
        $event->nama_event = $request->nama_event;
        $event->tanggal = $request->tanggal;
        $event->jam_mulai = $request->jam_mulai;
        $event->tempat = $request->tempat;
        $event->save();

        $members = User::where('eskul_id', $request->eskul_id)
            ->where('role', 'Member')
            ->get();

        foreach ($members as $member) {
            $presensi = new Presensi();
            $presensi->event_id = $event->id;
            $presensi->eskul_id = $event->eskul_id;
            $presensi->user_id = $member->id;
            $presensi->status = 'Hadir';
            $presensi->save();
        }

        return redirect()->route('admin_extracurricular_presensi_show', $event->id)->with('success', 'Event has been created and Presensi Page Avabile Now!');
    }


    public function presensi(Request $request, $id)
    {
        $search = $request->input('search'); // Ambil input pencarian

        // Mengambil event berdasarkan id
        $event = Event::where('id', $id)->first();

        // Query presensi berdasarkan event dan filter role sebagai Member
        $presensi = Presensi::where('event_id', $id) // Batasi berdasarkan event_id yang sesuai
            ->whereHas('user', function ($query) {
                $query->where('role', 'Member');
            })
            ->when($search, function ($query) use ($search, $id) {
                // Filter pencarian berdasarkan nama user atau status untuk event_id yang spesifik
                $query->whereHas('user', function ($subQuery) use ($search) {
                    $subQuery->where('name', 'like', "%{$search}%"); // Cari berdasarkan nama
                })
                    ->orWhere(function ($q) use ($search, $id) {
                        // Cari berdasarkan status, dan pastikan hanya presensi dari event ini
                        $q->where('status', 'like', "%{$search}%")
                            ->where('event_id', $id); // Pastikan hanya event_id yang sesuai
                    });
            })
            ->with(['eskul', 'event', 'user'])
            ->paginate(10); // Menggunakan paginate dengan 10 hasil per halaman

        return view('admin_eskul.presensi_table', compact('event', 'presensi', 'search'));
    }


    public function presensi_submit(Request $request, $id)
    {
        $event = Event::where('id', $id)->first();

        foreach ($request->status as $key => $status) {

            // dd($request->all());

            $presensi = Presensi::where('event_id', $id)
                ->where('user_id', $request->user_id[$key])->first();

            if ($presensi) {
                $presensi->update([
                    'status' => $status
                ]);
            }
        }
        return redirect()->route('admin_extracurricular_presensi_show', $event->id)->with('success', 'Presensi has been saved');
    }

    public function history(Request $request)
    {
        $search = $request->input('search');

        // Mendapatkan eskul yang sesuai dengan admin yang login
        $eskul = Eskul::where('id', auth()->user()->eskul_id)->first();

        // Mengambil event yang berhubungan dengan eskul dan menerapkan pencarian
        $events = Event::where('eskul_id', $eskul->id) // Pastikan filter eskul_id tetap ada
            ->when($search, function ($query, $search) {
                // Menjaga agar pencarian tetap dalam scope eskul_id
                $query->where(function ($query) use ($search) {
                    $query->where('nama_event', 'like', "%{$search}%")
                        ->orWhere('tanggal', 'like', "%{$search}%")
                        ->orWhere('tempat', 'like', "%{$search}%");
                });
            })
            ->paginate(10);

        return view('admin_eskul.presensi_history', compact('search', 'events'));
    }




    public function preview_report($event_id = null)
    {
        // Mendapatkan admin yang sedang login
        $admin = Auth::guard('web')->user();

        // Cek apakah ada event_id yang dikirim untuk mengekspor satu event atau semua event
        if ($event_id) {
            // Jika ada event_id, hanya ambil event dan presensi terkait event itu
            $events = Event::with(['presensis' => function ($query) use ($admin) {
                $query->whereHas('user', function ($query) use ($admin) {
                    $query->where('eskul_id', $admin->eskul_id);
                });
            }, 'presensis.user', 'eskuls'])
                ->where('id', $event_id) // Batasi hanya pada event tertentu
                ->where('eskul_id', $admin->eskul_id) // Pastikan admin hanya bisa melihat event dari eskulnya
                ->get();
        } else {
            // Jika tidak ada event_id, ambil semua event yang terkait dengan eskul admin
            $events = Event::with(['presensis' => function ($query) use ($admin) {
                $query->whereHas('user', function ($query) use ($admin) {
                    $query->where('eskul_id', $admin->eskul_id);
                });
            }, 'presensis.user', 'eskuls'])
                ->where('eskul_id', $admin->eskul_id) // Hanya event dari eskul admin yang ditampilkan
                ->get();
        }

        // Data yang akan dikirim ke view
        $data = [
            'events' => $events,
        ];

        // Render PDF menggunakan view yang sesuai
        $pdf = PDF::loadView('admin_eskul.presensi_laporan', $data);

        // Tampilkan pratinjau PDF di browser
        return $pdf->stream('laporan_presensi.pdf');
    }

    public function delete($id) {
        // Cari event berdasarkan ID
        $event = Event::find($id);
    
        if ($event) {
            // Hapus semua presensi terkait dengan event ini
            $event->presensis()->delete();
    
            // Hapus event itu sendiri
            $event->delete();
    
            return redirect()->back()->with('success', 'Data is deleted successfully!');
        }

        dd($event);
    
        return redirect()->back()->with('error', 'Event not found.');
    }
    
}
