<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Models\Eskul;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
     public function about() {
        $page_data=HomePageItem::where('id', 1)->first();
        return view ('admin.home_about_show', compact('page_data'));
     }
        

     public function about_submit(Request $request)  {
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
         'about_photo' => 'required',
       ]);

       $obj->about_title = $request->about_title;
       $obj->about_description = $request->about_description;
       $obj->about_person_name = $request->about_person_name;
       $obj->about_subtitle = $request->about_subtitle;
       $obj->about_icon_1 = $request->about_icon_1;
       $obj->about_title_icon_1 = $request->about_title_icon_1;
       $obj->about_desc_icon_1 = $request->about_desc_icon_1;
       $obj->about_icon_2 = $request->about_icon_2;
       $obj->about_title_icon_2 = $request->about_title_icon_2;
       $obj->about_desc_icon_2 = $request->about_desc_icon_2;
       $obj->about_icon_3 = $request->about_icon_3;
       $obj->about_title_icon_3 = $request->about_title_icon_3;
       $obj->about_desc_icon_3 = $request->about_desc_icon_3;
       $obj->about_photo = $request->about_photo ;
       $obj->update();


       return redirect()->back()->with('success', 'Data is updated succesfully');
     }

}
