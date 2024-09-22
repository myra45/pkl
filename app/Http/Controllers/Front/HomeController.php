<?php

namespace App\Http\Controllers\Front;

use App\Models\Berita;
use App\Models\Komentar;
use App\Models\Testimonial;
use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Models\BeritaCategory;
use App\Models\KontakDeveloper;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $testimonial=Testimonial::limit(3)->get();
        // dd($testimonial);
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::withCount('komentar')->orderBy('created_at', 'desc')->limit(3)->get();
        $last_post = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $berita_categories= BeritaCategory::limit(5)->get();
        $all_komentar = Komentar::with('user', 'berita')->orderBy('created_at', 'desc')->limit(3)->get();
        // dd($komentar);
        return view('front.home', compact('page_data', 'beritas', 'testimonial','berita_categories','all_komentar','last_post'));
    }
    
    public function kontak() {
        $page_data = HomePageItem::where('id', 1)->first();
        $kontak_data = KontakDeveloper::get();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $last_post = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $berita_categories= BeritaCategory::get();
        $all_komentar = Komentar::with('user', 'berita')
                                 ->orderBy('created_at', 'desc')
                                 ->limit(3)->get();
        return view('front.kontak', compact('page_data', 'kontak_data','beritas','berita_categories', 'all_komentar', 'last_post'));
    }
}
