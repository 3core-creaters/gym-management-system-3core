@extends('layouts.app')

@section('content')
            <div class="bg-gray-100 w-7 h-15">
            
            </div>
<div class="bg-gray-100">
    <div class="relative w-full h-[110vh] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('{{ asset('storage/images/2.6.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <h1 class="text-white text-4xl font-bold relative">Mind-Body Balance</h1>
    </div>

    <div class="max-w-screen-xl mx-auto py-8 px-4">
        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">What is Mind-Body Balance?</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Mind-body balance refers to the harmonious connection between the mind and body, promoting mental clarity and
                emotional well-being while also supporting physical health. Achieving this balance involves aligning the physical,
                mental, and emotional aspects of your being to improve overall quality of life.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Mind-body balance can be cultivated through various practices such as yoga, meditation, deep breathing, and mindful
                movement. These practices help reduce stress, enhance mental focus, improve physical flexibility, and foster a sense
                of calm and inner peace.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Benefits of Mind-Body Balance</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li>Reduces stress and promotes emotional well-being.</li>
                <li>Improves mental clarity and focus.</li>
                <li>Enhances physical flexibility, mobility, and overall strength.</li>
                <li>Improves heart health and lowers blood pressure.</li>
                <li>Boosts the immune system, helping your body resist illness.</li>
                <li>Fosters inner peace and a greater sense of self-awareness.</li>
                <li>Improves sleep quality and reduces insomnia.</li>
                <li>Enhances your ability to manage negative emotions and stay calm in stressful situations.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Practices to Achieve Mind-Body Balance</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Achieving mind-body balance requires consistent practice and patience. Some of the most effective practices include:
            </p>
            <ul class="list-decimal list-inside text-lg text-gray-700 space-y-2">
                <li><strong>Yoga</strong> - A physical and mental practice that involves poses, stretches, and breathing exercises to
                    promote flexibility, strength, and relaxation.</li>
                <li><strong>Meditation</strong> - A practice of focused attention and mindfulness that helps calm the mind and improve
                    mental clarity and emotional stability.</li>
                <li><strong>Deep Breathing</strong> - Simple yet powerful breathing exercises that help activate the parasympathetic
                    nervous system to reduce stress and promote relaxation.</li>
                <li><strong>Mindful Movement</strong> - Involves physical activities such as tai chi or qigong, which combine slow,
                    deliberate movements with focused breathing to improve physical and mental well-being.</li>
                <li><strong>Progressive Muscle Relaxation</strong> - A relaxation technique that involves tensing and relaxing muscle
                    groups to release physical tension and promote relaxation.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">How to Incorporate Mind-Body Balance into Your Life</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                The practice of mind-body balance can be integrated into your daily life with ease. Here are some ways to get started:
            </p>
            <ul class="list-decimal list-inside text-lg text-gray-700 space-y-2">
                <li>Begin with a simple yoga practice in the morning to wake up your body and center your mind.</li>
                <li>Set aside time each day for meditation or deep breathing exercises, even if it's just for 10 minutes.</li>
                <li>Practice mindful walking or stretching throughout the day to stay connected to your body and breath.</li>
                <li>Integrate positive affirmations or gratitude journaling to foster emotional balance and a positive mindset.</li>
                <li>Make self-care a priority by taking time to relax, rest, and engage in activities that bring you joy.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Start Your Mind-Body Balance Journey</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Achieving mind-body balance is a lifelong journey, and every step you take toward this goal contributes to your overall
                well-being. By incorporating mindful practices, you can experience reduced stress, improved physical health, and a
                greater sense of peace and clarity.
            </p>
            <a href="#contact" class="inline-block py-2 px-6 bg-red-600 text-white font-bold rounded-lg text-lg hover:bg-red-500">
                Contact Us for Mind-Body Balance Coaching
            </a>
        </section>
    </div>
</div>
@endsection
