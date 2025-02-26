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
        <a href="#" class="block py-2 px-3 text-white font-extrabold rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-white font-extrabold rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-white font-extrabold rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-500 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
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

</body>
</html>