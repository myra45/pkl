<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTestimonialController extends Controller
{
    public function index() {
        $testimonial = Testimonial::get();
        return view('admin.home_testimonial_show', compact('testimonial'));
    }

    public function add() {
        return view('admin.home_testimonial_add');
    }

    public function store(Request $request){
        $request->validate([
            'nama'=>'required',
            'eskul'=>'required',
            'desc'=>'required'
        ]);

        $obj = new Testimonial(); 

        $obj->nama = $request->nama;
        $obj->eskul = $request->eskul;
        $obj->desc = $request->desc;
        $obj->save();

        return redirect()->route('home_testimonial_show')->with('success', 'Data inserted successfully!');
    }

    public function edit($id) {
        $row_data=Testimonial::where('id', $id)->first();
        return view('admin.home_testimonial_edit', compact('row_data'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'nama'=>'required',
            'eskul'=>'required',
            'desc'=>'required'
        ]);

        $row_data=Testimonial::where('id', $id)->first();

        $row_data->nama = $request->nama;
        $row_data->eskul = $request->eskul;
        $row_data->desc = $request->desc;
        $row_data->update();

        return redirect()->route('home_testimonial_show')->with('success', 'Data updated successfully!');
    }

    public function delete($id) {
        $row_data=Testimonial::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data updated successfully!');

    }
}
