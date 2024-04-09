<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Welcome';
});
Route::get('/rebly', function () {
    return view('rebly');
});
