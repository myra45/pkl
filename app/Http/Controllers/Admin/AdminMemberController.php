<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminMemberController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('role', 'Member')
            ->where(function ($query) use ($search) {
                if ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhereHas('Extracurricular', function ($query) use ($search) {
                            $query->where('nama_eskul', 'like', "%{$search}%");
                        });
                }
            })
            ->with('Extracurricular')
            ->paginate(10);

        return view('admin.member_show', compact('users', 'search'));
    }

    public function delete($id)
    {
        $row_data = User::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Member has been deleted!');
    }


    public function member_eskul(Request $request)
    {
        $search = $request->input('search');

        $user_eskul = User::where('role', 'Member')
            ->where('eskul_id', auth()->user()->eskul_id)
            ->where(function ($query) use ($search) {
                if ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhereHas('Extracurricular', function ($query) use ($search) {
                            $query->where('nama_eskul', 'like', "%{$search}%");
                        });
                }
            })
            ->with('Extracurricular')
            ->paginate(10);

        return view('admin_eskul.member_eskul_show', compact('user_eskul', 'search'));
    }

    public function member_eskul_delete($id)
    {
        $row_data = User::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Member has been deleted!');
    }
}
