@extends('layouts.app')

@section('title', 'Strength Training')

@section('content')
        <div class="bg-gray-100 w-7 h-15">
            
        </div>
    <div class="bg-gray-100 mt-[100]">
        <div class="relative w-full h-[110vh] bg-cover bg-center flex items-center justify-center" 
            style="background-image: url('{{ asset('storage/images/2.1.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <h1 class="text-white text-4xl font-bold relative">Strength Training</h1>
        </div>

        <div class="container mx-auto px-6 py-10 flex flex-col justify-center items-center md:flex-row gap-6">
            <div class="w-full md:w-3/4 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-center text-2xl font-bold text-gray-900 mb-3">The Power of Strength Training</h2>
                <p class="text-center text-gray-700 leading-7">Strength training helps build muscle and endurance...</p>
                <div class="container mx-auto p-6">
    <h1 class="text-3xl font-extrabold text-center mb-6">Strength Training</h1>

    <p class="mb-4">Strength training, also known as resistance training or weight training, involves exercises that improve strength, endurance, and muscle mass by exercising muscles against resistance. This resistance can come from free weights, machines, resistance bands, or even bodyweight exercises.</p>

    <h2 class="text-2xl font-bold mb-4">1. What is Strength Training?</h2>
    <p class="mb-4">Strength training is a form of physical exercise that involves lifting weights or using other resistance to increase muscle strength and endurance. It is typically done in a progressive manner, with individuals gradually increasing the intensity of the exercises to build strength.</p>

    <h3 class="text-xl font-semibold mb-2">Key Benefits of Strength Training:</h3>
    <ul class="list-disc ml-6 mb-4">
        <li>Builds Muscle Mass: Regular strength training leads to muscle growth (hypertrophy) by stimulating muscle fibers to grow stronger and larger.</li>
        <li>Increases Bone Density: Lifting weights helps increase bone density, which can prevent osteoporosis.</li>
        <li>Boosts Metabolism: The more muscle mass you have, the more calories you burn at rest.</li>
        <li>Improves Functional Strength: It enhances your ability to perform daily activities more efficiently.</li>
        <li>Improves Mental Health: Strength training can reduce stress, anxiety, and depression by increasing the production of endorphins.</li>
    </ul>

    <h2 class="text-2xl font-bold mb-4">2. Types of Strength Training Exercises</h2>
    <p class="mb-4">Strength training can be done using various tools and methods. Some common types of strength training exercises include:</p>

    <h3 class="text-xl font-semibold mb-2">Free Weights:</h3>
    <p class="mb-4">Free weights include exercises with dumbbells, barbells, kettlebells, etc. These exercises target multiple muscles and allow for functional movements. Examples:</p>
    <ul class="list-disc ml-6 mb-4">
        <li>Bench Press</li>
        <li>Squats</li>
        <li>Deadlifts</li>
        <li>Bicep Curls</li>
    </ul>

    <h3 class="text-xl font-semibold mb-2">Machines:</h3>
    <p class="mb-4">Weight machines isolate muscles and are typically safer for beginners. Examples:</p>
    <ul class="list-disc ml-6 mb-4">
        <li>Leg Press Machine</li>
        <li>Lat Pulldown</li>
        <li>Leg Extension Machine</li>
    </ul>

    <h3 class="text-xl font-semibold mb-2">Bodyweight Exercises:</h3>
    <p class="mb-4">Exercises where you use your body weight as resistance. These exercises can be done anywhere. Examples:</p>
    <ul class="list-disc ml-6 mb-4">
        <li>Push-ups</li>
        <li>Pull-ups</li>
        <li>Squats</li>
        <li>Lunges</li>
    </ul>

    <h3 class="text-xl font-semibold mb-2">Resistance Bands:</h3>
    <p class="mb-4">Bands provide a portable and adjustable way to strengthen muscles. They are commonly used in rehabilitation or injury prevention.</p>

    <h2 class="text-2xl font-bold mb-4">3. How to Start Strength Training</h2>
    <p class="mb-4">If you're new to strength training, it’s important to start gradually. Here are some steps to begin:</p>

    <h3 class="text-xl font-semibold mb-2">Warm-Up</h3>
    <p class="mb-4">Warm up with 5-10 minutes of light cardio and dynamic stretches to get your muscles ready for the workout.</p>

    <h3 class="text-xl font-semibold mb-2">Focus on Proper Form</h3>
    <p class="mb-4">Focus on learning proper form before increasing weight. Proper form reduces the risk of injury and ensures maximum muscle engagement.</p>

    <h3 class="text-xl font-semibold mb-2">Start with Compound Movements</h3>
    <p class="mb-4">Compound exercises engage multiple muscle groups. Examples include squats, deadlifts, and bench presses. These exercises should form the foundation of your routine.</p>

    <h3 class="text-xl font-semibold mb-2">Choose Weight Wisely</h3>
    <p class="mb-4">Start with light weights to master the form. Gradually increase the weight by 5-10% once you can perform 12-15 reps with good form.</p>

    <h3 class="text-xl font-semibold mb-2">Progressive Overload</h3>
    <p class="mb-4">To make gains in strength and muscle mass, you need to progressively challenge your muscles. This can be done by increasing weight, reps, or sets over time.</p>

    <h3 class="text-xl font-semibold mb-2">Rest and Recovery</h3>
    <p class="mb-4">Rest is crucial. Aim for 48 hours of rest between training the same muscle group to allow for muscle recovery and growth.</p>

    <h2 class="text-2xl font-bold mb-4">4. Strength Training Routine for Beginners</h2>
    <p class="mb-4">Here’s a basic workout plan for beginners:</p>

    <h3 class="text-xl font-semibold mb-2">Day 1: Upper Body</h3>
    <ul class="list-disc ml-6 mb-4">
        <li>Bench Press (3 sets of 8-12 reps)</li>
        <li>Lat Pulldown (3 sets of 8-12 reps)</li>
        <li>Dumbbell Shoulder Press (3 sets of 8-12 reps)</li>
        <li>Bicep Curls (3 sets of 10-15 reps)</li>
        <li>Tricep Dips (3 sets of 10-15 reps)</li>
    </ul>

    <h3 class="text-xl font-semibold mb-2">Day 2: Lower Body</h3>
    <ul class="list-disc ml-6 mb-4">
        <li>Squats (3 sets of 8-12 reps)</li>
        <li>Deadlifts (3 sets of 8-12 reps)</li>
        <li>Leg Press (3 sets of 10-15 reps)</li>
        <li>Lunges (3 sets of 10 reps per leg)</li>
        <li>Calf Raises (3 sets of 15-20 reps)</li>
    </ul>

    <h3 class="text-xl font-semibold mb-2">Day 3: Full Body or Active Recovery</h3>
    <p class="mb-4">Perform lighter exercises or rest.</p>

    <h2 class="text-2xl font-bold mb-4">5. Importance of Nutrition for Strength Training</h2>
    <p class="mb-4">Nutrition plays a key role in supporting strength training. To build muscle, your body needs enough calories and protein to repair muscle fibers after exercise.</p>

    <h3 class="text-xl font-semibold mb-2">Protein</h3>
    <p class="mb-4">Aim for around 1.6-2.2 grams of protein per kilogram of body weight per day. Sources: Chicken, fish, eggs, beans, lentils, Greek yogurt, etc.</p>

    <h3 class="text-xl font-semibold mb-2">Carbohydrates</h3>
    <p class="mb-4">Carbs provide the energy required for strength training. Sources: Whole grains, fruits, vegetables, and legumes.</p>

    <h3 class="text-xl font-semibold mb-2">Fats</h3>
    <p class="mb-4">Healthy fats support overall health and hormone regulation. Sources: Avocados, olive oil, nuts, seeds, and fatty fish.</p>

    <h3 class="text-xl font-semibold mb-2">Hydration</h3>
    <p class="mb-4">Drink plenty of water before, during, and after your workout to stay hydrated.</p>

    <h2 class="text-2xl font-bold mb-4">6. Common Strength Training Mistakes to Avoid</h2>
    <ul class="list-disc ml-6 mb-4">
        <li>Neglecting Warm-Up: Always warm up to prevent injury.</li>
        <li>Using Too Much Weight Too Soon: Start with a manageable weight and progressively increase it.</li>
        <li>Poor Form: Never sacrifice form for heavier weights.</li>
        <li>Skipping Rest Days: Muscles grow and recover during rest. Skipping recovery days can lead to overtraining and injury.</li>
        <li>Inconsistent Training: Consistency is key. Stick to your routine for best results.</li>
    </ul>

    <h2 class="text-2xl font-bold mb-4">Conclusion</h2>
    <p class="mb-4">Strength training is a powerful tool for improving physical health, increasing muscle mass, and enhancing overall well-being. With the right approach and dedication, you can experience significant improvements in your strength and fitness levels.</p>
</div>

            </div>
        </div>
    </div>
@endsection
