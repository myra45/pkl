<?php

namespace App\Http\Controllers\Front;

use App\Models\Komentar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KomentarController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'isi_komentar' => 'required'
        ]);

        $obj = new Komentar();
        $obj->berita_id = $request->berita_id;
        $obj->user_id = auth()->user()->id;
        $obj->isi_komentar = $request->isi_komentar;
        // dd($request->all());
        $obj->save();

        return back()->with('success', 'Komentar Anda telah terkirim!');

    }
}
