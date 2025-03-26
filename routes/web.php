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

Route::get('/flexible', function () {
    return view('flexible');
})->name('flexible');

Route::get('/mind', function () {
    return view('mind');
})->name('mind');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('registration');
})->name('register');

Route::get('/user-dashboard', function(){
    return view('dashboards.userDashboard');
})->name('user-dashboard');

Route::get('/trainer-dashboard', function(){
    return view('dashboards.trainerDashboard');
})->name('trainer-dashboard');

Route::get('/admin-dashboard', function(){
    return view('dashboards.adminDashboard');
})->name('admin-dashboard');