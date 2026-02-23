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
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600|libre-baskerville:400,400i,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-100 text-gray-900 antialiased min-h-screen flex flex-col">
    <div class="max-w-xl mx-auto w-full px-6 flex flex-col min-h-screen">
        <!-- Client Portal Button - Top Right -->
        <nav class="flex justify-end pt-6">
            <a href="https://app.simplicitycollect.com/ClientPortalLogin.aspx" class="inline-block bg-oak-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-oak-700 transition" style="font-family: 'Libre Baskerville', serif;">
                Client Portal
            </a>
        </nav>

        <main class="flex-grow flex items-center justify-center">
            <div class="text-center">
                <!-- Logo -->
                <div class="mb-6">
                    <img src="/OakbridgeD04aR02bP13ZL-Jefferson2b.svg" alt="Oakbridge" class="mx-auto" style="height: 11.5rem;">
                </div>

                <!-- Tagline -->
                <p class="text-xl text-gray-700 italic mb-6" style="font-family: 'Libre Baskerville', serif; letter-spacing: 0.35em; width: 80%; margin-left: auto; margin-right: auto;">Service Creditors Trust</p>

                <!-- Address -->
                <p class="text-gray-600 mb-2" style="font-family: 'Libre Baskerville', serif;">908 Minoma Ave, Louisville, KY 40217</p>

                <!-- Phone -->
                <p class="text-gray-600 mb-8" style="font-family: 'Libre Baskerville', serif;">
                    <a href="tel:+15022055206" class="hover:text-oak-600 transition">(502) 205-5206</a>
                </p>

                <!-- Contact Button -->
                <a href="{{ route('contact') }}" class="inline-block bg-oak-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-oak-700 transition" style="font-family: 'Libre Baskerville', serif;">
                    Contact Us
                </a>
            </div>
        </main>

        <footer class="py-6 text-center text-sm text-gray-500" style="font-family: 'Libre Baskerville', serif;">
            &copy; Oakbridge Professional Collection Services LLC dba Oakbridge. All Rights Reserved.
        </footer>
    </div>
</body>
</html>
