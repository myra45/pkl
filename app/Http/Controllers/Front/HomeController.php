<?php

namespace App\Http\Controllers\Front;

use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function index() {
        $banner_data = HomePageItem::where('id',10)->get();
        return view('front.home', compact('banner_data'));
}
    public function berita() {
        return view('front.news');
    }
    public function detail_berita() {
        return view('front.news_detail');
    }
}
