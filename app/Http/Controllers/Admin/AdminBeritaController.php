<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeritaCategory;
use Illuminate\Http\Request;

class AdminBeritaController extends Controller
{
    public function all_news()  {
        return view('admin.news.all_news_show');
    }
    public function all_news_categories()  {
        $all_data = BeritaCategory::get();
        return view('admin.news.all_news_categories', compact('all_data'));
    }

    public function all_news_categories_store() {
    
     }
}
