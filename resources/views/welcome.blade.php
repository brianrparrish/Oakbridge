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
<body class="bg-white text-gray-900 antialiased min-h-screen flex flex-col">
    <main class="flex-grow flex items-center justify-center">
        <div class="text-center px-6">
            <!-- Logo -->
            <div class="mb-6">
                <img src="/OakbridgeD04aR02bP13ZL-Jefferson2b.svg" alt="Oakbridge" class="h-40 mx-auto">
            </div>

            <!-- Tagline -->
            <p class="text-xl text-gray-700 italic mb-6">Service Creditors Trust</p>

            <!-- Address -->
            <p class="text-gray-600 mb-2">908 Minoma Ave, Louisville, KY 40217</p>

            <!-- Phone -->
            <p class="text-gray-600 mb-8">
                <a href="tel:+15022055206" class="hover:text-oak-600 transition">(502) 205-5206</a>
            </p>

            <!-- Contact Button -->
            <a href="{{ route('contact') }}" class="inline-block bg-oak-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-oak-700 transition">
                Contact Us
            </a>
        </div>
    </main>

    <footer class="py-6 text-center text-sm text-gray-500">
        &copy; Oakbridge Professional Collection Services LLC dba Oakbridge. All Rights Reserved.
    </footer>
</body>
</html>
