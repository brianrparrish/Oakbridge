<x-layouts.public title="Privacy Policy">
    <div class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 md:p-12">
                <h1 class="text-3xl font-bold text-gray-900 mb-8">Privacy Policy</h1>
                <p class="text-sm text-gray-500 mb-8">Last updated: {{ date('F j, Y') }}</p>

                <div class="prose prose-gray max-w-none">
                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">1. Introduction</h2>
                    <p class="text-gray-600 mb-4">
                        Oakbridge ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">2. Information We Collect</h2>
                    <p class="text-gray-600 mb-4">We may collect information about you in various ways, including:</p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li><strong>Personal Data:</strong> Name, email address, phone number, company name, and other contact information you provide.</li>
                        <li><strong>Business Information:</strong> Details about debts or accounts you submit for collection services.</li>
                        <li><strong>Usage Data:</strong> Information about how you access and use our website.</li>
                        <li><strong>Cookies:</strong> We use cookies and similar tracking technologies to enhance your experience.</li>
                    </ul>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">3. How We Use Your Information</h2>
                    <p class="text-gray-600 mb-4">We use the information we collect to:</p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Provide, operate, and maintain our services</li>
                        <li>Process and manage collection accounts</li>
                        <li>Communicate with you about our services</li>
                        <li>Respond to your inquiries and provide customer support</li>
                        <li>Comply with legal obligations</li>
                        <li>Protect against fraudulent or illegal activity</li>
                    </ul>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">4. Information Sharing</h2>
                    <p class="text-gray-600 mb-4">
                        We may share your information with third parties only in the following circumstances:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>With your consent</li>
                        <li>To comply with legal obligations</li>
                        <li>To protect our rights and safety</li>
                        <li>With service providers who assist in our operations</li>
                        <li>In connection with a merger, acquisition, or sale of assets</li>
                    </ul>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">5. Data Security</h2>
                    <p class="text-gray-600 mb-4">
                        We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet is 100% secure.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">6. Data Retention</h2>
                    <p class="text-gray-600 mb-4">
                        We retain your personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required by law.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">7. Your Rights</h2>
                    <p class="text-gray-600 mb-4">
                        Depending on your location, you may have rights regarding your personal information, including the right to access, correct, delete, or port your data. To exercise these rights, please contact us.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">8. Third-Party Links</h2>
                    <p class="text-gray-600 mb-4">
                        Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">9. Children's Privacy</h2>
                    <p class="text-gray-600 mb-4">
                        Our services are not directed to individuals under 18. We do not knowingly collect personal information from children.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">10. Changes to This Policy</h2>
                    <p class="text-gray-600 mb-4">
                        We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last updated" date.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">11. Contact Us</h2>
                    <p class="text-gray-600 mb-4">
                        If you have questions about this Privacy Policy, please contact us at:
                    </p>
                    <p class="text-gray-600">
                        <strong>Oakbridge</strong><br>
                        <a href="{{ route('contact') }}" class="text-oak-600 hover:underline">Contact Form</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.public>
