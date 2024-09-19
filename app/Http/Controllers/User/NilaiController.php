<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Eskul;
use App\Models\EventPenilian;
use App\Models\Nilai;
use App\Models\User;

class NilaiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        // Ambil event dan nilai yang berkaitan dengan user login dan eskul_id
        $nilaiData = Nilai::where('user_id', auth()->user()->id)
            ->where('eskul_id', auth()->user()->eskul_id)
            ->where(function ($query) use ($search) {
                if($search) {
                    $query->whereHas('event', function ($query) use ($search) {
                        $query->where('nama_event', 'like', "%{$search}%");
                    });
                }
            })
            ->with('event')
            ->paginate(10);
        // dd($nilaiData);
        return view('user.nilai_akhir', compact('search','nilaiData'));
    }
}
