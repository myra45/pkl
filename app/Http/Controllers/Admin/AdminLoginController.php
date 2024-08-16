<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\WebsiteEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminLoginController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function login_submit(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        try {
            if(Auth::guard('admin')->attempt($credentials)) {

                $admin = Auth::guard('admin')->user(); 
                
                if($admin->role == 'main_admin') 
                {
                    return redirect()->route('admin_home');
                }   
                else if($admin->role == 'extracurricular_admin') 
                {
                    return redirect()->route('admin_extracurricular_home');
                }
                else {
                        Auth::guard('admin')->logout();
                        return redirect()->route('admin_login')->with('error', 'Unauthorized role. ');
                    }
                } else {
                    return redirect()->route('admin_login')->with('error','An error occurred while trying to log in. Please try again.');
                }
        } catch (\Exception $e) {
            return redirect()->route('admin_login')->with('error', 'An error occurred while trying to log in. Please try again.');
        }

        
    } 


    public function forget_password() {
        return view('admin.forget_password');
    }

    public function forget_password_submit(Request $request) {
        $request->validate([
            'email' => 'required|email'
        ]);

        $admin_data = Admin::where('email',$request->email)->first();
        if(!$admin_data) {
            return redirect()->back()->with('error','Email address Not Found!');
        }

        $token = hash('sha256',time());

        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please click on this Following Link: <br>';
        $message = '<a href="'.$reset_link.'">Click Here</a>';

        Mail::to($request->email)->send(new WebsiteEmail($subject,$message));

        return redirect()->route('admin_login')->with('success', 'Please check your email and follow the steps there');

    }

    public function reset_password($token, $email) {
        $admin_data = Admin::where('token', $token)->where('email', $email)->first();
        if(!$admin_data) {
            return redirect()->route('admin_login');
        }

        return view('admin.reset_password',compact('token','email'));
    }

    public function reset_password_submit(Request $request) {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $admin_data = Admin::where('token', $request->token)->where('email', $request->email)->first();
        $admin_data->password = Hash::make($request->password);
        $admin_data->token = " ";
        $admin_data->update();


        return redirect()->route('admin_login')->with('success', 'Password is reset successfully');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

}