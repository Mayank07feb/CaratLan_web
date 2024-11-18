@extends('components.main')
@section('content')
    <main class="mt-40 sm:mt-40 md:mt-28">
        <!-- Wishlist Page -->
        <div class="bg-white min-h-screen">

            <div class="bg-gray-100 p-6 px-20">

                <!-- Breadcrumb and Title Section -->
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-semibold text-gray-800">
                        YOUR WISHLIST
                    </h1>
                </div>

                <!-- Breadcrumb Navigation -->
                <nav class="text-xs text-gray-500">
                    <a href="#" class="hover:underline">Home</a> &gt;
                    <a href="#" class="hover:underline">WISHLIST</a>
                </nav>
            </div>

            <!-- Wishlist Section -->
            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Wishlist Item 1 -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden relative transition-transform duration-300 hover:scale-105">
                        <!-- Product Image -->
                        <div class="h-56 relative">
                            <img src="{{ asset('asset/img/testing.png') }}" alt="Product"
                                class="w-full h-full object-cover">

                            <!-- Close Icon -->
                            <button class="absolute top-2 right-2 text-gray-400 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 9l3.293-3.293a1 1 0 111.414 1.414L11.414 10l3.293 3.293a1 1 0 01-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 10 5.293 6.707a1 1 0 111.414-1.414L10 8.586z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Product Details -->
                        <div class="px-4 py-3">
                            <!-- Price -->
                            <div class="text-sm font-semibold text-gray-900">
                                ₹12,005
                                <span class="line-through text-xs text-gray-500">₹15,404</span>
                            </div>
                            <!-- Product Title -->
                            <h2 class="text-sm font-medium text-gray-700 mb-2">Radiant Rivulet Diamond Stud Earrings</h2>

                            <!-- Buttons -->
                            <div class="mt-4 flex space-x-2">
                                <button
                                    class="bg-white border border-gray-400 font-semibold py-1 px-8 rounded-lg text-xs text-gray-700 hover:bg-gray-100 transition duration-200">
                                    TRY NOW
                                </button>

                                <a href="{{ route('cart') }}"
                                    class="bg-white border border-gray-400 py-2 px-3 rounded-lg text-xs flex items-center text-gray-700 hover:bg-gray-100 transition duration-200">
                                    <i class="fas fa-shopping-cart w-4 h-4 mr-1"></i>
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist Item 2 -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden relative transition-transform duration-300 hover:scale-105">
                        <!-- Product Image -->
                        <div class="h-56 relative">
                            <img src="{{ asset('asset/img/ring1.jpg') }}" alt="Product" class="w-full h-full object-cover">

                            <!-- Close Icon -->
                            <button class="absolute top-2 right-2 text-gray-400 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 9l3.293-3.293a1 1 0 111.414 1.414L11.414 10l3.293 3.293a1 1 0 01-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 10 5.293 6.707a1 1 0 111.414-1.414L10 8.586z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Product Details -->
                        <div class="px-4 py-3">
                            <!-- Price -->
                            <div class="text-sm font-semibold text-gray-900">
                                ₹12,005
                                <span class="line-through text-xs text-gray-500">₹15,404</span>
                            </div>
                            <!-- Product Title -->
                            <h2 class="text-sm font-medium text-gray-700 mb-2">Radiant Rivulet Diamond Stud Earrings</h2>

                            <!-- Buttons -->
                            <div class="mt-4 flex space-x-2">
                                <button
                                    class="bg-white border border-gray-400 font-semibold py-1 px-8 rounded-lg text-xs text-gray-700 hover:bg-gray-100 transition duration-200">
                                    TRY NOW
                                </button>

                                <a href="{{ route('cart') }}"
                                    class="bg-white border border-gray-400 py-2 px-3 rounded-lg text-xs flex items-center text-gray-700 hover:bg-gray-100 transition duration-200">
                                    <i class="fas fa-shopping-cart w-4 h-4 mr-1"></i>
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Add more cards here as needed -->
                </div>
            </div>
        </div>
    </main>
@endsection
