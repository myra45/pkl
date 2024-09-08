<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNilaiAkhirController extends Controller
{
    public function index() {
        return view('admin_eskul.nilai_akhir_show');
    }
}
