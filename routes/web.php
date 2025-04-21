<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [AuthController::class, 'register']);
Route::get('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'userLogin']);  
Route::get('/login', [AuthController::class, 'login']);  

Route::group(['middleware' => 'admin'], function(){

});

Route::group(['middleware' => 'trainer'], function(){
    
});

Route::group(['middleware' => 'member'], function(){
    
});