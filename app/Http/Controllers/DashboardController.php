<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Member;
use App\Models\Trainer;

class DashboardController extends Controller
{    

    public function dashBoard()
    {
        if(Auth::User()->is_role == 2)
        {
            return view('dashboards.adminDashboard');
        }
        else if(Auth::User()->is_role == 1)
        {
            return view('dashboards.trainerDashboard');
        }
        else if(Auth::User()->is_role == 0)
        {
            return view('dashboards.userDashboard');
        }
    }

    public function index()
    {
        $members = Member::all();
        $trainers = Trainer::all();

        return view('dashboards.adminDashboard', compact('members', 'trainers'));
    }

    public function showAdminDashboard()
    {
        $trainers = Trainer::all(); // Get all trainers from the database
        return view('dashboards.adminDashboard', compact('trainers'));
    }

    public function trainerDashboard()
{
    $members = Member::all(); // or filter by assigned trainer if needed
    return view('dashboards.trainerDashboard', compact('members'));
}
}