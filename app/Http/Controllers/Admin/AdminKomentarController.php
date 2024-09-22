<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komentar;
use Illuminate\Cache\RedisStore;
use Illuminate\Http\Request;

class AdminKomentarController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');

        $all_komen = Komentar::where(function ($query) use ($search) {
            if ($search) {
                $query->where('created_at', 'like', "%{$search}%")
                      ->orWhereHas('berita', function ($query) use ($search) {
                        $query->where('judul', 'like', "%{$search}%");
            })->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            });
        }
    })->with('berita', 'user')
      ->paginate(10);


        return view('admin.all_komentars', compact('all_komen', 'search'));
    }

    public function delete($id) {
        $row_data = Komentar::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is Deleted Successfully!');
    }
}
