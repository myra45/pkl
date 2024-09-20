<?php

namespace App\Http\Controllers\Front;


use App\Models\Berita;
use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;;

class HomeController extends Controller
{
    public function index() {
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::with('rCategory')->get();
        return view('front.home', compact('page_data', 'beritas'));
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
}
