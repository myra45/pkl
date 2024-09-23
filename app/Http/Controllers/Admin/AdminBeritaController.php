<?php

namespace App\Http\Controllers\Admin;

use id;
use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\BeritaCategory;
use App\Http\Controllers\Controller;

class AdminBeritaController extends Controller
{
    public function all_news(Request $request)  {
        $search = $request->input('search');

        $all_data = Berita::where(function ($query) use ($search) {
            if($search) {
                $query->where('judul', 'like', "%{$search}%")
                      ->orWhere('tanggal', 'like', "%{$search}%")
                      ->orWhereHas('rCategory', function ($query) use ($search) {
                          $query->where('name', 'like', "%{$search}%");
                      });
            }
        })
          ->with('rCategory')
          ->paginate(10);
        return view('admin.news.all_news_show', compact('all_data', 'search'));
    }

    Public function add() {
        $category = BeritaCategory::get();
        return view('admin.news.add_news', compact('category'));
     }

    public function store_news(Request $request){
        $request->validate([
            'judul'=>'required',
            'penulis'=>'required',
            'tanggal'=>'required',
            'deskripsi'=>'required',
            'gambar' => 'image|mimes:jpg,jpeg,png,gif'
        ]);

        $obj = new Berita(); 

        $ext = $request->file('gambar')->extension();
        $final_name = 'Berita_'.time().'.'.$ext;
        $request->file('gambar')->move(public_path('uploads/'),$final_name);
        $obj->gambar = $final_name;

        $obj->judul = $request->judul;
        $obj->berita_category_id = $request->berita_category_id;
        $obj->penulis = $request->penulis;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->save();

        return redirect()->route('news_show')->with('success', 'Data inserted successfully!');
    }

    public function update_news(Request $request, $id){

        $row_data = Berita::with('rCategory')->where('id', $id)->first();
        $request->validate([
            'judul'=>'required',
            'penulis'=>'required',
            'tanggal'=>'required',
            'deskripsi'=>'required',
            'gambar' => 'image|mimes:jpg,jpeg,png,gif'
        ]);


        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$row_data->gambar));

        $ext = $request->file('gambar')->extension();
        $final_name = 'Berita_'.time().'.'.$ext;
        $request->file('gambar')->move(public_path('uploads/'),$final_name);
        $row_data->gambar = $final_name;

        }

        $row_data->judul = $request->judul;
        $row_data->berita_category_id = $request->berita_category_id;
        $row_data->penulis = $request->penulis;
        $row_data->tanggal = $request->tanggal;
        $row_data->deskripsi = $request->deskripsi;
        $row_data->update();

        return redirect()->route('news_show')->with('success', 'Data Updated successfully!');
    }

    public function news_edit($id){
        $row_data = Berita::with('rCategory')->where('id', $id)->first();
        return view('admin.news.edit_news', compact('row_data'));
    }

    public function news_delete($id) {
        $row_data = Berita::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully!');
     }

    public function all_news_categories(Request $request)  {
        $search = $request->input('search');

        $all_data = BeritaCategory::where(function ($query) use ($search) {
            if($search) {
                $query->where('name', 'like', "%{$search}%");
            }
        })->paginate(10);
        return view('admin.news.all_news_categories', compact('all_data', 'search'));
    }

    public function news_categories_add() {
        return view('admin.news.add_news_categories');
     }

     public function news_categories_store(Request $request) {
        $request->validate([
            'name'=>'required'
        ]);


        $obj = new BeritaCategory();
        $obj->name = $request->name;
        $obj->save();


        return redirect()->route('news_category_show')->with('success', 'Data inserted successfully!');
     }

     public function news_categories_edit($id) {
        $row_data = BeritaCategory::where('id', $id)->first();
        return view('admin.news.edit_news_categories', compact('row_data'));
     }


     public function news_categories_update(Request $request, $id) {
        $request->validate([
            'name' => 'required'
        ]);

        $row_data = BeritaCategory::where('id', $id)->first();
        $row_data->name = $request->name;
        $row_data->update();
        
        return redirect()->route('news_category_show')->with('success', 'Data is updated successfully');
     }

     public function news_categories_delete($id) {
        $row_data = BeritaCategory::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully!');
     }

}
