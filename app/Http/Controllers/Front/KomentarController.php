<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'isi_komentar' => 'required'
        ]);

        $obj=new Komentar();
        $obj->berita_id = $request->berita_id;
        $obj->user_id = $request->user_id;
        $obj->isi_komentar = $request->isi_komentar;
        $obj->save();

        return back()->with('success', 'Pesan Anda telah terkirim!');

    }
}
