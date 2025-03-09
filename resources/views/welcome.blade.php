<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(entrypoints: ['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class=" dark:bg-gray-900 fixed w-full z-20 top-0 start-0">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <div class="flex items-center space-x-3 rtl:space-x-reverse">
     <img src="{{ asset('storage/images/log.png') }}" class="h-11 w-[80px]" alt="Gym Logo">
    <span class="self-center font-thin text-3xl text-red-500/85 whitespace-nowrap ">Super Fitness</span>
    </div>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-red-600/80 hover:bg-white hover:text-red-500  hover:outline-none font-bold rounded-lg text-sm px-4 py-2 text-center">
        Get started
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 ">
      <li>
        <a href="#" class="block py-2 px-3 text-white font-extrabold rounded-sm md:bg-transparent md:text-red-500 md:p-0 md:dark:text-red-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#about" class="block py-2 px-3 text-white font-extrabold rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#service" class="block py-2 px-3 text-white font-extrabold rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#contact" class="block py-2 px-3 text-white font-extrabold rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</div>
<div>

    <div class="relative">
        <img class="w-full h-auto" src="{{ asset('storage/images/banner1.jpg') }}" alt="Banner Image">
        <div class="absolute inset-0 bg-black opacity-20"></div>
            <h1 class="absolute top-2/5 left-1/7 pl-9 transform -translate-x-1/2 -translate-y-1/2 text-white font-extrabold text-4xl">
             Unlock Your Full <br>Potential <span class="text-red-500">with</span> <br>Workouting
            </h1>
            <div class="absolute top-5/9 left-1/8 transform -translate-x-1/2 space-x-4">
        <button class="text-red-500 w-[100px] bg-transparent outline-1 hover:bg-transparent hover:text-white hover:font-bold hover:outline-1 font-bold rounded-lg text-sm px-4 py-2 text-center">Register</button>
        <button class="text-red-500 w-[100px] bg-transparent outline-1 hover:bg-transparent hover:text-white hover:font-bold  hover:outline-1 font-bold rounded-lg text-sm px-4 py-2 text-center">Log</button>
    </div>
    </div>

    <h1 id="service" class="text-center mt-10 text-3xl">UNLEASH YOUR POTENTIAL</h1>
    <h4 class="text-center text-lg font-extrabold text-red-500">With Us</h4>
    <div class="flex m-5 pt-2">
        <div class="flex flex-col text-center m-2">
            <a href="#" class="justify-center items-center flex flex-col max-w-sm p-6 bg-white border border-red-300 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{ asset('storage/images/1.0.png') }}" class="w-[50px] h-[50px]" alt="">
            <h5 class="mb-2 text-l font-bold tracking-tight text-gray-900 dark:text-white">Build Confidence</h5>
            <p class="font-normal text-xs text-gray-700 dark:text-gray-400">Here are some tips and activities that can help boost your mood and promote a positive mindset.</p>
            </a>
        </div>

        <div class="flex flex-col text-center m-2">
            <a href="#" class="justify-center items-center flex flex-col max-w-sm p-6 bg-white border border-red-300 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{ asset('storage/images/1.1.png') }}" class="w-[50px] h-[50px]" alt="">
            <h5 class="mb-2 text-l font-bold tracking-tight text-gray-900 dark:text-white">Boost Your Mood</h5>
            <p class="font-normal text-xs text-gray-700 dark:text-gray-400">Here are some tips and activities that can help boost your mood and promote a positive mindset.</p>
            </a>
        </div>

        <div class="flex flex-col text-center m-2">
            <a href="#" class="justify-center items-center flex flex-col max-w-sm p-6 bg-white border border-red-300 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{ asset('storage/images/1.2.png') }}" class="w-[50px] h-[50px]" alt=""> 
            <h5 class="mb-2 text-l font-bold tracking-tight text-gray-900 dark:text-white">Increase Energy Levels</h5>
            <p class="font-normal text-xs text-gray-700 dark:text-gray-400">Here are some tips and activities that can help boost your mood and promote a positive mindset.</p>
            </a>
        </div>
    </div>

    <div class="flex flex-col ml-12 mr-12 p-5 scroll-smooth">
        <h3 class="text-center text-sm font-extrabold text-red-500">UNIQUE CATEGORIES</h3>
        <h1 class="text-center text-2xl mb-8">Browse by Categories</h1>
        <div class="flex mx-10 mb-5">

        
                <a href="{{ route('strength') }}" class="block">
                    <div class="max-w-sm m-1 bg-white border border-red-500 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                        <div class="relative w-full h-48">
                            <img src="{{ asset('storage/images/2.1.jpg') }}" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <h1 class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white text-sm font-bold px-2 py-1 rounded">
                            Strength Training
                            </h1>
                        </div>
                    </div>
                </a>

                <a href="#" class="block">
                    <div class="max-w-sm m-1 bg-white border border-red-500 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                        <div class="relative w-full h-48">
                            <img src="{{ asset('storage/images/2.2.jpg') }}" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <h1 class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white text-sm font-bold px-2 py-1 rounded">
                              Functional Fitness
                            </h1>
                        </div>
                    </div>
                </a>
                        
                <a href="#" class="block">
                    <div class="max-w-sm m-1 bg-white border border-red-500 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                        <div class="relative w-full h-48">
                            <img src="{{ asset('storage/images/2.3.jpg') }}" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <h1 class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white text-sm font-bold px-2 py-1 rounded">
                                Powerful and Strong
                            </h1>
                        </div>
                    </div>
                </a>


        </div>


        <div class="flex mx-10 mt-5">

                <a href="#" class="block">
                    <div class="max-w-sm m-1 bg-white border border-red-500 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                        <div class="relative w-full h-48">
                            <img src="{{ asset('storage/images/2.4.jpg') }}" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <h1 class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white text-sm font-bold px-2 py-1 rounded">
                               Online Coaching
                            </h1>
                        </div>
                    </div>
                </a>

                <a href="#" class="block">
                    <div class="max-w-sm m-1 bg-white border border-red-500 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                        <div class="relative w-full h-48">
                            <img src="{{ asset('storage/images/2.5.jpg') }}" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <h1 class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white text-sm font-bold px-2 py-1 rounded">
                                Core & Flexibility
                            </h1>
                        </div>
                    </div>
                </a>


                <a href="#" class="block">
                    <div class="max-w-sm m-1 bg-white border border-red-500 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                        <div class="relative w-full h-48">
                            <img src="{{ asset('storage/images/2.6.jpg') }}" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <h1 class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white text-sm font-bold px-2 py-1 rounded">
                                Mind-Body Balance
                            </h1>
                        </div>
                    </div>
                </a>
        </div>
    </div>

    <div class="m-6">
        <h2 class="text-center text-sm font-extrabold text-red-500">PRICING PLAN</h2>
        <h1 class="text-center text-3xl mb-2">MEMBERSHIP PLANS</h1>
        <h4 class="text-center text-xs">We keep it simple. No catch. Just outrageously prices</h4>
        <div class="flex justify-center mt-3 mb-6">
                
            <a href="#" class="flex flex-col items-center justify-center m-8 max-w-sm p-6 w-[270px] bg-white border border-red-500 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('storage/images/3.1.png')}}" class="w-[50px] h-[50px]" alt="">
            <h5 class="mb-2 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white mt-2">Silver Membership</h5>
            <h6 class="text-center text-xs text-gray-500 mb-3">valid for 1 month</h6>
            <h1 class="text-center text-3xl font-extrabold dark:text-white mb-3">Rs: 4500.00</h1>
            </a>

                        
            <a href="#" class="flex flex-col items-center justify-center m-8 max-w-sm p-6 w-[270px] bg-white border border-red-500 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('storage/images/3.0.png')}}" class="w-[50px] h-[50px]" alt="">
            <h5 class="mb-2 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white mt-2">Gold Membership</h5>
            <h6 class="text-center text-xs text-gray-500 mb-3">valid for 6 months</h6>
            <h1 class="text-center text-3xl font-extrabold dark:text-white mb-3">Rs: 10 000.00</h1>
            </a>



            <a href="#" class="flex flex-col items-center justify-center m-8 max-w-sm p-6 w-[270px] bg-white border border-red-500 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <img src="{{asset('storage/images/3.2.png')}}" class="w-[50px] h-[50px]" alt="">
            <h5 class="mb-2 text-center text-xl font-bold tracking-tight text-gray-900 dark:text-white mt-2">Platinum Membership</h5>
            <h6 class="text-center text-xs text-gray-500 mb-3">valid for 12 months</h6>
            <h1 class="text-center text-3xl font-extrabold dark:text-white mb-3">Rs: 15 000.00</h1>
            </a>


        </div>

        <h3 class="text-center text-sm font-extrabold text-red-500">FIND MOTIVATION</h3>
        <h1 class="text-center text-3xl mb-8">We Supply That</h1>

        <div class="flex justify-center items-center">
            
        <div class="flex justify-center items-center py-1">
       
        <button id="prevBtn" class="mx-8 px-6 py-2 font-bold text-3xl text-red-500">
            <
        </button>

        <div class="video-container w-full max-w-full">
            <video id="videoSlideShow" width="720" height="480" controls>
                <source id="videoSource" src="{{ asset('storage/videos/1.0.mp4') }}" type="video/mp4">
                
            </video>
        </div>

        <button id="nextBtn" class="mx-8 px-6 py-2 font-bold text-3xl text-red-500">
            >
        </button>
        </div>
    </div>

    <h1 id="about" class="text-center text-3xl mt-16 font-extrabold text-red-600">ABOUT US</h1>
    <h3 class="text-center text-xs mb-4">We Are Super Fitness. This Is Us.!</h3>

    <div class="flex justify-center items-center p-5">
        <div class="flex flex-col justify-center w-200 h-80 p-6 m-2 rounded-lg bg-gray-100">

            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('storage/images/log.png') }}" class="h-11 w-[80px]" alt="Gym Logo">
                <span class="self-center font-thin text-3xl text-red-600 whitespace-nowrap ">Super Fitness</span>
            </div>

            <h3 class="text-lg font-extrabold mt-4">Our Team Of</h3>
            <h1 class="text-2xl mb-2 font-extrabold text-red-600">PERSONAL TRAINERS</h1>
            <p class="text-xs text-gray-600">Get personalized training plans tailored to your fitness goals. Book a session with our certified personal trainer today!</p>
            
            <button type="button" class="text-red-600 w-[120px] mt-4 outline-1 hover:bg-red-700 hover:text-white  hover:outline-none font-bold rounded-lg text-sm px-4 py-2 text-center">
                  Get started
            </button>

        </div>

        <div class="relative m-2">
    
            <img src="{{ asset('storage/images/4.0.jpg') }}" alt="Image" class="w-100 h-80 rounded-lg">

            <div class="absolute top-50 left-0 right-0 bottom-0 flex flex-col justify-center items-center bg-opacity-50 text-white p-5">
                <h1 class="text-xl font-bold text-red-700">Camilla Cabello</h1>
                <p>Female Trainer</p>
            </div>
        </div>

        <div class="relative m-2">
    
            <img src="{{ asset('storage/images/4.1.jpg') }}" alt="Image" class="w-100 h-80 rounded-lg">

            <div class="absolute top-50 left-0 right-0 bottom-0 flex flex-col justify-center items-center bg-opacity-50 text-white p-5">
                <h1 class="text-xl font-bold text-red-700">Marshall Mathers</h1>
                <p>Male Trainer</p>
            </div>
        </div>

    </div>

    <div id="contact" class="bg-gray-800 text-white py-6 w-full border-2 border-red-500">
    <h1 class="text-center text-3xl mb-8 font-extrabold text-white">Contact Us</h1>

    <div class="container mx-auto px-6">
        <div class="flex justify-around">
           
            <div>
                <h3 class="text-xl font-bold">SUPER FITNESS</h3>
                <p class="mt-2 text-sm">No:52/A/1, Athurugiriya Road, Kottawa.</p>
                <p class="mt-1 text-sm">Email: info@superFitness.com</p>
                <p class="mt-1 text-sm">Phone: 0112-456-789</p>
            </div>

            <div>
                <h3 class="text-xl font-bold">Quick Links</h3>
                <ul class="mt-2">
                    <li><a href="#" class="text-sm hover:underline">Home</a></li>
                    <li><a href="#about" class="text-sm hover:underline">About Us</a></li>
                    <li><a href="#service" class="text-sm hover:underline">Services</a></li>
                    <li><a href="#contact" class="text-sm hover:underline">Contact</a></li>
                    <li><a href="#" class="text-sm hover:underline">Privacy Policy</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-bold">Follow Us</h3>
                <div class="mt-2 flex flex-col space-x-4">
                    <a href="#" class="text-sm hover:text-blue-500">Facebook</a>
                    <a href="#" class="text-sm hover:text-black">Twitter</a>
                    <a href="#" class="text-sm hover:text-pink-500">Instagram</a>
                    <a href="#" class="text-sm hover:text-green-700">WhatsApp</a>
                </div>
            </div>

            <div class="flex flex-col">
            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('storage/images/log.png') }}" class="h-11 w-[80px]" alt="Gym Logo">
                <span class="self-center font-thin text-3xl text-red-600 whitespace-nowrap ">Super Fitness</span>
            </div>
            <div class="mt-1">
                <h1>ARE YOU READY <span class="text-xl">?</span></h1>
                <h1 class="text-3xl font-extrabold mt-1">Join with Us</h1>
                <span class="text-4xl font-extrabold text-red-700">NOW</span>
            </div>
            </div>
        </div>


        <div class="mt-6 text-center text-sm">
            <p>&copy; 2025 Super Fitness. All rights reserved.</p>
        </div>
    </div>
</div>


    <script>
        const videos = [
            '1.0.mp4',
            '1.1.mp4',
            '1.2.mp4',
            '1.3.mp4'
        ];

        let currentVideoIndex = 0;
        const videoElement = document.getElementById('videoSlideShow');
        const videoSource = document.getElementById('videoSource');

        function changeVideo(index) {
            if (index < 0) {
                currentVideoIndex = videos.length - 1;
            } else if (index >= videos.length) {
                currentVideoIndex = 0;
            } else {
                currentVideoIndex = index;
            }

            videoSource.src = '{{ asset("storage/videos/") }}/' + videos[currentVideoIndex];
            videoElement.load();
            videoElement.play();
        }

        document.getElementById('prevBtn').addEventListener('click', function() {
            changeVideo(currentVideoIndex - 1);
        });

        document.getElementById('nextBtn').addEventListener('click', function() {
            changeVideo(currentVideoIndex + 1);
        });

        changeVideo(currentVideoIndex);
    </script>
        </div>
    </div>

</body>
</html>