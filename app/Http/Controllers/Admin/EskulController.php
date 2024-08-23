<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eskul;
use PhpParser\Node\Stmt\Return_;

class EskulController extends Controller
{
    

    public function index() {
        $all_data = Eskul::all();
        return view('admin.eskul_show', compact('all_data'));
    }

    public function add() {
        return view('admin.eskul_add');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_eskul' => 'required'
        ]);

        $eskul = new Eskul();
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->save();

        return redirect()->route('eskul_show')->with('success', 'New Extracurricular has been added!');
    }

    public function edit($id) {

        $row_data = Eskul::where('id', $id)->first();

        return view('admin.eskul_edit', compact('row_data'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_eskul' => 'required'
        ]);

        $row_data = Eskul::where('id', $id)->first();
        $row_data->nama_eskul = $request->nama_eskul;
        $row_data->update();

        return redirect()->route('eskul_show')->with('success', 'Eskul has been updated!');
    }

    public function delete($id) {
        $row_data = Eskul::where('id', $id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Eskul has been deleted!');
    }
}
