<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Eskul;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index() {
        $eskul_data = Eskul::all();
        return view('user.sign_up', compact('eskul_data'));
    }
    public function sign_up_submit(Request $request) {


        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'retype_password' => 'required|same:password',
            'eskul_id' => 'required'
        ]);
    
        // Buat user baru

        $user = new User();
        $user->eskul_id = $request->eskul_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect()->route('user_dashboard')->with('success', 'Registration successful!');
    
    }
}
