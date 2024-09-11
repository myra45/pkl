<?php

namespace App\Http\Controllers\User;

use App\Models\Tugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserTaskController extends Controller
{
    public function index() {
        $eskul = Auth::user()->eskul_id;
        $user_tasks = Tugas::where('eskul_id', $eskul)->get();
        return view('user.user_task', compact('user_tasks'));
    }
}
