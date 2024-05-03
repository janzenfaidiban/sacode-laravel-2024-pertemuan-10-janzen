<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PaulController;

Route::controller(BeritaController::class)->group(function () {
 Route::get('/berita', 'index');

});

Route::controller(PaulController::class)->group(function () {
    Route::get('/paul/index','index');
});


Route::get('/paul', function () {
    return view('paul.index');
});
Route::get('/paul', index () {
    return view('paul/edit.edit');
});

