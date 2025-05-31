@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Complete Your Member Profile</h2>

    <form method="POST" action="{{ route('member.profile.submit') }}">
        @csrf

        <div class="mb-4">
            <label for="age" class="block">Age</label>
            <input type="number" name="age" id="age" class="w-full border px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="contact" class="block">Contact</label>
            <input type="text" name="contact" id="contact" class="w-full border px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="membership_status" class="block">Membership Status</label>
            <select name="membership_status" id="membership_status" class="w-full border px-3 py-2" required>
                <option value="">-- Select --</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>

        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection
