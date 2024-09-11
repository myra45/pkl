<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendNotificationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\View\Components\Task;

class TaskController extends Controller
{
    public function index()
    {
        $adminEskulId = Auth::user()->eskul_id;
        $all_tugas = Tugas::where('eskul_id', $adminEskulId)->where('status', 'Belum Selesai')->get();

        return view('admin_eskul.task_show', compact('all_tugas'));
    }

    public function create()
    {
        $user = Auth::user();
        $eskul_data = User::with('Extracurricular')->findOrFail($user->id);
        return view('admin_eskul.task_create', compact('user', 'eskul_data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        $obj = new Tugas();
        $obj->admin_id = $request->admin_id;
        $obj->eskul_id = $request->eskul_id;
        $obj->tanggal = $request->tanggal;
        $obj->judul_tugas = $request->judul;
        $obj->deskripsi = $request->deskripsi;
        $obj->status = $request->status;
        $obj->save();

        // Ambil data tugas untuk email
        $task = $obj;

        // Pengumuman
        $announcement = "Ada tugas baru yang telah ditambahkan. Mohon segera cek dan selesaikan tugas tersebut.";

        // Ambil semua member yang terkait dengan eskul
        $members = User::where('role', 'Member')->where('eskul_id', $request->eskul_id)->get();

        // Kirim email notifikasi ke setiap member
        foreach ($members as $member) {
            Mail::to($member->email)->send(new SendNotificationMail($task, $announcement));
        }

        return redirect()->route('admin_extracurricular_task_manajement_all')->with('success', 'Data inserted Successfully and notifications sent!');
    }

    public function all()
    {
        $adminEskulId = Auth::user()->eskul_id;
        $all_tugas = Tugas::where('eskul_id', $adminEskulId)->get();

        return view('admin_eskul.task_all_show', compact('all_tugas'));
    }

    public function edit($id)
    {
        $row_data = Tugas::where('id', $id)->first();
        return view('admin_eskul.task_edit', compact('row_data'));
    }

    public function update(Request $request, $id)
    {

        $row_data = Tugas::where('id', $id)->first();
        $row_data->status = $request->status;
        $row_data->update();

        return redirect()->route('admin_extracurricular_task_manajement_all')->with('success', 'Data is Updated Successfully!');
    }

    public function delete($id)
    {
        $row_data = Tugas::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully!');
    }
}
