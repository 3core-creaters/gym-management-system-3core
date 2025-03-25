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
               <h1 class="text-3xl font-bold">Yo..! Let's Be Healthy</h1>
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
            <div class="flex flex-col h-full justify-end">
            <button class="mt-4 bg-red-600 px-4 py-2 rounded-lg hover:bg-white hover:text-red-500">Logout</button>
            <button class="mt-4 bg-red-600 px-4 py-2 rounded-lg hover:bg-white hover:text-red-500">Delete Account</button>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="mt-5">
        <h1 class="mt-15 ml-85 text-2xl font-bold text-red-600">Workout Plans of Users</h1>
        <div class="flex justify-between">
            <div class="p-6 m-5 w-3xl">
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

        <div class="bg-gray-800 m-10 mb-10 p-4 pl-8 pr-8 rounded-lg shadow-lg w-80 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
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


        <!-- payment details -->
        <h1 class="mt-5 ml-120 text-2xl font-bold text-blue-400">Payment Details of Users</h1>
<div class="flex justify-between">
    <div class="p-6 m-5 w-3xl">
        <!-- Gym ID Input for Payment -->
        <input type="text" id="gymIdPaymentInput" class="text-white border border-gray-500 p-2 ml-12 mr-5 rounded-lg bg-gray-900" placeholder="Enter Member's Gym ID">
        <button id="loadPaymentBtn" class="bg-gray-900 border border-blue-400 text-blue-400 px-4 py-2 rounded-lg font-bold">Load Payment</button>

        <!-- Payment Table -->
        <div class="overflow-x-auto py-6 w-5xl ml-12">
            <table class="min-w-full bg-black text-white rounded-lg shadow-lg">
                <thead>
                    <tr class="border-b-2 border-blue-600">
                        <th class="px-4 py-2 text-center font-bold">ID</th>
                        <th class="px-4 py-2 text-center font-bold">Member Name</th>
                        <th class="px-4 py-2 text-center font-bold">
                            <select name="" id="">
                                <option value="">Package</option>
                                <option value="">Silver</option>
                                <option value="">Gold</option>
                                <option value="">Platinum</option>
                            </select>
                        </th>
                        <th class="px-4 py-2 text-center font-bold">
                            <select name="" id="">
                                <option value="">Paid/Not</option>
                                <option value="">Paid</option>
                                <option value="">Not Paid</option>
                            </select>
                        </th>
                        <th class="px-4 py-2 text-center font-bold">Date</th>
                        <th class="px-4 py-2 text-center font-bold">Actions</th>
                    </tr>
                </thead>
                <tbody id="paymentTableBody">
                    <!-- Loaded Payment Data Will Appear Here -->
                </tbody>
            </table>

            <!-- Add Row Button -->
            <div class="mt-4 flex justify-between">
                <button id="addPaymentRowBtn" class="bg-gray-900 border border-yellow-500 text-yellow-600 px-4 py-2 rounded-lg font-bold">+ Add Row</button>
                <button id="savePaymentBtn" class="bg-gray-900 border border-green-500 text-green-600 px-4 py-2 rounded-lg font-bold">Save Payment</button>
            </div>
        </div>
    </div>
</div>
        

        <!-- trainers profile -->
        <div class="overflow-x-auto py-6">
            <h1 class="text-center text-3xl font-bold mb-10">See Our All Trainers</h1>
    <table class="w-5xl m-25 mt-0 mb-0 bg-black text-white rounded-lg shadow-lg">
        <thead>
            <tr class="border-b-2 border-red-600">
                <th class="px-4 py-2 text-center font-bold">Trainer ID</th>
                <th class="px-4 py-2 text-center font-bold">Name</th>
                <th class="px-4 py-2 text-center font-bold">Action</th>
            </tr>
        </thead>
        <tbody id="trainersTable">
            <!-- Example Trainers (Dynamically Loaded) -->
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">T001</td>
                <td class="px-4 py-2 text-center">Mike Tyson</td>
                <td class="px-4 py-2 text-center">
                    <button class="view-trainer-btn text-red-500 font-bold" data-id="T001">View Profile</button>
                </td>
            </tr>
            <tr class="border-b border-red-600 hidden" id="trainer-T001">
                <td colspan="3" class="px-4 py-2 text-center bg-gray-800 text-white">
                    <p><strong>Specialty:</strong> Strength Training</p>
                    <p><strong>Experience:</strong> 10 Years</p>
                    <p><strong>Contact:</strong> 9876543210</p>
                </td>
            </tr>

            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">T002</td>
                <td class="px-4 py-2 text-center">Sarah Connor</td>
                <td class="px-4 py-2 text-center">
                    <button class="view-trainer-btn text-red-500 font-bold" data-id="T002">View Profile</button>
                </td>
            </tr>
            <tr class="border-b border-red-600 hidden" id="trainer-T002">
                <td colspan="3" class="px-4 py-2 text-center bg-gray-800 text-white">
                    <p><strong>Specialty:</strong> Cardio & Weight Loss</p>
                    <p><strong>Experience:</strong> 8 Years</p>
                    <p><strong>Contact:</strong> 9123456789</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>


    <!-- Members table -->
        <div class="overflow-x-auto py-6">
            <h1 class="text-center text-3xl font-bold mb-10">See Our All Members</h1>
    <table class="w-5xl m-25 mt-0 mb-10 bg-black text-white rounded-lg shadow-lg">
        <thead>
            <tr class="border-b-2 border-red-600">
                <th class="px-4 py-2 text-center font-bold">Gym ID</th>
                <th class="px-4 py-2 text-center font-bold">First Name</th>
                <th class="px-4 py-2 text-center font-bold">Action</th>
            </tr>
        </thead>
        <tbody id="membersTable">
            <!-- Example Members (Dynamically Loaded) -->
            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">G123</td>
                <td class="px-4 py-2 text-center">John</td>
                <td class="px-4 py-2 text-center">
                    <button class="view-profile-btn text-red-500 font-bold" data-id="G123">View Profile</button>
                </td>
            </tr>
            <tr class="border-b border-red-600 hidden" id="profile-G123">
                <td colspan="3" class="px-4 py-2 text-center bg-gray-800 text-white">
                    <p><strong>Age:</strong> 25</p>
                    <p><strong>Contact:</strong> 9876543210</p>
                    <p><strong>Membership:</strong> Active</p>
                </td>
            </tr>

            <tr class="border-b border-red-600">
                <td class="px-4 py-2 text-center">G124</td>
                <td class="px-4 py-2 text-center">Alice</td>
                <td class="px-4 py-2 text-center">
                    <button class="view-profile-btn text-red-500 font-bold" data-id="G124">View Profile</button>
                </td>
            </tr>
            <tr class="border-b border-red-600 hidden" id="profile-G124">
                <td colspan="3" class="px-4 py-2 text-center bg-gray-800 text-white">
                    <p><strong>Age:</strong> 30</p>
                    <p><strong>Contact:</strong> 9123456789</p>
                    <p><strong>Membership:</strong> Expired</p>
                </td>
            </tr>
        </tbody>
    </table>
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

document.addEventListener("DOMContentLoaded", function () {
    const membersTableBody = document.getElementById("membersTableBody");

    // Fetch all members
    fetch("/get-all-members")
        .then(response => response.json())
        .then(data => {
            membersTableBody.innerHTML = "";
            data.forEach(member => {
                addMemberRow(member);
            });
        })
        .catch(error => console.error("Error fetching members:", error));

    // Function to add a member row
    function addMemberRow(member) {
        let newRow = document.createElement("tr");
        newRow.classList.add("border-b", "border-red-600");

        newRow.innerHTML = `
            <td class="px-4 py-2 text-center">${member.gym_id}</td>
            <td class="px-4 py-2 text-center">${member.first_name}</td>
            <td class="px-4 py-2 text-center">
                <button class="view-profile-btn bg-blue-600 text-white px-4 py-2 rounded-lg font-bold" data-gym-id="${member.gym_id}">
                    View Profile
                </button>
            </td>
        `;

        membersTableBody.appendChild(newRow);

        let viewProfileBtn = newRow.querySelector(".view-profile-btn");
        viewProfileBtn.addEventListener("click", function () {
            let gymId = this.getAttribute("data-gym-id");
            viewMemberProfile(newRow, gymId);
        });
    }

    // Function to view a member's profile
    function viewMemberProfile(row, gymId) {
        fetch(`/get-member-details/${gymId}`)
            .then(response => response.json())
            .then(data => {
                let profileRow = document.createElement("tr");
                profileRow.classList.add("border-b", "border-red-600", "bg-gray-800");

                profileRow.innerHTML = `
                    <td colspan="3">
                        <div class="p-4">
                            <p><strong>Last Name:</strong> ${data.last_name}</p>
                            <p><strong>Age:</strong> ${data.age}</p>
                            <p><strong>Email:</strong> ${data.email}</p>
                            <p><strong>Phone:</strong> ${data.phone}</p>
                            <p><strong>Address:</strong> ${data.address}</p>
                        </div>
                    </td>
                `;

                // Insert profile row below the selected row
                row.insertAdjacentElement("afterend", profileRow);
            })
            .catch(error => console.error("Error fetching member details:", error));
    }
});

// view users profile
document.querySelectorAll('.view-profile-btn').forEach(button => {
        button.addEventListener('click', function() {
            let profileRow = document.getElementById('profile-' + this.dataset.id);
            profileRow.classList.toggle('hidden');
            this.textContent = profileRow.classList.contains('hidden') ? 'View Profile' : 'Hide Profile';
        });
    });

// view Trainers profile
document.querySelectorAll('.view-trainer-btn').forEach(button => {
        button.addEventListener('click', function() {
            let trainerRow = document.getElementById('trainer-' + this.dataset.id);
            trainerRow.classList.toggle('hidden');
            this.textContent = trainerRow.classList.contains('hidden') ? 'View Profile' : 'Hide Profile';
        });
        
    });

    // payment
    document.addEventListener("DOMContentLoaded", function () {
    const paymentTableBody = document.getElementById("paymentTableBody");
    const gymIdPaymentInput = document.getElementById("gymIdPaymentInput");
    const loadPaymentBtn = document.getElementById("loadPaymentBtn");
    const addPaymentRowBtn = document.getElementById("addPaymentRowBtn");
    const savePaymentBtn = document.getElementById("savePaymentBtn");

    // Load payment details for a member
    loadPaymentBtn.addEventListener("click", function () {
        let gymId = gymIdPaymentInput.value.trim();
        if (!gymId) {
            alert("Please enter a Gym ID!");
            return;
        }

        // Fetch existing payment data
        fetch(`/get-payment-details/${gymId}`)
            .then(response => response.json())
            .then(data => {
                paymentTableBody.innerHTML = ""; // Clear existing table
                if (data.length === 0) {
                    alert("No payment details found for this Gym ID.");
                    return;
                }

                // Populate table with existing data
                data.forEach((payment, index) => {
                    addPaymentRow(index + 1, payment.name, payment.package, payment.paidStatus, payment.date);
                });
            })
            .catch(error => console.error("Error fetching payment data:", error));
    });

    // Function to add a new row
    function addPaymentRow(no, name = "New Member", package = "", paidStatus = "", date = "YYYY-MM-DD") {
        let newRow = document.createElement("tr");
        newRow.classList.add("border-b", "border-blue-600");

        newRow.innerHTML = `
            <td class="px-4 py-2 text-center">${no}</td>
            <td class="px-4 py-2 text-center editable">${name}</td>
            <td class="px-4 py-2 text-center">
                <select class="package-select text-black w-full">
                    <option value="">Package</option>
                    <option value="Silver" ${package === "Silver" ? "selected" : ""}>Silver</option>
                    <option value="Gold" ${package === "Gold" ? "selected" : ""}>Gold</option>
                    <option value="Platinum" ${package === "Platinum" ? "selected" : ""}>Platinum</option>
                </select>
            </td>
            <td class="px-4 py-2 text-center">
                <select class="paid-select text-black w-full">
                    <option value="">Paid/Not</option>
                    <option value="Paid" ${paidStatus === "Paid" ? "selected" : ""}>Paid</option>
                    <option value="Not Paid" ${paidStatus === "Not Paid" ? "selected" : ""}>Not Paid</option>
                </select>
            </td>
            <td class="px-4 py-2 text-center editable">${date}</td>
            <td class="px-4 py-2 text-center">
                <button class="edit-payment-btn text-red-500 font-bold">Edit</button>
                <button class="save-payment-btn hidden text-green-500 font-bold">Save</button>
                <button class="delete-payment-btn text-yellow-500 font-bold">Delete</button>
            </td>
        `;

        paymentTableBody.appendChild(newRow);

        let editBtn = newRow.querySelector(".edit-payment-btn");
        let saveBtn = newRow.querySelector(".save-payment-btn");
        let deleteBtn = newRow.querySelector(".delete-payment-btn");

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

    // Add new payment row
    addPaymentRowBtn.addEventListener("click", function () {
        let rowCount = paymentTableBody.querySelectorAll("tr").length + 1;
        addPaymentRow(rowCount);
    });

    // Save payment details to the database
    savePaymentBtn.addEventListener("click", function () {
        let gymId = gymIdPaymentInput.value.trim();
        if (!gymId) {
            alert("Please enter a Gym ID before saving!");
            return;
        }

        let paymentDetails = [];
        let rows = paymentTableBody.querySelectorAll("tr");

        rows.forEach(row => {
            let columns = row.querySelectorAll(".editable");
            let name = columns[0].innerText;
            let packageSelect = row.querySelector(".package-select");
            let paidSelect = row.querySelector(".paid-select");

            let package = packageSelect ? packageSelect.value : "";
            let paidStatus = paidSelect ? paidSelect.value : "";
            let date = columns[2].innerText;

            paymentDetails.push({ name, package, paidStatus, date });
        });

        // Send payment details to the server
        fetch("/save-payment-details", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ gymId, paymentDetails })
        })
        .then(response => response.json())
        .then(data => alert("Payment details saved successfully!"))
        .catch(error => console.error("Error saving payment details:", error));
    });
});



</script>

@endsection
