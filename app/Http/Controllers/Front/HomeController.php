<?php

namespace App\Http\Controllers\Front;

use App\Models\Testimonial;
use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Models\KontakDeveloper;
use App\Http\Controllers\Controller;

;

class HomeController extends Controller
{
    public function index() {
        $testimonial=Testimonial::limit(2)->get();
        // dd($testimonial);
        $page_data = HomePageItem::where('id', 1)->first();
        return view('front.home', compact('page_data', 'testimonial'));
    }
    public function berita() {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('front.news', compact('page_data'));
    }
    public function detail_berita() {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('front.news_detail', compact('page_data'));
    }
    
    public function kontak() {
        $page_data = HomePageItem::where('id', 1)->first();
        $kontak_data = KontakDeveloper::get();
        return view('front.kontak', compact('page_data', 'kontak_data'));
    }
}
