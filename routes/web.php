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

=======
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
