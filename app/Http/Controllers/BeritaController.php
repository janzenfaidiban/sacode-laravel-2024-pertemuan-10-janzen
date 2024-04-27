<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // index
    public function index()
    {
        //return 'controller >index';
        //menampilkan halaman index yang ada di dalam folder views/berita
        return view('berita.index');
    }
    // create
    public function create()
    {
        return 'controller >create';
    }
    // edit
    public function edit()
    {
        return 'controller >edit';
    }
    // delete
    public function delete()
    {
        return 'controller >delete';
    }
}
