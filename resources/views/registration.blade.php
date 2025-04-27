@extends('layouts.start')

@section('content')

<div class="flex flex-col items-center justify-center min-h-screen pb-12 bg-black">
    <h1 class="text-center text-4xl text-white font-extrabold mt-20 mb-6">Join Us Today!</h1>

    <div class="w-full max-w-md p-12 bg-black outline-1 outline-red-600 rounded-xl shadow-xl">
        <h2 class="text-3xl font-bold text-center text-white">Register</h2>

        <form method="POST" action="{{ route('register') }}" class="mt-6">
            @csrf

            <!-- First Name -->
            <div>
                <label class="block text-white">First Name</label>
                <input type="text" name="first_name" class="w-full p-2 mt-1 outline-1 outline-red-600 text-black rounded-md focus:ring focus:ring-red-500" required>
            </div>

            <!-- Last Name -->
            <div class="mt-4">
                <label class="block text-white">Last Name</label>
                <input type="text" name="last_name" class="w-full p-2 mt-1 outline-1 outline-red-600 text-black rounded-md focus:ring focus:ring-red-500" required>
            </div>

            <!-- Role Dropdown -->
            <div class="mt-4">
                <label class="block text-white">Role</label>
                <select name="role" class="w-full p-2 mt-1 outline-1 outline-red-600 text-black rounded-md focus:ring focus:ring-red-500" required>
                    <option value="member">Member</option>
                    <option value="trainer">Trainer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <!-- Gender -->
            <div class="mt-4">
                <label class="block text-white">Gender</label>
                <select name="role" class="w-full p-2 mt-1 outline-1 outline-red-600 text-black rounded-md focus:ring focus:ring-red-500" required>
                    <option value="member">Male</option>
                    <option value="trainer">Female</option>
                </select>
            </div>

            <!-- Birthday -->
            <div class="mt-4">
                <label class="block text-white">Birthday</label>
                <input type="date" name="birthday" class="w-full p-2 mt-1 outline-1 outline-red-600 text-black rounded-md focus:ring focus:ring-red-500" required>
            </div>

            <!-- Email -->
            <div class="mt-4">
                <label class="block text-white">Email</label>
                <input type="email" name="email" class="w-full p-2 mt-1 outline-1 outline-red-600 text-black rounded-md focus:ring focus:ring-red-500" required>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label class="block text-white">Password</label>
                <input type="password" name="password" class="w-full p-2 mt-1 outline-1 outline-red-600 text-black rounded-md focus:ring focus:ring-red-500" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-2 mt-6 text-white font-bold bg-red-700 rounded-md hover:bg-black hover:text-red-600 hover:outline-1 hover:outline-red-600">Register</button>

            <div class="flex justify-end">
                <a href="{{ route('login') }}" class="text-white text-sm mt-2">Already have an account?</a>
            </div>
        </form>
    </div>
</div>

@endsection
