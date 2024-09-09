<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Eskul;

class AdminNilaiAkhirController extends Controller
{
    public function index() {
        $admin = Auth::user()->eskul_id;
        $members = User::with('Extracurricular')->where('role', 'Member')->where('eskul_id', $admin)->get(); 
        return view('admin_eskul.nilai_akhir_show', compact('members'));
    }
}
