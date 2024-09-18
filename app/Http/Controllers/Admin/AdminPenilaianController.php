<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Nilai;
use Illuminate\Http\Request;
use App\Models\EventPenilian;
use App\Mail\NotificationPenilaian;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AdminPenilaianController extends Controller
{
    public function index()
    {
        $event = EventPenilian::where('status', 'Aktif')->get();
        return view('admin.event_nilai_show', compact('event'));
    }

    public function all(Request $request) 
    {
        $search = $request->input('search');

        $all_event_nilai = EventPenilian::where(function($query) use ($search) {
            if($search) {
                $query->where('nama_event', 'like', "%{$search}%")
                      ->orWhere('tanggal', 'like', "%{$search}%")
                      ->orWhere('status', 'like', "%{$search}%");
            }
        })->paginate(5);

        return view('admin.event_nilai_all', compact('search', 'all_event_nilai'));
    }

    public function create() 
    {
        return view('admin.event_nilai_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required',
            'tanggal' => 'required',
        ]);  

        $obj = new EventPenilian();
        $obj->nama_event = $request->nama_event; 
        $obj->tanggal = $request->tanggal; 
        $obj->status = 'Aktif';
        $obj->save();

        // Ambil data Event untuk Email
        $event_penilaian = $obj;

        // Pengumuman
        $announcement = "Halaman Penilaian telah tersedia. Silahkan Masukan Nilai Setiap Member Eskul";

        // Ambil Data Admin Eskul
        $admin_eskuls = User::where('role', 'Pembina Eskul')->get();

        // Kirim Email Notification ke setiap Admin
        foreach($admin_eskuls as $admin_eskul) {

        $members = User::where('eskul_id', $admin_eskul->eskul_id)->where('role', 'Member')->get();

        // Buat entri penilaian untuk setiap member dan event
        foreach($members as $member) {
            // Simpan nilai default untuk setiap member di event ini
            $nilai = new Nilai();
            $nilai->user_id = $member->id;
            $nilai->eskul_id = $member->eskul_id;
            $nilai->admin_id = $admin_eskul->id;
            $nilai->event_penilaian_id = $event_penilaian->id;  // Menghubungkan nilai dengan event penilaian
            $nilai->nilai_akhir = null; // Nilai awal belum diisi
            $nilai->save();

            try {
                $link_penilaian = route('admin_extracurricular_grade', ['event_id' => $event_penilaian->id, 'admin_id' => $admin_eskul->id]);
                Mail::to($admin_eskul->email)->send(new NotificationPenilaian($event_penilaian, $announcement, $link_penilaian));
            } catch (\Exception $e) {
                Log::error("Failed to send email to {$admin_eskul->email}: ".$e->getMessage());
            }        
        }

    }

        return redirect()->route('event_nilai_all')->with('success', 'Event Penilaian has been created and Notification is sent!');
    }

    public function edit($id) {
        $row_data = EventPenilian::where('id', $id)->first();

        return view('admin.event_nilai_edit', compact('row_data'));
    }

    public function update(Request $request, $id) {
        $row_data = EventPenilian::where('id', $id)->first();
        $row_data->status = $request->status;
        $row_data->update();

        return redirect()->route('event_nilai_all')->with('success', 'Data is updated successfully!');
    }

    public function delete($id) {
        $row_data = EventPenilian::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully!');
    }
}
