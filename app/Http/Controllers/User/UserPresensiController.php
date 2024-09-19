<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Presensi;
use Illuminate\Support\Facades\Auth;

class UserPresensiController extends Controller
{
    public function presensi_history(Request $request) {
        $search = $request->input('search');

        $presensi = Presensi::where('user_id', auth()->user()->id)
                    ->where('eskul_id', auth()->user()->eskul_id)
                    ->where(function ($query) use ($search) {
                        if($search) {
                            $query->whereHas('event', function ($query) use ($search) {
                                $query->where('nama_event', 'like', "%{$search}%")
                                    ->orWhere('tanggal', 'like', "%{$search}%" );
                            });
                        }
                    })
                    ->with('event')
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
        
        return view('user.user_presensi_history', compact('presensi'));

    }
}
