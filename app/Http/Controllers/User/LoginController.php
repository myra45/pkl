<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login() {
        return view('user.login');
    }

    public function login_submit(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('web')->attempt($credentials))
        {
            return redirect()->route('user_dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Information is not corret!');
        }
    }

    public function forget_password() {
        return view('user.forget_password');
    }

    public function forget_password_submit(Request $request) {
        $request->validate([
            'email' => 'required|email'
        ]);

        
    }


    public function logout() {
        Auth::guard('web')->logout();
        return redirect()->route('login');
        
    }
}
