@extends('frontend.user.layout')

@section('profileContent')
    <style>
        /* Tailwind's rotate-90 utility */
        .rotate-90 {
            transform: rotate(90deg);
        }
    </style>

    <!-- Main Content -->
    <main class="bg-white w-full py-10">

        <div class="flex items-center justify-center min-h-[400px]">
            <!-- Centered Content -->
            <div class="text-center w-full">
                <!-- Icon -->
                <div class="flex flex-col justify-center items-center mb-8">
                    <svg class="w-24 h-24 text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.75C7.19 4.75 3.25 8.69 3.25 13.5S7.19 22.25 12 22.25 20.75 18.31 20.75 13.5 16.81 4.75 12 4.75z" />
                    </svg>
                    <p class="mt-4 text-lg text-gray-600">There are no active plans</p>
                </div>

                <!-- Button -->
                <button
                    class="px-12 py-3 bg-gradient-to-r from-purple-400 to-pink-400 text-white font-semibold rounded-lg shadow-md hover:from-purple-500 hover:to-pink-500 transition duration-300 focus:outline-none focus:ring-2 focus:ring-purple-300">
                    Plan your purchase now
                </button>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="w-full p-4 mx-auto mt-10">
            <h2 class="text-xl font-semibold mb-4 text-gray-600">Frequently Asked Questions</h2>
            <div id="toggleDropdown" class="space-y-4 ">

                <!-- Category: Generic -->
                <div class="border border-gray-300 rounded-lg p-4">
                    <h2 class="font-bold text-lg px-6 text-gray-800 mb-2">Generic</h2>
                    <button aria-expanded="false"
                        class="flex justify-between items-center w-full px-6 py-2 text-left text-gray-800 focus:outline-none border-b border-gray-200"
                        onclick="toggleDropdown(this)">
                        <span class="font-medium">What payment methods do you accept?</span>
                        <svg class="w-5 h-5 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7l3 3-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="dropdown-content hidden px-6 py-4 text-gray-600">
                        <p>We accept all major credit cards, PayPal, and bank transfers.</p>
                    </div>
                    <button aria-expanded="false"
                        class="flex justify-between items-center w-full px-6 py-2 text-left text-gray-800 focus:outline-none border-b border-gray-200"
                        onclick="toggleDropdown(this)">
                        <span class="font-medium">What is the maximum amount limit of PoP!?</span>
                        <svg class="w-5 h-5 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7l3 3-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="dropdown-content hidden px-6 py-4 text-gray-600">
                        <p>There is no maximum limit.</p>
                    </div>
                </div>

                <!-- Category: Enrolment -->
                <div class="border border-gray-300 rounded-lg p-4">
                    <h2 class="font-bold px-6 text-gray-800 mb-2">Enrolment</h2>
                    <button aria-expanded="false"
                        class="flex justify-between items-center w-full px-6 py-2 text-left text-gray-800 focus:outline-none border-b border-gray-200"
                        onclick="toggleDropdown(this)">
                        <span class="font-medium">How do I enroll in a course?</span>
                        <svg class="w-5 h-5 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7l3 3-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="dropdown-content hidden px-6 py-4 text-gray-600">
                        <p>To enroll in a course, select the course you’re interested in, and follow the enrollment
                            instructions on the course page.</p>
                    </div>
                </div>

                <!-- Category: Redemption -->
                <div class="border border-gray-300 rounded-lg p-4">
                    <h2 class="font-bold px-6 text-gray-800 mb-2">Redemption</h2>
                    <button aria-expanded="false"
                        class="flex justify-between items-center w-full px-6 py-2 text-left text-gray-800 focus:outline-none border-b border-gray-200"
                        onclick="toggleDropdown(this)">
                        <span class="font-medium">How do I redeem my points?</span>
                        <svg class="w-5 h-5 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7l3 3-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="dropdown-content hidden px-6 py-4 text-gray-600">
                        <p>Points can be redeemed for discounts during checkout. Just enter your points in the designated
                            field.</p>
                    </div>
                </div>


                <!-- Category: Cancellation / Refunds -->
                <div class="border border-gray-300 rounded-lg p-4">
                    <h2 class="font-bold px-6 text-gray-800 mb-2">Cancellation / Refunds</h2>
                    <button aria-expanded="false"
                        class="flex justify-between items-center w-full px-6 py-2 text-left text-gray-800 focus:outline-none border-b border-gray-200"
                        onclick="toggleDropdown(this)">
                        <span class="font-medium">What is the refund policy?</span>
                        <svg class="w-5 h-5 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7l3 3-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="dropdown-content hidden px-6 py-4 text-gray-600">
                        <p>Refunds are available within 14 days of purchase if the service or course has not been accessed.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <script>
        function toggleDropdown(button) {
            const content = button.nextElementSibling; // Get the content element next to the button
            const icon = button.querySelector('svg');
            const isHidden = content.classList.contains('hidden');

            if (content) { // Check if content exists
                // Toggle the hidden class on the content
                content.classList.toggle('hidden');

                // Update aria-expanded attribute
                button.setAttribute('aria-expanded', isHidden ? 'true' : 'false');

                // Rotate the icon by 90 degrees
                icon.classList.toggle('rotate-90', isHidden);
            } else {
                console.error("Dropdown content not found."); // Log an error if content is not found
            }
        }
    </script>
@endsection
