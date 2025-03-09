@extends('layouts.app')

@section('content')
        <div class="bg-gray-100 w-7 h-15">
            
        </div>
<div class="bg-gray-100">
    <div class="relative w-full h-[100vh] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('{{ asset('storage/images/2.5.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <h1 class="text-white text-4xl font-bold relative">Core and Flexibility Training</h1>
    </div>

    <div class="max-w-screen-xl mx-auto py-8 px-4">
        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">What is Core and Flexibility Training?</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Core and flexibility training are two essential components of a well-rounded fitness routine. Core training focuses
                on strengthening the muscles of the abdomen, lower back, and pelvis, which are crucial for overall stability and
                balance. Flexibility training, on the other hand, helps to improve the range of motion in your muscles and joints,
                reducing the risk of injury and improving overall movement efficiency.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Together, core and flexibility training enhance functional strength, posture, and flexibility, benefiting both
                athletes and individuals looking to improve their daily physical performance.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Benefits of Core and Flexibility Training</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li>Improves posture and balance by strengthening the core muscles.</li>
                <li>Enhances flexibility and mobility, reducing stiffness in muscles and joints.</li>
                <li>Reduces the risk of injury during physical activities and daily movements.</li>
                <li>Boosts athletic performance by increasing strength, coordination, and flexibility.</li>
                <li>Helps alleviate back pain by strengthening the muscles that support the spine.</li>
                <li>Promotes overall well-being by enhancing functional movement and reducing muscle tension.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Core Exercises</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Core exercises target the muscles in your abdomen, lower back, and hips. A strong core provides a solid foundation
                for all types of physical activity. Some common core exercises include:
            </p>
            <ul class="list-decimal list-inside text-lg text-gray-700 space-y-2">
                <li><strong>Planks</strong> - A full-body exercise that strengthens the core, shoulders, and back.</li>
                <li><strong>Russian Twists</strong> - A rotational movement that targets the obliques (side abdominal muscles).</li>
                <li><strong>Leg Raises</strong> - A great exercise for targeting the lower abdominal muscles.</li>
                <li><strong>Mountain Climbers</strong> - A cardio and core strengthening exercise that also engages the arms and legs.</li>
                <li><strong>Dead Bugs</strong> - An excellent exercise for stabilizing the core and improving coordination.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Flexibility Exercises</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Flexibility exercises involve stretching and elongating the muscles to improve the range of motion and reduce
                stiffness. Some popular flexibility exercises include:
            </p>
            <ul class="list-decimal list-inside text-lg text-gray-700 space-y-2">
                <li><strong>Hamstring Stretch</strong> - Stretching the back of the thigh to improve flexibility in the hamstrings.</li>
                <li><strong>Hip Flexor Stretch</strong> - A stretch to improve flexibility in the hip region and prevent tightness.</li>
                <li><strong>Cat-Cow Stretch</strong> - A yoga pose that helps to improve spinal flexibility and mobility.</li>
                <li><strong>Child’s Pose</strong> - A restorative pose that stretches the back and hips while promoting relaxation.</li>
                <li><strong>Quadriceps Stretch</strong> - Stretches the front of the thighs, helping to maintain flexibility in the quads.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Incorporating Core and Flexibility Training into Your Routine</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                For optimal results, it's essential to incorporate core and flexibility exercises into your fitness routine. These
                exercises can be performed daily or 3-4 times per week. Combine them with strength training, cardiovascular
                exercises, and other forms of fitness to build a well-rounded program.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Consider integrating core exercises at the beginning of your workout to activate the muscles, and use flexibility
                exercises after your workout to cool down and improve muscle recovery. Consistency is key to achieving lasting
                improvements in core strength and flexibility.
            </p>
        </section>

        <section class="mt-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-6">Get Started with Core and Flexibility Training!</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Start incorporating core and flexibility exercises into your daily routine to improve strength, flexibility, and
                overall fitness. Whether you're new to fitness or an experienced athlete, these exercises can help you build a
                strong and flexible body.
            </p>
            <a href="#contact" class="inline-block py-2 px-6 bg-red-600 text-white font-bold rounded-lg text-lg hover:bg-red-500">
                Contact Us for Core and Flexibility Coaching
            </a>
        </section>
    </div>
</div>
@endsection
