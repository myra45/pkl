<?php

namespace App\Http\Controllers\Front;

use App\Models\HomePageItem;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('front.home', compact('page_data'));
    }
    public function berita() {
        return view('front.news');
    }
    public function detail_berita() {
        return view('front.news_detail');
    }
}
