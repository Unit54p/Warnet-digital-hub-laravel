<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/store', function () {
    return view('store');
});
Route::get('/facility', function () {
    return view('facility');
});
Route::get('/about_us', function () {
    return view('about_us');
});
