<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Eskul;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminEskulController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $admin_eskul = User::where('role', 'Pembina Eskul')
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
            ->paginate(5);
    
        return view('admin.admin_eskul_show', compact('admin_eskul', 'search'));
    }
    
    



    public function add()
    {
        $eskul_data = Eskul::all();
        $role = 'Pembina Eskul';
        return view('admin.admin_eskul_add', compact('eskul_data', 'role'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'retype_password' => 'required|same:password',
            'eskul_id' => 'required'
        ]);

        $role = 'Pembina Eskul';

        $token = ' ';

        $admin_eskul = new User();
        $admin_eskul->name = $request->name;
        $admin_eskul->email = $request->email;
        $admin_eskul->password = Hash::make($request->password);
        $admin_eskul->eskul_id = $request->eskul_id;
        $admin_eskul->role = $role;

        // Generate a unique token
        $admin_eskul->token = Str::random(60);

        $admin_eskul->save();
        $eskuls = Eskul::find($request->eskul_id);
        $eskuls->admin_id = $admin_eskul->id;
        $eskuls->save();

        return redirect()->route('admin_show')->with('success', 'New Admin has created succesfully');
    }

    public function edit($id)
    {
        $row_data = User::where('id', $id)->first();
        $eskuls = Eskul::get();
        return view('admin.admin_eskul_edit', compact('row_data', 'eskuls'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'eskul_id' => 'required'
        ]);

        $obj = User::where('id', $id)->first();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->eskul_id = $request->eskul_id;
        $obj->update();

        return redirect()->route('admin_show')->with('success', 'Data is updated succesfully!');
    }

    public function delete($id)
    {
        $row_data = User::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Admin Eskul has been deleted!');
    }
}
