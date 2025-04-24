<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
}