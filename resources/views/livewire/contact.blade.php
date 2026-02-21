<div class="min-h-screen flex flex-col items-center justify-center py-12 px-4">
    <!-- Logo Header -->
    <div class="text-center mb-8">
        <a href="/">
            <img src="/OakbridgeD04aR02bP13ZL-Jefferson2b_sml.jpg" alt="Oakbridge" class="h-16 mx-auto mb-4">
        </a>
        <p class="text-lg text-gray-700 italic">Service Creditors Trust</p>
    </div>

    <div class="w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-900 text-center mb-6">Contact Us</h1>

        @if($submitted)
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-10 text-center">
                <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-5">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-900 mb-3">Thank You!</h2>
                <p class="text-gray-600 mb-6">
                    We've received your message and will be in touch soon.
                </p>
                <a href="/" class="inline-block bg-oak-600 text-white px-6 py-2.5 rounded-lg font-medium hover:bg-oak-700 transition">
                    Return Home
                </a>
            </div>
        @else
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <form wire:submit="submit" class="space-y-5">
                    <!-- Honeypot field -->
                    <div class="hidden" aria-hidden="true">
                        <input type="text" name="website" wire:model="website" tabindex="-1" autocomplete="off">
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Full Name *</label>
                        <input type="text" id="name" wire:model="name"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition">
                        @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email Address *</label>
                        <input type="email" id="email" wire:model="email"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition">
                        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone Number *</label>
                        <input type="tel" id="phone" wire:model="phone"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition">
                        @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-1.5">Company Name *</label>
                        <input type="text" id="company" wire:model="company"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition">
                        @error('company') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1.5">Message *</label>
                        <textarea id="message" wire:model="message" rows="4"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-oak-500 focus:border-oak-500 transition"></textarea>
                        @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-oak-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-oak-700 transition flex items-center justify-center"
                        wire:loading.attr="disabled"
                        wire:loading.class="opacity-75 cursor-wait">
                        <span wire:loading.remove>Send Message</span>
                        <span wire:loading class="flex items-center">
                            <svg class="animate-spin h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Sending...
                        </span>
                    </button>
                </form>
            </div>

            <!-- Phone -->
            <p class="text-center text-gray-600 mt-6">
                Or call us: <a href="tel:+15022055206" class="text-oak-600 font-medium hover:underline">(502) 205-5206</a>
            </p>
        @endif
    </div>
</div>
