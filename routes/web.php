<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});

Route::get('/maikel', function () {
    return view('maikel');
});
