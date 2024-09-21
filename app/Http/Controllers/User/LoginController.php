<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Mail\WebsiteEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


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

    public function forget_password()
    {
        return view('user.forget_password');
    }

    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user_data = User::where('email', $request->email)->first();
        if (!$user_data) {
            return redirect()->back()->with('error', 'Email address Not Found!');
        }

        $token = hash('sha256', time());

        $user_data->token = $token;
        $user_data->update();

        $reset_link = url('reset-password/' . $token . '/' . $request->email);
        $subject = 'Reset Password';
        $message = 'Please click on this Following Link: <br>';
        $message = '<a href="' . $reset_link . '">Click Here</a>';

        Mail::to($request->email)->send(new WebsiteEmail($subject, $message));

        return redirect()->route('login')->with('success', 'Please check your email and follow the steps there');
    }

    public function reset_password($token, $email)
    {
        $user_data = User::where('token', $token)->where('email', $email)->first();
        if (!$user_data) {
            return redirect()->route('login');
        }

        return view('user.reset_password', compact('token', 'email'));
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $user_data = User::where('token', $request->token)->where('email', $request->email)->first();
        $user_data->password = Hash::make($request->password);
        $user_data->token = " ";
        $user_data->update();


        return redirect()->route('login')->with('success', 'Password is reset successfully');
    }



    public function logout() {
        Auth::guard('web')->logout();
        return redirect()->route('home');
        
    }
}
