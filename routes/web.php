<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JanzenController;

Route::controller(BeritaController::class)->group(function () {

    Route::get('/berita', 'index');

});

Route::controller(JanzenController::class)->group(function() {
    Route::get('/janzen', 'index');
    Route::get('/janzen/edit', 'edit');
});
