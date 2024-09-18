<?php

namespace App\Http\Controllers\User;

use App\Models\Tugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function index() {
        $eskul = Auth::user()->eskul_id;
        $user_tasks = Tugas::where('eskul_id', $eskul)->where('status', 'Belum Selesai')->get();
        return view('user.dashboard', compact('user_tasks'));
    }
}
