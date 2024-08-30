<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Models\Eskul;
use App\Models\HomePageItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
     public function about() {
        $page_data = HomePageItem::where('id', 1)->first();
        return view ('admin.home_about_show', compact('page_data'));
     }
        

     public function about_submit(Request $request)  {

       $page_data = HomePageItem::where('id', 1)->first();

       $request->validate([
         'about_title' => 'required',
         'about_description' => 'required',
         'about_person_name' => 'required',
         'about_subtitle' => 'required',
         'about_icon_1' => 'required',
         'about_title_icon_1' => 'required',
         'about_desc_icon_1' => 'required',
         'about_icon_2' => 'required',
         'about_title_icon_2' => 'required',
         'about_desc_icon_2' => 'required',
         'about_icon_3' => 'required',
         'about_title_icon_3' => 'required',
         'about_desc_icon_3' => 'required',
       ]);

       if($request->hasFile('about_photo')) {
            $request->validate([
              'about_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
           unlink(public_path('uploads/'.$page_data->about_photo));
           
           $ext = $request->file('about_photo')->extension();
           $final_name = 'about_photo'.'.'.$ext;

           $request->file('about_photo')->move( public_path('uploads'),$final_name);
           $page_data->about_photo = $final_name;
       }

       $page_data->about_title = $request->about_title;
       $page_data->about_description = $request->about_description;
       $page_data->about_person_name = $request->about_person_name;
       $page_data->about_subtitle = $request->about_subtitle;
       $page_data->about_icon_1 = $request->about_icon_1;
       $page_data->about_title_icon_1 = $request->about_title_icon_1;
       $page_data->about_desc_icon_1 = $request->about_desc_icon_1;
       $page_data->about_icon_2 = $request->about_icon_2;
       $page_data->about_title_icon_2 = $request->about_title_icon_2;
       $page_data->about_desc_icon_2 = $request->about_desc_icon_2;
       $page_data->about_icon_3 = $request->about_icon_3;
       $page_data->about_title_icon_3 = $request->about_title_icon_3;
       $page_data->about_desc_icon_3 = $request->about_desc_icon_3;
       $page_data->update();


       return redirect()->back()->with('success', 'Data is updated succesfully');
     }

}
