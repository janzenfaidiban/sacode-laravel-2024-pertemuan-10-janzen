<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome";
});

Route::get('/rebly', function () {
    return view('rebly');
});

Route::get('/melpen', function () {
    return view('melpen');
});

Route::get('/marthen', function () {
    return view('marthen');
});

Route::get('/janzen', function () {
    return view('janzen');
});