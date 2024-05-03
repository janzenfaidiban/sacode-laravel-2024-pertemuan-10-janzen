<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaulController extends Controller
{
    public function index() {
        return ('Paul.index');
    }

    public function create() {
        return view('Paul.edit');
    }
}
