<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\WorkoutPlanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/workout/fetch/{gymId}', [WorkoutPlanController::class, 'fetchWorkout']);
Route::post('/workout/save', [WorkoutPlanController::class, 'saveWorkout']);


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


//     return view('login');
// })->name('login');

// Route::get('/register', function(){
//     return view('registration');
// })->name('register');

Route::get('/user-dashboard', function(){
    return view('dashboards.userDashboard');
})->name('user-dashboard');

Route::get('/trainer-dashboard', function(){
    return view('dashboards.trainerDashboard');
})->name('trainer-dashboard');

Route::get('/admin-dashboard', function(){
    return view('dashboards.adminDashboard');
})->name('admin-dashboard');


Route::post('login', [AuthController::class, 'userLogin']);  
Route::get('login', [AuthController::class, 'login'])->name('login');
          // Process login data

Route::get('/register', [AuthController::class, 'registration'])->name('register'); // Show registration form
Route::post('/register', [AuthController::class, 'register']); 

Route::group(['middleware' => 'admin'], function(){    
    Route::get('dashboards/adminDashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboard');
});
Route::group(['middleware' => 'trainer'], function(){
    Route::get('dashboards/trainerDashboard', [DashboardController::class, 'trainerDashboard'])->name('trainerDashboard');
});

Route::group(['middleware' => 'member'], function(){
    Route::get('dashboards/userDashboard', [DashboardController::class, 'userDashboard'])->name('userDashboard');
});

Route::get('/admin-dashboard', [DashboardController::class, 'showAdminDashboard'])->name('admin-dashboard');

Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/admin-dashboard', [AdminDashboardController::class, 'approveTrainer'])->name('admin.approveTrainer');
Route::delete('/admin-dashboard/trainer-request/{id}', [AdminDashboardController::class, 'rejectTrainerRequest'])->name('admin.rejectTrainer');

Route::get('/trainers/{id}/edit', [AdminDashboardController::class, 'editTrainer'])->name('admin.editTrainer');
Route::put('/trainers/{id}', [AdminDashboardController::class, 'updateTrainer'])->name('admin.updateTrainer');
Route::delete('/admin-dashboard/trainers/{id}', [AdminDashboardController::class, 'deleteTrainer'])->name('admin.deleteTrainer');


Route::get('/admin/members', [AdminDashboardController::class, 'showAllMembers'])->name('admin.members');


