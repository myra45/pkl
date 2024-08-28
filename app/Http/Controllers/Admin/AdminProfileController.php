<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class AdminProfileController extends Controller
{
    public function profile()
    {
        return view('admin.profile');
    }

    public function profile_submit(Request $request)
    {

        $admin_data = User::where('email', Auth::user()->email)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        if ($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);

            $admin_data->password = Hash::make($request->password);
        }

        $admin_photo = $admin_data->profile_img;

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            // Hapus file lama jika ada
            if ($admin_data->profile_img) {
                Storage::disk('public')->delete($admin_data->profile_img);
            }

            // Tentukan nama file baru
            $ext = $request->file('photo')->extension();
            $final_name = 'admin_photo_' . time() . '.' . $ext;

            // Simpan file baru dengan nama yang telah ditentukan
            $path = $request->file('photo')->storeAs('uploads', $final_name, 'public');
            $admin_photo = basename($path);
        }



        $admin_data = User::where('email', Auth::user()->email)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_img' => $admin_photo,
            ]);
        // $admin_data->name = $request->name;
        // $admin_data->email = $request->email;
        // $admin_photo->photo = $admin_photo;
        // $admin_data->save();

        return redirect()->back()->with('success', 'Profile information is saved succesfully');
    }

    public function eskul_profile()
    {
        $user = Auth::user();
        $all_data = User::with('Extracurricular')->findOrFail($user->id);
        $extracurricularName = $all_data?->rExtracurricular?->nama_eskul ?? 'Not Found';

        return view('admin_eskul.profile', compact('all_data', 'extracurricularName'));
    }

    public function eskul_profile_submit(Request $request)
    {

        $admin_data = User::where('email', Auth::user()->email)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        if ($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);

            $admin_data->password = Hash::make($request->password);
        }

        $admin_photo = $admin_data->profile_img;

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            // Hapus file lama jika ada
            if ($admin_data->profile_img) {
                Storage::disk('public')->delete($admin_data->profile_img);
            }

            // Tentukan nama file baru
            $ext = $request->file('photo')->extension();
            $final_name = 'admin_eskul_photo_' . time() . '.' . $ext;

            // Simpan file baru dengan nama yang telah ditentukan
            $path = $request->file('photo')->storeAs('uploads', $final_name, 'public');
            $admin_photo = basename($path);
        }

        $admin_data = User::where('email', Auth::user()->email)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_img' => $admin_photo,
            ]);
        // $admin_data->name = $request->name;
        // $admin_data->email = $request->email;
        // $admin_photo->photo = $admin_photo;
        // $admin_data->save();

        return redirect()->back()->with('success', 'Profile information is saved succesfully');
    }
}
