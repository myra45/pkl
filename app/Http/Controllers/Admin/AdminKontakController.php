<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KontakDeveloper;
use Illuminate\Http\Request;

class AdminKontakController extends Controller
{
    public function index() {
        $kontak = KontakDeveloper::get();
        return view('admin.home_kontak_show', compact('kontak'));
    }

    public function edit($id) {
        $row_data = KontakDeveloper::where('id', $id)->first();
        return view('admin.edit_kontak_show', compact('row_data'));
    }

    public function update(Request $request, $id) {
        $row_data = KontakDeveloper::where('id',$id)->first();
        $request->validate([
            'nama_developer'=>'required',
            'kelas_developer'=>'required',
            'wa_developer'=>'required',
            'ig_developer'=>'required',
            'email_developer'=>'required'
        ]);
      
        if($request->hasFile('photo_developer')) {
            $request->validate([
                'photo_developer' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$row_data->photo_developer));

            $ext = $request->file('photo_developer')->extension();
            $final_name = 'photo_developer_' . time() . '.' . $ext;

            $request->file('photo_developer')->move(public_path('uploads/'),$final_name);

            $row_data->photo_developer =$final_name;
        }

         $row_data->nama_developer = $request->nama_developer;
         $row_data->kelas_developer = $request->kelas_developer;
         $row_data->wa_developer = $request->wa_developer;
         $row_data->ig_developer = $request->ig_developer;
         $row_data->email_developer = $request->email_developer;
         $row_data->update();
        
        return redirect()->route('home_kontak_show')->with('success','data is updated successfully');
    }

    public function add() {
        return view('admin.add_kontak');
    }

    public function store(Request $request){
        $request->validate([
            'nama_developer'=>'required',
            'kelas_developer'=>'required',
            'wa_developer'=>'required',
            'ig_developer'=>'required',
            'email_developer'=>'required'
        ]);

        $obj = new KontakDeveloper(); 

        $ext = $request->file('photo_developer')->extension();
        $final_name = 'photo_developer_'.time().'.'.$ext;
        $request->file('photo_developer')->move(public_path('uploads/'),$final_name);
        $obj->photo_developer = $final_name;

        $obj->nama_developer = $request->nama_developer;
        $obj->kelas_developer = $request->kelas_developer;
        $obj->wa_developer = $request->wa_developer;
        $obj->ig_developer = $request->ig_developer;
        $obj->email_developer = $request->email_developer;
        $obj->save();

        return redirect()->route('home_kontak_show')->with('success', 'Data inserted successfully!');
    }

    public function delete($id) {
        $row_data = KontakDeveloper::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data Deleted successfully!');

    }
}
