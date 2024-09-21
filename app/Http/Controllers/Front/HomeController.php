<?php

namespace App\Http\Controllers\Front;

use App\Models\Testimonial;
use App\Models\Berita
use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Models\KontakDeveloper;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index() {
        $testimonial=Testimonial::limit(2)->get();
        // dd($testimonial);
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::with('rCategory')->get();
        return view('front.home', compact('page_data', 'beritas', 'testimonial));
    }
    public function berita() {
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::with('rCategory')->get();
        return view('front.news', compact('page_data', 'beritas'));
    }
    public function detail_berita($id) {
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::with('rCategory')->where('id', $id)->first();
        $berita_categories= Berita::with('rCategory')->get();
        return view('front.news_detail', compact('page_data', 'beritas', 'berita_categories'));
    }
    
    public function kontak() {
        $page_data = HomePageItem::where('id', 1)->first();
        $kontak_data = KontakDeveloper::get();
        return view('front.kontak', compact('page_data', 'kontak_data'));
    }
}
