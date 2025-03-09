<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/strength', function () {
    return view('strength');
})->name('strength');
