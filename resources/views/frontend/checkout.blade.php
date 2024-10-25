{{-- @extends('components.main')

@section('content')
    <style>
        /* Prevent horizontal scroll overflow */
        body {
            overflow-x: hidden;
        }
    </style>
    <main class="mt-12">
        <!-- Main container -->
        <div class="container w-full max-w-full flex justify-between items-start">
            <!-- Left Section - Login -->
            <div class="w-1/2 bg-white shadow h-screen flex-shrink-0">
                <!-- Progress Steps -->
                <div class="flex justify-center bg-gray-100 py-4 px-2 w-full items-center mb-12">
                    <div class="flex items-center justify-center">
                        <span class="w-8 h-8 flex items-center justify-center bg-purple-600 text-white rounded-full">1</span>
                        <span class="ml-2 text-sm text-purple-600 font-medium">Log In</span>
                    </div>
                    <div class="flex items-center ml-4 justify-center">
                        <span
                            class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 rounded-full">2</span>
                        <span class="ml-2 text-sm text-gray-600">Shipping</span>
                    </div>
                    <div class="flex items-center ml-4 justify-center">
                        <span
                            class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 rounded-full">3</span>
                        <span class="ml-2 text-sm text-gray-600">Make It Special</span>
                    </div>
                    <div class="flex items-center ml-4 justify-center">
                        <span
                            class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 rounded-full">4</span>
                        <span class="ml-2 text-sm text-gray-600">Payment</span>
                    </div>
                </div>

                <!-- Login Section -->
                <div class="flex justify-center items-center bg-white p-4">
                    <div class="w-full max-w-xs space-y-6">
                        <!-- Fingerprint Icon -->
                        <div class="flex justify-center mb-6">
                            <span class="material-icons text-purple-600" style="font-size: 40px;">fingerprint</span>
                        </div>

                        <!-- Title Section -->
                        <div class="text-center">
                            <h1 class="text-lg font-bold">Login to CaratLane</h1>
                            <p class="text-gray-500 text-xs mt-4">Login to unlock best prices and become an insider for our
                                exclusive launches & offers.</p>
                        </div>

                        <!-- Form Section -->
                        <form class="space-y-6 mt-8">
                            <!-- Mobile Number or Email Input -->
                            <input type="text" placeholder="Enter Mobile Number or Email"
                                class="w-full bg-white border border-purple-500 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500" />

                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-[14px] py-4 font-medium text-sm hover:opacity-90">
                                CONTINUE TO LOGIN
                            </button>
                            <!-- Social Login Buttons -->
                            <div class="flex justify-center space-x-6 mt-6">
                                <!-- Google Icon with Font Awesome -->
                                <button
                                    class="flex items-center justify-center w-14 h-14 rounded-full border hover:bg-gray-100 transition duration-200 ease-in-out">
                                    <i class="fab fa-google text-[#4285F4] text-3xl"></i>
                                </button>

                                <!-- Facebook Icon -->
                                <button
                                    class="flex items-center justify-center w-14 h-14 rounded-full border hover:bg-gray-100 transition duration-200 ease-in-out">
                                    <span class="material-icons text-blue-600 text-3xl">facebook</span>
                                </button>
                            </div>

                            <!-- New Account Link -->
                            <div class="text-center mt-4">
                                <span class="text-gray-500 text-sm">New to CaratLane?</span>
                                <a href="#" class="text-purple-600 text-sm">Create an Account</a>
                            </div>

                            <!-- Terms and Privacy -->
                            <p class="text-center text-xs text-gray-500 mt-4">
                                By continuing you agree to CaratLane's
                                <a href="#" class="text-purple-600">terms and conditions</a> &
                                <a href="#" class="text-purple-600">privacy policy</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Section - Order Summary -->
            <div class="w-1/2 bg-gray-100 p-16 shadow h-screen flex-shrink-0">
                <h2 class="text-lg font-base mb-6">Order Summary</h2>

                <!-- Product Information -->
                <div class="flex gap-4 mb-8">
                    <div class="w-24 h-24 bg-purple-50 rounded-lg p-2 flex items-center justify-center">
                        <img src="{{ asset('asset/img/testing.png') }}" alt="Radiant Rivulet Diamond Stud Earrings"
                            class="w-full object-contain">
                    </div>
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-900 text-sm">Radiant Rivulet Diamond Stud Earrings</h3>
                        <p class="text-gray-500 text-xs mt-1">SKU: JE09644-1YP900</p>
                        <p class="text-sm mt-2">Quantity: 1</p>
                        <p class="text-purple-600 text-xs mt-1">Expected Delivery by-3rd Nov 24</p>
                        <div class="mt-1">
                            <span class="text-gray-900 font-semibold">₹12,001</span>
                            <span class="text-gray-400 line-through ml-2">₹15,400</span>
                            <span class="text-red-500 ml-2">(22%)</span>
                        </div>
                    </div>
                </div>

                <!-- Price Breakdown -->
                <div class="space-y-4 border-t border-gray-100 pt-4">
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>SUBTOTAL</span>
                        <span>₹15,400</span>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>CART DISCOUNT</span>
                        <span class="text-purple-600">- ₹3,399</span>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>SHIPPING CHARGES (STANDARD)</span>
                        <span class="text-purple-600">FREE</span>
                    </div>
                </div>

                <!-- Total -->
                <div class="flex justify-between font-semibold text-sm mt-6 pt-4 border-t border-gray-100">
                    <span>TOTAL COST</span>
                    <span>₹12,001</span>
                </div>

                <!-- Help Link -->
                <div class="mt-6 text-center">
                    <a href="#" class="text-purple-600 hover:text-purple-700 text-sm">Need Help?</a>
                    <p class="mt-2 text-sm">We’re available by phone +91-44-66075200 (Toll <br> Free) every day, 9 A.M to 1
                        A.M IST (Mon - Sun)</p>
                </div>

                <!-- Contact Options -->
                <div class="flex justify-center space-x-8 mt-8">
                    <!-- Call Icon -->
                    <div class="flex flex-col items-center">
                        <span class="material-icons border bg-primary p-2 rounded-full text-white">call</span>
                        <p class="text-gray-600 text-sm">Call</p>
                    </div>

                    <!-- Chat Icon -->
                    <div class="flex flex-col items-center">
                        <span class="material-icons border bg-primary p-2 rounded-full text-white">chat</span>
                        <p class="text-gray-600 text-sm">Chat</p>
                    </div>

                    <!-- Email Icon -->
                    <div class="flex flex-col items-center">
                        <span class="material-icons border bg-primary p-2 rounded-full text-white">email</span>
                        <p class="text-gray-600 text-sm">Email</p>
                    </div>
                </div>



            </div>
        </div>
    </main>
@endsection --}}


@extends('components.main')

@section('content')
    <style>
        /* Prevent horizontal scroll overflow */
        body {
            overflow-x: hidden;
        }
    </style>

    {{-- <header class="fixed top-0 left-0 w-full bg-secondary border-b border-gray-200 shadow-lg z-50">
        <div class="flex items-center justify-between px-4 py-5">

            <!-- Left Side: Back Icon and Logo -->
            <div class="flex items-center space-x-4">
                <div class="text-primary">
                    <span class="material-symbols-outlined">arrow_back</span>
                </div>

                <div>
                    <img src="{{ asset('asset/img/logo.png') }}" alt="logo" class="h-8">
                </div>
            </div>

            <!-- Right Side: Verified User Section -->
            <div class="flex items-center space-x-1">
                <span class="material-symbols-outlined text-gradient">verified_user</span>
                <span class="text-sm font-semibold text-primary ">100% SECURE</span>
            </div>
        </div>
    </header> --}}




    <main class="mt-12">
        <!-- Main container -->
        <div class="container w-full max-w-full flex justify-between items-start">

            <!-- Left Section - Login -->
            <div class="w-1/2 bg-white shadow h-screen overflow-y-scroll scrollbar-hide flex-shrink-0 pb-10">
                <div class="max-w-2xl mx-auto">
                    <!-- Progress Steps -->
                    <div class="flex justify-center bg-gray-100 py-4 px-2 w-full items-center mb-12">
                        <div class="flex items-center justify-center">
                            <span
                                class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 rounded-full">1</span>
                            <span class="ml-2 text-sm text-gray-600 font-medium">Log In</span>
                        </div>
                        <div class="flex items-center ml-4 justify-center">
                            <span
                                class="w-8 h-8 flex items-center justify-center bg-purple-600 text-white rounded-full">2</span>
                            <span class="ml-2 text-sm text-purple-600 ">Shipping</span>
                        </div>
                        <div class="flex items-center ml-4 justify-center">
                            <span
                                class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 rounded-full">3</span>
                            <span class="ml-2 text-sm text-gray-600">Make It Special</span>
                        </div>
                        <div class="flex items-center ml-4 justify-center">
                            <span
                                class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 rounded-full">4</span>
                            <span class="ml-2 text-sm text-gray-600">Payment</span>
                        </div>
                    </div>
                    <div class="px-24">
                        <!-- Delivery Details Section -->
                        <div class="mb-8">
                            <h2 class="text-lg font-semibold text-center mb-6">Delivery Details</h2>
                            <div class="grid grid-cols-2 gap-4">

                                <!-- Home Delivery Option -->
                                <div class="border border-purple-600 rounded-lg p-3 bg-secondary">
                                    <div class="flex items-center mb-3">
                                        <div
                                            class="w-3 h-3 border-2 border-purple-600 rounded-full flex items-center justify-center bg-purple-600">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div>
                                        </div>
                                        <span class="ml-2 text-xs font-medium">Home Delivery</span>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-3">Earliest Delivery dates selected for your Pincode
                                    </p>
                                    <button id="openModalBtn" class="flex items-center text-[10px] bg-white rounded p-1.5">
                                        <span class="mr-1">+</span> Change Your Delivery Date
                                    </button>
                                </div>
                                <!-- In-store Pickup Option -->
                                <div class="border border-gray-200 rounded-lg p-3 bg-secondary">
                                    <div class="flex items-center mb-3">
                                        <div class="w-3 h-3 border-2 border-gray-400 rounded-full"></div>
                                        <span class="ml-2 text-xs font-medium">In-store pick up</span>
                                    </div>
                                    <p class="text-xs text-gray-600">Buy now, pick up from our store at your convenience</p>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Address Section -->
                        <div class="mb-6">
                            <h2 class="text-base font-semibold mb-3">Shipping Address</h2>
                            <button id="openModalBtn"
                                class="w-full flex items-center justify-between bg-secondary rounded p-3 border border-gray-200">
                                <span class="text-xs">Add a New Address</span>
                                <span
                                    class="flex items-center justify-center border bg-white rounded-full p-1 shadow text-lg w-8 h-8">+</span>
                            </button>
                        </div>

                        <!-- Billing Address Section -->
                        <div>
                            <h2 class="text-base font-semibold mb-3">Billing Address</h2>
                            <div class="space-y-3">
                                <div class="flex items-center bg-secondary rounded p-3 border border-gray-200">
                                    <div class="w-3 h-3 border border-gray-400 rounded-full"></div>
                                    <span class="ml-2 text-xs">Same as shipping address</span>
                                </div>
                                <div class="flex items-center bg-secondary rounded p-3 border border-purple-600">
                                    <div
                                        class="w-3 h-3 border border-purple-600 rounded-full flex items-center justify-center bg-purple-600">
                                        <div class="w-1.5 h-1.5 bg-white rounded-full"></div>
                                    </div>
                                    <span class="ml-2 text-xs">Use a different billing address</span>
                                </div>
                            </div>
                            <p class="text-[10px] mt-2">We will not send an invoice to the shipping address</p>
                        </div>


                        <form>
                            <!-- Name Fields Row -->
                            <div class="grid grid-cols-2 gap-4 mb-4 mt-6">
                                <div>
                                    <input type="text" placeholder="First Name"
                                        class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                                </div>
                                <div>
                                    <input type="text" placeholder="Last Name"
                                        class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                                </div>
                            </div>

                            <!-- Street Address -->
                            <div class="mb-4">
                                <input type="text" placeholder="Street & House Number"
                                    class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                            </div>

                            <!-- Additional Information -->
                            <div class="mb-4">
                                <input type="text" placeholder="Additional Information (optional)"
                                    class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                            </div>

                            <!-- Pincode and City -->
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <input type="text" placeholder="Pincode"
                                        class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                                </div>
                                <div>
                                    <input type="text" placeholder="City"
                                        class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                                </div>
                            </div>

                            <!-- State and Country -->
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div>
                                    <select
                                        class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm text-gray-500 focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600 appearance-none">
                                        <option value="">State</option>
                                        <!-- Add state options here -->
                                    </select>
                                </div>
                                <div>
                                    <select
                                        class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm text-gray-500 focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600 appearance-none">
                                        <option value="India">India</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Mobile Number -->
                            <div class="flex mb-6">
                                <div class="w-16">
                                    <input type="text" value="+91" readonly
                                        class="w-full px-4 py-3 bg-secondary border border-transparent rounded-l-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                                </div>
                                <div class="flex-1 relative">
                                    <input type="tel" placeholder="Mobile Number"
                                        class="w-full px-4 py-3 bg-secondary border border-transparent rounded-r-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                                    <button type="button"
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Continue Button -->
                            <button type="submit"
                                class="w-full bg-primary text-white rounded-lg py-3 text-sm font-medium hover:bg-primary transition-colors duration-200">
                                CONTINUE
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- Right Section - Order Summary -->
            <div class="w-1/2 bg-gray-100 p-16 shadow h-screen flex-shrink-0">
                <h2 class="text-lg font-base mb-6">Order Summary</h2>

                <!-- Product Information -->
                <div class="flex gap-4 mb-8">
                    <div class="w-24 h-24 bg-purple-50 rounded-lg p-2 flex items-center justify-center">
                        <img src="{{ asset('asset/img/testing.png') }}" alt="Radiant Rivulet Diamond Stud Earrings"
                            class="w-full object-contain">
                    </div>
                    <div class="flex-1">
                        <h3 class="font-medium text-gray-900 text-sm">Radiant Rivulet Diamond Stud Earrings</h3>
                        <p class="text-gray-500 text-xs mt-1">SKU: JE09644-1YP900</p>
                        <p class="text-sm mt-2">Quantity: 1</p>
                        <p class="text-purple-600 text-xs mt-1">Expected Delivery by-3rd Nov 24</p>
                        <div class="mt-1">
                            <span class="text-gray-900 font-semibold">₹12,001</span>
                            <span class="text-gray-400 line-through ml-2">₹15,400</span>
                            <span class="text-red-500 ml-2">(22%)</span>
                        </div>
                    </div>
                </div>

                <!-- Price Breakdown -->
                <div class="space-y-4 border-t border-gray-100 pt-4">
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>SUBTOTAL</span>
                        <span>₹15,400</span>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>CART DISCOUNT</span>
                        <span class="text-purple-600">- ₹3,399</span>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>SHIPPING CHARGES (STANDARD)</span>
                        <span class="text-purple-600">FREE</span>
                    </div>
                </div>

                <!-- Total -->
                <div class="flex justify-between font-semibold text-sm mt-6 pt-4 border-t border-gray-100">
                    <span>TOTAL COST</span>
                    <span>₹12,001</span>
                </div>

                <!-- Help Link -->
                <div class="mt-6 text-center">
                    <a href="#" class="text-purple-600 hover:text-purple-700 text-sm">Need Help?</a>
                    <p class="mt-2 text-sm">We’re available by phone +91-44-66075200 (Toll <br> Free) every day, 9 A.M to 1
                        A.M IST (Mon - Sun)</p>
                </div>

                <!-- Contact Options -->
                <div class="flex justify-center space-x-8 mt-8">
                    <!-- Call Icon -->
                    <div class="flex flex-col items-center">
                        <span class="material-icons border bg-primary p-2 rounded-full text-white">call</span>
                        <p class="text-gray-600 text-sm">Call</p>
                    </div>

                    <!-- Chat Icon -->
                    <div class="flex flex-col items-center">
                        <span class="material-icons border bg-primary p-2 rounded-full text-white">chat</span>
                        <p class="text-gray-600 text-sm">Chat</p>
                    </div>

                    <!-- Email Icon -->
                    <div class="flex flex-col items-center">
                        <span class="material-icons border bg-primary p-2 rounded-full text-white">email</span>
                        <p class="text-gray-600 text-sm">Email</p>
                    </div>
                </div>



            </div>

        </div>
    </main>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-[20px] p-6 w-full max-w-[500px] mx-auto relative max-h-[85vh] overflow-y-auto">
            <!-- Close Button -->
            <button id="closeModalBtn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                &times;
            </button>

            <!-- Modal Header -->
            <h2 class="text-lg font-semibold text-center mb-6">Add New Shipping Address</h2>

            <!-- Form Fields -->
            <form class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="First Name"
                        class="border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                    <input type="text" placeholder="Last Name"
                        class="border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                </div>
                <input type="text" placeholder="Street & House Number"
                    class="border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                <input type="text" placeholder="Additional Information (optional)"
                    class="border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Pincode"
                        class="border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                    <input type="text" placeholder="City"
                        class="border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <select class="border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                        <option>State</option>
                        <!-- Add other options here -->
                    </select>
                    <select class="border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                        <option>India</option>
                        <!-- Add other options here -->
                    </select>
                </div>

                <!-- Mobile Number -->
                <div class="flex mb-6">
                    <div class="w-16">
                        <input type="text" value="+91" readonly
                            class="w-full px-4 py-3 bg-secondary border border-transparent rounded-l-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                    </div>
                    <div class="flex-1 relative">
                        <input type="tel" placeholder="Mobile Number"
                            class="w-full px-4 py-3 bg-secondary border border-transparent rounded-r-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                        <button type="button"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Select Address Type Section -->
                <div class="mt-4">
                    <label class="block text-xs font-semibold mb-2">Select Address Type</label>
                    <div class="flex justify-between space-x-4">
                        <button type="button"
                            class="flex-1 bg-secondary text-center py-3 rounded-[12px] text-xs border border-purple-100">
                            Home <span class="text-gray-400">(7am-10pm delivery)</span>
                        </button>
                        <button type="button"
                            class="flex-1 bg-secondary text-center py-3 rounded-[12px] text-xs border border-purple-100">
                            Office <span class="text-gray-400">(10am-7pm delivery)</span>
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">
                        Preferences will help us plan your delivery. However, shipments can sometimes arrive early or later
                        than planned.
                    </p>
                </div>

                <!-- Save Button -->
                <button type="submit" class="bg-primary text-white rounded-[12px] p-3 w-full mt-4">
                    Save
                </button>
            </form>
        </div>
    </div>




    {{-- <footer class="bg-[#f6eff6] py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4">
            <!-- Contact Info -->
            <div class="text-sm text-primary font-semibold">
                <span>
                    <span class="material-icons align-middle">phone</span>
                    Contact Us: <a href="tel:+91-44-66075200" class="text-primary">+91-44-66075200</a> (Helpline) |
                </span>
                <span>
                    <span class="material-icons align-middle">email</span>
                    <a href="mailto:contactus@caratlane.com" class="text-primary">contactus@caratlane.com</a>
                </span>
            </div>
            <!-- Payment Icons -->
            <div class="flex space-x-4">
                <i class="fab fa-cc-visa h-12"></i>
                <i class="fab fa-cc-mastercard h-12"></i>
                <i class="fab fa-cc-paypal h-12"></i>
                <i class="fab fa-cc-amex h-12"></i>
            </div>
        </div>
    </footer> --}}


    <script>
        // Get the modal, open button, and close button
        const modal = document.getElementById('modal');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');

        // Open modal on button click
        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        // Close modal on button click
        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Close modal when clicking outside of it
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
@endsection
