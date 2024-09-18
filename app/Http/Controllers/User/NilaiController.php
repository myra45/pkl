<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Eskul;
use App\Models\Nilai;
use App\Models\User;

class NilaiController extends Controller
{
    // public function index() {
    //      $user = Auth::user();

    //     // Mengambil semua member yang eskul_id-nya sama dengan user
    //      $eskul_id = $user->eskul_id; // Ambil eskul_id dari user

    //     // $nilaiData = Nilai::where('eskul_id', $user)->first();
    //     $nilaiData = Nilai::where('user_id', $user->id)
    //                      ->where('eskul_id', $eskul_id)
    //                      ->first();

    //     // dd($nilaiData);


    //     return view('user.nilai_akhir', compact('nilaiData'));
    // }

    public function index() {
    $user = Auth::user(); // Ambil user yang sedang login
    $eskul_id = $user->eskul_id; // Ambil eskul_id dari user

    // Ambil data nilai untuk user yang sedang login dan eskul_id
    $nilaiData = Nilai::where('user_id', $user->id)
                      ->where('eskul_id', $eskul_id)
                      ->first(); // Karena hanya ingin satu data
    // dd($eskul_id);

    return view('user.nilai_akhir', compact('nilaiData'));
}

}
