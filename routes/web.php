<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

// Rute untuk halaman index menggunakan controller
Route::get('/', [GameController::class, 'index']);

// Rute untuk halaman lain
Route::get('/store', function () {
    return view('store');
});
Route::get('/facility', function () {
    return view('facility');
});
Route::get('/about_us', function () {
    return view('about_us');
});
