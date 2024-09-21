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
        $berita_categories= BeritaCategory::get();
        $jlm_komentar = Komentar::count();
        $all_komentar = Komentar::with('user', 'berita')
                                 ->orderBy('created_at', 'desc')
                                 ->limit(3)->get();
        return view('front.news', compact('page_data', 'beritas', 'berita_categories', 'all_komentar'));
    }
    public function detail_berita($id) {
        $page_data = HomePageItem::where('id', 1)->first();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $detail_berita = Berita::with('rCategory')->where('id', $id)->first();
        $berita_categories= BeritaCategory::get();
        $komentar = Komentar::with('user')->where('berita_id', $id)->get();
        $jlm_komentar = Komentar::where('berita_id', $id)->count();
        $all_komentar = Komentar::with('user', 'berita')
                                 ->orderBy('created_at', 'desc')
                                 ->limit(3)->get();
        return view('front.news_detail', compact('page_data', 'beritas', 'berita_categories', 'detail_berita', 'komentar', 'jlm_komentar', 'all_komentar'));
    }

}
