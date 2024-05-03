<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JanzenController extends Controller
{
    public function index()
    {
        return view('janzen.index');
    }

    public function edit()
    {
        return view('janzen.edit');
    }
}
