<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

// Rute untuk halaman index menggunakan controller
Route::get('/', [GameController::class, 'index']);
Route::get('/store', [GameController::class, 'store']);
// Rute untuk halaman lain

Route::get('/facility', function () {
    return view('facility');
});
Route::get('/about_us', function () {
    return view('about_us');
});
