<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Member;
use App\Models\Trainer;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;



class AuthController extends Controller
{
    public function registration()
    {        
        return view('registration');
    }

    public function login()
    {
        return view('login');
    }

    public function register(Request $request){        

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'is_role' => 'required|in:0,1,2',
            'gender' => 'required|in:0,1',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20',
        ]);

        $user = new User;
        $user->first_name = trim($request->first_name);
        $user->last_name = trim($request->last_name);
        $user->is_role = trim($request->is_role);
        $user->gender = $request->gender;
        $user->birthday = trim($request->birthday);
        $user->email = trim($request->email);        
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();        
        return redirect('login')->with('success', 'Registration successful! You can now log in.');



        if ($user->is_role == 0) {
        Member::create([
            'user_id' => $user->id, 
            'gym_id' => 'GYM-' . $user->id,
            'first_name' => $user->first_name,
            'age' => \Carbon\Carbon::parse($user->birthday)->age,
            'contact' => null,
            'membership_status' => null,
            ]);
        } elseif ($user->is_role == 1) {
            Trainer::create([
                'trainer_id' => 'TRN-' . $user->id,
                'name' => $user->first_name . ' ' . $user->last_name,
                'specialty' => 'General Fitness', 
                'experience' => 0, 
                'contact' => 'N/A',
            ]);
        } elseif ($user->is_role == 2) {
            Admin::create([
                'admin_id' => 'ADM-' . $user->id,
                'name' => $user->first_name . ' ' . $user->last_name,
                'contact' => 'N/A',
            ]);
        }
    
        return redirect('login')->with('success', 'Registration successful! You can now log in.');
    }


    public function userLogin(Request $request)
    {

        // dd($request->all());

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
        {
            if(Auth::User()->is_role == 2)
            {
                return redirect()->intended('admin-dashboard');
                
            }
            else if (Auth::user()->is_role == 1) {

                $isApproved = DB::table('trainers')->where('user_id', Auth::user()->id)->exists();
    
                if (!$isApproved) {
                    Auth::logout();
                    return redirect()->back()->withErrors(['email' => 'Your trainer account is not approved yet. Please wait for admin approval.']);
                }
    
                return redirect()->intended('trainer-dashboard');
            }
            else if (Auth::user()->is_role == 0) {
            $member = Member::where('user_id', Auth::user()->id)->first();

            if (!$member || !$member->age || !$member->contact || !$member->membership_status) {
                return redirect()->route('member.profile.form');
            }

            return redirect()->intended('user-dashboard');
                
            }
            else
            {
                return redirect('login')->with('error', 'No available email.. Please check your email');
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();

    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('login'));
    }
}