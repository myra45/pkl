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
    public function banner() { 
        $page_data = HomePageItem::where('id',10)->first();
        return view('admin.home_banner_show',compact('page_data'));
    }
    public function banner_submit(Request $request) {
        $page_data = HomePageItem::where('id',10)->first();
        $request->validate([
            'banner_title'=>'required',
            'banner_subtitle'=>'required',
            'banner_button_text'=>'required',
            'banner_button_url'=>'required'
        ]);

        if($request->hasFile('banner_photo')) {
            $request->validate([
                'banner_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->banner_photo));

            $ext = $request->file('banner_photo')->extension();
            $final_name = 'home_banner'.'.'.$ext;

            $request->file('banner_photo')->move(public_path('uploads/'),$final_name);

            $page_data->banner_photo =$final_name;
        }

         $page_data->banner_title = $request->banner_title;
         $page_data->banner_subtitle = $request->banner_subtitle;
         $page_data->banner_button_text = $request->banner_button_text;
         $page_data->banner_button_url = $request->banner_button_url;
         $page_data->update();
        
        return redirect()->back()->with('success','data is updated successfully');
    }
    public function service() {
        $page_data = HomePageItem::where('id',10)->first();
        return view('admin.home_service_show',compact('page_data'));
    }

    public function service_submit(Request $request) {
        $page_data = HomePageItem::where('id',10)->first();
        $request->validate([
            'service_title'=>'required',
            'eskul_icon_1'=>'required',
            'nama_eskul_1'=>'required',
            'desc_eskul_1'=>'required',
            'eskul_icon_2'=>'required',
            'nama_eskul_2'=>'required',
            'desc_eskul_2'=>'required',
            'eskul_icon_3'=>'required',
            'nama_eskul_3'=>'required',
            'desc_eskul_3'=>'required',
            'eskul_icon_4'=>'required',
            'nama_eskul_4'=>'required',
            'desc_eskul_4'=>'required'
        ]);

         $page_data->service_title = $request->service_title;
         $page_data->eskul_icon_1 = $request->eskul_icon_1;
         $page_data->nama_eskul_1 = $request->nama_eskul_1;
         $page_data->desc_eskul_1 = $request->desc_eskul_1;
         $page_data->eskul_icon_2 = $request->eskul_icon_2;
         $page_data->nama_eskul_2 = $request->nama_eskul_2;
         $page_data->desc_eskul_2 = $request->desc_eskul_2;
         $page_data->eskul_icon_3 = $request->eskul_icon_3;
         $page_data->nama_eskul_3 = $request->nama_eskul_3;
         $page_data->desc_eskul_3 = $request->desc_eskul_3;
         $page_data->eskul_icon_4 = $request->eskul_icon_4;
         $page_data->nama_eskul_4 = $request->nama_eskul_4;
         $page_data->desc_eskul_4 = $request->desc_eskul_4;
         $page_data->update();
        
        return redirect()->back()->with('success','data is updated successfully');
    }
}
