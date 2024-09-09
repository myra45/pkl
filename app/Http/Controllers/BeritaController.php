<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::get();
        return view('front.news', compact('beritas'));
    }

    public function show()
     {
        
         return view('front.news_detail');
     }
}
