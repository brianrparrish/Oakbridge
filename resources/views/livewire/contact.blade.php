<div class="py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h1>
            <p class="text-lg text-gray-600">
                Ready to discuss your collection needs? Get in touch with our team.
            </p>
        </div>

        @if($submitted)
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-12 text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Thank You!</h2>
                <p class="text-gray-600 mb-8">
                    We've received your message and will get back to you within one business day.
                </p>
                <a href="/" class="inline-block bg-oak-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-oak-700 transition">
                    Return Home
                </a>
            </div>
        @else
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 md:p-12">
                <form wire:submit="submit" class="space-y-6">
                    <!-- Honeypot field - hidden from users, visible to bots -->
                    <div class="hidden" aria-hidden="true">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website" wire:model="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="name" wire:model="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition"
                                placeholder="John Smith">
                            @error('name') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" wire:model="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition"
                                placeholder="john@company.com">
                            @error('email') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" id="phone" wire:model="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition"
                                placeholder="(555) 123-4567">
                            @error('phone') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name *</label>
                            <input type="text" id="company" wire:model="company"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition"
                                placeholder="ABC Corporation">
                            @error('company') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">How can we help? *</label>
                        <textarea id="message" wire:model="message" rows="5"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition"
                            placeholder="Tell us about your collection needs, the type of accounts, approximate value, and any other relevant details..."></textarea>
                        @error('message') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-oak-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-oak-700 transition flex items-center justify-center"
                            wire:loading.attr="disabled"
                            wire:loading.class="opacity-75 cursor-wait">
                            <span wire:loading.remove>Send Message</span>
                            <span wire:loading>
                                <svg class="animate-spin h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Sending...
                            </span>
                        </button>
                    </div>

                    <p class="text-sm text-gray-500 text-center">
                        By submitting this form, you agree to our
                        <a href="{{ route('privacy') }}" class="text-oak-600 hover:underline">Privacy Policy</a>.
                    </p>
                </form>
            </div>
        @endif
    </div>
</div>
