<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome";
});

Route::get('/marthen', function () {
    return view('marthen');
});