<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('dashboards.adminDashboard', compact('members'));
    }

    public function showProfileForm()
    {
        return view('complete_profile');
    }

    public function submitProfile(Request $request)
    {
        $request->validate([
            'age' => 'required|integer',
            'contact' => 'required|string',
            'membership_status' => 'required|string',
        ]);

        $member = Member::firstOrCreate(
        ['user_id' => Auth::id()],
        [
            'gym_id' => 'GYM-' . Auth::id(),
            'first_name' => Auth::user()->first_name,
        ]
    );

        $member->age = Carbon::parse(Auth::user()->birthday)->age;
    $member->contact = $request->contact;
    $member->membership_status = $request->membership_status;
    $member->save();


        return redirect('/user-dashboard')->with('success', 'Profile completed!');
    }
}
