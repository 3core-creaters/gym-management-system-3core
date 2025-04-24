<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function registration()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function register(Request $request){
        $user = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required|date',
            'gender' => 'required|in:0,1',
            'is_role' => 'required|in:0,1,2',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:20',            
        ]);

        $user = new User;
        $user->first_name = trim($request->first_name);
        $user->last_name = trim($request->last_name);
        $user->birthday = trim($request->birthday);
        $user->email = trim($request->email);
        $user->gender = $request->gender;
        $user->password = Hash::make($request->password);
        $user->is_role = trim($request->is_role);
        $user->remember_token = Str::random(50);

        $user->save();

        return response()->json(['message' => 'User registered successfully']);
        // return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }

    public function userLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
        {
            if(Auth::User()->is_role == 2)
            {
                return redirect()->intended('dashboards/adminDashboard');
                // return response()->json(['message' => 'You are in admin dashboard']);
            }
            else if(Auth::User()->is_role == 1)
            {
                return redirect()->intended('dashboards/trainerDashboard');
                // return response()->json(['message' => 'You are in trainer dashboard']);
            }
            else if(Auth::User()->is_role == 0)
            {
                return redirect()->intended('dashboards/userDashboard');
                // return response()->json(['message' => 'You are in user dashboard']);
            }
            else
            {
                return redirect('login')->with('error', 'No available email.. Please check your email');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('login'));
    }
}