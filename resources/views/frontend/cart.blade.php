@extends('components.main')
@section('content')
    <main class="mt-12">
        <!-- Main Content Section -->
        <div class="bg-white min-h-screen py-10">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 sm:px-6 lg:px-8 relative">

                <!-- Product Details Section -->
                <div class="relative md:col-span-2 bg-gray-50 shadow-lg rounded-lg h-52 p-6">
                    <div class="absolute top-3 right-3">
                        <!-- Close Icon -->
                        <button class="bg-black text-white rounded-full">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 9l3.293-3.293a1 1 0 111.414 1.414L11.414 10l3.293 3.293a1 1 0 01-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 10 5.293 6.707a1 1 0 111.414-1.414L10 8.586z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex justify-between items-center">
                        <!-- Product Info -->
                        <div class="flex space-x-4">
                            <img src="{{ asset('asset/img/testing.png') }}" alt="Product"
                                class="w-40 h-40 rounded-md border border-gray-200">
                            <div>
                                <h2 class="text-sm font-base text-gray-800">Radiant Rivulet Diamond Stud Earrings</h2>

                                <!-- Price -->
                                <div class="mt-1">
                                    <span class="text-sm font-semibold text-gray-900">₹12,005</span>
                                    <span class="line-through text-sm text-gray-500">₹15,404</span>
                                    <span class="text-sm text-red-500">Save ₹3,399</span>
                                </div>
                                <div class="text-gray-700 mt-2 text-[8px]">JE09844-1YPP800</div>
                                <!-- Quantity and Delivery -->
                                <div class="mt-2">
                                    <div class="relative ">
                                        <!-- Quantity Button -->
                                        <div class="flex items-center space-x-2">
                                            <label for="quantity" class="text-gray-700 font-semibold text-sm">Quantity:
                                                1</label>

                                            <!-- Single Button to toggle the sidebar -->
                                            <button id="quantity-toggle" class="text-xs focus:outline-none">
                                                ▼
                                            </button>
                                        </div>

                                        <!-- Sidebar (Quantity Selection) -->
                                        <div id="quantity-sidebar"
                                            class=" rounded-l-[30px] fixed right-0 top-0 h-full w-1/3 bg-white shadow-lg p-6 z-50 transform translate-x-full transition-transform duration-300 ease-in-out opacity-0">
                                            <!-- Close Button -->
                                            <button id="close-sidebar"
                                                class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                                                <span class="material-symbols-outlined">close</span>
                                            </button>

                                            <!-- Sidebar Content -->
                                            <div class="text-center ">
                                                <!-- Price Section -->
                                                <div class="bg-purple-50 p-4 rounded-lg mb-6 flex items-center">
                                                    <p class="text-lg font-bold text-gray-900">₹12,005</p>
                                                    <p class="text-sm line-through text-gray-400 ml-2">₹15,404</p>
                                                </div>


                                                <!-- Title -->
                                                <h3 class="text-lg text-left font-semibold text-gray-800 mb-4">Select
                                                    Quantity</h3>

                                                <!-- Quantity Options -->
                                                <div class="grid grid-cols-5 gap-3 mb-8">
                                                    <!-- Quantity buttons with consistent spacing -->
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-purple-100 hover:bg-purple-200">1</button>
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">2</button>
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">3</button>
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">4</button>
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">5</button>
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">6</button>
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">7</button>
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">8</button>
                                                    <button
                                                        class="py-2 px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">9</button>
                                                    <button
                                                        class="py-2 mt px-4 rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">10</button>
                                                </div>

                                                <!-- Confirm Button -->
                                                <button
                                                    class="mt-64 w-full bg-[#4F3267]  text-white font-semibold py-3 rounded-lg hover:opacity-90 transition-all duration-300">
                                                    Confirm Quantity
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Overlay background -->
                                    <div id="sidebar-overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40">
                                    </div>
                                    <div>
                                        <a href="#" class="text-[#DE57E5] text-xs underline hover:underline">Check
                                            Delivery
                                            Date</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vertical Divider -->
                <div class="hidden md:block absolute inset-y-0 ml-52 left-1/2 w-0.5 bg-gray-200"></div>

                <!-- Summary Section -->
                <div>
                    <div class="space-y-6">
                        <!-- Apply Coupon -->
                        <div class="flex justify-between items-center bg-purple-100 p-2 rounded-[14px]">
                            <div class="flex items-center space-x-2 text-[#4F3267] font-semibold">
                                <!-- Percentage Icon -->
                                <span class="material-symbols-outlined text-[#DE57E5]">
                                    percent
                                </span>
                                <!-- Apply Coupon Text -->
                                <span>Apply Coupon</span>
                            </div>
                            <button
                                class="text-[#4F3267] hover:text-[#4F3267] bg-purple-100 rounded-full flex items-center justify-center w-10 h-10"
                                style="box-shadow: 5px 0px 15px rgba(0, 0, 0, 0.3);">
                                <i class="material-symbols-outlined">arrow_forward</i>
                            </button>
                        </div>


                        <!-- Delivery Details -->
                        <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg">
                            <div class="flex text-xs font-bold items-center text-[#4F3267]">
                                <!-- Check Icon -->
                                <span class="material-symbols-outlined mr-2">check_circle</span>
                                Check Delivery & Store Details
                            </div>
                            <a id="enterPincodeLink" href="#" class="text-[#DE57E5] text-xs hover:underline">Enter
                                Pincode</a>
                        </div>

                        <!-- Cost Summary -->
                        <div class="bg-gray-50 text-xs p-4 rounded-lg">
                            <div class="flex justify-between text-gray-700">
                                <span>Subtotal</span>
                                <span>₹15,404</span>
                            </div>
                            <div class="flex justify-between text-green-500">
                                <span>You Saved</span>
                                <span>- ₹3,399</span>
                            </div>
                            <div class="flex justify-between text-gray-700">
                                <span>Coupon Discount</span>
                                <a href="#" class="text-purple-600 text-sm hover:underline">Apply Coupon</a>
                            </div>
                            <div class="flex justify-between text-gray-700">
                                <span>Shipping (Standard)</span>
                                <span>Free</span>
                            </div>
                            <div class="border-t mt-4 pt-4 flex justify-between text-sm font-semibold text-gray-900">
                                <span>Total Cost</span>
                                <span>₹12,005</span>
                            </div>
                        </div>

                        <!-- Place Order Button -->
                        <button
                            class="w-full bg-gradient-to-r from-[#E56EEB] to-[#8863FB] text-white font-semibold py-3 rounded-lg hover:opacity-90">
                            PLACE ORDER
                        </button>


                    </div>
                </div>

            </div>
        </div>
    </main>


    <!-- Popup (Initially hidden) -->
    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
        <!-- Popup Container -->
        <div class="bg-white rounded-[14px] shadow-lg p-6 max-w-sm w-full relative">
            <!-- Close Button -->
            <button id="closeButton" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <span class="material-symbols-outlined">close</span>
            </button>
            <!-- Popup Content -->
            <div class="text-center">
                <h3 class="text-lg font-semibold text-[#4F3267] mb-2">Your PIN Code unlocks</h3>
                <p class="text-sm text-gray-500 mb-4">Fastest delivery date, Try-at-Home availability, Nearest store and
                    In-store design!</p>
                <!-- Icon or Image -->
                <div class="relative w-full">
                    <!-- Slider Container -->
                    <div class="overflow-hidden relative h-52">
                        <div id="slider" class="flex transition-transform duration-500">
                            <!-- Slide 1 -->
                            <div class="flex-none w-full">
                                <img src="{{ asset('asset/img/undraw_test.svg') }}" alt="Nearest Store"
                                    class="mx-auto w-24 h-60">
                                <p class="text-blue-700 font-bold text-center">Nearest Store</p>
                            </div>

                            <!-- Slide 2 -->
                            <div class="flex-none w-full">
                                <img src="{{ asset('asset/img/undraw_home.svg') }}" alt="Home"
                                    class="mx-auto w-24 h-60">
                                <p class="text-blue-500 font-bold text-center">Home</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="flex text-xs items-center border text-[#4F3267] rounded-lg border-black justify-center space-x-2 mt-4">
                    <span class="material-symbols-outlined">check_circle</span>
                    <div class="flex items-center">
                        <input type="text" placeholder="Enter Pincode"
                            class="text-xs py-2 outline-none border-none focus:ring-0" />
                    </div>
                    <button class="text-xs text-[#DE57E5] hover:text-[#DE57E5]">Locate Me</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('quantity-sidebar');
            const toggleButton = document.getElementById('quantity-toggle');
            const closeButton = document.getElementById('close-sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            function openSidebar() {
                sidebar.classList.remove('translate-x-full', 'opacity-0');
                sidebar.classList.add('translate-x-0', 'opacity-100');
                overlay.classList.remove('hidden');
            }

            function closeSidebar() {
                sidebar.classList.add('translate-x-full', 'opacity-0');
                setTimeout(() => sidebar.classList.remove('translate-x-0', 'opacity-100'), 300);
                overlay.classList.add('hidden');
            }

            toggleButton.addEventListener('click', openSidebar);
            closeButton.addEventListener('click', closeSidebar);
            overlay.addEventListener('click', closeSidebar);
        });
        const slider = document.getElementById('slider');
        const slides = slider.children;
        let currentIndex = 0;

        function updateSlider() {
            const offset = -currentIndex * 100; // Move the slider to the left by 100%
            slider.style.transform = `translateX(${offset}%)`;
        }

        function autoSlide() {
            currentIndex = (currentIndex + 1) % slides.length; // Cycle back to the first slide
            updateSlider();
        }

        // Automatically slide every 3 seconds
        setInterval(autoSlide, 3000);

        // Close button functionality
        const closeButton = document.getElementById('closeButton');
        const popup = document.getElementById('popup');

        closeButton.addEventListener('click', () => {
            popup.classList.add('hidden'); // Hide the popup when close button is clicked
        });

        // Open popup when "Enter Pincode" is clicked
        const enterPincodeLink = document.getElementById('enterPincodeLink');

        enterPincodeLink.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default anchor behavior
            popup.classList.remove('hidden'); // Show the popup
        });
    </script>
@endsection
