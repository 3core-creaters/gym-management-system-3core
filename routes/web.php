<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/strength', function () {
    return view('strength');
})->name('strength');

Route::get('/functional', function () {
    return view('functional');
})->name('functional');

Route::get('/powerful', function () {
    return view('powerful');
})->name('powerful');

Route::get('/online', function () {
    return view('online');
})->name('online');