<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Welcome';
});

Route::get('/janzen', function () {
    return view('janzen');
});
