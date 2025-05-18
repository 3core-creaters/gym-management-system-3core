<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Trainer;

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
        
        //Pending trainers
        $pendingTrainers = DB::table('users')
        ->where('is_role', 1)
        ->whereNotIn('id', function($query) {
            $query->select('user_id')->from('trainers');
        })
        ->get();

    return view('dashboards.adminDashboard', compact('trainers', 'pendingTrainers'));
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

    // Optionally check if not already in the trainers table
    $isAlreadyTrainer = Trainer::where('user_id', $user->id)->exists();

    if ($isAlreadyTrainer) {
        return redirect()->back()->with('error', 'This trainer has already been approved and cannot be deleted.');
    }

    $user->delete();

    return redirect()->back()->with('success', 'Trainer request deleted successfully.');
}
}