@extends('layouts.app')

@section('title', 'Functional Training')

@section('content')

            <div class="bg-gray-100 w-7 h-15">
            
            </div>
    <div class="bg-gray-100">
        <div class="relative w-full h-[100vh] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('{{ asset('storage/images/2.2.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <h1 class="text-white text-4xl font-bold relative">Functional Training</h1>
    </div>

    <div class="max-w-screen-xl mx-auto py-8 px-4">
        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">What is Functional Training?</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Functional training is a type of exercise that prepares the body for real-life movements by training muscles to work together.
                Unlike traditional exercises that isolate specific muscles, functional training uses exercises that involve multiple joints and muscle groups.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                This type of training focuses on improving your body's ability to perform everyday activities efficiently and safely.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Benefits of Functional Training</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li>Improves overall strength and flexibility.</li>
                <li>Enhances coordination and balance.</li>
                <li>Increases joint stability and mobility.</li>
                <li>Reduces the risk of injury during daily activities.</li>
                <li>Helps improve posture and core strength.</li>
                <li>Boosts athletic performance in sports and other physical activities.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Examples of Functional Training Exercises</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Here are some popular functional exercises you can incorporate into your workout routine:
            </p>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li>Squats and squat variations (e.g., jump squats, goblet squats)</li>
                <li>Lunges (e.g., walking lunges, reverse lunges)</li>
                <li>Deadlifts (e.g., Romanian deadlifts, kettlebell deadlifts)</li>
                <li>Push-ups and their variations (e.g., incline push-ups, diamond push-ups)</li>
                <li>Pull-ups and chin-ups</li>
                <li>Planks (e.g., side planks, plank to push-up)</li>
                <li>Medicine ball throws and slams</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Getting Started with Functional Training</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                If you are new to functional training, here are a few tips to help you get started:
            </p>
            <ul class="list-decimal list-inside text-lg text-gray-700 space-y-2">
                <li>Start with bodyweight exercises to build a foundation before adding resistance.</li>
                <li>Focus on proper form and technique to prevent injuries.</li>
                <li>Incorporate a mix of strength, mobility, and stability exercises.</li>
                <li>Progress gradually by increasing intensity or complexity of exercises.</li>
                <li>Combine functional training with cardiovascular exercises for a balanced fitness routine.</li>
            </ul>
        </section>

        <section class="mt-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-6">Ready to Start Functional Training?</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Functional training can help you move better, feel stronger, and reduce the risk of injuries. Whether you’re looking to improve your daily performance or boost your athletic abilities, functional training is a great choice.
            </p>
            <a href="#contact" class="inline-block py-2 px-6 bg-red-600 text-white font-bold rounded-lg text-lg hover:bg-red-500">
                Contact Us to Learn More
            </a>
        </section>
    </div>
</div>
@endsection
    