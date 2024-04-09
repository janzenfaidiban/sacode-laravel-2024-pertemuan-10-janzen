<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Welcome';
});

Route::get('/rebly', function () {
    return view('rebly');
});

Route::get('/melpen', function () {
    return view('melpen');
});

Route::get('/janzen', function () {
    return view('janzen');
});
