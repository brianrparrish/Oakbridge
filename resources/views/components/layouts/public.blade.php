<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Oakbridge' }} - Commercial Collection Agency</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="/">
                        <img src="/OakbridgeD04aR02bP13ZL-Jefferson2b_sml.jpg" alt="Oakbridge" class="h-12">
                    </a>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="/#services" class="text-gray-600 hover:text-oak-600 font-medium transition">Services</a>
                    <a href="/#about" class="text-gray-600 hover:text-oak-600 font-medium transition">About</a>
                    <a href="{{ route('contact') }}" class="bg-oak-600 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-oak-700 transition">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <img src="/OakbridgeD04aR02bP13ZL-Jefferson2b.png" alt="Oakbridge" class="h-10 mb-4">
                    <p class="text-sm">
                        Professional commercial collection services with integrity and results. Licensed and bonded nationwide.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/#services" class="hover:text-white transition">Services</a></li>
                        <li><a href="/#about" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('privacy') }}" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="{{ route('pci-compliance') }}" class="hover:text-white transition">PCI Compliance</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-sm text-center">
                <p>&copy; {{ date('Y') }} Oakbridge. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
