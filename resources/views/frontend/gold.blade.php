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
    </style>

    <main class="mt-12">
        <div class="hidden md:block bg-gray-100 p-6 pl-24">

            <!-- Breadcrumb and Title Section -->
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-lg font-semibold text-gray-800">
                    Jewellery
                    <span class="text-xs font-normal text-gray-600">3855 Designs</span>
                </h1>
            </div>

            <!-- Breadcrumb Navigation -->
            <nav class="text-xs text-gray-500">
                <a href="#" class="hover:underline">Home</a> &gt;
                <a href="#" class="hover:underline">Jewellery</a>
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
                        class="flex justify-between items-center mb-4 border-b border-gray-300 pb-2 pt-4 sticky top-0 bg-white z-10">
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
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">11
                                    (803)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">10
                                    (620)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">9
                                    (510)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">8
                                        (410)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">7
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
                        <h3 @click="open = !open" class="text-base font-bold text-gray-700 cursor-pointer">Price</h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">₹10,001 -
                                    ₹15,000
                                    (262)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">₹5,000 -
                                    ₹10,000 (180)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">₹15,001
                                        -
                                        ₹20,000
                                        (100)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">₹20,001
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
                        <h3 @click="open = !open" class="text-base font-bold text-gray-700 cursor-pointer">Material</h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Gold
                                    (1200)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Silver
                                    (800)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Platinum
                                    (450)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Rose
                                        Gold
                                        (300)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label
                                        class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Titanium
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
                        <h3 @click="open = !open" class="text-base font-bold text-gray-700 cursor-pointer">Occasion</h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Wedding
                                    (503)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Casual
                                    (202)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label
                                    class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Anniversary
                                    (150)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label
                                        class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Birthday
                                        (120)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label
                                        class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Graduation
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
                        <h3 @click="open = !open" class="text-base font-bold text-gray-700 cursor-pointer">Gender</h3>
                        <div x-show="open" class="mt-2">
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Women
                                    (1500)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Men
                                    (900)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox"
                                    class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Unisex
                                    (300)</label>
                            </div>

                            <!-- Additional Filters Hidden Initially -->
                            <div x-show="showMore">
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Kids
                                        (150)</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox"
                                        class="h-4 w-4 text-purple-600 focus:outline-none focus:ring-0 border-gray-300 rounded">
                                    <label class="ml-2 text-base text-gray-700 hover:text-purple-600 leading-[28px]">Babies
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
                            class="group rounded-lg relative w-full max-w-sm overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg hover:h-96">
                            <div class="p-1">
                                <span
                                    class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                <div
                                    class="absolute top-2 right-2 z-10 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                    <button class="bg-white p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                    <button
                                        class="group flex items-center bg-purple-50 text-purple-600 px-2 py-1 rounded-md text-sm hover:bg-purple-100">
                                        <i class="material-icons">image</i>
                                        <div
                                            class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-white text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] shadow-lg whitespace-nowrap">
                                            View similar</div>
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
                                    class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                    <button
                                        class="text-lg font-bold px-6 py-1 text-primary rounded-[12px] border border-purple-950">Try
                                        at Home</button>
                                    <button
                                        class="border border-green-500 text-green-500 text-xs font-bold p-2 rounded-[12px]">
                                        <i class="material-icons">camera_alt</i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 2 -->
                        <div
                            class="group rounded-lg relative w-full max-w-sm overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg hover:h-96">
                            <div class="p-1">
                                <span
                                    class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                <div
                                    class="absolute top-2 right-2 z-10 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                    <button class="bg-white p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                    <button
                                        class="group flex items-center bg-purple-50 text-purple-600 px-2 py-1 rounded-md text-sm hover:bg-purple-100">
                                        <i class="material-icons">image</i>
                                        <div
                                            class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-white text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] shadow-lg whitespace-nowrap">
                                            View similar</div>
                                    </button>
                                </div>
                                <div class="relative">
                                    <img id="productImage2" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
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
                                    class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                    <button
                                        class="text-lg font-bold px-6 py-1 text-primary rounded-[12px] border border-purple-950">Try
                                        at Home</button>
                                    <button
                                        class="border border-green-500 text-green-500 text-xs font-bold p-2 rounded-[12px]">
                                        <i class="material-icons">camera_alt</i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 3 -->
                        <div
                            class="group rounded-lg relative w-full max-w-sm overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg hover:h-96">
                            <div class="p-1">
                                <span
                                    class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                <div
                                    class="absolute top-2 right-2 z-10 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                    <button class="bg-white p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                    <button
                                        class="group flex items-center bg-purple-50 text-purple-600 px-2 py-1 rounded-md text-sm hover:bg-purple-100">
                                        <i class="material-icons">image</i>
                                        <div
                                            class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-white text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] shadow-lg whitespace-nowrap">
                                            View similar</div>
                                    </button>
                                </div>
                                <div class="relative">
                                    <img id="productImage3" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
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
                                    class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                    <button
                                        class="text-lg font-bold px-6 py-1 text-primary rounded-[12px] border border-purple-950">Try
                                        at Home</button>
                                    <button
                                        class="border border-green-500 text-green-500 text-xs font-bold p-2 rounded-[12px]">
                                        <i class="material-icons">camera_alt</i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 4 -->
                        <div
                            class="group rounded-lg relative w-full max-w-sm overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg hover:h-96">
                            <div class="p-1">
                                <span
                                    class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                <div
                                    class="absolute top-2 right-2 z-10 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                    <button class="bg-white p-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                    <button
                                        class="group flex items-center bg-purple-50 text-purple-600 px-2 py-1 rounded-md text-sm hover:bg-purple-100">
                                        <i class="material-icons">image</i>
                                        <div
                                            class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-white text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] shadow-lg whitespace-nowrap">
                                            View similar</div>
                                    </button>
                                </div>
                                <div class="relative">
                                    <img id="productImage4" src="{{ asset('asset/img/best10.webp') }}" alt="Product"
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
                                    class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                    <button
                                        class="text-lg font-bold px-6 py-1 text-primary rounded-[12px] border border-purple-950">Try
                                        at Home</button>
                                    <button
                                        class="border border-green-500 text-green-500 text-xs font-bold p-2 rounded-[12px]">
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
                                class="col-span-3 group rounded-lg relative w-full overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg hover:h-96">
                                <div class="p-1">
                                    <span
                                        class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                    <div
                                        class="absolute top-2 right-2 z-10 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                        <button class="bg-white p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                        <button
                                            class="group flex items-center bg-purple-50 text-purple-600 px-2 py-1 rounded-md text-sm hover:bg-purple-100">
                                            <i class="material-icons">image</i>
                                            <div
                                                class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-white text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] shadow-lg whitespace-nowrap">
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
                                        class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                        <button
                                            class="text-lg font-bold px-6 py-1 text-primary rounded-[12px] border border-purple-950">
                                            Try at Home
                                        </button>
                                        <button
                                            class="border border-green-500 text-green-500 text-xs font-bold p-2 rounded-[12px]">
                                            <i class="material-icons">camera_alt</i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 2 -->
                            <div
                                class="col-span-3 group rounded-lg relative w-full overflow-hidden border border-transparent shadow transition-all duration-300 ease-in-out hover:border-gray-300 hover:shadow-lg hover:h-96">
                                <div class="p-1">
                                    <span
                                        class="absolute top-2 z-10 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                                    <div
                                        class="absolute top-2 right-2 z-10 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                        <button class="bg-white p-1 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="absolute top-48 z-10 left-40 text-xs font-bold px-2 py-1 rounded">
                                        <button
                                            class="group flex items-center bg-purple-50 text-purple-600 px-2 py-1 rounded-md text-sm hover:bg-purple-100">
                                            <i class="material-icons">image</i>
                                            <div
                                                class="absolute top-1/2 right-full transform translate-y-[-50%] translate-x-[50%] opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300 ease-in-out bg-white text-purple-600 text-[10px] font-semibold px-1 py-1 rounded-[12px] shadow-lg whitespace-nowrap">
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
                                        class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                                        <button
                                            class="text-lg font-bold px-6 py-1 text-primary rounded-[12px] border border-purple-950">
                                            Try at Home
                                        </button>
                                        <button
                                            class="border border-green-500 text-green-500 text-xs font-bold p-2 rounded-[12px]">
                                            <i class="material-icons">camera_alt</i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Filter Section -->
                            <div class="col-span-6 bg-purple-50 rounded-lg p-6">
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

                </div>
            </div>

            <div class="bg-white">
                <!-- Header Section -->
                <div class="bg-primary-gradient text-white py-4 px-6 text-center">
                  <span class="text-lg lg:text-base font-bold">Know More about CaratLane</span>
                  <div>line</div>
                </div>
              
                <!-- Content Section -->
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                  <h1 class="text-3xl md:text-4xl lg:text-3xl font-bold text-gray-800 mb-4 text-center md:text-left">Rings | CaratLane</h1>
                  
                  <p class="text-gray-700 text-base md:text-lg lg:text-base leading-relaxed mb-6 text-center md:text-left">
                    Rings are among the most meaningful gifts you can offer—to a loved one or to yourself. Whether they mark a special occasion, signify a lifelong commitment, 
                    or celebrate a moment of joy, or simply reward yourself for personal achievement, rings are more than just pieces of jewellery—they symbolise love, 
                    milestones, and memories. Each ring tells a story, and at CaratLane, we believe in crafting rings that stand the test of time and resonate with the unique 
                    stories of those who wear them.
                  </p>
              
                  <p class="text-gray-700 text-base md:text-lg lg:text-base leading-relaxed mb-6 text-center md:text-left">
                    At the heart of CaratLane’s philosophy is our commitment to excellence in design and craftsmanship. Our in-house jewellery designers are passionate about 
                    creating timeless, elegant jewellery while imbuing the designs with modern sensibilities. Every ring is a product of meticulous planning, innovative design, 
                    and handcrafted perfection, ensuring that each piece is as unique as the person it is intended for and that our rings are not just beautiful but also hold a 
                    deep personal significance.
                  </p>
              
                  <!-- Rings Types Section -->
                  <div>
                    <h2 class="text-2xl md:text-3xl lg:text-2xl font-bold text-gray-800 mb-4">Types of Rings and CaratLane Collections</h2>
              
                    <ul class="list-disc pl-5 space-y-4">
                      <li class="text-primary text-lg md:text-xl lg:text-lg font-semibold">
                        <a href="#" class="hover:text-secondary">Engagement Rings: Timeless Love Tokens</a>
                      </li>
                      <li class="text-primary text-lg md:text-xl lg:text-lg font-semibold">
                        <a href="#" class="hover:text-secondary">Cocktail Rings: Glamorous Statements</a>
                      </li>
                      <li class="text-primary text-lg md:text-xl lg:text-lg font-semibold">
                        <a href="#" class="hover:text-secondary">Gold Rings: Eternal Gold Elegance</a>
                      </li>
                    </ul>
                  </div>
              
                  <!-- Footer Section -->
                  <div class="py-4 mt-8">
                    <div class="w-full flex justify-end">
                      <button class="bg-secondary text-white rounded-full px-6 py-2 hover:bg-purple-700 focus:outline-none">
                        Learn More
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              

            <!-- SORT Button Navigation (your existing code) -->
            <nav class="fixed bottom-0 left-0 right-0 bg-[#4F3267] text-white p-4 z-20 md:hidden">
                <ul class="flex justify-between items-center">
                    <!-- CATEGORY -->
                    <li class="flex-1 text-center">
                        <a href="#" class="flex flex-row items-center justify-center space-x-2">
                            <span class="material-icons">category</span>
                            <span class="text-xs">CATEGORY</span>
                        </a>
                    </li>
                    <!-- SORT -->
                    <li class="flex-1 text-center">
                        <a href="#" class="flex flex-row items-center justify-center space-x-2" id="sortButton">
                            <span class="material-icons">sort</span>
                            <span class="text-xs">SORT</span>
                        </a>
                    </li>
                    <!-- FILTER -->
                    <li class="flex-1 text-center">
                        <a href="#" class="flex flex-row items-center justify-center space-x-2" id="filterButton">
                            <span class="material-icons">filter_list</span>
                            <span class="text-xs">FILTER</span>
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

        const images = [
            "{{ asset('asset/img/best10.webp') }}", // First Image
            "{{ asset('asset/img/best4.webp') }}", // Second Image
            "{{ asset('asset/img/best8.webp') }}" // Third Image
        ];
        let currentIndex = 0;

        function changeImage(direction) {
            const productImage = document.getElementById("productImage");

            // Fade out the current image
            productImage.classList.add('opacity-0');

            setTimeout(() => {
                currentIndex += direction;

                // Loop back to the first image if we're at the end
                if (currentIndex < 0) {
                    currentIndex = images.length - 1;
                } else if (currentIndex >= images.length) {
                    currentIndex = 0;
                }

                productImage.src = images[currentIndex];

                // Fade in the new image
                productImage.classList.remove('opacity-0');
            }, 300); // Duration should match the CSS transition duration
        }
    </script>
@endsection
