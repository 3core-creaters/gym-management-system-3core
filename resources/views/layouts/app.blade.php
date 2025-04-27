<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Super Fitness')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Page Content -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
