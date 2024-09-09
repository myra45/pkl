<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserProfileController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $all_data = User::with('Extracurricular')->findOrFail($user->id);
        $extracurricularName = $all_data?->Extracurricular?->nama_eskul ?? 'Not Found';
    // dd($all_data);
        return view('user.profile', compact('all_data', 'extracurricularName'));
    }

    
    public function profile_submit(Request $request)
    {

        $user_data = User::where('email', Auth::user()->email)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user_photo = $user_data->profile_img;

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            // Hapus file lama jika ada
            if ($user_data->profile_img) {
                Storage::disk('public')->delete($user_data->profile_img);
            }

            // Tentukan nama file baru
            $ext = $request->file('photo')->extension();
            $final_name = 'user_photo_' . time() . '.' . $ext;

            // Simpan file baru dengan nama yang telah ditentukan
            $path = $request->file('photo')->storeAs('uploads', $final_name, 'public');
            $user_photo = basename($path);
        }



        $user_data = User::where('email', Auth::user()->email)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_img' => $user_photo,
            ]);
        // $user_data->name = $request->name;
        // $user_data->email = $request->email;
        // $admin_photo->photo = $admin_photo;
        // $user_data->save();

        return redirect()->back()->with('success', 'Profile information is saved succesfully');
    }

}
