<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komentar;
use Illuminate\Cache\RedisStore;
use Illuminate\Http\Request;

class AdminKomentarController extends Controller
{
    public function index() {
        $all_komen = Komentar::with('user', 'berita')->get();
        return view('admin.all_komentars', compact('all_komen'));
    }

    public function delete($id) {
        $row_data = Komentar::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is Deleted Successfully!');
    }
}
