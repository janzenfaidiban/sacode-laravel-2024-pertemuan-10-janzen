<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('welcome');
});

Route::get('/melpen', function () {
    return view('melpen');
});

Route::get('/janzen', function () {
    return view('janzen');
});
