<x-layouts.public title="PCI Compliance">
    <div class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8 md:p-12">
                <h1 class="text-3xl font-bold text-gray-900 mb-8">PCI DSS Compliance</h1>
                <p class="text-sm text-gray-500 mb-8">Last updated: {{ date('F j, Y') }}</p>

                <div class="prose prose-gray max-w-none">
                    <div class="bg-oak-50 border border-oak-200 rounded-lg p-6 mb-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-oak-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-oak-800">Committed to Payment Security</h3>
                                <p class="mt-2 text-oak-700">
                                    Oakbridge is committed to maintaining the highest standards of payment card security and protecting our clients' sensitive financial information.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">What is PCI DSS?</h2>
                    <p class="text-gray-600 mb-4">
                        The Payment Card Industry Data Security Standard (PCI DSS) is a set of security standards designed to ensure that all companies that accept, process, store, or transmit credit card information maintain a secure environment. These standards are managed by the PCI Security Standards Council.
                    </p>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">Our Commitment</h2>
                    <p class="text-gray-600 mb-4">
                        Oakbridge maintains PCI DSS compliance to protect the payment card data of the debtors and creditors we work with. Our commitment includes:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li><strong>Secure Network:</strong> We maintain firewalls and secure network configurations to protect cardholder data.</li>
                        <li><strong>Data Protection:</strong> We encrypt transmission of cardholder data across open, public networks.</li>
                        <li><strong>Vulnerability Management:</strong> We regularly update and patch our systems to protect against known vulnerabilities.</li>
                        <li><strong>Access Control:</strong> We restrict access to cardholder data to only those employees who need it to perform their job functions.</li>
                        <li><strong>Monitoring & Testing:</strong> We regularly monitor and test our security systems and processes.</li>
                        <li><strong>Security Policies:</strong> We maintain comprehensive information security policies for all personnel.</li>
                    </ul>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">Payment Processing</h2>
                    <p class="text-gray-600 mb-4">
                        When processing payments, we utilize PCI-compliant payment processors to handle all credit card transactions. This ensures that:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Credit card numbers are never stored on our servers</li>
                        <li>All payment data is encrypted during transmission</li>
                        <li>Payment processing is handled by certified, compliant third parties</li>
                        <li>Tokenization is used to reference payment methods without storing sensitive data</li>
                    </ul>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">Security Measures</h2>
                    <p class="text-gray-600 mb-4">
                        We implement multiple layers of security to protect sensitive information:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>256-bit SSL/TLS encryption for all data transmission</li>
                        <li>Regular security audits and vulnerability assessments</li>
                        <li>Multi-factor authentication for system access</li>
                        <li>Employee security training and awareness programs</li>
                        <li>Physical security controls at all facilities</li>
                        <li>Incident response procedures and breach notification protocols</li>
                    </ul>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">Compliance Validation</h2>
                    <p class="text-gray-600 mb-4">
                        Our PCI DSS compliance is validated through:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Annual self-assessment questionnaires (SAQ)</li>
                        <li>Quarterly network scans by approved scanning vendors (ASV)</li>
                        <li>Regular internal security assessments</li>
                        <li>Ongoing monitoring of compliance status</li>
                    </ul>

                    <h2 class="text-xl font-semibold text-gray-900 mt-8 mb-4">Questions?</h2>
                    <p class="text-gray-600 mb-4">
                        If you have questions about our PCI compliance or security practices, please don't hesitate to contact us.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-block bg-oak-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-oak-700 transition">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.public>
