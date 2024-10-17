@extends('components.main')
@section('content')
    <!-- CSS to hide the scrollbar -->
    <style>
        .scrollbar-hidden {
            scrollbar-width: none;
            /* For Firefox */
        }

        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
            /* For Chrome, Safari, and Opera */
        }
    </style>
    <div class="bg-gray-100 p-6 pl-24">

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


    <!-- Page Header Section -->
    <section class="bg-white py-4 px-12 mb-0">

        <div class="container mx-auto">
            <!-- Filter Buttons -->
            <div class="mt-4 flex space-x-4">
                <!-- Active Button -->
                <button class="bg-purple-500 text-white px-4 py-2 rounded-[12px]">
                    All
                </button>

                <!-- Other Buttons -->
                <button class="bg-purple-100 px-4 py-2 rounded-[12px] hover:bg-purple-500 hover:text-white">
                    Try at Home
                </button>
                <button class="bg-purple-100 px-4 py-2 rounded-[12px] hover:bg-purple-500 hover:text-white">
                    Designs in Store
                </button>
                <button class="bg-purple-100 px-4 py-2 rounded-[12px] hover:bg-purple-500 hover:text-white">
                    Faster Delivery
                </button>
                <button class="bg-purple-100 px-4 py-2 rounded-[12px] hover:bg-purple-500 hover:text-white">
                    New In
                </button>
            </div>
        </div>
    </section>



    <div class="flex bg-white flex-col md:flex-row">
        <!-- Sidebar -->
        <aside class="w-full md:w-1/4 p-4 bg-white h-screen sticky top-0 overflow-y-auto scrollbar-hidden shadow-lg">
            <!-- Filters Heading -->
            <div
                class="flex justify-between items-center mb-4 border-b border-gray-300 pb-2 pt-4 sticky top-0 bg-white z-10">
                <h2 class="text-base font-semibold text-gray-800">FILTERS</h2>
                <a href="#" class="text-purple-600 text-sm font-medium hover:underline">CLEAR ALL</a>
            </div>

            <!-- Filter Section -->
            <div x-data="{ open: true }" class="mb-6">
                <h3 @click="open = !open" class="text-base font-medium text-gray-700 cursor-pointer">Ring Size</h3>
                <div x-show="open" class="mt-2">
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">11 (803)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">10 (620)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">9 (510)</label>
                    </div>
                    <a href="#" class="text-purple-600 text-sm mt-2 block hover:underline">22 More</a>
                </div>
            </div>

            <!-- Price Filter -->
            <div x-data="{ open: true }" class="mb-6">
                <h3 @click="open = !open" class="text-base font-medium text-gray-700 cursor-pointer">Price</h3>
                <div x-show="open" class="mt-2">
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">₹10,001 - ₹15,000 (262)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">₹5,000 - ₹10,000 (180)</label>
                    </div>
                    <a href="#" class="text-purple-600 text-sm mt-2 block hover:underline">6 More</a>
                </div>
            </div>

            <!-- Material Filter -->
            <div x-data="{ open: true }" class="mb-6">
                <h3 @click="open = !open" class="text-base font-medium text-gray-700 cursor-pointer">Material</h3>
                <div x-show="open" class="mt-2">
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Gold (1200)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Silver (800)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Platinum (450)</label>
                    </div>
                </div>
            </div>

            <!-- Occasion Filter -->
            <div x-data="{ open: true }" class="mb-6">
                <h3 @click="open = !open" class="text-base font-medium text-gray-700 cursor-pointer">Occasion</h3>
                <div x-show="open" class="mt-2">
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Wedding (503)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Casual (202)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Anniversary (150)</label>
                    </div>
                </div>
            </div>

            <!-- Gender Filter -->
            <div x-data="{ open: true }" class="mb-6">
                <h3 @click="open = !open" class="text-base font-medium text-gray-700 cursor-pointer">Gender</h3>
                <div x-show="open" class="mt-2">
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Women (1500)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Men (900)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                        <label class="ml-2 text-base text-gray-700 hover:text-purple-600">Unisex (300)</label>
                    </div>
                </div>
            </div>

            <!-- Apply Filters Button -->
            <button
                class="bg-purple-600 text-white text-sm font-medium px-4 py-2 rounded mt-4 w-full hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50">
                Apply Filters
            </button>
        </aside>








        <!-- Product Grid -->
        <div class="w-full md:w-3/4 p-4">
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-6">
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
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
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
                            <!-- Button (group class applied here for hover effects) -->
                            <button
                                class="group flex items-center bg-purple-50 text-purple-600 px-2 py-1 rounded-md text-sm hover:bg-purple-100">
                                <i class="material-icons">image</i>

                                <!-- Tooltip that slides in when hovering over the icon -->
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
                                <button onclick="changeImage(-1)" class="bg-white text-xs font-bold p-1 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <button onclick="changeImage(1)" class="bg-white text-xs font-bold p-1 rounded-full">
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

                        <!-- Hover Buttons -->
                        <div
                            class="absolute bottom-4 left-0 right-0 flex justify-between px-2 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100">
                            <button
                                class="text-lg font-bold px-6 py-1 text-primary rounded-[12px] border border-purple-950">
                                Try at Home
                            </button>
                            <button class="border border-green-500 text-green-500 text-xs font-bold p-2 rounded">
                                <i class="material-icons">camera_alt</i>
                            </button>
                        </div>
                    </div>
                </div>









                <!-- Product Card 2 -->
                <div class="border rounded-lg p-2 shadow-md relative w-full">
                    <span
                        class="absolute top-2 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                    <img src="ring.jpg" alt="Maliha Diamond Band" class="w-full h-36 object-cover my-2">
                    <div class="text-base font-semibold">₹34,024</div>
                    <div class="text-sm line-through text-gray-500">₹47,076</div>
                    <p class="text-purple-600 font-semibold text-sm mt-1">Check delivery date</p>
                    <p class="text-sm text-gray-600 mt-1">Maliha Diamond Band</p>
                    <button class="mt-2 bg-purple-600 text-white text-sm px-3 py-1 rounded">TRY AT HOME</button>
                </div>

                <!-- Product Card 3 -->
                <div class="border rounded-lg p-2 shadow-md relative w-full">
                    <span
                        class="absolute top-2 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                    <img src="bracelet.jpg" alt="Pushpo Diamond Bracelet" class="w-full h-36 object-cover my-2">
                    <div class="text-base font-semibold">₹25,967</div>
                    <div class="text-sm line-through text-gray-500">₹32,425</div>
                    <p class="text-purple-600 font-semibold text-sm mt-1">Check delivery date</p>
                    <p class="text-sm text-gray-600 mt-1">Pushpo Diamond Bracelet</p>
                    <button class="mt-2 bg-purple-600 text-white text-sm px-3 py-1 rounded">TRY AT HOME</button>
                </div>

                <!-- Product Card 4 -->
                <div class="border rounded-lg p-2 shadow-md relative w-full">
                    <span
                        class="absolute top-2 left-2 bg-yellow-200 text-yellow-800 text-xs font-bold px-2 py-1 rounded">BESTSELLER</span>
                    <img src="necklace.jpg" alt="Halo Circlet Diamond Necklace" class="w-full h-36 object-cover my-2">
                    <div class="text-base font-semibold">₹41,141</div>
                    <div class="text-sm line-through text-gray-500">₹45,570</div>
                    <p class="text-purple-600 font-semibold text-sm mt-1">Check delivery date</p>
                    <p class="text-sm text-gray-600 mt-1">Halo Circlet Diamond Necklace</p>
                    <button class="mt-2 bg-purple-600 text-white text-sm px-3 py-1 rounded">TRY AT HOME</button>
                </div>
            </div>

        </div>
    </div>

    <script>
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
