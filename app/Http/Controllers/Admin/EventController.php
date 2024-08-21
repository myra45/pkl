<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function form() {
        $user = Auth::guard('admin')->user();
        $all_data = Admin::with('rExtracurricular')->findOrFail($user->id);
        $extracurricularId = $all_data?->rExtracurricular?->eskul_id ?? 'Not Found';
        return view('admin_eskul.form_presensi', compact('extracurricularId'));
    }

    public function form_submit(Request $request) {

        $request->validate([
            'nama_event' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'tempat' => 'required',
        ]);

        $event = new Event();
        $event->nama_event = $request->nama_event;
        $event->tanggal = $request->tanggal;
        $event->jam_mulai = $request->jam_mulai;
        $event->tempat = $request->tempat;
        $event->save();

        $members = Member::where('eskul_id', $request->eskul_id)->get();


}

}