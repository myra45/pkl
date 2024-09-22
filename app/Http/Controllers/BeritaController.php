<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Komentar;
use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Models\BeritaCategory;

class BeritaController extends Controller
{
    public function berita() {
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::withCount('komentar')->orderBy('created_at', 'desc')->paginate();
        $last_post = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $berita_categories= BeritaCategory::get();
        $jlm_komentar = Komentar::count();
        $all_komentar = Komentar::with('user', 'berita')
                                 ->orderBy('created_at', 'desc')
                                 ->limit(3)->get();
        return view('front.news', compact('page_data', 'beritas', 'berita_categories', 'all_komentar', 'last_post'));
    }
    public function detail_berita($id) {
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $detail_berita = Berita::with('rCategory')->where('id', $id)->first();
        $berita_categories= BeritaCategory::get();
        $last_post = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $komentar = Komentar::with('user')->where('berita_id', $id)->get();
        $jlm_komentar = Komentar::where('berita_id', $id)->count();
        $all_komentar = Komentar::with('user', 'berita')
                                 ->orderBy('created_at', 'desc')
                                 ->limit(3)->get();
        return view('front.news_detail', compact('page_data', 'beritas', 'berita_categories', 'detail_berita', 'komentar', 'jlm_komentar', 'all_komentar', 'last_post'));
    }

    public function filter_category($category_id) {
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::where('berita_category_id', $category_id)->paginate(10);
        $last_post = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $berita_categories= BeritaCategory::get();
        $all_komentar = Komentar::with('user', 'berita')
                                 ->orderBy('created_at', 'desc')
                                 ->limit(3)->get();
        // dd($beritas);
        return view('front.news_category', compact('page_data','beritas','berita_categories',  'category_id',  'all_komentar', 'last_post'));
    }

}
