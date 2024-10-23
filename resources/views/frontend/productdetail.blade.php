@extends('components.main')

@section('content')
    <style>
        .product-image {
            background-color: #f9f3f0;
        }

        .similar-products {
            background-color: #f5f0fa;
        }

        .custom-shadow {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    <main class="mt-12">
        <div class="bg-white">
            <!-- Breadcrumb Navigation -->
            <nav class="p-4 border-b">
                <div class="container mx-auto">
                    <div class="flex items-center gap-2 text-sm text-gray-500">
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

            <section class="container mx-auto px-4 py-6">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Left Column: Product Images -->
                    <div class="space-y-4">
                        <!-- Main Product Image -->
                        <div class="product-image rounded-lg p-8 relative">
                            <img src="/api/placeholder/600/600" alt="Mathew Gold Band Ring" class="w-full object-contain" />
                            <button class="absolute top-4 right-4 bg-white p-2 rounded-lg shadow-md">
                                <i class="fas fa-expand-arrows-alt text-gray-600"></i>
                            </button>
                        </div>

                        <!-- Thumbnail Images -->
                        <div class="grid grid-cols-4 gap-4">
                            <div class="bg-[#f5f0fa] p-4 rounded-lg cursor-pointer hover:shadow-md transition">
                                <img src="/api/placeholder/150/150" alt="Ring View 1" class="w-full" />
                            </div>
                            <div class="bg-[#f5f0fa] p-4 rounded-lg cursor-pointer hover:shadow-md transition">
                                <img src="/api/placeholder/150/150" alt="Ring View 2" class="w-full" />
                            </div>
                            <div class="bg-[#f5f0fa] p-4 rounded-lg cursor-pointer hover:shadow-md transition">
                                <img src="/api/placeholder/150/150" alt="Ring View 3" class="w-full" />
                            </div>
                            <div class="bg-[#f5f0fa] p-4 rounded-lg cursor-pointer hover:shadow-md transition">
                                <img src="/api/placeholder/150/150" alt="Ring View 4" class="w-full" />
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Product Details -->
                    <div class="space-y-6">
                        <!-- Rating Section -->
                        <div class="flex items-center gap-2">
                            <div class="flex items-center bg-green-50 px-2 py-1 rounded">
                                <span class="text-yellow-400 mr-1">★</span>
                                <span class="text-gray-700 font-medium">4.9</span>
                            </div>
                            <span class="text-gray-400">|</span>
                            <span class="text-gray-600">16 Ratings</span>
                        </div>

                        <!-- Price Section -->
                        <div class="space-y-1">
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-semibold">₹23,377</span>
                                <span class="text-gray-500 line-through">₹25,552</span>
                                <span class="text-red-500">(9% off)</span>
                            </div>
                            <p class="text-sm text-gray-500">(MRP Inclusive of all taxes)</p>
                        </div>

                        <!-- Product Title -->
                        <h1 class="text-xl text-[#2f1c6a] font-semibold">Mathew Gold Band for Him</h1>

                        <!-- Offer Banner -->
                        <div class="bg-red-50 p-3 rounded">
                            <p class="text-red-700 font-medium">Flat 25% off on Making Charges</p>
                        </div>

                        <!-- Product Options -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-sm text-gray-600">Size</label>
                                <select
                                    class="w-full p-2 border rounded bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                                    <option>18 (57.8 mm)</option>
                                </select>
                            </div>
                            <div class="space-y-1">
                                <label class="text-sm text-gray-600">Metal</label>
                                <select
                                    class="w-full p-2 border rounded bg-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                                    <option>14 KT_Two Tone</option>
                                </select>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="space-y-3">
                            <button
                                class="w-full py-3 bg-yellow-400 text-white rounded font-medium hover:bg-yellow-500 transition">
                                CUSTOMISE
                            </button>
                            <div class="flex gap-3">
                                <button
                                    class="flex-1 py-3 bg-purple-500 text-white rounded font-medium hover:bg-purple-600 transition">
                                    ADD TO CART
                                </button>
                                <button
                                    class="w-12 h-12 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-50 transition">
                                    <i class="far fa-heart text-gray-600"></i>
                                </button>
                                <button
                                    class="w-12 h-12 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-50 transition">
                                    <i class="fas fa-share-alt text-gray-600"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Try At Home & Store Availability -->
                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <!-- Try At Home -->
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-home text-purple-600"></i>
                                    <h3 class="font-medium">Try At Home</h3>
                                </div>
                                <p class="text-sm text-gray-600">Trial upto 5 designs</p>
                                <button class="w-full bg-purple-400 text-white py-2 rounded hover:bg-purple-500 transition">
                                    BOOK APPOINTMENT
                                </button>
                            </div>

                            <!-- Store Availability -->
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-store text-orange-400"></i>
                                    <h3 class="font-medium">Store Availability</h3>
                                </div>
                                <p class="text-sm text-gray-600">Find designs in store</p>
                                <button class="w-full bg-orange-400 text-white py-2 rounded hover:bg-orange-500 transition">
                                    FIND IN STORE
                                </button>
                            </div>
                        </div>

                        <!-- Live Video Call Section -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex gap-4">
                                <img src="/api/placeholder/120/120" alt="Video call illustration" class="rounded-lg" />
                                <div class="space-y-2">
                                    <h3 class="font-medium">Live Video Call</h3>
                                    <p class="text-sm text-gray-600">Join a live video call with our consultants to see your
                                        favourite designs up close!</p>
                                    <button class="text-green-600 font-medium hover:text-green-700 transition">
                                        Schedule a Video Call →
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Benefits -->
                        <div class="grid grid-cols-4 gap-4 pt-4">
                            <div class="text-center space-y-2">
                                <div class="bg-green-100 h-12 w-12 mx-auto rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-green-600"></i>
                                </div>
                                <p class="text-sm font-medium">100% Certified</p>
                            </div>
                            <div class="text-center space-y-2">
                                <div class="bg-blue-100 h-12 w-12 mx-auto rounded-full flex items-center justify-center">
                                    <i class="fas fa-undo text-blue-600"></i>
                                </div>
                                <p class="text-sm font-medium">15 Day Money-Back</p>
                            </div>
                            <div class="text-center space-y-2">
                                <div class="bg-yellow-100 h-12 w-12 mx-auto rounded-full flex items-center justify-center">
                                    <i class="fas fa-sync text-yellow-600"></i>
                                </div>
                                <p class="text-sm font-medium">Lifetime Exchange</p>
                            </div>
                            <div class="text-center space-y-2">
                                <div class="bg-pink-100 h-12 w-12 mx-auto rounded-full flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-pink-600"></i>
                                </div>
                                <p class="text-sm font-medium">One Year Warranty</p>
                            </div>
                        </div>

                        <!-- Similar Products -->
                        <div class="similar-products p-4 rounded-lg">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white p-4 rounded-lg relative custom-shadow">
                                    <span
                                        class="absolute top-2 left-2 bg-purple-700 text-white text-xs px-2 py-1 rounded">32%
                                        OFF</span>
                                    <img src="/api/placeholder/200/200" alt="Similar Ring 1" class="w-full" />
                                </div>
                                <div class="bg-white p-4 rounded-lg relative custom-shadow">
                                    <span
                                        class="absolute top-2 left-2 bg-purple-700 text-white text-xs px-2 py-1 rounded">21%
                                        OFF</span>
                                    <img src="/api/placeholder/200/200" alt="Similar Ring 2" class="w-full" />
                                </div>
                                <div class="bg-white p-4 rounded-lg relative custom-shadow">
                                    <span
                                        class="absolute top-2 left-2 bg-purple-700 text-white text-xs px-2 py-1 rounded">20%
                                        OFF</span>
                                    <img src="/api/placeholder/200/200" alt="Similar Ring 3" class="w-full" />
                                </div>
                                <div class="bg-white p-4 rounded-lg flex items-center justify-center custom-shadow">
                                    <div class="text-center">
                                        <h3 class="text-xl font-bold text-purple-700">Up to</h3>
                                        <h2 class="text-2xl font-bold text-purple-700">32% OFF</h2>
                                        <p class="text-sm text-purple-700">On All Similar Designs</p>
                                        <button
                                            class="mt-2 text-purple-700 font-medium flex items-center gap-1 hover:text-purple-800 transition">
                                            VIEW ALL
                                            <i class="fas fa-arrow-right text-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery Section -->
                        <div class="space-y-4">
                            <h2 class="text-lg font-semibold text-[#2f1c6a]">Delivery, Stores & Trial</h2>
                            <div class="flex gap-2 items-center border rounded p-2">
                                <i class="fas fa-map-marker-alt text-gray-400 ml-2"></i>
                                <input type="text" placeholder="Enter Pincode" class="flex-1 outline-none" />
                                <button class="text-purple-600 font-medium hover:text-purple-700 transition">Locate
                                    Me</button>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="far fa-calendar text-purple-600"></i>
                                <span class="text-gray-600">Expected Delivery Date</span>
                            </div>
                        </div>

                        <!-- XClusive Points -->
                        <div class="bg-gradient-to-r from-purple-100 to-purple-200 p-4 rounded-lg">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium">Earn 701 xClusive points with this order</p>
                                    <p class="text-sm text-gray-600">(1 xClusive point = ₹1)</p>
                                </div>
                                <div class="bg-yellow-400 rounded-full p-2">
                                    <i class="fas fa-coins text-white"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Terms Link -->
                        <div class="text-center">
                            <p class="text-sm">
                                Learn more on about our
                                <a href="#" class="text-purple-600 hover:text-purple-700 transition">TERMS &
                                    POLICIES</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
