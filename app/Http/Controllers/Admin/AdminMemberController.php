<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminMemberController extends Controller
{
    public function index()
    {
        // $user = User::with('Extracurricular')->where('role', 'Member')->where('eskul_id')->get();
        $user = User::where('role', 'Member')->with('Extracurricular')->get();

        return view('admin.member_show', compact('user'));
    }

    public function delete($id)
    {
        $row_data = User::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Member has been deleted!');
    }


    public function member_eskul()
    {
        $user = User::where('role', 'Member')
                ->where('eskul_id', auth()->user()->eskul_id)
                ->with('Extracurricular')
                ->get();
        return view('admin_eskul.member_eskul_show', compact('user'));
    }
}
