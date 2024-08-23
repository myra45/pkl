<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminMemberController extends Controller
{
    public function index() {
        $user = User::all();
        return view('admin.member_show', compact('user'));
    }

    public function delete($id) {
        $row_data = User::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Member has been deleted!');
    }
}
