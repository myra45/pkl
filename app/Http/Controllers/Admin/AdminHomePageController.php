<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Models\Eskul;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminHomePageController extends Controller
{
    public function admin() {
        // $all_data = Admin::with('rExtracurricular')->orderBy('id','asc')->get();
        $admin_eskul = Admin::where('role', 'extracurricular_admin')->get();
        return view('admin.admin_eskul_show', compact('admin_eskul'));
    }

    public function admin_eskul() {
        $eskul_data = Eskul::all();
        $role = 'extracurricular_admin';
        return view('admin.admin_eskul_add', compact('eskul_data', 'role'));
    }

    public function admin_eskul_submit(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'retype_password' => 'required|same:password',
            'eskul_id' => 'required|unique:admins'
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

        return redirect()->route('admin_show')->with('success', 'New Admin has created succesfully');
    }


    public function member() {
        $user = User::all();
        return view('admin.member_show', compact('user'));
    }


    public function eskul() {
        $all_data = Eskul::all();
        return view('admin.eskul_show', compact('all_data'));
    }

    public function eskul_add() {
        return view('admin.eskul_add');
    }

    public function eskul_add_submit(Request $request) {
        $request->validate([
            'nama_eskul' => 'required'
        ]);

        $eskul = new Eskul();
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->save();

        return redirect()->route('eskul_show')->with('success', 'New Extracurricular has been added!');
    }
}
