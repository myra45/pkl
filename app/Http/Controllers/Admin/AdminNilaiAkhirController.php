<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Eskul;
use App\Models\Nilai;

class AdminNilaiAkhirController extends Controller
{
    public function index()
    {
        $admin = Auth::user()->eskul_id;

        // Mengambil semua member yang eskul_id-nya sama dengan admin
        $members = User::with('Extracurricular')->where('role', 'Member')->where('eskul_id', $admin)->get();

        // Mengambil data nilai berdasarkan user dan eskul
        $nilaiData = Nilai::where('eskul_id', $admin)->get();

        return view('admin_eskul.nilai_akhir_show', compact('members', 'nilaiData'));
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nilai_akhir.*' => 'required',
            'user_id.*' => 'required',
            'eskul_id.*' => 'required',
        ]);

        // Looping data yang dikirim dari form
        foreach ($request->user_id as $key => $user_id) {
            $eskul_id = $request->eskul_id[$key];
            $nilai_akhir = $request->nilai_akhir[$key];

            // Cek apakah nilai untuk user dan eskul sudah ada di database
            $nilai = Nilai::where('user_id', $user_id)->where('eskul_id', $eskul_id)->first();

            if ($nilai) {
                // Jika nilai sudah ada, lakukan update
                $nilai->nilai_akhir = $nilai_akhir;
                $nilai->save();
            } else {
                // Jika nilai belum ada, buat entry baru
                $new_nilai = new Nilai();
                $new_nilai->user_id = $user_id;
                $new_nilai->admin_id = Auth::user()->id;
                $new_nilai->eskul_id = $eskul_id;
                $new_nilai->nilai_akhir = $nilai_akhir;
                $new_nilai->save();
            }
        }

        // Redirect setelah data disimpan

        return redirect()->back()->with('success', 'Data is Saved Successfully!');
    }
}
