<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Oakbridge - Service Creditors Trust">

    <title>Oakbridge</title>

    <link rel="icon" href="/favicon.ico" sizes="any">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased min-h-screen flex flex-col items-center justify-center">
    <div class="text-center px-6">
        <!-- Logo -->
        <div class="mb-6">
            <img src="/OakbridgeD04aR02bP13ZL-Jefferson2b_sml.jpg" alt="Oakbridge" class="h-20 mx-auto">
        </div>

        <!-- Tagline -->
        <p class="text-xl text-gray-700 italic mb-10">Service Creditors Trust</p>

        <!-- Contact Button -->
        <a href="{{ route('contact') }}" class="inline-block bg-oak-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-oak-700 transition">
            Contact Us
        </a>
    </div>
</body>
</html>
