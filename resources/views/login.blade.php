@extends('layouts.start')

@section('content')


<div class="flex flex-col items-center justify-center min-h-screen pb-12 bg-black">
<h1 class="text-center text-4xl text-white font-extrabold mt-20 mb-6">Hello Buddy.! Let's Start Today</h1>

    <div class="w-full max-w-md p-12 bg-black outline-1 outline-red-600 rounded-xl shadow-xl">
        <h2 class="text-3xl font-bold text-center text-white">Login</h2>
        
       

        <form method="POST"  action="{{ route('login') }}" class="mt-6">
            @csrf
            
            <!-- Email Field -->
            <div>
                <label class="block text-white">Email</label>
                <input type="email" name="email" class="w-full p-2 mt-1 outline-1 outline-red-600 text-black rounded-md focus:ring focus:ring-red-500" required>
            </div>

            <!-- Password Field -->
            <div class="mt-4">
                <label class="block text-white">Password</label>
                <input type="password" name="password" class="w-full p-2 outline-1 outline-red-600 mt-1 text-black rounded-md focus:ring focus:ring-red-500" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-2 mt-6 text-white font-bold bg-red-700 rounded-md hover:bg-black hover:text-red-600 hover:outline-1 hover:outline-red-600">Login</button>
            <div class="flex justify-end">
                <a href="{{ route('register') }}" class="text-white text-sm mt-2">Do not have an account?</a>
            </div>
        </form>
    </div>
</div>
@endsection
