<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Eskul;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Controller;

class EskulController extends Controller
{


    public function index(Request $request)
    {
        // $all_data = Eskul::with('rUsers')->get();
        // return view('admin.eskul_show', compact('all_data'));

        $search = $request->input('search');
    
        $all_data = Eskul::where(function ($query) use ($search) {
                if ($search) {
                    $query->where('nama_eskul', 'like', "%{$search}%")
                          ->orWhereHas('rUsers', function ($query) use ($search) {
                              $query->where('name', 'like', "%{$search}%");
                          });
                }
            })
            ->with('rUsers')
            ->paginate(5);
    
        return view('admin.eskul_show', compact('all_data', 'search'));
    }

    public function add()
    {
        return view('admin.eskul_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_eskul' => 'required'
        ]);

        $eskul = new Eskul();
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->save();

        return redirect()->route('eskul_show')->with('success', 'New Extracurricular has been added!');
    }

    public function edit($id)
    {

        $row_data = Eskul::where('id', $id)->first();

        return view('admin.eskul_edit', compact('row_data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_eskul' => 'required'
        ]);

        $row_data = Eskul::where('id', $id)->first();
        $row_data->nama_eskul = $request->nama_eskul;
        $row_data->update();

        return redirect()->route('eskul_show')->with('success', 'Eskul has been updated!');
    }

    public function delete($id)
    {
        $row_data = Eskul::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Eskul has been deleted!');
    }
}
