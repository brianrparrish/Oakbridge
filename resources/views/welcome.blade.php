<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Oakbridge - Professional Commercial Collection Services. We help businesses recover outstanding debts with integrity and results.">

    <title>Oakbridge - Commercial Collection Agency</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased">
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
                    <a href="#services" class="text-gray-600 hover:text-oak-600 font-medium transition">Services</a>
                    <a href="#about" class="text-gray-600 hover:text-oak-600 font-medium transition">About</a>
                    <a href="{{ route('contact') }}" class="bg-oak-600 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-oak-700 transition">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-oak-600 to-oak-800 text-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h1 class="text-5xl font-bold leading-tight mb-6">
                    Professional Commercial Collection Services
                </h1>
                <p class="text-xl text-oak-100 mb-8">
                    We help businesses recover outstanding debts with integrity, professionalism, and proven results. Partner with Oakbridge for ethical collection practices that protect your business relationships.
                </p>
                <div class="flex space-x-4">
                    <a href="{{ route('contact') }}" class="bg-white text-oak-700 px-8 py-3 rounded-lg font-semibold hover:bg-oak-50 transition">
                        Get Started
                    </a>
                    <a href="#services" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/10 transition">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Comprehensive collection solutions tailored to your business needs
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-oak-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-oak-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Commercial Collections</h3>
                    <p class="text-gray-600">
                        Professional B2B debt recovery services designed to maximize recovery while maintaining your business relationships.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-oak-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-oak-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Skip Tracing</h3>
                    <p class="text-gray-600">
                        Advanced debtor location services using comprehensive databases and investigative techniques.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-oak-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-oak-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Credit Reporting</h3>
                    <p class="text-gray-600">
                        Strategic credit bureau reporting to encourage debtor payment and protect your interests.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Why Choose Oakbridge?</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        With decades of combined experience in commercial collections, we understand that recovering debt requires a balance of persistence and professionalism.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-oak-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">No recovery, no fee - contingency-based pricing</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-oak-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Licensed and bonded in all 50 states</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-oak-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Full compliance with FDCPA and state regulations</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-oak-600 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Transparent reporting and real-time account access</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-oak-50 rounded-2xl p-8 lg:p-12">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-oak-600 mb-2">95%</div>
                        <div class="text-gray-600 mb-8">Recovery Rate on Viable Accounts</div>
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <div class="text-3xl font-bold text-gray-900">25+</div>
                                <div class="text-sm text-gray-600">Years Experience</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-gray-900">10K+</div>
                                <div class="text-sm text-gray-600">Accounts Recovered</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-oak-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Recover What's Yours?</h2>
            <p class="text-xl text-oak-100 mb-8 max-w-2xl mx-auto">
                Contact us today for a free consultation and learn how we can help your business.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-oak-700 px-8 py-3 rounded-lg font-semibold hover:bg-oak-50 transition">
                Contact Us Now
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <img src="/OakbridgeD04aR02bP13ZL-Jefferson2b_sml.jpg" alt="Oakbridge" class="h-10 mb-4 brightness-0 invert">
                    <p class="text-sm">
                        Professional commercial collection services with integrity and results. Licensed and bonded nationwide.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#services" class="hover:text-white transition">Services</a></li>
                        <li><a href="#about" class="hover:text-white transition">About Us</a></li>
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
