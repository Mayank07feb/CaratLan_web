@extends('components.main')
@section('content')
    <!-- CSS to hide the scrollbar -->
    <style>
        #sortModal.fade-in {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        #sortModal.fade-out {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .scrollbar-hidden {
            scrollbar-width: none;
            /* For Firefox */
        }

        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
            /* For Chrome, Safari, and Opera */
        }

        /* Hide default scrollbar for the slider */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* Optional: Add CSS for modal open and close transitions */
        #similarModal.show {
            transform: translateY(0);
        }

        #overlaySimilarImages.show {
            display: block;
            /* Show overlay when modal is open */
        }
    </style>

    <main class="mt-40 sm:mt-40 md:mt-28">
        <div class="hidden md:block bg-gray-100 p-6 pl-24">

            <!-- Breadcrumb and Title Section -->
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-lg font-semibold text-gray-800">
                    Solitaires
                    <span class="text-xs font-normal text-gray-600">3855 Designs</span>
                </h1>
            </div>

            <!-- Breadcrumb Navigation -->
            <nav class="text-xs text-gray-500">
                <a href="#" class="hover:underline">Home</a> &gt;
                <a href="#" class="hover:underline">Jewellery</a> &gt;
                <a href="#" class="hover:underline">Solitaires</a>
            </nav>
        </div>


        <div class="bg-gray-100 p-6 block md:hidden">
            <div class="flex items-center justify-between mb-2">
                <span class="text-xs font-normal text-gray-600">Jewellery</span>
                <span class="text-xs font-normal text-gray-600">3855 Designs</span>
            </div>
        </div>




        <!-- Page Header Section -->
        <section class="bg-white py-1 px-2 sm:py-2 sm:px-4 md:py-3 md:px-6 mb-0 justify-start">
            <div class="container mx-auto">
                <!-- Filter Buttons -->
                <div class="mt-1 flex flex-wrap space-x-1 sm:space-x-2 md:space-x-4">
                    <!-- Active Button -->
                    <button class="bg-purple-500 text-white px-2 py-1 rounded-[12px] text-[10px] sm:text-sm md:text-base">
                        All
                    </button>

                    <!-- Other Buttons -->
                    <button
                        class="bg-purple-100 text-[10px] sm:text-sm md:text-base px-2 py-1 rounded-[12px] hover:bg-purple-500 hover:text-white">
                        Try at Home
                    </button>
                    <button
                        class="bg-purple-100 text-[10px] sm:text-sm md:text-base px-2 py-1 rounded-[12px] hover:bg-purple-500 hover:text-white">
                        Designs in Store
                    </button>
                    <button
                        class="bg-purple-100 text-[10px] sm:text-sm md:text-base px-2 py-1 rounded-[12px] hover:bg-purple-500 hover:text-white">
                        Faster Delivery
                    </button>
                    <button
                        class="bg-purple-100 text-[10px] sm:text-sm md:text-base px-2 py-1 rounded-[12px] hover:bg-purple-500 hover:text-white">
                        New In
                    </button>
                </div>
            </div>
        </section>



        <div>

            <div class="flex bg-white flex-col md:flex-row">
                <!-- Sidebar -->
                <aside
                    class="hidden md:block w-full md:w-1/5 p-4 bg-white h-screen sticky top-0 overflow-y-auto scrollbar-hidden">
                    <!-- Filters Heading -->
                    <div
                        class="flex justify-between items-center mb-4 border-b border-gray-300 pb-2 pt-4 sticky top-[-16px] bg-white z-20">
                        <h2 class="text-base font-semibold text-gray-800">FILTERS</h2>
                        <a href="#" class="text-purple-600 text-sm font-medium hover:underline">CLEAR ALL</a>
                    </div>

                    <!-- Filter Section -->
                    <div x-data="{ open: true, showMore: false }" class="mb-6 border-b border-gray-300 pb-6">
                        <h3 @click="open = !open" class="text-base font-bold text-gray-700 cursor-pointer leading-normal">
                            Ring Size
                        </h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">11
                                    (803)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">10
                                    (620)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">9
                                    (510)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">8
                                        (410)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">7
                                        (350)</label>
                                </div>
                            </div>

                            <!-- See More Link to Toggle Additional Filters -->
                            <a href="#" @click.prevent="showMore = !showMore"
                                class="text-purple-600 text-sm mt-2 block hover:underline">
                                <span x-show="!showMore">22 More</span>
                                <span x-show="showMore">Show Less</span>
                            </a>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div x-data="{ open: true, showMore: false }" class="mb-6 border-b border-gray-300 pb-6">
                        <h3 @click="open = !open" class="text-sm font-bold text-gray-700 cursor-pointer">Price</h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">₹10,001 -
                                    ₹15,000
                                    (262)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">₹5,000 -
                                    ₹10,000 (180)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">₹15,001
                                        -
                                        ₹20,000
                                        (100)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">₹20,001
                                        -
                                        ₹25,000
                                        (50)</label>
                                </div>
                            </div>

                            <!-- See More Link to Toggle Additional Filters -->
                            <a href="#" @click.prevent="showMore = !showMore"
                                class="text-purple-600 text-sm mt-2 block hover:underline">
                                <span x-show="!showMore">6 More</span>
                                <span x-show="showMore">Show Less</span>
                            </a>
                        </div>
                    </div>

                    <!-- Material Filter -->
                    <div x-data="{ open: true, showMore: false }" class="mb-6 border-b border-gray-300 pb-6">
                        <h3 @click="open = !open" class="text-sm font-bold text-gray-700 cursor-pointer">Material</h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Gold
                                    (1200)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Silver
                                    (800)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Platinum
                                    (450)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Rose
                                        Gold
                                        (300)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Titanium
                                        (200)</label>
                                </div>
                            </div>

                            <!-- See More Link to Toggle Additional Filters -->
                            <a href="#" @click.prevent="showMore = !showMore"
                                class="text-purple-600 text-sm mt-2 block hover:underline">
                                <span x-show="!showMore">2 More</span>
                                <span x-show="showMore">Show Less</span>
                            </a>
                        </div>
                    </div>

                    <!-- Occasion Filter -->
                    <div x-data="{ open: true, showMore: false }" class="mb-6 border-b border-gray-300 pb-6">
                        <h3 @click="open = !open" class="text-sm font-bold text-gray-700 cursor-pointer">Occasion</h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Wedding
                                    (503)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Casual
                                    (202)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Anniversary
                                    (150)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Birthday
                                        (120)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label
                                        class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Graduation
                                        (80)</label>
                                </div>
                            </div>

                            <!-- See More Link to Toggle Additional Filters -->
                            <a href="#" @click.prevent="showMore = !showMore"
                                class="text-purple-600 text-sm mt-2 block hover:underline">
                                <span x-show="!showMore">2 More</span>
                                <span x-show="showMore">Show Less</span>
                            </a>
                        </div>
                    </div>

                    <!-- Gender Filter -->
                    <div x-data="{ open: true, showMore: false }" class="mb-6 border-b border-gray-300 pb-6">
                        <h3 @click="open = !open" class="text-sm font-bold text-gray-700 cursor-pointer">Gender</h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Women
                                    (1500)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Men
                                    (900)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Unisex
                                    (300)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Kids
                                        (150)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-sm text-gray-700 hover:text-purple-600 leading-[28px]">Babies
                                        (100)</label>
                                </div>
                            </div>

                            <!-- See More Link to Toggle Additional Filters -->
                            <a href="#" @click.prevent="showMore = !showMore"
                                class="text-purple-600 text-sm mt-2 block hover:underline">
                                <span x-show="!showMore">2 More</span>
                                <span x-show="showMore">Show Less</span>
                            </a>
                        </div>
                    </div>

                    <!-- Apply Filters Button -->
                    <button
                        class="text-sm font-medium px-4 py-2 rounded-[12px] mt-4 w-full border border-[#4F3267] text-[#4F3267]">
                        View More
                    </button>

                </aside>


                <!-- Product Grid -->
                <div class="w-full md:w-3/4 p-4">
                    <!-- Top Bar -->
                    <div class="hidden md:flex justify-between items-center mb-6">
                        <div
                            class="border border-gray-300 text-xs text-gray-700 rounded-[20px] px-3 py-1 flex items-center justify-between mb-4">
                            <span class="text-sm">Flat 100% off on Making Charges</span>
                            <button class="ml-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                                <span class="material-icons">close</span>
                            </button>
                        </div>

                        <select class="border border-gray-300 text-sm text-gray-700 rounded px-3 py-2">
                            <option>Sort By: Featured</option>
                            <!-- Add more options here -->
                        </select>
                    </div>

                    <!-- Product List -->
                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4">
                        <!-- Product Card 1 -->
                        <div
                            class="group rounded-lg relative w-full max-w-sm overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg h-[400px] sm:h-96 md:h-[400px]">
                            <div class="p-1">
                                <span
                                    class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                <div
                                    class="absolute top-2 right-2 z-10 opacity-0 sm:opacity-100 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    <button class="bg-white p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Trigger Button -->
                                <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                    <button id="viewSimilarBtn"
                                        class="group flex items-center text-purple-600 px-2 py-1 rounded-md text-sm">
                                        <i class="material-icons">image</i>
                                        <div
                                            class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 sm:group-hover:translate-x-0 sm:group-hover:opacity-100 transition-all duration-300 ease-in-out text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] whitespace-nowrap">
                                            View similar
                                        </div>
                                    </button>
                                </div>

                                <a href="{{ route('productdetail') }}">
                                    <div class="relative">
                                        <img id="productImage1" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
                                            class="w-full h-56 object-cover border border-gray-300 shadow rounded-lg transition-opacity duration-300 ease-in-out">
                                        <div class="absolute top-48 left-2 flex items-start space-x-2">
                                            <button onclick="changeImage(-1, 'productImage1')"
                                                class="bg-white text-xs font-bold p-1 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>
                                            <button onclick="changeImage(1, 'productImage1')"
                                                class="bg-white text-xs font-bold p-1 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                                <div class="p-2">
                                    <div class="flex items-center">
                                        <div class="text-base font-semibold">₹24,733</div>
                                        <div class="text-sm ml-2 line-through text-gray-500">₹32,282</div>
                                    </div>
                                    <p class="text-pink-600 font-semibold text-sm mt-1">Check delivery date</p>
                                    <p class="text-xs text-gray-600 mt-1">Sameera Diamond Drop Earrings</p>
                                </div>

                                <div
                                    class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    <button
                                        class="text-[10px] md:text-[16px] font-bold px-4 sm:px-6 py-1 sm:py-1 text-primary rounded-[12px] border border-purple-950"
                                        onclick="openModal()">
                                        Try at Home
                                    </button>
                                    <button
                                        class="border border-green-500 text-green-500 text-[10px] md:text-[16px] font-bold p-1 sm:p-2 rounded-[12px]"
                                        onclick="openModal()">
                                        <i class="material-icons">camera_alt</i>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <!-- Product Card 2 -->
                        <div
                            class="group rounded-lg relative w-full max-w-sm overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg h-[400px] sm:h-96 md:h-[400px]">
                            <div class="p-1">
                                <span
                                    class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                <div
                                    class="absolute top-2 right-2 z-10 opacity-0 sm:opacity-100 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    <button class="bg-white p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Trigger Button -->
                                <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                    <button id="viewSimilarBtn"
                                        class="group flex items-center text-purple-600 px-2 py-1 rounded-md text-sm">
                                        <i class="material-icons">image</i>
                                        <div
                                            class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 sm:group-hover:translate-x-0 sm:group-hover:opacity-100 transition-all duration-300 ease-in-out text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] whitespace-nowrap">
                                            View similar
                                        </div>
                                    </button>
                                </div>

                                <div class="relative">
                                    <img id="productImage2" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
                                        class="w-full h-56 object-cover border border-gray-300 shadow rounded-lg transition-opacity duration-300 ease-in-out">
                                    <div class="absolute top-48 left-2 flex items-start space-x-2">
                                        <button onclick="changeImage(-1, 'productImage2')"
                                            class="bg-white text-xs font-bold p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <button onclick="changeImage(1, 'productImage2')"
                                            class="bg-white text-xs font-bold p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="flex items-center">
                                        <div class="text-base font-semibold">₹24,733</div>
                                        <div class="text-sm ml-2 line-through text-gray-500">₹32,282</div>
                                    </div>
                                    <p class="text-pink-600 font-semibold text-sm mt-1">Check delivery date</p>
                                    <p class="text-xs text-gray-600 mt-1">Sameera Diamond Drop Earrings</p>
                                </div>

                                <div
                                    class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    <button
                                        class="text-[10px] md:text-[16px] font-bold px-4 sm:px-6 py-1 sm:py-1 text-primary rounded-[12px] border border-purple-950"
                                        onclick="openModal()">
                                        Try at Home
                                    </button>
                                    <button
                                        class="border border-green-500 text-green-500 text-[10px] md:text-[16px] font-bold p-1 sm:p-2 rounded-[12px]"
                                        onclick="openModal()">
                                        <i class="material-icons">camera_alt</i>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <!-- Product Card 3 -->
                        <div
                            class="group rounded-lg relative w-full max-w-sm overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg h-[400px] sm:h-96 md:h-[400px]">
                            <div class="p-1">
                                <span
                                    class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                <div
                                    class="absolute top-2 right-2 z-10 opacity-0 sm:opacity-100 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    <button class="bg-white p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Trigger Button -->
                                <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                    <button id="viewSimilarBtn"
                                        class="group flex items-center text-purple-600 px-2 py-1 rounded-md text-sm">
                                        <i class="material-icons">image</i>
                                        <div
                                            class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 sm:group-hover:translate-x-0 sm:group-hover:opacity-100 transition-all duration-300 ease-in-out text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] whitespace-nowrap">
                                            View similar
                                        </div>
                                    </button>
                                </div>

                                <div class="relative">
                                    <img id="productImage" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
                                        class="w-full h-56 object-cover border border-gray-300 shadow rounded-lg transition-opacity duration-300 ease-in-out">
                                    <div class="absolute top-48 left-2 flex items-start space-x-2">
                                        <button onclick="changeImage(-1)"
                                            class="bg-white text-xs font-bold p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <button onclick="changeImage(1)"
                                            class="bg-white text-xs font-bold p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="flex items-center">
                                        <div class="text-base font-semibold">₹24,733</div>
                                        <div class="text-sm ml-2 line-through text-gray-500">₹32,282</div>
                                    </div>
                                    <p class="text-pink-600 font-semibold text-sm mt-1">Check delivery date</p>
                                    <p class="text-xs text-gray-600 mt-1">Sameera Diamond Drop Earrings</p>
                                </div>

                                <div
                                    class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    <button
                                        class="text-[10px] md:text-[16px] font-bold px-4 sm:px-6 py-1 sm:py-1 text-primary rounded-[12px] border border-purple-950"
                                        onclick="openModal()">
                                        Try at Home
                                    </button>
                                    <button
                                        class="border border-green-500 text-green-500 text-[10px] md:text-[16px] font-bold p-1 sm:p-2 rounded-[12px]"
                                        onclick="openModal()">
                                        <i class="material-icons">camera_alt</i>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <!-- Product Card 4 -->
                        <div
                            class="group rounded-lg relative w-full max-w-sm overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg h-[400px] sm:h-96 md:h-[400px]">
                            <div class="p-1">
                                <span
                                    class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                <div
                                    class="absolute top-2 right-2 z-10 opacity-0 sm:opacity-100 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    <button class="bg-white p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Trigger Button -->
                                <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                    <button id="viewSimilarBtn"
                                        class="group flex items-center text-purple-600 px-2 py-1 rounded-md text-sm">
                                        <i class="material-icons">image</i>
                                        <div
                                            class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 sm:group-hover:translate-x-0 sm:group-hover:opacity-100 transition-all duration-300 ease-in-out text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] whitespace-nowrap">
                                            View similar
                                        </div>
                                    </button>
                                </div>

                                <div class="relative">
                                    <img id="productImage" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
                                        class="w-full h-56 object-cover border border-gray-300 shadow rounded-lg transition-opacity duration-300 ease-in-out">
                                    <div class="absolute top-48 left-2 flex items-start space-x-2">
                                        <button onclick="changeImage(-1)"
                                            class="bg-white text-xs font-bold p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </button>
                                        <button onclick="changeImage(1)"
                                            class="bg-white text-xs font-bold p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="flex items-center">
                                        <div class="text-base font-semibold">₹24,733</div>
                                        <div class="text-sm ml-2 line-through text-gray-500">₹32,282</div>
                                    </div>
                                    <p class="text-pink-600 font-semibold text-sm mt-1">Check delivery date</p>
                                    <p class="text-xs text-gray-600 mt-1">Sameera Diamond Drop Earrings</p>
                                </div>

                                <div
                                    class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    <button
                                        class="text-[10px] md:text-[16px] font-bold px-4 sm:px-6 py-1 sm:py-1 text-primary rounded-[12px] border border-purple-950"
                                        onclick="openModal()">
                                        Try at Home
                                    </button>
                                    <button
                                        class="border border-green-500 text-green-500 text-[10px] md:text-[16px] font-bold p-1 sm:p-2 rounded-[12px]"
                                        onclick="openModal()">
                                        <i class="material-icons">camera_alt</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product List End-->

                    <!-- Product List 2-->
                    <div class="container mx-auto mt-10">
                        <div class="grid grid-cols-12 gap-4">
                            <!-- Product Card 1 -->
                            <div
                                class="col-span-6 sm:col-span-3 group rounded-lg relative w-full overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg h-[400px] sm:h-96 md:h-[400px]">
                                <div class="p-1">
                                    <span
                                        class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                    <div
                                        class="absolute top-2 right-2 z-10 opacity-0 sm:opacity-100 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                        <button class="bg-white p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Trigger Button -->
                                    <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                        <button id="viewSimilarBtn"
                                            class="group flex items-center text-purple-600 px-2 py-1 rounded-md text-sm">
                                            <i class="material-icons">image</i>
                                            <div
                                                class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 sm:group-hover:translate-x-0 sm:group-hover:opacity-100 transition-all duration-300 ease-in-out text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] whitespace-nowrap">
                                                View similar
                                            </div>
                                        </button>
                                    </div>

                                    <div class="relative">
                                        <img id="productImage" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
                                            class="w-full h-56 object-cover border border-gray-300 shadow rounded-lg transition-opacity duration-300 ease-in-out">
                                        <div class="absolute top-48 left-2 flex items-start space-x-2">
                                            <button onclick="changeImage(-1)"
                                                class="bg-white text-xs font-bold p-1 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>
                                            <button onclick="changeImage(1)"
                                                class="bg-white text-xs font-bold p-1 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="flex items-center">
                                            <div class="text-base font-semibold">₹24,733</div>
                                            <div class="text-sm ml-2 line-through text-gray-500">₹32,282</div>
                                        </div>
                                        <p class="text-pink-600 font-semibold text-sm mt-1">Check delivery date</p>
                                        <p class="text-xs text-gray-600 mt-1">Sameera Diamond Drop Earrings</p>
                                    </div>

                                    <div
                                        class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                        <button
                                            class="text-[10px] md:text-[16px] font-bold px-4 sm:px-6 py-1 sm:py-1 text-primary rounded-[12px] border border-purple-950"
                                            onclick="openModal()">
                                            Try at Home
                                        </button>
                                        <button
                                            class="border border-green-500 text-green-500 text-[10px] md:text-[16px] font-bold p-1 sm:p-2 rounded-[12px]"
                                            onclick="openModal()">
                                            <i class="material-icons">camera_alt</i>
                                        </button>
                                    </div>

                                </div>
                            </div>


                            <!-- Product Card 2 -->
                            <div
                                class="col-span-6 sm:col-span-3 group rounded-lg relative w-full overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg h-[400px] sm:h-96 md:h-[400px]">
                                <div class="p-1">
                                    <span
                                        class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                    <div
                                        class="absolute top-2 right-2 z-10 opacity-0 sm:opacity-100 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                        <button class="bg-white p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Trigger Button -->
                                    <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                        <button id="viewSimilarBtn"
                                            class="group flex items-center text-purple-600 px-2 py-1 rounded-md text-sm">
                                            <i class="material-icons">image</i>
                                            <div
                                                class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 sm:group-hover:translate-x-0 sm:group-hover:opacity-100 transition-all duration-300 ease-in-out text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] whitespace-nowrap">
                                                View similar
                                            </div>
                                        </button>
                                    </div>

                                    <div class="relative">
                                        <img id="productImage" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
                                            class="w-full h-56 object-cover border border-gray-300 shadow rounded-lg transition-opacity duration-300 ease-in-out">
                                        <div class="absolute top-48 left-2 flex items-start space-x-2">
                                            <button onclick="changeImage(-1)"
                                                class="bg-white text-xs font-bold p-1 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>
                                            <button onclick="changeImage(1)"
                                                class="bg-white text-xs font-bold p-1 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="flex items-center">
                                            <div class="text-base font-semibold">₹24,733</div>
                                            <div class="text-sm ml-2 line-through text-gray-500">₹32,282</div>
                                        </div>
                                        <p class="text-pink-600 font-semibold text-sm mt-1">Check delivery date</p>
                                        <p class="text-xs text-gray-600 mt-1">Sameera Diamond Drop Earrings</p>
                                    </div>

                                    <div
                                        class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-100 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                        <button
                                            class="text-[10px] md:text-[16px] font-bold px-4 sm:px-6 py-1 sm:py-1 text-primary rounded-[12px] border border-purple-950"
                                            onclick="openModal()">
                                            Try at Home
                                        </button>
                                        <button
                                            class="border border-green-500 text-green-500 text-[10px] md:text-[16px] font-bold p-1 sm:p-2 rounded-[12px]"
                                            onclick="openModal()">
                                            <i class="material-icons">camera_alt</i>
                                        </button>
                                    </div>

                                </div>
                            </div>

                            <!-- Filter Section -->
                            <div class="col-span-12 sm:col-span-6 bg-purple-50 rounded-lg p-6">
                                <h2 class="text-purple-600 font-semibold mb-4">Filter by Price</h2>
                                <div class="grid grid-cols-4 gap-2">
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">10-15k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">20-30k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">Under
                                        5k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">5-10k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">15-20k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">30-40k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">40-50k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">50-75k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">75-100k</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">1L
                                        -
                                        1.5L</button>
                                    <button
                                        class="bg-white text-purple-600 text-sm font-semibold py-2 px-3 rounded-lg shadow">1.5L
                                        - 2L</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product List 2 End-->
                </div>
            </div>

            <!--Discover the World of CaratLane -->
            <div class="bg-white">
                <!-- Header Section -->
                <div class="relative bg-[#300a30] text-white py-4 px-6 text-center">
                    <span class="text-lg lg:text-base font-bold">Discover the World of CaratLane</span>
                    <div class="absolute bottom-[-8px] left-1/2 transform -translate-x-1/2 w-4 h-4 bg-white rotate-45">
                    </div>
                </div>

                <!-- Content Section -->
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <h1 class="text-2xl md:text-3xl lg:text-2xl font-bold text-gray-800 mb-4 text-center md:text-left">
                        Rings | CaratLane</h1>

                    <p class="text-gray-700 text-sm md:text-base lg:text-sm leading-relaxed mb-6 text-center md:text-left">
                        Rings are among the most meaningful gifts you can offer—to a loved one or to yourself. They
                        symbolize love,
                        milestones, and memories, telling unique stories. At CaratLane, we believe in crafting rings that
                        resonate with the
                        stories of those who wear them.
                    </p>

                    <p class="text-gray-700 text-sm md:text-base lg:text-sm leading-relaxed mb-6 text-center md:text-left">
                        Our commitment to excellence in design and craftsmanship ensures that every ring is a product of
                        meticulous
                        planning, innovative design, and handcrafted perfection, making each piece as unique as the person
                        it is intended for.
                    </p>

                    <!-- Types of Rings Section -->
                    <div class="mb-8">
                        <h2 class="text-xl md:text-2xl lg:text-xl font-bold text-gray-800 mb-4">Explore Our Collections
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-gray-100 p-4 rounded-lg shadow">
                                <h3 class="font-semibold text-lg text-gray-800">Engagement Rings</h3>
                                <p class="text-xs text-gray-600">Timeless love tokens crafted to perfection.</p>
                                <a href="#" class="text-xs text-primary hover:text-secondary">View Collection</a>
                            </div>

                            <div class="bg-gray-100 p-4 rounded-lg shadow">
                                <h3 class="font-semibold text-lg text-gray-800">Cocktail Rings</h3>
                                <p class="text-xs text-gray-600">Glamorous statements for special occasions.</p>
                                <a href="#" class="text-xs text-primary hover:text-secondary">View Collection</a>
                            </div>

                            <div class="bg-gray-100 p-4 rounded-lg shadow">
                                <h3 class="font-semibold text-lg text-gray-800">Gold Rings</h3>
                                <p class="text-xs text-gray-600">Eternal gold elegance for every moment.</p>
                                <a href="#" class="text-xs text-primary hover:text-secondary">View Collection</a>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Testimonials Section -->
                    <div class="mb-8">
                        <h2 class="text-xl md:text-2xl lg:text-xl font-bold text-gray-800 mb-4">What Our Customers Say</h2>
                        <blockquote class="bg-gray-50 p-4 rounded-lg shadow mb-4">
                            <p class="text-gray-700 text-sm italic">"The ring I purchased was exquisite! The craftsmanship
                                is
                                unparalleled, and I couldn't be happier!"</p>
                            <footer class="text-gray-600 text-xs">— Sarah T.</footer>
                        </blockquote>
                        <blockquote class="bg-gray-50 p-4 rounded-lg shadow">
                            <p class="text-gray-700 text-sm italic">"CaratLane's service is exceptional, and the rings are
                                absolutely stunning!"</p>
                            <footer class="text-gray-600 text-xs">— John M.</footer>
                        </blockquote>
                    </div>

                    <!-- FAQ Section -->
                    <div>
                        <h2 class="text-xl md:text-2xl lg:text-xl font-bold text-gray-800 mb-4">Frequently Asked Questions
                        </h2>
                        <ul class="list-disc pl-5 space-y-4">
                            <li class="text-xs">
                                <strong>What materials are used in your rings?</strong>
                                <p class="text-gray-600">We use a variety of high-quality materials including gold,
                                    platinum, and diamonds.</p>
                            </li>
                            <li class="text-xs">
                                <strong>Do you offer customization?</strong>
                                <p class="text-gray-600">Yes, we provide options for customizing your ring to fit your
                                    style and preferences.</p>
                            </li>
                            <li class="text-xs">
                                <strong>How do I care for my ring?</strong>
                                <p class="text-gray-600">We recommend regular cleaning and professional inspections to keep
                                    your ring looking its best.</p>
                            </li>
                        </ul>
                    </div>

                    <!-- Footer Section -->
                    <div class="py-4 mt-8">
                        <div class="w-full flex justify-end">
                            <button
                                class="bg-secondary text-white rounded-full px-6 py-2 hover:bg-purple-700 focus:outline-none">Learn
                                More</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Bottom Navbar Mobile View -->
            <nav class="fixed bottom-0 left-0 right-0 bg-[#4F3267] text-white py-1 px-2 z-20 md:hidden shadow-md">
                <ul class="flex justify-around items-center">
                    <!-- CATEGORY -->
                    <li class="flex-1 text-center">
                        <a href="#" class="flex flex-col items-center hover:text-gray-300 transition duration-200"
                            aria-label="Category">
                            <span class="material-icons text-base">category</span>
                            <span class="text-[10px] font-medium">CATEGORY</span>
                        </a>
                    </li>
                    <!-- SORT -->
                    <li class="flex-1 text-center">
                        <a href="#" class="flex flex-col items-center hover:text-gray-300 transition duration-200"
                            id="sortButton" aria-label="Sort">
                            <span class="material-icons text-base">sort</span>
                            <span class="text-[10px] font-medium">SORT</span>
                        </a>
                    </li>
                    <!-- FILTER -->
                    <li class="flex-1 text-center">
                        <a href="#" class="flex flex-col items-center hover:text-gray-300 transition duration-200"
                            id="filterButton" aria-label="Filter">
                            <span class="material-icons text-base">filter_list</span>
                            <span class="text-[10px] font-medium">FILTER</span>
                        </a>
                    </li>
                </ul>
            </nav>



            <!-- Sorting Modal (Hidden by default) -->
            <div id="sortModal"
                class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden flex items-end justify-center w-full">
                <div
                    class="bg-white rounded-t-lg shadow-lg p-4 w-full sm:max-h-[60vh] max-h-[70vh] sm:w-11/12 md:w-1/2 transition-transform transform translate-y-full fade-out overflow-y-auto">
                    <div class="bg-gray-200 py-2 rounded-t-lg">
                        <!-- Adjusting text size for extra small screens -->
                        <h2 class="text-center text-[#4F3267] sm:text-lg text-xl font-semibold mb-4">Sort Designs By</h2>
                    </div>

                    <ul class="text-left text-gray-700 space-y-2">
                        <!-- Adjusting text size for extra small screens -->
                        <li><a href="#" class="block hover:underline sm:text-sm text-base">Latest</a></li>
                        <li><a href="#" class="block hover:underline sm:text-sm text-base">Discount</a></li>
                        <li><a href="#" class="block hover:underline sm:text-sm text-base">Featured</a></li>
                        <li><a href="#" class="block hover:underline sm:text-sm text-base">Price: Low to High</a>
                        </li>
                        <li><a href="#" class="block hover:underline sm:text-sm text-base">Price: High to Low</a>
                        </li>
                        <li><a href="#" class="block hover:underline sm:text-sm text-base">Customer Rating</a></li>
                    </ul>
                </div>
            </div>



            <!-- Filter Modal (Hidden by default) -->
            <div id="filterModal" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden">
                <div
                    class="fixed inset-x-0 bottom-0 bg-white rounded-t-3xl p-6 h-full overflow-y-scroll transition-transform transform translate-y-full">
                    <div class="flex items-center mb-4">
                        <button id="closeFilterModal" class="mt-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                            <span class="material-icons">close</span>
                        </button>
                        <h2 class="text-xl font-semibold text-gray-800 leading-tight ml-2">Filters</h2>
                    </div>


                    <!-- Filter Options (Left Panel and Right Content) -->
                    <div class="flex h-full">
                        <!-- Left Filter Categories -->
                        <ul id="filterCategories"
                            class="w-1/3 border-r bg-gray-200 border-gray-200 space-y-4 text-sm text-gray-700 p-4">
                            <li class="leading-loose"><a href="#" class="text-blue-500 hover:underline"
                                    onclick="showFilter('price', this)">Price</a></li>
                            <li class="leading-loose"><a href="#" class="hover:underline"
                                    onclick="showFilter('discounts', this)">Discounts</a></li>
                            <li class="leading-loose"><a href="#" class="hover:underline"
                                    onclick="showFilter('discountRanges', this)">Discount Ranges</a></li>
                            <li class="leading-loose"><a href="#" class="hover:underline"
                                    onclick="showFilter('productType', this)">Product Type</a></li>
                            <li class="leading-loose"><a href="#" class="hover:underline"
                                    onclick="showFilter('weightRanges', this)">Weight Ranges</a></li>
                            <li class="leading-loose"><a href="#" class="hover:underline"
                                    onclick="showFilter('material', this)">Material</a></li>
                            <li class="leading-loose"><a href="#" class="hover:underline"
                                    onclick="showFilter('metal', this)">Metal</a></li>
                            <li class="leading-loose"><a href="#" class="hover:underline"
                                    onclick="showFilter('occasion', this)">Occasion</a></li>
                            <li class="leading-loose"><a href="#" class="hover:underline text-pink-500">Show More
                                    Filters</a></li>
                        </ul>

                        <!-- Right Filter Values (Dynamic Content Area) -->
                        <div id="filterContent" class="w-2/3 p-4 space-y-4">
                            <!-- This content will change dynamically based on the selected filter -->
                        </div>
                    </div>

                    <!-- Clear and Apply Buttons -->
                    <div class="flex mt-4 space-x-2">
                        <button
                            class="w-full bg-gray-200 text-gray-600 py-2 rounded-lg shadow hover:bg-gray-300 transition duration-200 ease-in-out">Clear
                            All</button>
                        <button
                            class="w-full bg-gradient-to-r from-pink-500 to-purple-700 text-white py-2 rounded-lg shadow hover:from-purple-600 hover:to-purple-800 transition duration-200 ease-in-out">APPLY
                            FILTERS</button>
                    </div>

                </div>
            </div>

    </main>



    <!-- Modal Structure -->
    <div id="videoCallModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-2xl w-full max-w-3xl p-6 shadow-xl relative">
            <!-- Close Button -->
            <div class="relative">
                <button onclick="closeVideoModal()"
                    class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-xl transition duration-200 ease-in-out">
                    &times;
                </button>

                <!-- Modal Header -->
                <h2 class="text-lg font-semibold bg-secondary p-4 text-center mb-4 text-primary rounded-lg shadow-md">
                    Live Video Call at Your Convenience!
                </h2>
            </div>

            <div class="flex flex-col md:flex-row items-start gap-4">
                <!-- Left Section with Image/Video -->
                <div class="w-full md:w-1/2 bg-white rounded-xl p-4 shadow-md flex flex-col items-center">
                    <!-- Video Element -->
                    <video src="{{ asset('asset/videos/popup.mp4') }}" class="w-full rounded-lg object-cover"></video>

                    <!-- Description Text -->
                    <p class="text-xs text-center text-primary px-4 py-2 bg-purple-50 rounded-lg mt-2 max-w-xs">
                        Want to get a closer look? Hop on a video call with our design consultants and see your favorite
                        designs live.
                    </p>

                    <!-- Additional Note -->
                    <p class="mt-4 text-center text-xs text-gray-500 bg-yellow-50 px-3 py-2 rounded-lg w-full max-w-xs">
                        Real images and videos will be shared via WhatsApp
                    </p>
                </div>

                <!-- Right Section with Inputs -->
                <div class="w-full md:w-1/2 bg-white rounded-xl p-4 shadow-md flex flex-col items-center">
                    <!-- Mobile Number -->
                    <div class="flex mb-6 w-full">
                        <div class="flex-shrink-0">
                            <input type="text" value="+91" readonly
                                class="w-16 px-4 py-3 bg-secondary border border-transparent rounded-l-lg text-sm text-center focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                        </div>
                        <div class="flex-1 relative">
                            <input type="tel" placeholder="Enter your mobile number" maxlength="10"
                                pattern="[0-9]{10}" required
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

                    <!-- Pincode Input with Locate Me Button -->
                    <div class="w-full">
                        <div class="flex w-full">
                            <input type="text" placeholder="Enter Pincode*"
                                class="flex-grow px-4 py-3 bg-secondary border border-transparent rounded-l-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                            <button
                                class="px-4 py-3 bg-secondary text-secondary font-medium text-xs rounded-r-lg hover:bg-primary-dark focus:outline-none focus:ring-1 focus:ring-purple-600 transition">
                                LOCATE ME
                            </button>
                        </div>
                    </div>

                    <!-- Language Preference Section -->
                    <div>
                        <p class="text-gray-600 font-medium text-sm">Language Preference</p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <button class="px-3 py-1 rounded-full bg-purple-500 text-white text-xs">English</button>
                            <button class="px-3 py-1 rounded-full bg-purple-500 text-white text-xs">Hindi</button>
                            <button class="px-3 py-1 rounded-full bg-purple-500 text-white text-xs">Tamil</button>
                            <button class="px-3 py-1 rounded-full bg-purple-500 text-white text-xs">Telugu</button>
                            <button class="px-3 py-1 rounded-full bg-purple-500 text-white text-xs">Marathi</button>
                            <button class="px-3 py-1 rounded-full bg-purple-500 text-white text-xs">Gujarati</button>
                            <button class="px-3 py-1 rounded-full bg-purple-500 text-white text-xs">Malayalam</button>
                            <button class="px-3 py-1 rounded-full bg-purple-500 text-white text-xs">Others</button>
                        </div>
                    </div>

                    <!-- Schedule Button -->
                    <button
                        class="w-full py-2 bg-green-400 text-white rounded-lg font-bold text-base mt-20 flex items-center justify-center">
                        <span class="material-icons mr-2">videocam</span> <!-- Video Camera Icon -->
                        SCHEDULE A VIDEO CALL
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Overlay -->
    <div id="overlaySimilarImages" class="fixed inset-0 bg-black bg-opacity-50 hidden z-10"></div>

    <!-- Modal Similar Designs-->
    <div id="similarModal"
        class="fixed inset-x-0 bottom-0 z-20 hidden bg-white shadow-xl rounded-t-[20px] p-6 transition-transform transform translate-y-full ring-1 ring-gray-200">
        <button id="closeModal"
            class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 transition duration-150 ease-in-out text-2xl">&times;</button>

        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Similar Designs</h2>

        <!-- Slider Container -->
        <div class="flex items-center justify-center space-x-4">
            <!-- Left Arrow -->
            <button id="prevBtn"
                class="flex items-center justify-center w-12 h-12 rounded-full bg-gray-200 hover:bg-gray-300 text-gray-600 transition duration-150 ease-in-out focus:outline-none">
                <i class="fas fa-chevron-left"></i>
            </button>


            <!-- Slider Items -->
            <div id="slider" class="flex overflow-x-auto space-x-4 scrollbar-hide w-full mx-4">
                <!-- Example items in slider -->
                <div
                    class="min-w-[300px] text-center bg-white p-4 rounded-lg shadow-lg transition-transform duration-150 ease-in-out">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Cyclonic Circle Diamond Ring"
                        class="w-48 h-48 object-cover rounded-md mx-auto">
                    <p class="mt-2 font-semibold text-gray-600">₹18,722</p>
                    <p class="text-sm text-gray-500">Cyclonic Circle Diamond Ring</p>
                </div>
                <div
                    class="min-w-[300px] text-center bg-white p-4 rounded-lg shadow-lg transition-transform duration-150 ease-in-out">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Gemstone Delight Ring"
                        class="w-48 h-48 object-cover rounded-md mx-auto">
                    <p class="mt-2 font-semibold text-gray-600">₹17,335</p>
                    <p class="text-sm text-gray-500">Gemstone Delight Ring</p>
                </div>
                <div
                    class="min-w-[300px] text-center bg-white p-4 rounded-lg shadow-lg transition-transform duration-150 ease-in-out">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Ella Diamond Ring"
                        class="w-48 h-48 object-cover rounded-md mx-auto">
                    <p class="mt-2 font-semibold text-gray-600">₹20,289</p>
                    <p class="text-sm text-gray-500">Ella Diamond Ring</p>
                </div>
                <div
                    class="min-w-[300px] text-center bg-white p-4 rounded-lg shadow-lg transition-transform duration-150 ease-in-out">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Little Mermaid Diamond Ring"
                        class="w-48 h-48 object-cover rounded-md mx-auto">
                    <p class="mt-2 font-semibold text-gray-600">₹17,221</p>
                    <p class="text-sm text-gray-500">Little Mermaid Diamond Ring</p>
                </div>
                <div
                    class="min-w-[300px] text-center bg-white p-4 rounded-lg shadow-lg transition-transform duration-150 ease-in-out">
                    <img src="{{ asset('asset/img/testing.png') }}" alt="Little Mermaid Diamond Ring"
                        class="w-48 h-48 object-cover rounded-md mx-auto">
                    <p class="mt-2 font-semibold text-gray-600">₹17,221</p>
                    <p class="text-sm text-gray-500">Little Mermaid Diamond Ring</p>
                </div>
            </div>

            <!-- Right Arrow -->
            <button id="nextBtn"
                class="flex items-center justify-center w-12 h-12 rounded-full bg-gray-200 hover:bg-gray-300 text-gray-600 transition duration-150 ease-in-out focus:outline-none">
                <i class="fas fa-chevron-right"></i>
            </button>

        </div>
    </div>

    <script>
        const viewSimilarBtn = document.getElementById('viewSimilarBtn');
        const similarModal = document.getElementById('similarModal');
        const overlaySimilarImages = document.getElementById('overlaySimilarImages');
        const closeModal = document.getElementById('closeModal');
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        // Open Modal
        viewSimilarBtn.addEventListener('click', () => {
            similarModal.classList.remove('hidden');
            similarModal.classList.remove('translate-y-full'); // Slide modal up
            overlaySimilarImages.classList.add('show'); // Show overlay
        });

        // Close Modal
        closeModal.addEventListener('click', () => {
            similarModal.classList.add('hidden');
            similarModal.classList.add('translate-y-full'); // Slide modal down
            overlaySimilarImages.classList.remove('show'); // Hide overlay
        });

        // Slider Navigation
        nextBtn.addEventListener('click', () => {
            slider.scrollBy({
                left: 200,
                behavior: 'smooth'
            });
        });

        prevBtn.addEventListener('click', () => {
            slider.scrollBy({
                left: -200,
                behavior: 'smooth'
            });
        });
    </script>

    <script>
        function openModal() {
            document.getElementById('videoCallModal').classList.remove('hidden');
        }

        function closeVideoModal() {
            document.getElementById('videoCallModal').classList.add('hidden');
        }
    </script>

    <script>
        const images = {
            "productImage1": ["{{ asset('asset/img/best10.webp') }}", "{{ asset('asset/img/best4.webp') }}",
                "{{ asset('asset/img/best8.webp') }}"
            ],
            "productImage2": ["{{ asset('asset/img/all4.jpg') }}", "{{ asset('asset/img/all11.jpg') }}",
                "{{ asset('asset/img/all12.jpg') }}"
            ]
        };

        // Current index for each product's image
        let currentIndexes = {
            "productImage1": 0,
            "productImage2": 0
        };

        // Change image function with direction and specific product ID
        function changeImage(direction, productImageId) {
            const productImage = document.getElementById(productImageId);
            const productImages = images[productImageId];

            // Fade out the current image
            productImage.classList.add('opacity-0');

            // Update the image source after the fade-out transition
            setTimeout(() => {
                currentIndexes[productImageId] += direction;

                // Wrap around the index if out of bounds
                if (currentIndexes[productImageId] < 0) {
                    currentIndexes[productImageId] = productImages.length - 1;
                } else if (currentIndexes[productImageId] >= productImages.length) {
                    currentIndexes[productImageId] = 0;
                }

                // Set new image source and fade it in
                productImage.src = productImages[currentIndexes[productImageId]];
                productImage.classList.remove('opacity-0');
            }, 300); // Duration matches CSS transition duration
        }
    </script>

    <script>
        const filterButton = document.getElementById('filterButton');
        const filterModal = document.getElementById('filterModal');
        const closeFilterModal = document.getElementById('closeFilterModal');
        const filterContent = document.getElementById('filterContent');

        // Filter Content Data
        const filterData = {
            price: `
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2 checked:bg-purple-600" checked>
        <label class="ml-2 block text-gray-500 leading-5">₹10001 - ₹15000 (372)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">₹20001 - ₹30000 (395)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Under ₹5000 (14)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Above ₹50000 (100)</label>
      </div>
    `,
            discounts: `
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2 checked:bg-purple-600" checked>
        <label class="ml-2 block text-gray-500 leading-5">Flat 15% off on Diamond Prices (11)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Flat 10% off on Diamond Prices (20)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Flat 50% off on Making Charges (1)</label>
      </div>
    `,
            discountRanges: `
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Up to 10% off (5)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Flat 20% off (8)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Flat 30% off (3)</label>
      </div>
    `,
            productType: `
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2 checked:bg-purple-600" checked>
        <label class="ml-2 block text-gray-500 leading-5">Rings (200)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Necklaces (150)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Bracelets (80)</label>
      </div>
    `,
            weightRanges: `
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2 checked:bg-purple-600" checked>
        <label class="ml-2 block text-gray-500 leading-5">0-2 grams (100)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">2-5 grams (180)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">5-10 grams (120)</label>
      </div>
    `,
            material: `
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2 checked:bg-purple-600" checked>
        <label class="ml-2 block text-gray-500 leading-5">Gold (120)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Silver (90)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Platinum (50)</label>
      </div>
    `,
            metal: `
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2 checked:bg-purple-600" checked>
        <label class="ml-2 block text-gray-500 leading-5">Yellow Gold (150)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">White Gold (90)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Rose Gold (70)</label>
      </div>
    `,
            occasion: `
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2 checked:bg-purple-600" checked>
        <label class="ml-2 block text-gray-500 leading-5">Wedding (200)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Anniversary (150)</label>
      </div>
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox ml-2">
        <label class="ml-2 block text-gray-500 leading-5">Birthday (80)</label>
      </div>
    `
        };

        // Function to Show the Selected Filter Content and Highlight the Active Category
        function showFilter(filterKey, element) {
            filterContent.innerHTML = filterData[filterKey] || '<p>No filters available for this category.</p>';

            // Remove active class from all category links
            const categoryLinks = document.querySelectorAll('#filterCategories a');
            categoryLinks.forEach(link => link.classList.remove('text-blue-500', 'font-semibold'));

            // Add active class to the clicked category link
            element.classList.add('text-blue-500', 'font-semibold');
        }

        // Event Listeners to Toggle the Modal
        filterButton.addEventListener('click', () => {
            filterModal.classList.remove('hidden');
            setTimeout(() => {
                filterModal.querySelector('div').classList.remove('translate-y-full');
            }, 50); // Delay to allow smooth transition
        });

        closeFilterModal.addEventListener('click', () => {
            filterModal.querySelector('div').classList.add('translate-y-full');
            setTimeout(() => {
                filterModal.classList.add('hidden');
            }, 300); // Delay hiding until transition ends
        });

        // Close modal if clicked outside content
        filterModal.addEventListener('click', (e) => {
            if (e.target === filterModal) {
                closeFilterModal.click();
            }
        });

        //Short Button

        const sortButton = document.getElementById('sortButton');
        const sortModal = document.getElementById('sortModal');
        const modalContent = sortModal.querySelector('.bg-white');

        sortButton.addEventListener('click', () => {
            sortModal.classList.remove('hidden');
            modalContent.classList.remove('translate-y-full', 'fade-out');
            modalContent.classList.add('fade-in');
        });

        sortModal.addEventListener('click', (e) => {
            if (e.target === sortModal) {
                modalContent.classList.add('fade-out');
                modalContent.classList.remove('fade-in');
                setTimeout(() => {
                    sortModal.classList.add('hidden');
                    modalContent.classList.add('translate-y-full');
                }, 300);
            }
        });
    </script>
@endsection
