<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Models\User;
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
            'gender' => 'required',
            'is_role' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:20',            
        ]);

        $user = new User;
        $user->first_name = trim($request->first_name);
        $user->last_name = trim($request->last_name);
        $user->birthday = trim($request->birthday);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->is_role = trim($request->is_role);
        $user->remember_token = Str::random(50);

        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }
}

?>