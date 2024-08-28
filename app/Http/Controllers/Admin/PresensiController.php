<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Presensi;
use App\Models\User;
use App\Models\Eskul;
use Barryvdh\DomPDF\Facade\Pdf;

class PresensiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $admin_data = User::with('Extracurricular')->findOrFail($user->id);
        return view('admin_eskul.presensi_show', compact('admin_data'));
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


    public function presensi($id)
    {
        $event = Event::where('id', $id)->first();
        $presensi = Presensi::where('event_id', $id)
            ->whereHas('user', function ($query) {
                $query->where('role', 'Member');
            })
            ->with(['eskul', 'event', 'user'])
            ->get();
        // dd($presensi);
        return view('admin_eskul.presensi_table', compact('event', 'presensi'));
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

    public function history()
    {
        $eskul = Eskul::where('id', auth()->user()->eskul_id)->first();
        $event_data = $eskul ? $eskul->events : collect();
        return view('admin_eskul.presensi_history', compact('event_data'));
    }


    public function generateReport()
    {
        // Mengambil semua event dan data presensi yang terkait
        $events = Event::with(['presensis', 'presensis.user'])->get();

        // Data ini akan dioper ke view untuk dijadikan laporan
        $data = [
            'events' => $events,
        ];

        // Render PDF
        $pdf = PDF::loadView('admin_eskul.presensi_laporan', $data);

        // Unduh PDF dengan nama file tertentu
        return $pdf->download('laporan_presensi.pdf');
    }
}
