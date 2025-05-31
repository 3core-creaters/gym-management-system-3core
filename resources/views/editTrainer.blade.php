@extends('layouts.app') {{-- Use your actual layout --}}

@section('content')
<div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Trainer Profile</h1>

    @if(session('success'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.updateTrainer', $trainer->trainer_id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        {{-- Trainer Full Name --}}
        <div>
            <label class="block text-gray-700 font-semibold mb-1">Name:</label>
            <input type="text" class="w-full px-4 py-2 border rounded-md bg-gray-100" value="{{ $trainer->user->first_name }} {{ $trainer->user->last_name }}" disabled>
        </div>

        {{-- Specialty --}}
        <div>
            <label for="specialty" class="block text-gray-700 font-semibold mb-1">Specialty:</label>
            <input type="text" id="specialty" name="specialty" value="{{ old('specialty', $trainer->specialty) }}" required class="w-full px-4 py-2 border rounded-md">
            @error('specialty')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- Experience --}}
        <div>
            <label for="experience" class="block text-gray-700 font-semibold mb-1">Experience (years):</label>
            <input type="number" id="experience" name="experience" value="{{ old('experience', $trainer->experience) }}" min="0" required class="w-full px-4 py-2 border rounded-md">
            @error('experience')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- Contact --}}
        <div>
            <label for="contact" class="block text-gray-700 font-semibold mb-1">Contact:</label>
            <input type="text" id="contact" name="contact" value="{{ old('contact', $trainer->contact) }}" required class="w-full px-4 py-2 border rounded-md">
            @error('contact')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- Buttons --}}
        <div class="flex justify-between mt-6">
            <a href="{{ route('admin-dashboard') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">Cancel</a>
            <button type="submit" class="bg-red-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md font-semibold">Update</button>
        </div>
    </form>
</div>
@endsection
