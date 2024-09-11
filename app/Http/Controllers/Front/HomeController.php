<?php

namespace App\Http\Controllers\Front;

use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;;

class HomeController extends Controller
{
    public function index() {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('front.home', compact('page_data'));
    }
    public function berita() {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('front.news', compact('page_data'));
    }
    public function detail_berita() {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('front.news_detail', compact('page_data'));
    }
}
