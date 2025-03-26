@extends('layouts.app')

@section('content')

<div class="bg-gray-100 w-7 h-15">
            
        </div>
<div class="bg-gray-100">
    <div class="relative w-full h-[110vh] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('{{ asset('storage/images/2.3.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <h1 class="text-white text-4xl font-bold relative">Powerful & Strong Training</h1>
    </div>

    <div class="max-w-screen-xl mx-auto py-8 px-4">
        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">What is Powerful & Strong Training?</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Powerful and strong training focuses on building explosive power, strength, and endurance in the body.
                This training involves high-intensity exercises that challenge both the muscular and cardiovascular systems to work at their maximum potential.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                It helps improve overall performance, whether for athletic endeavors, daily tasks, or any physical challenges that require raw strength and stamina.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Key Benefits of Powerful & Strong Training</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li>Increases overall strength and muscle mass.</li>
                <li>Improves explosive power for athletes.</li>
                <li>Enhances stamina and endurance during intense activities.</li>
                <li>Boosts metabolism, helping in fat loss and body composition improvement.</li>
                <li>Helps prevent injuries by strengthening muscles and joints.</li>
                <li>Builds mental toughness and resilience through challenging workouts.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Powerful Training Techniques</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Powerful and strong training involves various advanced techniques that help stimulate muscle growth and improve performance. Some of the most common techniques include:
            </p>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li><strong>High-Intensity Interval Training (HIIT)</strong> - Short bursts of intense exercise followed by rest periods.</li>
                <li><strong>Strength Training</strong> - Weightlifting, powerlifting, and other forms of resistance training to build strength.</li>
                <li><strong>Plyometric Training</strong> - Exercises that focus on explosive movements like jump squats and box jumps.</li>
                <li><strong>Olympic Lifting</strong> - Movements like the clean and jerk or snatch that focus on full-body strength and power.</li>
                <li><strong>Speed and Agility Drills</strong> - Exercises that improve fast-twitch muscle fibers, agility, and footwork.</li>
                <li><strong>Endurance Training</strong> - Long-duration activities such as running, rowing, or cycling that build stamina.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">How to Incorporate Powerful & Strong Training into Your Routine</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                If you are looking to build powerful strength, here’s how you can incorporate this type of training into your weekly workout routine:
            </p>
            <ul class="list-decimal list-inside text-lg text-gray-700 space-y-2">
                <li><strong>Warm-Up Properly</strong> - Always start with a dynamic warm-up to prepare your body for intense movements.</li>
                <li><strong>Focus on Compound Movements</strong> - Incorporate exercises like squats, deadlifts, and bench presses that work multiple muscle groups.</li>
                <li><strong>Challenge Your Muscles</strong> - Use progressively heavier weights or resistance to stimulate muscle growth.</li>
                <li><strong>Include Plyometric Exercises</strong> - Add exercises that involve jumping, bounding, and explosive movements.</li>
                <li><strong>Work on Recovery</strong> - Allow enough time for muscle recovery between workouts to avoid overtraining.</li>
                <li><strong>Stay Consistent</strong> - Consistency is key to seeing progress in both strength and power.</li>
            </ul>
        </section>

        <section class="mt-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-6">Are You Ready for Powerful & Strong Training?</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                If you're serious about building powerful strength and endurance, it’s time to take your training to the next level.
                Incorporating explosive and strength-focused exercises into your routine can significantly improve your physical performance and overall fitness.
            </p>
            <a href="#contact" class="inline-block py-2 px-6 bg-red-600 text-white font-bold rounded-lg text-lg hover:bg-red-500">
                Contact Us for More Information
            </a>
        </section>
    </div>
</div>
@endsection
