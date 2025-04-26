<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\WorkoutPlanController;

// Ensure the DashboardController class exists in the specified namespace
// If it doesn't exist, create it in 'app/Http/Controllers/DashboardController.php'

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [AuthController::class, 'register']);
Route::get('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'userLogin']);  
Route::get('/login', [AuthController::class, 'login']);  

Route::group(['middleware' => 'admin'], function(){    
    Route::get('dashboards/adminDashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboard');
});
Route::group(['middleware' => 'trainer'], function(){
    Route::get('dashboards/trainerDashboard', [DashboardController::class, 'trainerDashboard'])->name('trainerDashboard');
});

Route::group(['middleware' => 'member'], function(){
    Route::get('dashboards/userDashboard', [DashboardController::class, 'userDashboard'])->name('userDashboard');
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboards/adminDashboard', [DashboardController::class, 'index'])->name('adminDashboard');

Route::get('/workout/fetch/{gymId}', [WorkoutPlanController::class, 'fetchWorkout']);
Route::post('/workout/save', [WorkoutPlanController::class, 'saveWorkout']);
