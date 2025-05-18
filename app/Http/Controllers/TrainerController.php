<?php

namespace App\Http\Controllers;
use App\Models\Trainer;
use App\Models\User;

class TrainerController extends Controller
{
    public function index()
{
    
    // Get all trainers with the related trainer data
    $trainers = User::where('is_role', 1) 
                        ->with('trainer')    
                        ->get();      

    // Pass the trainers data to the view
    return view('dashboards.adminDashboard', compact('trainers'));
}
}
