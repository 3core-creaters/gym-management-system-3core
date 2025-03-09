@extends('layouts.app')

@section('title', 'Strength Training')

@section('content')
    <div class="bg-gray-100 min-h-screen">
        <div class="relative w-full h-[300px] bg-cover bg-center flex items-center justify-center" 
            style="background-image: url('{{ asset('storage/images/strength-banner.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <h1 class="text-white text-4xl font-bold relative">Strength Training</h1>
        </div>

        <div class="container mx-auto px-6 py-10 flex flex-col md:flex-row gap-6">
            <div class="w-full md:w-3/4 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-900 mb-3">The Power of Strength Training</h2>
                <p class="text-gray-700 leading-7">Strength training helps build muscle and endurance...</p>
            </div>
        </div>
    </div>
@endsection
