<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Trainer;
use App\Models\Member;

class AdminDashboardController extends Controller
{
    public function index()
{
    $trainers = DB::table('users')
        ->join('trainers', 'users.id', '=', 'trainers.user_id')
        ->where('users.is_role', '1')
        ->select(
            'users.id as user_id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'trainers.trainer_id',
            'trainers.specialty',
            'trainers.experience',
            'trainers.contact'
        )
        ->get();
    
    $pendingTrainers = DB::table('users')
        ->where('is_role', 1)
        ->whereNotIn('id', function($query) {
            $query->select('user_id')->from('trainers');
        })
        ->get();

    // ✅ Only members with matching users (role = 0)
    $members = DB::table('users')
        ->join('members', 'users.id', '=', 'members.user_id')
        ->where('users.is_role', '0')
        ->select(
            'users.id as user_id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'members.gym_id as member_id',
            'members.age',
            'members.contact',
            'members.membership_status'
        )
        ->get();

    return view('dashboards.adminDashboard', compact('trainers', 'pendingTrainers', 'members'));
}


    public function approveTrainer(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'specialty' => 'required|string|max:255',
        'experience' => 'required|integer|min:0',
        'contact' => 'required|string|max:255',
    ]);

    $user = User::findOrFail($request->user_id);

    Trainer::create([
        'trainer_id' => 'RN' . $user->id,
        'user_id' => $user->id,
        'name' => $user->first_name . ' ' . $user->last_name,
        'specialty' => $request->specialty,
        'experience' => $request->experience,
        'contact' => $request->contact,
    ]);

    return redirect()->back()->with('success', 'Trainer approved successfully.');
}

public function rejectTrainerRequest($id)
{
    $user = User::findOrFail($id);
    
    $isAlreadyTrainer = Trainer::where('user_id', $user->id)->exists();

    if ($isAlreadyTrainer) {
        return redirect()->back()->with('error', 'This trainer has already been approved and cannot be deleted.');
    }

    $user->delete();

    return redirect()->back()->with('success', 'Trainer request deleted successfully.');
}

// Show Edit Form
public function editTrainer($id)
{
    $trainer = Trainer::with('user')->where('user_id', $id)->firstOrFail();
    return view('editTrainer', compact('trainer'));
}


// Update Trainer
public function updateTrainer(Request $request, $id)
{
    $trainer = Trainer::findOrFail($id);
    $user = $trainer->user;

    $request->validate([
        // 'first_name' => 'required|string|max:255',
        // 'last_name' => 'required|string|max:255',
        // 'email' => 'required|email',
        'contact' => 'required|string',
        'specialty' => 'nullable|string',
        'experience' => 'nullable|numeric'
    ]);

    // $user->update([
    //     'name' => $request->first_name . ' ' . $request->last_name,
    //     'email' => $request->email,
    // ]);

    $trainer->update($request->only(['contact', 'specialty', 'experience']));

    return redirect()->route('admin-dashboard')->with('success', 'Trainer updated successfully.');
}

// Delete Trainer
public function deleteTrainer($id)
{
    $trainer = Trainer::where('user_id', $id)->firstOrFail();
    $trainer->delete();

    return redirect()->back()->with('success', 'Trainer request deleted successfully.');
}


public function showAllMembers()
{
    $members = Member::with('user')->get(); // eager load user data

    return view('admin-dashboard', compact('members'));
}


}