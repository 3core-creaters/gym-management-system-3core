@extends('layouts.app')

@section('content')
<div class="flex flex-col min-h-screen bg-gray-900 text-white">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-gray-900 shadow-md z-50">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('storage/images/log.png') }}" class="h-11 w-[80px]" alt="Gym Logo">
                <span class="font-thin text-3xl text-red-500/85">Super Fitness</span>
            </div>

            <!-- Middle Navbar -->
            <div class="hidden md:flex space-x-8 text-lg font-semibold">
                <h1 class="text-3xl font-bold">Yo..! Let's Do It</h1>
            </div>

            <!-- Profile Button -->
            <button id="profileBtn" class="relative flex items-center space-x-2 bg-red-600/80 px-4 py-2 rounded-lg hover:bg-white hover:text-red-500">
                <span>Profile</span>
            </button>
        </div>
    </nav>

    <!-- Sidebar (Hidden by Default) -->
    <aside id="sidebar" class="fixed top-0 right-0 w-64 h-full bg-gray-800 shadow-lg transform translate-x-full transition-transform duration-300 z-40">
        <div class="p-5 text-center mt-4">
            <button id="closeSidebar" class="text-red-500 font-bold text-xl float-right">X</button>
            <h2 class="text-2xl font-bold mb-4">User Profile</h2>
            <p>Name: winz xvi</p>
            <p>Email: winz@gmail.com</p>
            <p>Gym ID:</p>
            <p>Gender:</p>
            <p>Role:</p>
            <p>Status:</p>
            <div class="mt-4 mb-4">
            <a href="#workout" class="font-bold text-red-500">Workout Plan</a>
            </div>
            <div class="flex flex-col h-full justify-end">
            <button class="mt-4 bg-red-600 px-4 py-2 rounded-lg hover:bg-white hover:text-red-500">Logout</button>
            <button class="mt-4 bg-red-600 px-4 py-2 rounded-lg hover:bg-white hover:text-red-500">Delete Account</button>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="mt-24">

        <div class="flex justify-between pb-18">
        <div>
            <h1 class="ml-20 mr-20">Your Membership Plan</h1>
            <a href="#" class="flex flex-col items-center justify-center m-8 max-w-sm p-6 w-[270px] bg-white border border-red-500 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('storage/images/3.0.png')}}" class="w-[50px] h-[50px]" alt="">
            <h5 class="mb-2 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white mt-2">Gold Membership</h5>
            <h6 class="text-center text-xs text-gray-500 mb-3">valid for 6 months</h6>
            <h1 class="text-center text-3xl font-extrabold dark:text-white mb-3">Rs: 10 000.00</h1>
            </a>

            <div>
                <h1 class="text-center pr-8">Validity</h1>
            </div>

            <div class="flex flex-col ml-8 mt-4 mb-0 max-w-sm p-6 w-[270px] bg-white border border-red-500 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h1>Start Date:</h1>
                <h1>Expire Date:</h1>
            </div>
        </div>

                    <!-- BMI Calculator Form -->
            <div class="w-xs bg-gray-800 p-4 pl-8 pr-8 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h1 class="text-center mb-8 font-bold text-xl">BMI Calculator</h1>
                <label for="weight" class="text-white">Weight (kg)</label>
                <input id="weight" type="number" class="w-full p-2 mt-2 bg-gray-700 text-white rounded-md border-1 border-gray-500 hover:bg-gray-800" placeholder="Enter your weight">

                <label for="height" class="text-white mt-4">Height (cm)</label>
                <input id="height" type="number" class="w-full p-2 mt-2 bg-gray-700 text-white rounded-md border-1 border-gray-500 hover:bg-gray-800" placeholder="Enter your height">

                <button id="calculateBMI" class="w-full py-2 mt-4 bg-red-600 rounded-lg text-white font-semibold hover:bg-white hover:text-red-500">Calculate BMI</button>
                
                <!-- BMI Result -->
                <div id="bmiResult" class="text-center mt-14 text-2xl text-white font-bold border border-gray-500"></div>
            </div>

            <!-- Calendar -->
            <div id="calendar" class="w-m mx-8 bg-gray-800 p-4 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h1 class="text-center text-xl mb-5 font-bold">Calendar</h1>
                    <div class="flex justify-between items-center">
                        <button id="prevMonth" class="text-white hover:text-red-600">&lt;</button>
                        <h3 id="monthYear" class="text-xl font-bold text-white">January 2025</h3>
                        <button id="nextMonth" class="text-white hover:text-red-600">&gt;</button>
                    </div>

                    <div class="grid grid-cols-7 gap-2 mt-4">
                        <!-- Days of the Week -->
                        <div class="text-center font-bold text-white">Sun</div>
                        <div class="text-center font-bold text-white">Mon</div>
                        <div class="text-center font-bold text-white">Tue</div>
                        <div class="text-center font-bold text-white">Wed</div>
                        <div class="text-center font-bold text-white">Thu</div>
                        <div class="text-center font-bold text-white">Fri</div>
                        <div class="text-center font-bold text-white">Sat</div>

                        <!-- Calendar Days will be inserted here -->
                        <div id="calendarDays" class="col-span-7 text-black font-bold grid grid-cols-7 gap-2 mt-2"></div>
                    </div>
            </div>

    
    </div>

    <div id="workout" class="flex flex-col items-center justify-center min-h-screen pb-12 bg-black">
    <h1 class="text-center text-4xl text-white font-extrabold mt-20 mb-6">Your Workout Plan</h1>

    <!-- Workout Plan Form -->
    <div class="flex flex-col justify-center items-center w-full max-w-md p-12 bg-black outline-1 outline-red-600 rounded-xl shadow-xl">
    <img src="{{asset('storage/images/5.0.png')}}" class="w-[70px] h-[70px]" alt="">
        
        <form method="POST" action="" class="mt-6">
            @csrf
           
            <div>
               <p>Enter Your Gym ID</p>
               <input type="text" name="workout_type" class="w-full p-2 outline-1 outline-red-600 mt-1 text-black rounded-md focus:ring focus:ring-red-500" value="{{ $workoutPlan->workout_type ?? '' }}" required>
            </div>

            <!-- Workout Type -->
            <div class="mt-4">
                <label class="block text-white">Workout Type</label>
                <input type="text" name="workout_type" class="w-full p-2 outline-1 outline-red-600 mt-1 text-black rounded-md focus:ring focus:ring-red-500" value="{{ $workoutPlan->workout_type ?? '' }}" required>
            </div>

            <div>
            <div class="overflow-x-auto py-6">
    <table class="min-w-full bg-black text-white rounded-lg shadow-lg">
        <thead>
            <tr class="border-b-2 border-red-600">
                <th class="px-4 py-2 text-center font-bold">No</th>
                <th class="px-4 py-2 text-center font-bold">Exercise</th>
                <th class="px-4 py-2 text-center font-bold">Sets</th>
                <th class="px-4 py-2 text-center font-bold">Reps</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">1</td>
                <td class="px-4 py-2 text-center">Push-up</td>
                <td class="px-4 py-2 text-center">3</td>
                <td class="px-4 py-2 text-center">12</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">2</td>
                <td class="px-4 py-2 text-center">Squats</td>
                <td class="px-4 py-2 text-center">4</td>
                <td class="px-4 py-2 text-center">15</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">3</td>
                <td class="px-4 py-2 text-center">Pull-up</td>
                <td class="px-4 py-2 text-center">3</td>
                <td class="px-4 py-2 text-center">8</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">4</td>
                <td class="px-4 py-2 text-center">Lunges</td>
                <td class="px-4 py-2 text-center">4</td>
                <td class="px-4 py-2 text-center">12</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">5</td>
                <td class="px-4 py-2 text-center">Bench Press</td>
                <td class="px-4 py-2 text-center">4</td>
                <td class="px-4 py-2 text-center">10</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">6</td>
                <td class="px-4 py-2 text-center">Deadlift</td>
                <td class="px-4 py-2 text-center">3</td>
                <td class="px-4 py-2 text-center">8</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">7</td>
                <td class="px-4 py-2 text-center">Shoulder Press</td>
                <td class="px-4 py-2 text-center">3</td>
                <td class="px-4 py-2 text-center">12</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">8</td>
                <td class="px-4 py-2 text-center">Bicep Curls</td>
                <td class="px-4 py-2 text-center">3</td>
                <td class="px-4 py-2 text-center">15</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">9</td>
                <td class="px-4 py-2 text-center">Tricep Dips</td>
                <td class="px-4 py-2 text-center">4</td>
                <td class="px-4 py-2 text-center">12</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">10</td>
                <td class="px-4 py-2 text-center">Leg Press</td>
                <td class="px-4 py-2 text-center">4</td>
                <td class="px-4 py-2 text-center">10</td>
            </tr>
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">11</td>
                <td class="px-4 py-2 text-center">Lat Pulldown</td>
                <td class="px-4 py-2 text-center">3</td>
                <td class="px-4 py-2 text-center">12</td>
            </tr>
            <tr>
                <td class="px-4 py-2 text-center">12</td>
                <td class="px-4 py-2 text-center">Leg Curl</td>
                <td class="px-4 py-2 text-center">3</td>
                <td class="px-4 py-2 text-center">10</td>
            </tr>
        </tbody>
    </table>
</div>

            </div>
        </form>
    </div>
</div>


    </main>

</div>

<!-- JavaScript for Sidebar Toggle -->
<script>
    document.getElementById("profileBtn").addEventListener("click", function () {
        let sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("translate-x-full"); // Toggle the sidebar
    });

    document.getElementById("closeSidebar").addEventListener("click", function () {
        document.getElementById("sidebar").classList.add("translate-x-full"); // Close when "X" is clicked
    });

    // JavaScript for BMI Calculation
    document.getElementById("calculateBMI").addEventListener("click", function () {
        let weight = parseFloat(document.getElementById("weight").value);
        let height = parseFloat(document.getElementById("height").value) / 100; // Convert height to meters

        if (weight > 0 && height > 0) {
            let bmi = weight / (height * height);
            let resultText = `Your BMI is: ${bmi.toFixed(2)}`;

            // Provide feedback on BMI category
            if (bmi < 18.5) {
                resultText += " (Underweight)";
            } else if (bmi >= 18.5 && bmi <= 24.9) {
                resultText += " (Normal weight)";
            } else if (bmi >= 25 && bmi <= 29.9) {
                resultText += " (Overweight)";
            } else {
                resultText += " (Obesity)";
            }

            document.getElementById("bmiResult").innerText = resultText;
        } else {
            document.getElementById("bmiResult").innerText = "Please enter valid weight and height.";
        }
    });

    let currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    function generateCalendar() {
        const monthYearLabel = document.getElementById("monthYear");
        const calendarDays = document.getElementById("calendarDays");
        calendarDays.innerHTML = "";

        // Update the month and year in the header
        monthYearLabel.textContent = `${currentDate.toLocaleString('default', { month: 'long' })} ${currentYear}`;

        const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
        const lastDateOfMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        // Generate empty divs for days of the previous month
        for (let i = 0; i < firstDayOfMonth; i++) {
            calendarDays.innerHTML += `<div class="text-center text-gray-400"></div>`;
        }

        // Generate the days of the current month
        for (let day = 1; day <= lastDateOfMonth; day++) {
            calendarDays.innerHTML += `<div class="text-center py-2 px-4 bg-gray-100 rounded hover:bg-red-200">${day}</div>`;
        }
    }

    // Navigate to the previous month
    document.getElementById("prevMonth").addEventListener("click", function () {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        currentDate = new Date(currentYear, currentMonth, 1); // Update currentDate
        generateCalendar();
    });

    // Navigate to the next month
    document.getElementById("nextMonth").addEventListener("click", function () {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        currentDate = new Date(currentYear, currentMonth, 1); // Update currentDate
        generateCalendar();
    });

    // Initialize the calendar
    generateCalendar();
</script>

@endsection
