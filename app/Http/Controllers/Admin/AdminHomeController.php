<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Eskul;
use App\Models\Event;
use App\Models\Nilai;
use App\Models\Tugas;
use App\Models\Berita;
use App\Models\Presensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index()
    {
        $all_admin_eskul = User::where('role', 'Pembina Eskul')->count();
        $all_members = User::where('role', 'Member')->count();
        $all_eskuls = Eskul::count();
        $all_beritas = Berita::count();

        return view('admin.home', compact('all_admin_eskul', 'all_members', 'all_eskuls', 'all_beritas'));
    }

    public function eskul_index()
    {

        $eskul_id = Auth::user()->eskul_id;

        $all_presensi = Event::where('eskul_id', $eskul_id)->count();
        $all_task = Tugas::where('eskul_id', $eskul_id)->count();
        $all_member = User::where('role', 'Member')->where('eskul_id', $eskul_id)->count();
        $all_nilai = Nilai::where('eskul_id', $eskul_id)->count();
        // dd($all_nilai);
        // Mendapatkan data kehadiran member
        $attendanceData = Presensi::where('eskul_id', $eskul_id)->selectRaw('DATE(created_at) as date, COUNT(*) as total_attendance')
            ->groupBy('date')
            ->get();

        $monthlyAttendance = Presensi::where('eskul_id', $eskul_id)->selectRaw('MONTH(created_at) as month, COUNT(*) as total_attendance')
            ->groupBy('month')
            ->get();

        // dd($monthlyAttendance);
        return view('admin_eskul.home', compact('all_presensi', 'all_task', 'all_member', 'all_nilai','attendanceData', 'monthlyAttendance'));
    }
}
