<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HomePageItem;

class AdminTestimonialController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $testimonial = Testimonial::where(function ($query) use ($search) {
            if($search) {
                $query->where('nama', 'like', "%{$search}%")
                      ->orWhere('eskul', 'like', "%{$search}%")
                      ->orWhere('desc', 'like', "%{$search}%");
            }
        })->paginate(10);
        return view('admin.home_testimonial_show', compact('testimonial', 'search'));
    }

    public function add()
    {
        return view('admin.home_testimonial_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'eskul' => 'required',
            'desc' => 'required'
        ]);

        $obj = new Testimonial();

        $obj->nama = $request->nama;
        $obj->eskul = $request->eskul;
        $obj->desc = $request->desc;
        $obj->save();

        return redirect()->route('home_testimonial_show')->with('success', 'Data inserted successfully!');
    }

    public function edit($id)
    {
        $row_data = Testimonial::where('id', $id)->first();
        return view('admin.home_testimonial_edit', compact('row_data'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
            'eskul' => 'required',
            'desc' => 'required'
        ]);

        $row_data = Testimonial::where('id', $id)->first();

        $row_data->nama = $request->nama;
        $row_data->eskul = $request->eskul;
        $row_data->desc = $request->desc;
        $row_data->update();

        return redirect()->route('home_testimonial_show')->with('success', 'Data updated successfully!');
    }

    public function delete($id)
    {
        $row_data = Testimonial::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data deleted successfully!');
    }

    public function bg()
    {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('admin.home_testimonial_bg', compact('page_data'));
    }
    public function bg_submit(Request $request)
    {
        $page_data = HomePageItem::where('id', 1)->first();

        if ($request->hasFile('bg_testi')) {
            $request->validate([
                'bg_testi' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $page_data->bg_testi));

            $ext = $request->file('bg_testi')->extension();
            $final_name = 'home_testimonial' . '.' . $ext;

            $request->file('bg_testi')->move(public_path('uploads/'), $final_name);

            $page_data->bg_testi = $final_name;
        }
    
        $page_data->update();

        return redirect()->back()->with('success', 'data is updated successfully');
    }
}
