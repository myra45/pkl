<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Eskul;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminHomePageController extends Controller
{
    public function admin() {
        $all_data = Admin::with('rExtracurricular')->orderBy('id','asc')->get();
        return view('admin.admins_show', compact('all_data'));
    }

    public function admin_eskul() {
        $eskul_data = Eskul::all();
        $role = 'extracurricular_admin';
        return view('admin.add_admin_eskul', compact('eskul_data', 'role'));
    }

    public function admin_eskul_submit(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'retype_password' => 'required|same:password',
            'eskul_id' => 'required'
        ]);

        $role = 'extracurricular_admin';

        $photo = 'admin.jpg';

        $token = ' ';

        $admin_eskul = new Admin();
        $admin_eskul->name = $request->name;
        $admin_eskul->email = $request->email;
        $admin_eskul->password = Hash::make($request->password);
        $admin_eskul->eskul_id = $request->eskul_id;
        $admin_eskul->photo = $photo;
        $admin_eskul->role = $role;
        $admin_eskul->token = $token;
        $admin_eskul->save();

        return redirect()->back()->with('success', 'New Admin has created succesfully');
    }
    public function banner() {
        return view('admin.home_banner_show');      
    }
}
