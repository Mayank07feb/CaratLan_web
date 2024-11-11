@extends('components.main')

@section('content')
    <style>
        /* Container styling to keep overflow hidden */
        #productContainer {
            position: relative;
            cursor: crosshair;
            overflow: hidden;
            /* Keep the zoom within bounds */
        }

        /* Image Styling for Zoom */
        #zoomImage {
            transition: transform 0.2s ease;
            /* Smooth zoom effect */
        }

        /* On hover, apply zoom effect */
        #productContainer:hover #zoomImage {
            transform: scale(2);
            /* Adjust scale for the zoom level */
        }

        .purple-gradient {
            background: linear-gradient(180deg, #1E1333 0%, #8B3FDB 100%);
        }

        .product-image {
            background-color: #f9f3f0;
        }

        .similar-products {
            background-color: #f5f0fa;
        }

        .custom-shadow {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .swiper-button-next,
        .swiper-button-prev {
            width: 40px;
            /* Adjust the width as needed */
            height: 40px;
            /* Adjust the height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 50%;
            /* Makes it a circle */
            font-size: 0.875rem;
            /* Equivalent to text-sm */
            color: #1D4ED8;
            /* Use your primary color */
            transition: background-color 0.2s;
            cursor: pointer;
            /* Changes cursor on hover */
        }

        /* Hover effect */
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: rgba(255, 255, 255, 0.9);
            /* Adjust for hover opacity */
        }
    </style>

    {{-- Header --}}
    {{-- <div class="flex items-center justify-between fixed top-0 left-0 right-0 bg-white shadow-md z-50 p-4 border-b">
        <!-- Left Section: Product Info -->
        <div class="flex items-center gap-4">
            <!-- Product Image -->
            <div class="w-12 h-12 flex items-center justify-center">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Product" class="w-10 h-10" />
            </div>

            <!-- Product Title and Price -->
            <div>
                <div class="flex items-center gap-2">
                    <h1 class="text-lg font-medium text-gray-800">Scattered Miracle Plate ...</h1>
                    <button class="mt-2 text-secondary text-[10px] hover:underline">VIEW <br> SIMILAR</button>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-lg font-semibold">₹26,366</span>
                    <span class="text-gray-500 line-through text-sm">₹31,129</span>
                    <span class="text-red-500 text-sm">(15% off)</span>
                </div>
            </div>
            <div class="border-l border-gray-300 h-10"></div>
            <!-- Size Selector -->
            <div class="relative">
                <p class="text-center text-sm text-gray-600">Size</p>
                <select class="appearance-none bg-white border-0 rounded px-4 py-2 pr-8 cursor-pointer">
                    <option>12</option>
                </select>
            </div>

            <div class="border-l border-gray-300 h-10"></div>
            <!-- Pincode Input -->
            <div class="relative">
                <input type="text" placeholder="Enter Pincode" class="border-0 rounded px-4 py-2 w-36" />               
            </div>

        </div>

        <!-- Right Section: Actions -->
        <div class="flex items-center gap-4">

            <!-- Video Call Button -->
            <button class="p-2 bg-green-100 rounded-lg">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
            </button>

            <!-- Try At Home Button -->
            <button class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg hover:bg-purple-200">
                TRY AT HOME
            </button>

            <!-- Find In Store Button -->
            <button class="px-4 py-2 bg-red-400 text-white rounded-lg hover:bg-red-500">
                FIND IN STORE
            </button>

            <!-- Add to Cart Button -->
            <button class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                ADD TO CART
            </button>
        </div>
    </div> --}}

    <main class="mt-14 md:mt-24 sm:mt-14">
        <div class="bg-white">
            <!-- Breadcrumb Navigation -->
            <nav class="p-4 border-b">
                <div class="container mx-auto px-4 md:px-0">
                    <div class="flex flex-wrap items-center gap-1 md:gap-2 text-xs md:text-sm text-gray-500">
                        <a href="#" class="hover:text-gray-700">HOME</a>
                        <span>></span>
                        <a href="#" class="hover:text-gray-700">RINGS</a>
                        <span>></span>
                        <a href="#" class="hover:text-gray-700">GOLD RINGS</a>
                        <span>></span>
                        <span class="text-gray-700">MATHEW GOLD BAND FOR HIM</span>
                    </div>
                </div>
            </nav>


            <section class="container mx-auto py-6">
                <div class="grid md:grid-cols-10 gap-8">
                    <!-- Left Column: Product Images (60% width) -->
                    <div class="md:col-span-6 space-y-4">
                        <!-- Main Product Image -->
                        <div class="flex justify-center space-x-4">
                            <div class="product-image rounded-lg p-8 relative overflow-hidden" id="productContainer">
                                <img src="{{ asset('asset/img/testing.png') }}" alt="Mathew Gold Band Ring"
                                    class="w-full h-full object-cover transition-transform duration-200 ease-in-out"
                                    id="zoomImage" />
                                <button class="absolute top-4 right-4 bg-white p-2 rounded-lg shadow-md">
                                    <i class="fas fa-expand-arrows-alt text-gray-600"></i>
                                </button>
                            </div>

                            <div class="product-image rounded-lg p-8 relative">
                                <img src="{{ asset('asset/img/testing.png') }}" alt="Mathew Gold Band Ring"
                                    class="w-full object-contain" />
                                <button class="absolute top-4 right-4 bg-white p-2 rounded-lg shadow-md">
                                    <i class="fas fa-expand-arrows-alt text-gray-600"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Similar Products -->
                        <div class="flex p-4 rounded-lg space-x-4">
                            <!-- Left Product Image -->
                            <div class="w-1/2">
                                <div class="product-image rounded-lg relative">
                                    <img src="{{ asset('asset/img/testing.png') }}" alt="Main Product"
                                        class="w-full object-contain" />
                                    <button class="absolute top-4 right-4 bg-white p-2 rounded-lg shadow-md">
                                        <i class="fas fa-expand-arrows-alt text-gray-600"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Right Product Image -->
                            <div class="similar-products w-1/2 p-4 rounded-lg">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="bg-white p-4 rounded-lg relative custom-shadow">
                                        <span
                                            class="absolute top-2 left-2 bg-purple-700 text-white text-xs px-2 py-1 rounded">32%
                                            OFF</span>
                                        <img src="{{ asset('asset/videos/live.jpeg') }}" alt="Similar Ring 1"
                                            class="w-full" />
                                    </div>
                                    <div class="bg-white p-4 rounded-lg relative custom-shadow">
                                        <span
                                            class="absolute top-2 left-2 bg-purple-700 text-white text-xs px-2 py-1 rounded">21%
                                            OFF</span>
                                        <img src="{{ asset('asset/videos/live.jpeg') }}" alt="Similar Ring 2"
                                            class="w-full" />
                                    </div>
                                    <div class="bg-white p-4 rounded-lg relative custom-shadow">
                                        <span
                                            class="absolute top-2 left-2 bg-purple-700 text-white text-xs px-2 py-1 rounded">20%
                                            OFF</span>
                                        <img src="{{ asset('asset/videos/live.jpeg') }}" alt="Similar Ring 3"
                                            class="w-full" />
                                    </div>
                                    <div class="bg-white p-4 rounded-lg flex items-center justify-center custom-shadow">
                                        <div class="text-start">
                                            <h3 class="text-base font-bold text-primary">Up to</h3>
                                            <h2 class="text-lg font-bold text-primary">32% OFF</h2>
                                            <p class="text-xs text-primary">On All Similar Designs</p>
                                            <button
                                                class="w-full mt-2 bg-primary text-white text-[10px] border p-2 rounded-[12px] flex items-center gap-1 hover:text-white transition">
                                                VIEW ALL
                                                <span class="material-symbols-outlined text-[12px]">
                                                    chevron_right
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex flex-col items-center">
                            <div class="flex justify-center space-x-8 mb-4">
                                <div class="relative shadow-lg">
                                    <img src="{{ asset('asset/img/testing.png') }}"
                                        class="w-full rounded-lg object-cover" />
                                </div>

                                <div class="relative shadow-lg">
                                    <img src="{{ asset('asset/img/testing.png') }}"
                                        class="w-full rounded-lg object-cover" />
                                </div>
                            </div>

                            <!-- Additional images, initially hidden -->
                            <div id="more-images" class="mt-4 flex justify-center space-x-8 mb-4 hidden">
                                <div class="relative shadow-lg">
                                    <img src="{{ asset('asset/img/testing.png') }}"
                                        class="w-full rounded-lg object-cover" />
                                </div>

                                <div class="relative shadow-lg">
                                    <img src="{{ asset('asset/img/testing.png') }}"
                                        class="w-full rounded-lg object-cover" />
                                </div>
                            </div>

                            <button id="show-more-btn"
                                class="mt-2 text-[12px] font-semibold rounded-[10px] border border-primary bg-white text-primary shadow-lg flex items-center justify-center py-2 px-8">
                                <span class="material-symbols-outlined">arrow_drop_down</span>
                                SHOW MORE
                            </button>
                        </div>





                    </div>

                    <!-- Right Column: Product Details (40% width) -->
                    <div class="md:col-span-4 space-y-6">
                        <!-- Rating Section -->
                        <div class="flex border border-primary rounded-[12px] items-center gap-1 text-xs max-w-[150px]">
                            <div class="flex items-center px-1">
                                <span class="text-primary">4.9</span>
                                <span class="text-yellow-400 text-base">★</span>
                            </div>
                            <span class="text-primary">|</span>
                            <span class="text-primary">143 Ratings</span>
                        </div>

                        <!-- Price Section -->
                        <div class="space-y-1">
                            <div class="flex items-baseline gap-2">
                                <span class="text-lg font-semibold">₹23,377</span>
                                <span class="text-gray-500 line-through">₹25,552</span>
                                <span class="text-red-500">(9% off)</span>
                            </div>
                            <p class="text-sm text-gray-500">(MRP Inclusive of all taxes)</p>
                            <!-- Product Title -->
                            <p class="text-lg text-[#2f1c6a] font-semibold mt-4">Mathew Gold Band for Him</p>
                        </div>

                        <!-- Offer Banner -->
                        <div class="bg-red-50 p-1 rounded-l border-l-4 border-red-500">
                            <p class="text-primary text-[14px] font-semibold">Flat 25% off on Making Charges</p>
                        </div>

                        <!-- Product Options -->
                        <div class="flex border border-yellow-400 rounded-xl overflow-hidden">
                            <!-- Size Option -->
                            <button onclick="toggleModal()" class="flex-1 border-r border-yellow-400 text-center p-3">
                                <p class="text-[10px] text-gray-500">Size</p>
                                <p class="font-semibold text-purple-900 text-xs">12 (51.8 mm)</p>
                            </button>
                            <!-- Metal Option -->
                            <button onclick="toggleModal()" class="flex-1 border-r border-yellow-400 text-center p-3">
                                <p class="text-[10px] text-gray-500">Metal</p>
                                <p class="font-semibold text-purple-900 text-xs">14 KT_Yellow</p>
                            </button>
                            <!-- Diamond Option -->
                            <button onclick="toggleModal()" class="flex-1 border-r border-yellow-400 text-center p-3">
                                <p class="text-[10px] text-gray-500">Diamond</p>
                                <p class="font-semibold text-purple-900 text-xs">IJ-SI</p>
                            </button>
                            <!-- Customise Button -->
                            <button onclick="toggleModal()"
                                class="bg-yellow-400 text-white font-semibold py-2 px-4 text-xs transition hover:bg-yellow-500">
                                CUSTOMISE
                            </button>
                        </div>

                        <!-- Action Buttons -->
                        <div class="space-y-3">
                            <div class="flex gap-3">

                                <a href="{{ route('cart') }}"
                                    class="flex-1 py-2 bg-gradient-to-r from-[#de57e5] to-[#8863fb] text-white rounded-[12px] font-medium hover:bg-purple-600 transition inline-flex items-center justify-center">
                                    <span class="material-icons text-base">shopping_cart</span>
                                    ADD TO CART
                                </a>


                                <button
                                    class="w-12 h-12 border border-gray-300 rounded-[12px] flex items-center justify-center hover:bg-gray-50 transition">
                                    <i class="far fa-heart text-gray-600"></i>
                                </button>
                                <button
                                    class="w-12 h-12 border border-gray-300 rounded-[12px] flex items-center justify-center hover:bg-gray-50 transition">
                                    <i class="fas fa-share-alt text-gray-600"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Delivery, Stores & Trial --}}
                        <div class="py-4">
                            <h3 class="font-semibold text-lg mb-2 text-primary">Delivery, Stores & Trial</h3>
                            <div class="flex items-center border border-primary rounded-[12px] py-1">
                                <div class="flex items-center pl-2 text-primary">
                                    <span class="material-icons text-primary">location_on</span>
                                </div>
                                <input type="text" placeholder="Enter Pincode"
                                    class=" text-sm flex-grow py-2 pl-3 text-gray-700 border-none focus:ring-0 rounded-l-lg" />
                                <button
                                    class="text-sm py-2 px-4 bg-white text-primary border-l border-primary rounded-r-lg hover:bg-purple-50">
                                    Locate Me
                                </button>
                            </div>
                        </div>

                        {{-- Expected Delivery Date --}}
                        <div>
                            <div class="flex items-center border border-gray-200 rounded-[12px] py-3 px-3">
                                <div class="flex items-center pr-2 text-primary">
                                    <span class="text-secondary material-symbols-outlined">
                                        work_history
                                    </span>
                                </div>
                                <p class="text-primary font-medium">Expected Delivery Date</p>
                            </div>
                        </div>

                        <!-- Try At Home & Store Availability -->
                        <div class="grid grid-cols-2 gap-3 pt-3">
                            <!-- Try At Home -->
                            <div class="border rounded-md border-gray-200 p-3 space-y-1.5">
                                <div class="flex items-center gap-1.5">
                                    <i class="fas fa-home text-purple-600 text-sm"></i>
                                    <h3 class="font-medium text-sm">Try At Home</h3>
                                </div>
                                <p class="text-xs text-gray-600 ml-5">Trial up to 5 designs</p>
                                <button
                                    class="w-full bg-purple-400 text-white py-3 text-xs rounded-md hover:bg-purple-500 transition">
                                    BOOK APPOINTMENT
                                </button>
                            </div>

                            <!-- Store Availability -->
                            <div class="border rounded-md border-gray-200 p-3 space-y-1.5">
                                <div class="flex items-center gap-1.5">
                                    <i class="fas fa-store text-orange-400 text-sm"></i>
                                    <h3 class="font-medium text-sm">Store Availability</h3>
                                </div>
                                <p class="text-xs text-gray-600 ml-5">Find designs in store</p>
                                <button
                                    class="w-full bg-orange-400 text-white py-3 text-xs rounded-md hover:bg-orange-500 transition">
                                    FIND IN STORE
                                </button>
                            </div>
                        </div>

                        {{-- Live Video Call --}}
                        <div class="flex items-center bg-green-50 rounded-lg shadow-lg">
                            <!-- Image -->
                            <div class="w-1/3">
                                <img src="{{ asset('asset/videos/live.jpeg') }}" alt="Video Call" class="rounded-lg">
                            </div>
                            <!-- Content -->
                            <div class="w-2/3 px-4">
                                <h3 class="text-base font-semibold text-primary">Live Video Call</h3>
                                <p class="text-[10px] text-gray-600">
                                    Join a live video call with our consultants to see your favourite designs up close!
                                </p>
                                <button
                                    class="mt-3 py-2 w-full bg-green-100 text-green-700 rounded-lg font-semibold hover:bg-green-200">
                                    Schedule a Video Call
                                </button>
                            </div>
                        </div>

                        <!-- Product Benefits -->
                        <div class="grid grid-cols-4 gap-4 text-center">
                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 flex items-center justify-center bg-green-100 rounded-full">
                                    <i class="material-icons h-6 w-6 text-primary">verified</i>
                                </div>
                                <p class="mt-3 text-primary font-base text-sm">100% <br> Certified</p>
                            </div>

                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-100 rounded-full">
                                    <i class="material-icons h-6 w-6 text-primary">money_off</i>
                                </div>
                                <p class="mt-3 text-primary font-base text-sm">15 Day <br>1 Money-Back</p>
                            </div>

                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 flex items-center justify-center bg-yellow-100 rounded-full">
                                    <i class="material-icons h-6 w-6 text-primary">swap_horiz</i>
                                </div>
                                <p class="mt-3 text-primary font-base text-sm">Lifetime Exchange</p>
                            </div>

                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 flex items-center justify-center bg-red-100 rounded-full">
                                    <i class="material-icons h-6 w-6 text-primary">verified_user</i>
                                </div>
                                <p class="mt-3 text-primary font-base text-sm">One Year Warranty</p>
                            </div>
                        </div>

                        <div class="mt-2">
                            <!-- Rewards Section -->
                            <div class="bg-purple-100 rounded-lg p-4 px-2 flex items-center justify-between">
                                <div>
                                    <p class="text-purple-900 text-[14px] font-semibold">Earn <span class="font-bold">790
                                            xCLusive points</span> with this order</p>
                                    <p class="text-sm text-gray-500">(1 xCLusive point = ₹1)</p>
                                </div>
                                <div>
                                    <span class="text-yellow-600 text-2xl">💰</span>
                                </div>
                            </div>
                            <p class="text-[10px] mt-2 text-purple-600 text-center">Learn more on about our TERMS &
                                POLICIES</p>

                            <!-- Product Details Section -->
                            <div class="mt-6">
                                <div class="flex justify-between items-center bg-white">
                                    <div>
                                        <h2 class="text-lg font-bold text-primary">Product Details</h2>
                                        <p class="text-sm text-blue-500 mb-2">SKU JR05815-1YP900</p>
                                    </div>
                                    <button
                                        class="bg-secondary text-primary py-2 px-4 rounded-lg font-semibold text-sm hover:bg-purple-200 transition duration-300">
                                        + PRICE BREAKUP
                                    </button>
                                </div>
                                <p class="text-sm text-gray-600">The Scattered Miracle Plate Band by CaratLane is a
                                    beautiful and unique ring for women. Set in 14kt yellow gold, this band is perfect for
                                    all occasions.</p>
                                <button class="text-secondary font-semibold mt-2 text-sm">Show more</button>
                            </div>

                            <!-- Specifications Section -->
                            <div class="mt-6">
                                <!-- Gold Section -->
                                <div class="rounded-lg mb-4 shadow-lg">
                                    <h3
                                        class="border p-2 font-semibold text-primary bg-pink-100 rounded-t-lg text-sm flex items-center">
                                        <span class="material-icons mr-2">bolt</span>
                                        GOLD
                                    </h3>
                                    <div class="border p-4 bg-pink-50 flex justify-between rounded-b-lg">
                                        <div>
                                            <p class="font-semibold text-sm text-gray-500 mb-2">Dimensions</p>
                                            <p class="font-base text-xs text-gray-400">Width: 7.5 mm</p>
                                            <p class="font-base text-xs text-gray-400">Height: 3.2 mm</p>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-sm text-gray-500 mb-2">Weight</p>
                                            <p class="font-base text-xs text-gray-400">Gross: 2.672 g</p>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-sm text-gray-500 mb-2">Purity</p>
                                            <p class="font-base text-xs text-gray-400">14 KT</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Diamond Section -->
                                <div class="rounded-lg mb-4 shadow-lg">
                                    <h3
                                        class="border p-2 font-semibold text-primary bg-pink-100 rounded-t-lg text-sm flex items-center">
                                        <span class="material-icons mr-2">diamond</span>
                                        DIAMOND
                                    </h3>
                                    <div class="border p-4 bg-pink-50 flex justify-between rounded-b-lg">
                                        <div>
                                            <p class="font-semibold text-sm text-gray-500 mb-2">Type</p>
                                            <p class="font-base text-xs text-gray-400">IJ-SI</p>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-sm text-gray-500 mb-2">Setting</p>
                                            <p class="font-base text-xs text-gray-400">Setting : Nick</p>
                                            <p class="font-base text-xs text-gray-400">Total No. : 10</p>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-sm text-gray-500 mb-2">Total Weight</p>
                                            <p class="font-base text-xs text-gray-400">0.109 ct</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="text-sm text-gray-700">Manufactured by CaratLane Trading Pvt Ltd... <span
                                    class="text-secondary">Show More</span> </p>

                            <!-- Certification and Trust Section -->
                            <div class="p-4 bg-white">
                                <!-- Certification and Trust Section -->
                                <div class="flex justify-around items-center">
                                    <!-- BIS Certification -->
                                    <div class="text-center">
                                        <i class="material-icons text-blue-600 text-5xl">verified</i> <!-- BIS Logo -->
                                        <p class="font-bold text-gray-800 mt-2">BIS*</p>
                                        <p class="text-sm text-gray-500">Hallmarked Jewellery</p>
                                    </div>

                                    <!-- Trust of Tanishq -->
                                    <div class="text-center">
                                        <i class="material-icons text-purple-700 text-5xl">security</i>
                                        <!-- Tanishq Trust -->
                                        <p class="font-bold text-purple-700 mt-2">Trust of Tanishq</p>
                                        <p class="text-sm text-gray-500">Titan Privileges</p>
                                    </div>

                                    <!-- 100% Certified by CaratLane -->
                                    <div class="text-center">
                                        <i class="material-icons text-green-600 text-5xl">verified_user</i>
                                        <!-- Certified Logo -->
                                        <p class="font-bold text-green-600 mt-2">100% Certified</p>
                                        <p class="text-sm text-gray-500">by CaratLane</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>


                <!-- Sliders -->
                <div class="w-full p-2">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div
                                    class="bg-gradient-to-r from-purple-800 to-purple-500 rounded-xl p-4 text-white flex justify-between items-center">
                                    <div>
                                        <h3 class="text-xs font-semibold uppercase">#KHULKEKAROEXPRESS WITH</h3>
                                        <h2 class="text-2xl font-bold mt-1">100% Off on Making Charges</h2>
                                        <button class="mt-2 px-3 py-1 bg-white text-purple-800 rounded-full text-sm">Buy
                                            Now</button>
                                        <p class="text-xs mt-1">Terms & Conditions Apply</p>
                                    </div>
                                    <div class="text-5xl font-bold">100%</div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="bg-yellow-500 rounded-xl p-4 text-white flex justify-between items-center">
                                    <div>
                                        <h3 class="text-xs font-semibold uppercase">Gold Exchange Program</h3>
                                        <h2 class="text-2xl font-bold mt-1">0% Deduction on your gold exchange value</h2>
                                        <button
                                            class="mt-2 px-3 py-1 bg-white text-yellow-600 rounded-full text-sm">Calculate
                                            Your Gold Value</button>
                                        <p class="text-xs mt-1">Terms & Conditions Apply</p>
                                    </div>
                                    <div>
                                        <img src="https://via.placeholder.com/80x80" alt="Gold Chest" class="w-16 h-16">
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Slides if needed -->
                            <div class="swiper-slide">
                                <div class="bg-red-500 rounded-xl p-4 text-white flex justify-between items-center">
                                    <div>
                                        <h3 class="text-xs font-semibold uppercase">Offer 3 Title</h3>
                                        <h2 class="text-2xl font-bold mt-1">Offer 3 Description</h2>
                                        <button
                                            class="mt-2 px-3 py-1 bg-white text-red-600 rounded-full text-sm">Action</button>
                                        <p class="text-xs mt-1">Terms & Conditions Apply</p>
                                    </div>
                                    <div class="text-5xl font-bold">Offer</div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="bg-green-500 rounded-xl p-4 text-white flex justify-between items-center">
                                    <div>
                                        <h3 class="text-xs font-semibold uppercase">Offer 4 Title</h3>
                                        <h2 class="text-2xl font-bold mt-1">Offer 4 Description</h2>
                                        <button
                                            class="mt-2 px-3 py-1 bg-white text-green-600 rounded-full text-sm">Action</button>
                                        <p class="text-xs mt-1">Terms & Conditions Apply</p>
                                    </div>
                                    <div class="text-5xl font-bold">Offer</div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- Navigation buttons -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

                <!-- Carousel with images -->
                <div class="p-4">
                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Card 1: 18K Rings -->
                        <div class="p-4">
                            <h2 class="text-center text-purple-800 font-semibold mb-2">More 18K Rings</h2>
                            <div
                                class="w-full max-w-xs md:w-64 p-4 rounded-lg bg-blue-50 flex items-center gap-2 overflow-hidden">
                                <!-- Carousel with images -->
                                <div class="flex overflow-x-auto space-x-2">
                                    <div class="w-16 h-16 rounded-lg flex items-center justify-center bg-white">
                                        <img src="path/to/ring1.jpg" alt="Ring 1" class="w-12 h-12" />
                                    </div>
                                    <div class="w-16 h-16 rounded-lg flex items-center justify-center bg-white">
                                        <img src="path/to/ring2.jpg" alt="Ring 2" class="w-12 h-12" />
                                    </div>
                                    <div class="w-16 h-16 rounded-lg flex items-center justify-center bg-white">
                                        <img src="path/to/ring3.jpg" alt="Ring 3" class="w-12 h-12" />
                                    </div>
                                </div>
                                <!-- Arrow icon -->
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white">
                                    <span class="text-xl text-gray-500">&#8250;</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Yellow Gold Rings -->
                        <div class="p-4">
                            <h2 class="text-center text-purple-800 font-semibold mb-2">More Yellow Gold Rings</h2>
                            <div
                                class="w-full max-w-xs md:w-64 p-4 rounded-lg bg-blue-50 flex items-center gap-2 overflow-hidden">
                                <!-- Carousel with images -->
                                <div class="flex overflow-x-auto space-x-2">
                                    <div class="w-16 h-16 rounded-lg flex items-center justify-center bg-white">
                                        <img src="path/to/ring4.jpg" alt="Ring 4" class="w-12 h-12" />
                                    </div>
                                    <div class="w-16 h-16 rounded-lg flex items-center justify-center bg-white">
                                        <img src="path/to/ring5.jpg" alt="Ring 5" class="w-12 h-12" />
                                    </div>
                                    <div class="w-16 h-16 rounded-lg flex items-center justify-center bg-white">
                                        <img src="path/to/ring6.jpg" alt="Ring 6" class="w-12 h-12" />
                                    </div>
                                </div>
                                <!-- Arrow icon -->
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white">
                                    <span class="text-xl text-gray-500">&#8250;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- You may also Like -->
                <div class="bg-secondary container mx-auto px-4 py-8">
                    <h2 class="text-2xl font-medium text-center text-primary mb-6">You may also Like</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Product 1 -->
                        <div class="relative">
                            <div class="bg-white rounded-lg shadow-sm p-4">
                                <button class="absolute top-4 right-4">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                                <img src="{{ asset('asset/img/testing.png') }}" alt="Marilyn Platinum Band"
                                    class="w-full h-48 object-cover mb-4" />
                                <div class="text-lg font-medium text-gray-900">₹26,461</div>
                                <div class="text-sm text-gray-500 line-through">₹39,403</div>
                                <h3 class="text-sm text-gray-700 mt-2">Marilyn Platinum Band for Her</h3>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="relative">
                            <div class="bg-white rounded-lg shadow-sm p-4">
                                <button class="absolute top-4 right-4">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                                <img src="{{ asset('asset/img/testing.png') }}" alt="Buttercup Platinum Band"
                                    class="w-full h-48 object-cover mb-4" />
                                <div class="text-lg font-medium text-gray-900">₹30,275</div>
                                <div class="text-sm text-gray-500 line-through">₹44,132</div>
                                <h3 class="text-sm text-gray-700 mt-2">Buttercup Platinum Band for Her</h3>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="relative">
                            <div class="bg-white rounded-lg shadow-sm p-4">
                                <button class="absolute top-4 right-4">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                                <img src="{{ asset('asset/img/testing.png') }}" alt="Emily Platinum Band"
                                    class="w-full h-48 object-cover mb-4" />
                                <div class="text-lg font-medium text-gray-900">₹25,863</div>
                                <div class="text-sm text-gray-500 line-through">₹40,428</div>
                                <h3 class="text-sm text-gray-700 mt-2">Emily Platinum Band for Her</h3>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="relative">
                            <div class="bg-white rounded-lg shadow-sm p-4">
                                <button class="absolute top-4 right-4">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                                <img src="{{ asset('asset/img/testing.png') }}" alt="Sleek Diamond Band"
                                    class="w-full h-48 object-cover mb-4" />
                                <div class="text-lg font-medium text-gray-900">₹28,439</div>
                                <div class="text-sm text-gray-500 line-through">₹29,272</div>
                                <h3 class="text-sm text-gray-700 mt-2">Sleek Diamond Band</h3>
                            </div>
                        </div>
                    </div>

                    <button id="show-more-btn"
                        class="mt-6 text-[12px] font-semibold rounded-[10px] border border-primary bg-white text-primary shadow-lg flex items-center justify-center py-2 px-8 mx-auto">
                        <span class="material-symbols-outlined">arrow_drop_down</span>
                        SHOW MORE
                    </button>
                </div>


            </section>

        </div>

        <!-- Store Location -->
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Map Section -->
                <div class="relative bg-gray-100 rounded-lg overflow-hidden h-[520px]">
                    <!-- Embedded Map -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.88485785327!2d-74.080833!3d40.712776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250b0899b6f2f%3A0x3d2f4ef8d8e2b089!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1667632277813!5m2!1sen!2sus"
                        class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <!-- Store Location Markers -->
                    <div class="absolute top-1/4 left-1/4">
                        <div class="w-5 h-5 bg-[#8C3FDB] rounded-full flex items-center justify-center">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                        </div>
                    </div>
                    <!-- Additional markers positioned exactly like the image -->
                    <div class="absolute top-1/3 right-1/4">
                        <div class="w-5 h-5 bg-[#8C3FDB] rounded-full flex items-center justify-center">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                        </div>
                    </div>
                    <div class="absolute bottom-1/3 left-1/3">
                        <div class="w-5 h-5 bg-[#8C3FDB] rounded-full flex items-center justify-center">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                        </div>
                    </div>

                    <!-- Pickup Banner -->
                    <div class="absolute top-6 left-6 bg-white px-4 py-2 rounded shadow-sm">
                        <p class="text-sm font-normal text-gray-800">Now buy online & pickup from store anytime</p>
                    </div>
                </div>


                <!-- Search Section -->
                <div class="flex flex-col items-center space-y-6 px-24 mt-28 pt-4">
                    <div class="text-center">
                        <h2 class="text-2xl font-medium mb-3">
                            <span class="text-primary">Find</span> in Store near you!
                        </h2>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Have to see it to believe it? Check here if the design is available in the store or not. You can
                            also book an appointment
                        </p>
                    </div>

                    <!-- Search Input -->
                    <div class="w-[350px]">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-4 flex items-center">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <input type="text" placeholder="STORE PINCODE"
                                class="w-full pl-12 pr-4 py-3.5 border border-secondary-gradient rounded-[14px] focus:outline-none focus:ring-1 focus:ring-[#8C3FDB] focus:border-[#8C3FDB] placeholder-gray-500 text-sm" />
                        </div>
                    </div>

                    <!-- View Stores Button -->
                    <button
                        class="w-[300px] bg-secondary-gradient text-white py-3.5 px-6 rounded-[14px] hover:bg-[#7C37C3] transition duration-200 text-sm font-medium">
                        VIEW STORES & DESIGNS
                    </button>
                </div>
            </div>
        </div>

        <!-- Download the CaratLane App -->
        <div class="container mx-auto px-4 py-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-[#F8F3FF] rounded-2xl p-6 text-center">
                    <div class="flex justify-center mb-2">
                        <svg class="w-12 h-12 text-[#8C3FDB]" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4" />
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800 mb-1">Download the CaratLane App</h3>
                    <p class="text-sm text-gray-600 mb-4">Shop & Save more on app by redeeming xCLusive points</p>
                    <button
                        class="bg-[#8C3FDB] text-white px-6 py-2 rounded-lg inline-flex items-center space-x-2 hover:bg-[#7C3C3] transition duration-200">
                        <span>Download</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Available on iOS & Android</p>
                </div>

                <div class="bg-[#F6FFF6] rounded-2xl p-6 text-center">
                    <div class="flex justify-center mb-2">
                        <div class="w-12 h-12 bg-[#FFD700] rounded-full flex items-center justify-center">
                            <span class="text-2xl font-semibold text-white">₹</span>
                        </div>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800 mb-1">Complete Your Profile</h3>
                    <p class="text-sm text-gray-600 mb-4">You can now redeem xCLusive points on all your orders.</p>
                    <button
                        class="bg-[#22A87B] text-white px-6 py-2 rounded-lg inline-flex items-center space-x-2 hover:bg-[#1B8A64] transition duration-200">
                        <span>Complete</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Terms & Conditions apply</p>
                </div>
            </div>
        </div>

        <!--Enhance Your Gifting Experience!-->
        <div class="bg-[#C6196B] px-6 py-12 relative overflow-hidden">
            <!-- Decorative dots -->
            <div class="absolute top-0 right-0">
                <svg width="200" height="100" viewBox="0 0 200 100">
                    <circle cx="150" cy="20" r="4" fill="#FFD700" />
                    <circle cx="180" cy="40" r="4" fill="#90EE90" />
                    <circle cx="160" cy="60" r="4" fill="#FFD700" />
                    <circle cx="190" cy="80" r="4" fill="#90EE90" />
                </svg>
            </div>

            <!-- Header Section -->
            <div class="max-w-7xl mx-auto mb-8">
                <div class="flex items-start justify-between">
                    <div class="flex items-start gap-4">
                        <img src="/api/placeholder/80/80" alt="Gift boxes" class="w-20 h-20 object-contain" />
                        <div>
                            <h2 class="text-2xl font-medium text-white mb-1">Enhance Your Gifting Experience!</h2>
                            <p class="text-pink-100">
                                Must-Try Features & Add-ons<br />
                                at Checkout
                            </p>
                        </div>
                    </div>
                    <div class="bg-black text-white px-4 py-2 rounded-full text-sm">
                        Exclusively on iOS & Android App!
                    </div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="max-w-7xl mx-auto">
                <div class="bg-[#D42D7D] rounded-2xl p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-1">
                                <h3 class="text-white font-medium mb-2">Add a special video message</h3>
                                <p class="text-pink-100 text-sm">Attach a video in any CaratLane Ring & make your gift
                                    extra special</p>
                            </div>
                            <img src="/api/placeholder/120/120" alt="Video message"
                                class="w-24 h-24 rounded-lg object-cover" />
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-1">
                                <h3 class="text-white font-medium mb-2">Choose the perfect wrapping paper</h3>
                                <p class="text-pink-100 text-sm">Select from a variety of packaging options for their
                                    stunning diamond gift</p>
                            </div>
                            <img src="/api/placeholder/120/120" alt="Gift wrapping"
                                class="w-24 h-24 rounded-lg object-cover" />
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-1">
                                <h3 class="text-white font-medium mb-2">Schedule your gift for the best surprise!</h3>
                                <p class="text-pink-100 text-sm">Choose the exact date to surprise your loved one to make
                                    it uber special</p>
                            </div>
                            <img src="/api/placeholder/120/120" alt="Schedule delivery"
                                class="w-24 h-24 rounded-lg object-cover bg-[#FFE4B5]" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Reviews -->
        <div class="bg-secondary p-6 space-y-8">
            <!-- Header Section -->
            <div class="flex flex-wrap md:flex-nowrap justify-between items-start gap-8">

                <!-- Left Side - Rating Summary -->
                <div class="w-full md:w-auto">
                    <h2 class="text-xl font-semibold text-primary">Customer Reviews</h2>
                    <div class="flex items-center mt-2">
                        <div class="flex text-yellow-400 text-2xl">
                            ★★★★★
                        </div>
                        <span class="ml-2 text-lg font-medium">5/5</span>
                    </div>
                    <p class="text-gray-600 mt-1">Based on 536 Ratings & Reviews</p>
                    <button
                        class="w-full mt-4 bg-secondary-gradient text-white py-2 px-4 rounded-lg hover:bg-purple-600 transition duration-150">
                        WRITE A REVIEW
                    </button>
                </div>

                <!-- Middle Section - What Customers Liked -->
                <div class="flex-1 md:w-1/3 max-w-xs">
                    <h3 class="text-primary font-semibold mb-4">What Customers Liked</h3>
                    <p class="text-sm text-gray-500 mb-2">Review Highlights</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-white px-4 py-2 rounded-full text-sm text-gray-700">Design (412)</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm text-gray-700">Size/fit (267)</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm text-gray-700">Quality (312)</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm text-gray-700">Delivery (158)</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm text-gray-700">Packaging (212)</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm text-gray-700">Customer service (324)</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm text-gray-700">Overall experience (307)</span>
                        <span class="bg-white px-4 py-2 rounded-full text-sm text-gray-700">Others (51)</span>
                    </div>
                </div>

                <!-- Right Side - Customer Images -->
                <div class="w-full md:w-auto">
                    <h3 class="text-primary text-center font-semibold mb-4">Images by Customers(10)</h3>
                    <div class="grid grid-cols-3 gap-2">
                        <img src="{{ asset('asset/img/testing.png') }}" alt="Customer review image"
                            class="rounded-lg object-cover w-32 h-32" />
                        <img src="{{ asset('asset/img/testing.png') }}" alt="Customer review image"
                            class="rounded-lg object-cover w-32 h-32" />
                        <img src="{{ asset('asset/img/testing.png') }}" alt="Customer review image"
                            class="rounded-lg object-cover w-32 h-32" />
                    </div>
                </div>

            </div>

            <!-- Reviews List Section -->
            <div>
                <h3 class="text-purple-900 font-semibold mb-4">Customer Reviews : Showing 1 - 4 out of 536</h3>

                <!-- Single Review -->
                <div class="border-b pb-6 space-y-3">
                    <!-- Reviewer Information -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <!-- Profile Image -->
                            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                                <span class="text-gray-600">CJ</span>
                            </div>
                            <div>
                                <!-- Name and Rating -->
                                <div class="flex items-center space-x-2">
                                    <h4 class="font-medium">Chayanika Jain</h4>
                                    <span class="text-purple-500 text-sm">(Verified Purchase)</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex text-yellow-400 text-sm">★★★★★</div>
                                    <span class="ml-2 text-gray-600 text-sm">5/5</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-gray-500 text-sm">22nd October 2023</span>
                    </div>

                    <!-- Positives Section -->
                    <div class="flex items-center space-x-2 text-green-500 text-sm mt-2">
                        <span class="material-icons">thumb_up</span> <!-- Adjust icon if not using Material Icons -->
                        <span>Positives</span>
                    </div>

                    <!-- Highlighted Tags -->
                    <div class="flex flex-wrap gap-2 mt-2">
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">DESIGN</span>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">SIZE/FIT</span>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">QUALITY</span>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">DELIVERY</span>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">PACKAGING</span>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">CUSTOMER SERVICE</span>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">OVERALL
                            EXPERIENCE</span>
                    </div>

                    <!-- Review Text -->
                    <p class="text-gray-700 mt-2 text-sm">
                        OMG!!! It's a damn amazing ring. I gifted it to my mom and she is very happy to have it 🥰. And once
                        again thanks to CaratLane Gandhinagar staff Vishal and...
                        <span class="text-purple-500 cursor-pointer">Read More</span>
                    </p>

                    <!-- Review Image -->
                    <div class="mt-2">
                        <img src="{{ asset('asset/img/testing.png') }}" alt="Review image"
                            class="w-20 h-20 rounded-lg object-cover" />
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center space-x-2 mt-6">
                    <button class="text-purple-500 border border-purple-500 px-3 py-1 rounded-lg text-sm">FIRST</button>
                    <button class="text-purple-500 border border-purple-500 px-3 py-1 rounded-lg text-sm">‹</button>
                    <button class="bg-purple-500 text-white px-3 py-1 rounded-lg text-sm">1</button>
                    <button class="text-purple-500 border border-purple-500 px-3 py-1 rounded-lg text-sm">2</button>
                    <button class="text-purple-500 border border-purple-500 px-3 py-1 rounded-lg text-sm">3</button>
                    <button class="text-purple-500 border border-purple-500 px-3 py-1 rounded-lg text-sm">›</button>
                    <button class="text-purple-500 border border-purple-500 px-3 py-1 rounded-lg text-sm">LAST</button>
                </div>
            </div>
        </div>

        <!--Join CaratLane Insider-->
        <div class="purple-gradient py-16 px-4">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
                <!-- Left Section -->
                <div class="flex items-center gap-4">
                    <div class="relative w-20 h-20">
                        <!-- Gift Box Icon -->
                        <img src="/api/placeholder/80/80" alt="Gift boxes" class="w-20 h-20 object-contain" />
                        <!-- Decorative sparkle -->
                        <div class="absolute -top-2 -right-2 w-6 h-6 text-yellow-400">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L9.5 9.5L2 12L9.5 14.5L12 22L14.5 14.5L22 12L14.5 9.5L12 2Z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-medium text-white mb-1">Join CaratLane Insider</h2>
                        <p class="text-gray-300">To discover enticing deals, latest arrivals, & more</p>
                    </div>
                </div>

                <!-- Right Section - Form -->
                <div class="w-full max-w-md space-y-4">
                    <!-- Email Input -->
                    <input type="email" placeholder="Enter Email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" />

                    <!-- Submit Button -->
                    <button
                        class="w-full bg-[#E771FF] text-white py-3 rounded-lg hover:bg-[#D15EEB] transition duration-200">
                        submit
                    </button>

                    <!-- Gender Selection -->
                    <div class="flex items-center gap-8 justify-start">
                        <label class="flex items-center gap-2 text-white">
                            <input type="radio" name="gender" value="female" checked
                                class="w-4 h-4 text-[#E771FF] focus:ring-[#E771FF]" />
                            <span>Female</span>
                        </label>

                        <label class="flex items-center gap-2 text-white">
                            <input type="radio" name="gender" value="male"
                                class="w-4 h-4 text-[#E771FF] focus:ring-[#E771FF]" />
                            <span>Male</span>
                        </label>

                        <label class="flex items-center gap-2 text-white">
                            <input type="radio" name="gender" value="other"
                                class="w-4 h-4 text-[#E771FF] focus:ring-[#E771FF]" />
                            <span>Other</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Categories Section -->
        <div class="bg-blue-50/50 p-8">
            <h2 class="text-xl font-semibold text-purple-900 text-center mb-6">Related Categories</h2>

            <div class="flex flex-wrap justify-center gap-3 max-w-6xl mx-auto">
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">engagement
                    rings for couples</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">mens
                    rings</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">boys
                    ring design gold</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">engagement
                    rings for girls</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">cocktail
                    ring design</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">couple
                    rings set</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">mens
                    engagement rings</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">wedding
                    rings for women</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">stone
                    rings for women</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">topaz
                    ring</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">gents
                    ring</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">engagement
                    ring models</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">gold
                    wedding rings</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">boys
                    ring</span>
                <span
                    class="bg-white px-4 py-2 rounded-full text-sm text-gray-700 hover:bg-gray-50 cursor-pointer whitespace-nowrap">3
                    stone ring</span>
            </div>
        </div>

        <!-- Shop by Products Section -->
        <div class="bg-pink-50/50 p-8 my-8">
            <h2 class="text-xl font-semibold text-primary text-center mb-8">Shop by Products</h2>

            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 max-w-6xl mx-auto">
                <!-- Product 1 -->
                <div class="relative group">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Ring"
                        class="w-full aspect-square object-cover rounded-lg" />
                    <div class="text-center mt-2">
                        <p class="text-sm text-gray-700">All rings</p>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="relative group">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Earrings"
                        class="w-full aspect-square object-cover rounded-lg" />
                    <div class="text-center mt-2">
                        <p class="text-sm text-gray-700">All Earrings</p>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="relative group">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Bracelet"
                        class="w-full aspect-square object-cover rounded-lg" />
                    <div class="text-center mt-2">
                        <p class="text-sm text-gray-700">All bracelets</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="relative group">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Pendant"
                        class="w-full aspect-square object-cover rounded-lg" />
                    <div class="text-center mt-2">
                        <p class="text-sm text-gray-700">All pendants</p>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="relative group">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Necklace"
                        class="w-full aspect-square object-cover rounded-lg" />
                    <div class="text-center mt-2">
                        <p class="text-sm text-gray-700">All necklaces</p>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <!-- Customization Panel (Modal) -->
    <div id="customizationModal"
        class="fixed inset-y-0 right-0 bg-white w-full md:w-[550px] p-6 overflow-y-auto transform translate-x-full transition-transform ease-in-out duration-300 z-50 rounded-l-[30px] shadow-lg"
        style="display: none;">

        <!-- Header -->
        <div class="bg-secondary p-4 rounded-t-[30px] relative">
            <button onclick="toggleModal()"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            <h2 class="text-lg font-medium mb-4 text-gray-500">Estimated price</h2>
            <p class="text-lg font-bold text-purple-700">₹26,366 <span
                    class="text-sm line-through text-gray-400">₹31,129</span></p>
        </div>

        <!-- Choice of Metal -->
        <div class="my-6">
            <p class="font-semibold text-primary mb-2">Choice of Metal</p>
            <div class="p-4 w-full sm:w-[150px] bg-secondary text-center rounded-xl shadow-sm">
                <p class="text-sm font-semibold text-primary">14 KT<br>Yellow Gold</p>
                <div class="mt-2 mx-auto px-3 py-1 bg-white text-xs text-gray-500 rounded-md inline-block">in Stock!</div>
            </div>
        </div>

        <!-- Diamond Quality -->
        <div class="my-6">
            <p class="font-semibold text-primary mb-2">Diamond Quality</p>
            <div class="p-4 w-full sm:w-[150px] bg-secondary text-center rounded-xl shadow-sm">
                <p class="text-sm font-semibold text-primary">IJ-SI</p>
                <div class="mt-2 mx-auto px-3 py-1 bg-white text-xs text-gray-500 rounded-md inline-block">in Stock!</div>
            </div>
        </div>

        <!-- Select Size -->
        <div class="my-4">
            <p class="font-semibold text-primary text-sm mb-1">Select Size</p>
            <div class="grid grid-cols-5 gap-2">
                <!-- Size Options -->
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">5</p>
                    <p class="text-[10px] text-gray-500">44.8 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">6</p>
                    <p class="text-[10px] text-gray-500">45.9 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">7</p>
                    <p class="text-[10px] text-gray-500">47.1 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">8</p>
                    <p class="text-[10px] text-gray-500">48.1 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">9</p>
                    <p class="text-[10px] text-gray-500">49.0 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-2 mt-2">
                <!-- Additional Size Options -->
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">5</p>
                    <p class="text-[10px] text-gray-500">44.8 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">6</p>
                    <p class="text-[10px] text-gray-500">45.9 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">7</p>
                    <p class="text-[10px] text-gray-500">47.1 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">8</p>
                    <p class="text-[10px] text-gray-500">48.1 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
                <div class="p-2 bg-secondary text-center rounded-lg shadow-md">
                    <p class="text-xs font-semibold text-primary">9</p>
                    <p class="text-[10px] text-gray-500">49.0 mm</p>
                    <div class="mt-1 px-2 py-0.5 bg-white text-[8px] text-gray-500 rounded-md inline-block">in Stock!</div>
                </div>
            </div>
        </div>

        <!-- Confirm Button -->
        <button
            class="w-full bg-primary text-white font-bold py-4 mt-4 rounded-b-[30px] shadow-md transition hover:bg-primary-dark">CONFIRM
            CUSTOMISATION</button>
    </div>


    <script>
        const container = document.getElementById("productContainer");
        const image = document.getElementById("zoomImage");
    
        // Adjust image position on mouse movement within the container
        container.addEventListener("mousemove", (e) => {
            const { left, top, width, height } = container.getBoundingClientRect();
            
            // Calculate the relative mouse position
            const x = ((e.clientX - left) / width) * 100;
            const y = ((e.clientY - top) / height) * 100;
    
            // Set the transform origin based on the mouse position
            image.style.transformOrigin = `${x}% ${y}%`;
        });
    
        // Reset transform origin when the mouse leaves the container
        container.addEventListener("mouseleave", () => {
            image.style.transformOrigin = "center center"; // Reset to center
        });
    </script>

    <script>
        function toggleModal() {
            const modal = document.getElementById("customizationModal");
            const overlay = document.getElementById("overlay");

            if (modal.style.display === "none") {
                // Show modal and overlay
                modal.style.display = "block";
                overlay.style.display = "block";
                setTimeout(() => modal.classList.remove("translate-x-full"), 10);
            } else {
                // Hide modal and overlay
                modal.classList.add("translate-x-full");
                overlay.style.display = "none";
                modal.addEventListener("transitionend", () => {
                    modal.style.display = "none";
                }, {
                    once: true
                });
            }
        }
    </script>

    <script>
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            slidesPerView: 2, // Show two slides per view
            spaceBetween: 30, // Space between slides
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });


        document.getElementById('show-more-btn').addEventListener('click', function() {
            const moreImages = document.getElementById('more-images');

            // Toggle visibility
            if (moreImages.classList.contains('hidden')) {
                moreImages.classList.remove('hidden');
                this.innerHTML = '<span class="material-symbols-outlined">arrow_drop_up</span> SHOW LESS';
            } else {
                moreImages.classList.add('hidden');
                this.innerHTML = '<span class="material-symbols-outlined">arrow_drop_down</span> SHOW MORE';
            }
        });
    </script>
@endsection
