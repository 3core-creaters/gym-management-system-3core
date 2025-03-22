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
               <h1 class="text-3xl font-bold">Yo..! Let's Motivate Them</h1>
            </div>

            <!-- Profile Button -->
            <button id="profileBtn" class="relative flex items-center space-x-2 bg-red-600/80 px-4 py-2 rounded-lg hover:bg-white hover:text-red-500">
                <span>Profile</span>
            </button>
        </div>
    </nav>

    <!-- Sidebar (Hidden by Default) -->
    <aside id="sidebar" class="fixed top-0 right-0 w-64 h-full bg-gray-800 shadow-lg transform translate-x-full transition-transform duration-300 z-40">
        <div class="p-5 text-center">
            <button id="closeSidebar" class="text-red-500 font-bold text-xl float-right">X</button>
            <h2 class="text-2xl font-bold mb-4">User Profile</h2>
            <p>Name: John Doe</p>
            <p>Email: johndoe@example.com</p>
            <button class="mt-4 bg-red-600 px-4 py-2 rounded-lg hover:bg-white hover:text-red-500">Logout</button>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="mt-24">
        <div class="flex justify-between">
        <div class="p-6 m-12">
    <!-- Gym ID Input -->
    <input type="text" id="gymIdInput" class="text-white border border-gray-500 p-2 mr-5 rounded-lg bg-gray-900" placeholder="Enter Member's Gym ID">
    <button id="loadWorkoutBtn" class="bg-gray-900 border border-blue-400 text-blue-400 px-4 py-2 rounded-lg font-bold">Load Workout</button>

    <!-- Workout Table -->
    <div class="overflow-x-auto py-6">
        <table class="min-w-full bg-black text-white rounded-lg shadow-lg">
            <thead>
                <tr class="border-b-2 border-red-600">
                    <th class="px-4 py-2 text-center font-bold">No</th>
                    <th class="px-4 py-2 text-center font-bold">Exercise</th>
                    <th class="px-4 py-2 text-center font-bold">Sets</th>
                    <th class="px-4 py-2 text-center font-bold">Reps</th>
                    <th class="px-4 py-2 text-center font-bold">Actions</th>
                </tr>
            </thead>
            <tbody id="workoutTableBody">
                <!-- Loaded Workout Data Will Appear Here -->
            </tbody>
        </table>

        <!-- Add Row Button -->
        <div class="mt-4 flex justify-between">
            <button id="addRowBtn" class="bg-gray-900 border border-yellow-500 text-yellow-600 px-4 py-2 rounded-lg font-bold">+ Add Row</button>
            <button id="saveWorkoutBtn" class="bg-gray-900 border border-green-500 text-green-600 px-4 py-2 rounded-lg font-bold">Save Workout</button>
        </div>
    </div>
</div>

<div class="bg-gray-800 m-15 p-4 pl-8 pr-8 rounded-lg shadow-lg w-80 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h1 class="text-center mb-8 font-bold text-xl">BMI Calculator</h1>
                <label for="weight" class="text-white">Weight (kg)</label>
                <input id="weight" type="number" class="w-full p-2 mt-2 bg-gray-700 text-white rounded-md border-1 border-gray-500 hover:bg-gray-800" placeholder="Enter your weight">

                <label for="height" class="text-white mt-4">Height (cm)</label>
                <input id="height" type="number" class="w-full p-2 mt-2 bg-gray-700 text-white rounded-md border-1 border-gray-500 hover:bg-gray-800" placeholder="Enter your height">

                <button id="calculateBMI" class="w-full py-2 mt-4 bg-red-600 rounded-lg text-white font-semibold hover:bg-white hover:text-red-500">Calculate BMI</button>
                
                <!-- BMI Result -->
                <div id="bmiResult" class="text-center mt-14 text-2xl text-white font-bold border border-gray-500"></div>
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

    // Load,Edit,Add & Save workouts

    document.addEventListener("DOMContentLoaded", function () {
    const tableBody = document.getElementById("workoutTableBody");
    const gymIdInput = document.getElementById("gymIdInput");
    const loadWorkoutBtn = document.getElementById("loadWorkoutBtn");
    const addRowBtn = document.getElementById("addRowBtn");
    const saveWorkoutBtn = document.getElementById("saveWorkoutBtn");

    // Load workout plan when entering Gym ID
    loadWorkoutBtn.addEventListener("click", function () {
        let gymId = gymIdInput.value.trim();
        if (!gymId) {
            alert("Please enter a Gym ID!");
            return;
        }

        // Fetch existing workout plan from the database
        fetch(`/get-workout-plan/${gymId}`)
            .then(response => response.json())
            .then(data => {
                tableBody.innerHTML = ""; // Clear table before loading
                if (data.length === 0) {
                    alert("No workout plan found for this Gym ID.");
                    return;
                }

                // Populate the table with existing workout plan
                data.forEach((exercise, index) => {
                    addWorkoutRow(index + 1, exercise.exercise, exercise.sets, exercise.reps);
                });
            })
            .catch(error => console.error("Error fetching workout data:", error));
    });

    // Function to add a new row
    function addWorkoutRow(no, exercise = "New Exercise", sets = "3", reps = "10") {
        let newRow = document.createElement("tr");
        newRow.classList.add("border-b", "border-red-600");

        newRow.innerHTML = `
            <td class="px-4 py-2 text-center">${no}</td>
            <td class="px-4 py-2 text-center editable">${exercise}</td>
            <td class="px-4 py-2 text-center editable">${sets}</td>
            <td class="px-4 py-2 text-center editable">${reps}</td>
            <td class="px-4 py-2 text-center">
                <button class="edit-btn text-red-500 font-bold">Edit</button>
                <button class="save-btn hidden text-green-500 font-bold">Save</button>
                <button class="delete-btn text-yellow-500 font-bold">Delete</button>
            </td>
        `;

        tableBody.appendChild(newRow);

        let editBtn = newRow.querySelector(".edit-btn");
        let saveBtn = newRow.querySelector(".save-btn");
        let deleteBtn = newRow.querySelector(".delete-btn");

        editBtn.addEventListener("click", function () {
            enableEditing(editBtn, saveBtn, newRow);
        });

        saveBtn.addEventListener("click", function () {
            saveEditing(editBtn, saveBtn, newRow);
        });

        deleteBtn.addEventListener("click", function () {
            newRow.remove();
        });
    }

    // Enable editing
    function enableEditing(editBtn, saveBtn, row) {
        let cells = row.querySelectorAll(".editable");

        cells.forEach(cell => {
            let input = document.createElement("input");
            input.type = "text";
            input.value = cell.innerText;
            input.classList.add("text-black", "w-full", "text-center");
            cell.innerHTML = "";
            cell.appendChild(input);
        });

        editBtn.classList.add("hidden");
        saveBtn.classList.remove("hidden");
    }

    // Save edited data
    function saveEditing(editBtn, saveBtn, row) {
        let cells = row.querySelectorAll(".editable");

        cells.forEach(cell => {
            let input = cell.querySelector("input");
            if (input) {
                cell.innerText = input.value;
            }
        });

        saveBtn.classList.add("hidden");
        editBtn.classList.remove("hidden");
    }

    // Add new workout row
    addRowBtn.addEventListener("click", function () {
        let rowCount = tableBody.querySelectorAll("tr").length + 1;
        addWorkoutRow(rowCount);
    });

    // Save the workout plan to the database
    saveWorkoutBtn.addEventListener("click", function () {
        let gymId = gymIdInput.value.trim();
        if (!gymId) {
            alert("Please enter a Gym ID before saving!");
            return;
        }

        let workoutPlan = [];
        let rows = tableBody.querySelectorAll("tr");

        rows.forEach(row => {
            let columns = row.querySelectorAll(".editable");
            let exercise = columns[0].innerText;
            let sets = columns[1].innerText;
            let reps = columns[2].innerText;

            workoutPlan.push({ exercise, sets, reps });
        });

        // Send workout plan to the server
        fetch("/save-workout-plan", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ gymId, workoutPlan })
        })
        .then(response => response.json())
        .then(data => alert("Workout plan saved successfully!"))
        .catch(error => console.error("Error saving workout plan:", error));
    });
});

</script>

@endsection
