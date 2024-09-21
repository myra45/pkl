<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Eskul;
use App\Models\Testimonial;
use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminHomePageController extends Controller
{
    public function banner() { 
        $page_data = HomePageItem::where('id',1)->first();
        return view('admin.home_banner_show',compact('page_data'));
    }
  
    public function banner_submit(Request $request) {
        $page_data = HomePageItem::where('id',1)->first();
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
  
    public function service() {
        $page_data = HomePageItem::where('id',1)->first();
        return view('admin.home_service_show',compact('page_data'));
    }

    public function service_submit(Request $request) {
        $page_data = HomePageItem::where('id',1)->first();
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

    public function testimonial() { 
        $page_data = HomePageItem::where('id',1)->first();
        $testimonial = Testimonial::get();
        return view('admin.home_testimonial_show',compact('page_data'));
    }
    public function testimonial_submit(Request $request) {
        $page_data = HomePageItem::where('id',1)->first();
        $request->validate([
            'desc_testi'=>'required',
            'nama_testi'=>'required',
            'eskul_testi'=>'required'
        ]);

        if($request->hasFile('bg_testi')) {
            $request->validate([
                'bg_testi' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$page_data->bg_testi));

            $ext = $request->file('bg_testi')->extension();
            $final_name = 'home_testimonial'.'.'.$ext;

            $request->file('bg_testi')->move(public_path('uploads/'),$final_name);

            $page_data->bg_testi =$final_name;
        }

         $page_data->desc_testi = $request->desc_testi;
         $page_data->nama_testi = $request->nama_testi;
         $page_data->eskul_testi = $request->eskul_testi;
         $page_data->update();
        
        return redirect()->back()->with('success','data is updated successfully');
    }

    public function footer() {
        $page_data = HomePageItem::where('id',1)->first();
        return view('admin.home_footer_show',compact('page_data'));
    }

    public function footer_submit(Request $request) {
        $page_data = HomePageItem::where('id',1)->first();
        $request->validate([
            'footer_judul_1'=>'required',
            'footer_judul_2'=>'required',
            'footer_judul_3'=>'required',
            'footer_judul_4'=>'required',
            'footer_desc'=>'required',
            'footer_kontak_telepon'=>'required',
            'footer_kontak_email'=>'required'
        ]);

         $page_data->footer_judul_1 = $request->footer_judul_1;
         $page_data->footer_judul_2 = $request->footer_judul_2;
         $page_data->footer_judul_3 = $request->footer_judul_3;
         $page_data->footer_judul_4 = $request->footer_judul_4;
         $page_data->footer_desc = $request->footer_desc;
         $page_data->footer_kontak_telepon = $request->footer_kontak_telepon;
         $page_data->footer_kontak_email = $request->footer_kontak_email;
         $page_data->update();
        
        return redirect()->back()->with('success','data is updated successfully');
    }
}
