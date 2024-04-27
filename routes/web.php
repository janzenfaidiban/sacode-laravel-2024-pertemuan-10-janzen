<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::controller(BeritaController::class)->group(function () {


    Route::get('/berita', 'index');
});
