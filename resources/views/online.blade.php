@extends('layouts.app')

@section('content')
<div class="bg-gray-100 w-7 h-15">
            
        </div>
<div class="bg-gray-100">
    <div class="relative w-full h-[110vh] bg-cover bg-center flex items-center justify-center"
         style="background-image: url('{{ asset('storage/images/2.4.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <h1 class="text-white text-4xl font-bold relative">Online Coaching</h1>
    </div>

    <div class="max-w-screen-xl mx-auto py-8 px-4">
        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">What is Online Coaching?</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Online coaching is a modern approach to fitness training where you receive personalized guidance,
                workout plans, and support from certified coaches through digital platforms. You can access your
                workout and nutrition plan anytime, anywhere, and get the flexibility to train according to your own schedule.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Whether you're looking to lose weight, build muscle, or improve your athletic performance, online coaching
                offers a convenient way to get expert coaching without having to leave your home.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Why Choose Online Coaching?</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li>Access expert coaching from anywhere in the world, at any time.</li>
                <li>Receive a customized fitness plan based on your goals and preferences.</li>
                <li>Enjoy flexibility in your training schedule without the constraints of in-person sessions.</li>
                <li>Track your progress through digital tools and get continuous feedback from your coach.</li>
                <li>Affordable pricing compared to traditional in-person training sessions.</li>
                <li>Build a lasting relationship with your coach to stay motivated and accountable.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">How Online Coaching Works</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Online coaching is simple and effective. Here's how it works:
            </p>
            <ul class="list-decimal list-inside text-lg text-gray-700 space-y-2">
                <li><strong>Step 1: Initial Consultation</strong> - You'll have a virtual consultation with your coach where they
                    will discuss your fitness goals, current level, and any specific requirements.</li>
                <li><strong>Step 2: Personalized Plan</strong> - Based on the consultation, your coach will create a personalized
                    fitness and nutrition plan tailored to your needs.</li>
                <li><strong>Step 3: Training and Support</strong> - You’ll receive your workout routine, along with video tutorials,
                    weekly check-ins, and progress tracking.</li>
                <li><strong>Step 4: Continuous Feedback</strong> - Your coach will review your progress, provide feedback, and make
                    adjustments to your plan as needed to ensure steady progress.</li>
                <li><strong>Step 5: Stay Accountable</strong> - You'll have ongoing support to stay motivated and accountable to
                    your fitness goals.</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Benefits of Online Coaching</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li><strong>Flexibility</strong> - Train at your own time and from the comfort of your home.</li>
                <li><strong>Expert Coaching</strong> - Receive expert guidance and advice without the need to travel to a gym.</li>
                <li><strong>Cost-Effective</strong> - Online coaching is often more affordable compared to in-person sessions.</li>
                <li><strong>Variety of Services</strong> - Online coaching can cover various areas including strength training,
                    weight loss, nutrition guidance, injury recovery, and more.</li>
                <li><strong>Consistency</strong> - With constant access to your coach, you can stay consistent and focused on your
                    goals.</li>
                <li><strong>Customized Plans</strong> - Get a workout and nutrition plan that’s specifically designed for your needs
                    and goals.</li>
            </ul>
        </section>

        <section class="mt-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-800 mb-6">Get Started with Online Coaching Today!</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Whether you're looking to get fit, lose weight, or build muscle, online coaching offers you the perfect
                solution. Get started today and receive personalized training from certified coaches.
            </p>
            <a href="#contact" class="inline-block py-2 px-6 bg-red-600 text-white font-bold rounded-lg text-lg hover:bg-red-500">
                Contact Us for Online Coaching
            </a>
        </section>
    </div>
</div>
@endsection
