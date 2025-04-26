<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkoutPlan;

class WorkoutPlanController extends Controller
{
    public function fetchWorkout($gymId)
    {
        $workouts = WorkoutPlan::where('gym_id', $gymId)->get();
        return response()->json($workouts);
    }

    public function saveWorkout(Request $request)
    {
        $data = $request->input('workouts');
        $gymId = $request->input('gym_id');

        WorkoutPlan::where('gym_id', $gymId)->delete(); // Clear previous plans

        foreach ($data as $item) {
            WorkoutPlan::create([
                'gym_id' => $gymId,
                'exercise' => $item['exercise'],
                'sets' => $item['sets'],
                'reps' => $item['reps'],
            ]);
        }

        return response()->json(['message' => 'Workout plan saved successfully.']);
    }
}
