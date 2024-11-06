<style>
    .mega-menu {
        display: none;
        left: 0;
        position: absolute;
        text-align: left;
        width: 100%;
    }

    .hoverable {
        position: static;
    }

    .hoverable:hover .mega-menu {
        display: block;
    }

    .menu-item {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #e0e0e0;
    }

    .menu-item img {
        width: 100px;
        height: 100px;
        margin-right: 10px;
    }

    /* Custom class to hide the scrollbar but keep scrolling functional */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<div class="font-sans bg-gray-50">
    <!-- Mobile menu overlay -->
    <div id="mobile-menu"
        class="mt-24 fixed inset-0 z-40 bg-gray-50 transform -translate-x-full transition-transform duration-700 ease-custom">
        <!-- Scrollable Content Area -->
        <div class="p-4 pb-20 h-screen overflow-y-auto scrollbar-hide mt-5">
            <!-- Slider with Hidden Scrollbar but Working -->
            <div class="flex space-x-2 mb-4 overflow-x-auto py-6 scrollbar-hide">
                <button class="bg-purple-100 text-purple-800 px-3 py-2 rounded whitespace-nowrap flex items-center">
                    <span class="material-icons mr-1">home</span> Try at Home
                </button>
                <button class="bg-green-100 text-green-800 px-3 py-2 rounded whitespace-nowrap flex items-center">
                    <span class="material-icons mr-1">video_call</span> Video Call
                </button>
                <button class="bg-pink-100 text-pink-800 px-3 py-2 rounded whitespace-nowrap flex items-center">
                    <span class="material-icons mr-1">store</span> Find Store
                </button>
                <button class="bg-yellow-100 text-yellow-800 px-3 py-2 rounded whitespace-nowrap flex items-center">
                    <span class="material-icons mr-1">emoji_events</span> POP!
                </button>
                <button class="bg-purple-100 text-purple-800 px-3 py-2 rounded whitespace-nowrap flex items-center">
                    <span class="material-icons mr-1">home</span> Try at Home
                </button>
                <button class="bg-green-100 text-green-800 px-3 py-2 rounded whitespace-nowrap flex items-center">
                    <span class="material-icons mr-1">video_call</span> Video Call
                </button>
                <button class="bg-pink-100 text-pink-800 px-3 py-2 rounded whitespace-nowrap flex items-center">
                    <span class="material-icons mr-1">store</span> Find Store
                </button>
                <button class="bg-yellow-100 text-yellow-800 px-3 py-2 rounded whitespace-nowrap flex items-center">
                    <span class="material-icons mr-1">emoji_events</span> POP!
                </button>
            </div>

            <!-- Menu Items Section -->
            <div class="space-y-2">
                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}"
                        class="rounded-[30px] object-cover w-16 h-16 xs:w-12 xs:h-12" />
                    <div
                        class="bg-white leading-[18px] pl-4 border-b-0 text-[#4f3267] text-left border border-gray-300 rounded-[12px] px-4 py-4 w-full shadow-lg block">
                        <span class="text-sm sm:text-xs xs:text-[8px] block">Your Recently Viewed</span>
                        <p class="text-sm sm:text-xs xs:text-[4px]">Have a look at your Recently viewed section</p>
                    </div>
                </div>

                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="Earrings"
                        class="rounded-[30px] object-cover w-16 h-16 xs:w-12 xs:h-12" />
                    <span
                        class="bg-white text-[1.3rem] leading-[18px] pl-4 border-b-0 text-[#4f3267] text-left border border-gray-300 rounded-[12px] px-4 py-4 w-full shadow-lg block">Earrings</span>
                </div>

                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="Rings"
                        class="rounded-[30px] object-cover w-16 h-16 xs:w-12 xs:h-12" />
                    <span
                        class="bg-white text-[1.3rem] leading-[18px] pl-4 border-b-0 text-[#4f3267] text-left border border-gray-300 rounded-[12px] px-4 py-4 w-full shadow-lg block">Rings</span>
                </div>

                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="Bracelets & Bangles"
                        class="rounded-[30px] object-cover w-16 h-16 xs:w-12 xs:h-12" />
                    <span
                        class="bg-white text-[1.3rem] leading-[18px] pl-4 border-b-0 text-[#4f3267] text-left border border-gray-300 rounded-[12px] px-4 py-4 w-full shadow-lg block">Bracelets
                        & Bangles</span>
                </div>

                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="Solitaires"
                        class="rounded-[30px] object-cover w-16 h-16 xs:w-12 xs:h-12" />
                    <span
                        class="bg-white text-[1.3rem] leading-[18px] pl-4 border-b-0 text-[#4f3267] text-left border border-gray-300 rounded-[12px] px-4 py-4 w-full shadow-lg block">Solitaires</span>
                </div>

                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="Mangalsutras"
                        class="rounded-[30px] object-cover w-16 h-16 xs:w-12 xs:h-12" />
                    <span
                        class="bg-white text-[1.3rem] leading-[18px] pl-4 border-b-0 text-[#4f3267] text-left border border-gray-300 rounded-[12px] px-4 py-4 w-full shadow-lg block">Mangalsutras</span>
                </div>

                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="Necklaces"
                        class="rounded-[30px] object-cover w-16 h-16 xs:w-12 xs:h-12" />
                    <span
                        class="bg-white text-[1.3rem] leading-[18px] pl-4 border-b-0 text-[#4f3267] text-left border border-gray-300 rounded-[12px] px-4 py-4 w-full shadow-lg block">Necklaces</span>
                </div>

                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="Men's Jewellery"
                        class="rounded-[30px] object-cover w-16 h-16 xs:w-12 xs:h-12" />
                    <span
                        class="bg-white text-[1.3rem] leading-[18px] pl-4 border-b-0 text-[#4f3267] text-left border border-gray-300 rounded-[12px] px-4 py-4 w-full shadow-lg block">Men's
                        Jewellery</span>
                </div>
            </div>



            <!-- Image Cards Section -->
            <div class="grid grid-cols-2 gap-4 mb-6 mt-4">
                <div class="relative rounded-[14px] overflow-hidden">
                    <img src="{{ asset('asset/img/best10.webp') }}" alt="Fast Delivery" class="w-full h-auto" />
                    <div class="absolute inset-0 flex items-end justify-start bg-black bg-opacity-50 text-white p-4">
                        <p class="text-2xl font-semibold">Fast Delivery</p>
                    </div>
                </div>
                <div class="relative rounded-[14px] overflow-hidden">
                    <img src="{{ asset('asset/img/best1.webp') }}" alt="New In" class="w-full h-auto" />
                    <div class="absolute inset-0 flex items-end justify-start bg-black bg-opacity-50 text-white p-4">
                        <p class="text-2xl font-semibold">New In</p>
                    </div>
                </div>
                <div class="relative rounded-[14px] overflow-hidden">
                    <img src="{{ asset('asset/img/best3.webp') }}" alt="Necklaces" class="w-full h-auto" />
                    <div class="absolute inset-0 flex items-end justify-start bg-black bg-opacity-50 text-white p-4">
                        <p class="text-2xl font-semibold">Necklaces</p>
                    </div>
                </div>
                <div class="relative rounded-[14px] overflow-hidden">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="For Kids" class="w-full h-auto" />
                    <div class="absolute inset-0 flex items-end justify-start bg-black bg-opacity-50 text-white p-4">
                        <p class="text-2xl font-semibold">For Kids</p>
                    </div>
                </div>
            </div>

            <div class="flex space-x-4 p-4">
                <!-- First Box -->
                <div class="border border-purple-300 rounded-lg p-4 w-1/2 hover:shadow-lg transition-shadow">
                    <div class="text-pink-500 font-semibold">PEP!</div>
                    <div class="mt-2 font-bold">
                        Pay 9 instalments, and the 10th is on us!
                    </div>
                    <a href="#" class="mt-2 text-pink-500 underline">Know more</a>
                </div>

                <!-- Second Box -->
                <div class="border border-purple-300 rounded-lg p-4 w-1/2 hover:shadow-lg transition-shadow">
                    <div class="text-pink-500 font-semibold">Gold</div>
                    <div class="mt-2 font-bold">
                        Buy Digital Gold An easier way of investing in pure 24Kt gold
                    </div>
                    <a href="#" class="mt-2 text-pink-500 underline">Learn more</a>
                </div>
            </div>

            <div class="bg-[#f8f2f7] py-10 px-6">
                <!-- Links Section -->
                <div class="flex flex-col items-start space-y-2 text-xs text-gray-700 mb-6">
                    <a href="#" class="hover:underline">OUR STORY</a>
                    <a href="#" class="hover:underline">TRACK YOUR ORDER</a>
                </div>

                <!-- Sign Up and Log In Buttons -->
                <div class="flex justify-center space-x-4 mb-8">
                    <div class="flex-1">
                        <button
                            class="w-full border border-pink-500 text-pink-500 text-sm px-8 py-2 rounded-[12px] hover:bg-pink-100 transition">
                            Sign Up
                        </button>
                    </div>
                    <div class="flex-1">
                        <button
                            class="w-full border border-pink-500 text-pink-500 text-sm px-8 py-2 rounded-[12px] hover:bg-pink-100 transition">
                            Log In
                        </button>
                    </div>
                </div>

                <!-- Find a Store Button -->
                <div class="flex justify-center">
                    <button
                        class="w-full bg-gradient-to-r from-pink-500 to-purple-500 text-white text-sm px-20 py-3 rounded-[14px] shadow-lg hover:opacity-90 transition">
                        Find a Store
                    </button>
                </div>

            </div>


        </div>
    </div>



    <!-- Top Banner -->
    <div class="relative bg-primary text-white text-sm py-4">
        <div id="first-text" class="mt-1 absolute inset-0 text-center transition-opacity duration-500">
            CaratLane - A Tanishq Partnership
        </div>
        <div id="second-text" class="mt-1 absolute inset-0 text-center opacity-0 transition-opacity duration-500">
            Introducing CardzLane: UP TO 70% OFF | Plan your purchase here
        </div>
    </div>




    <!-- Main Header -->
    <header class="bg-white shadow-md fixed w-full top-0 z-50">

        <div class="container mx-auto flex items-center justify-between py-4">



            <div class="flex flex-col w-full px-4 md:hidden"> <!-- Hide on medium and larger screens -->
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-center">
                        <!-- Mobile Toggle Button -->
                        <button id="open-menu"
                            class="lg:hidden text-gray-600 hover:text-purple-600 focus:outline-none">
                            <span class="material-icons">menu</span>
                        </button>

                        <button id="close-menu" class="hidden text-gray-600 hover:text-purple-600 focus:outline-none">
                            <span class="material-icons">close</span>
                        </button>


                        <!-- Company Logo -->
                        <img src="{{ asset('asset/img/logo.png') }}" alt="Company Logo"
                            class="h-8 ml-3 block lg:hidden" />

                        <!-- Delivery & PinCode Section -->
                        <div class="flex flex-col ml-4">
                            <a href="#" class="text-gray-600 hover:text-purple-600 text-xs">Delivery &
                                Stores</a>
                            <a href="#" class="text-pink-600 hover:text-purple-600 text-xs">Enter PinCode</a>
                        </div>
                    </div>

                    <!-- Right Icons -->
                    <div class="flex items-center space-x-4">
                        <span class="material-icons text-gray-600">store</span>
                        <a href=""> <span class="material-icons text-gray-600">favorite</span></a>
                        <div class="relative">
                            <span class="material-icons text-gray-600">shopping_cart</span>
                            <span
                                class="absolute -top-2 -right-2 bg-purple-600 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">0</span>
                        </div>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="flex items-center mt-4 w-full">
                    <input type="text" placeholder="Search Relationship"
                        class="border border-[#de57e5] bg-[#faf6ff] text-gray-700 rounded-l-[10px] h-12 px-4 w-full focus:outline-none focus:ring-2 focus:ring-[#de57e5]">
                    <button
                        class="bg-gradient-to-r from-[#de57e5] to-[#8863fb] text-white rounded-r-[10px] h-12 px-4 flex items-center justify-center hover:from-pink-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        <span class="material-icons">search</span>
                    </button>
                </div>


                {{-- <div class="scroll-selection w-full max-w-3xl mx-auto mt-4">
                    <div class="flex overflow-x-auto pb-2 space-x-4">
                        <div class="flex flex-col items-center justify-center w-20 h-20 flex-shrink-0">
                            <img src="{{ asset('asset/img/best2.webp') }}"
                                class="rounded-full w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col items-center justify-center w-20 h-20 flex-shrink-0">
                            <img src="{{ asset('asset/img/best2.webp') }}"
                                class="rounded-full w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col items-center justify-center w-20 h-20 flex-shrink-0">
                            <img src="{{ asset('asset/img/best2.webp') }}"
                                class="rounded-full w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col items-center justify-center w-20 h-20 flex-shrink-0">
                            <img src="{{ asset('asset/img/best2.webp') }}"
                                class="rounded-full w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col items-center justify-center w-20 h-20 flex-shrink-0">
                            <img src="{{ asset('asset/img/best2.webp') }}"
                                class="rounded-full w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col items-center justify-center w-20 h-20 flex-shrink-0">
                            <img src="{{ asset('asset/img/best2.webp') }}"
                                class="rounded-full w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col items-center justify-center w-20 h-20 flex-shrink-0">
                            <img src="{{ asset('asset/img/best2.webp') }}"
                                class="rounded-full w-full h-full object-cover" />
                        </div>
                    </div>
                </div> --}}

            </div>




            <!-- Logo -->
            <a href="{{ route('home') }}">
                <div class="w-10  hidden md:block">
                    <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="w-full h-auto">
                </div>
            </a>
            <!-- Navigation -->
            <nav class="hidden lg:flex space-x-6">
                <div class="hoverable relative">
                    <a href="#"
                        class="relative text-gray-600 hover:text-purple-600 text-sm font-semibold py-2 inline-flex items-center group">
                        <span>Ring</span>
                        <span
                            class="absolute bottom-[-20px] left-0 w-full h-[4px] bg-gradient-to-r from-pink-600 to-purple-600 transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                    </a>

                    <div class="mega-menu mt-4 bg-white border-t shadow-lg rounded-lg z-10 h-auto min-h-[450px] px-2">
                        <!-- Increased minimum height -->
                        <div class="container mx-auto">
                            <div class="flex flex-wrap py-8">

                                <!-- Left Column: SHOP BY STYLE -->
                                <div class="w-full md:w-1/6 mb-4 md:mb-0">
                                    <h2 class="text-md font-semibold mb-2">SHOP BY STYLE</h2>
                                    <ul class="space-y-1">
                                        <li class="flex items-center text-sm">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Engagement"
                                                class="w-8 h-8 mr-2">
                                            <span>ENGAGEMENT</span>
                                        </li>
                                        <li class="flex items-center text-sm">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Daily Wear"
                                                class="w-8 h-8 mr-2">
                                            <span>DAILY WEAR</span>
                                        </li>
                                        <li class="flex items-center text-sm">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Couple Rings"
                                                class="w-8 h-8 mr-2">
                                            <span>COUPLE RINGS</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Left Column: Duplicate -->
                                <div class="w-full md:w-1/5 mb-4 md:mb-0">
                                    <h2 class="text-md font-semibold mb-2">STYLE</h2>
                                    <ul class="space-y-1">
                                        <li class="flex items-center text-sm">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Engagement"
                                                class="w-8 h-8 mr-2">
                                            <span>ENGAGEMENT RING</span>
                                        </li>
                                        <li class="flex items-center text-sm">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Daily Wear"
                                                class="w-8 h-8 mr-2">
                                            <span>DAILY WEAR RINGS</span>
                                        </li>
                                        <li class="flex items-center text-sm">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Couple Rings"
                                                class="w-8 h-8 mr-2">
                                            <span>COUPLE RINGS SAMPLE</span>
                                        </li>
                                    </ul>
                                </div>


                                <!-- Middle Column: SHOP BY METAL & STONE -->
                                <div class="w-full md:w-1/6 mb-4 md:mb-0 px-2">
                                    <h2 class="text-md font-semibold mb-2">SHOP BY METAL & STONE</h2>
                                    <ul class="space-y-1">
                                        <li class="flex items-center text-sm">
                                            <span class="w-6 h-6 rounded-full bg-yellow-400 mr-2"></span>
                                            <span>GOLD</span>
                                        </li>
                                        <li class="flex items-center text-sm">
                                            <span class="w-6 h-6 rounded-full bg-gray-200 mr-2"></span>
                                            <span>DIAMOND</span>
                                        </li>
                                        <li class="flex items-center text-sm">
                                            <span class="w-6 h-6 rounded-full bg-blue-400 mr-2"></span>
                                            <span>GEMSTONE</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Right Column: SHOP BY -->
                                <div class="w-full md:w-1/5 mb-4 md:mb-0 px-2">
                                    <h2 class="text-md font-semibold mb-2">SHOP BY</h2>
                                    <ul class="space-y-1">
                                        <li class="text-sm">Under ₹ 10k</li>
                                        <li class="text-sm">₹ 10k to ₹ 20k</li>
                                        <li class="text-sm">₹ 20k to ₹ 30k</li>
                                        <li class="text-sm">₹ 30k to ₹ 50k</li>
                                        <li class="text-sm">₹ 50k to ₹ 75k</li>
                                        <li class="text-sm">Above ₹ 75k</li>
                                        <li class="text-sm">FOR MEN</li>
                                    </ul>
                                    <button class="mt-4 text-sm py-2 transition border-t-2 border-purple-600">SHOW ALL
                                        DESIGNS</button>
                                </div>

                                <!-- Banner Column -->
                                <div class="w-full md:w-1/4 px-2 relative">
                                    <div class="relative bg-cover bg-center min-h-[300px] overflow-hidden"
                                        style="background-image: url('{{ asset('asset/img/best2.webp') }}');">
                                        <div
                                            class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 text-white text-center p-4">
                                            <h2 class="text-xl font-bold mb-2">DID YOU KNOW?</h2>
                                            <p class="mb-2">You can now add a video to your ring?</p>
                                            <button
                                                class="bg-yellow-500 text-black px-4 py-2 rounded hover:bg-yellow-600 transition">EXPLORE
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('gold') }}"
                    class="relative text-gray-600 hover:text-purple-600 text-sm font-semibold py-2 px-2 inline-flex items-center group">
                    <span>Earrings</span>
                    <span
                        class="absolute bottom-[-20px] left-0 w-full h-[4px] bg-gradient-to-r from-pink-600 to-purple-600 transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                </a>
                <a href="#"
                    class="relative text-gray-600 hover:text-purple-600 text-sm font-semibold py-2 inline-flex items-center group">
                    <span>Bracelets & Bangles</span>
                    <span
                        class="absolute bottom-[-20px] left-0 w-full h-[4px] bg-gradient-to-r from-pink-600 to-purple-600 transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                </a>
                <a href="#"
                    class="relative text-gray-600 hover:text-purple-600 text-sm font-semibold py-2 inline-flex items-center group">
                    <span>Solitaires</span>
                    <span
                        class="absolute bottom-[-20px] left-0 w-full h-[4px] bg-gradient-to-r from-pink-600 to-purple-600 transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                </a>
                <a href="#"
                    class="relative text-gray-600 hover:text-purple-600 text-sm font-semibold py-2 inline-flex items-center group">
                    <span>Mangalsutras</span>
                    <span
                        class="absolute bottom-[-20px] left-0 w-full h-[4px] bg-gradient-to-r from-pink-600 to-purple-600 transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                </a>
                <a href="#"
                    class="relative text-gray-600 hover:text-purple-600 text-sm font-semibold py-2 inline-flex items-center group">
                    <span>Necklaces</span>
                    <span
                        class="absolute bottom-[-20px] left-0 w-full h-[4px] bg-gradient-to-r from-pink-600 to-purple-600 transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                </a>
                <a href="{{ route('morejewellery') }}"
                    class="relative text-gray-600 hover:text-purple-600 text-sm font-semibold py-2 inline-flex items-center group">
                    <span>More Jewellery</span>
                    <span
                        class="absolute bottom-[-20px] left-0 w-full h-[4px] bg-gradient-to-r from-pink-600 to-purple-600 transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                </a>
            </nav>

            <!-- Search Bar -->
            <div class="hidden lg:flex items-center space-x-4">
                <div class="flex items-center">
                    <input type="text" placeholder="Search Relationship"
                        class="border border-[#de57e5] rounded-l-[10px] h-12 px-4 focus:outline-none focus:ring-2 focus:ring-[#de57e5]">
                    <button
                        class="bg-gradient-to-r from-[#de57e5] to-[#8863fb] text-white rounded-r-[10px] h-12 px-4 flex items-center justify-center hover:from-pink-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        <span class="material-icons">search</span>
                    </button>
                </div>
                <div class="flex flex-col">
                    <a href="#" class="text-gray-600 hover:text-purple-600 text-xs">Delivery & Stores</a>
                    <a href="#" class="text-pink-600 hover:text-purple-600 text-xs">Enter PinCode</a>
                </div>
            </div>


            <!-- Right Icons -->
            <div class="flex items-center space-x-4 mr-4 md:mr-0 hidden md:flex">
                <img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" alt="Flag"
                    class="w-6 h-4 mr-2">

                <!-- Profile Icon with Modal -->
                <div class="relative group">
                    <span class="material-icons text-gray-600 cursor-pointer">person</span>
                    <!-- Modal on hover after login -->
                    <div
                        class="absolute -left-52 mt-7 w-72 p-4 bg-white shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-10">
                        <!-- User Email Display -->
                        <p class="text-sm text-gray-500 mb-3">makedy07feb@gmail.com</p>

                        <!-- Divider with line and accent color -->
                        <div class="flex items-center mb-4">
                            <div class="border-t border-purple-500 w-8 mr-2"></div>
                            <div class="w-8 h-[1px] bg-primary"></div>
                        </div>

                        <!-- Account Options Links -->
                        <nav class="space-y-2">
                            <a href="{{ route('myaccount.profile') }}"
                                class="block text-gray-800 font-medium hover:text-purple-600">MY
                                ACCOUNTS</a>
                            <a href="#" class="block text-gray-800 font-medium hover:text-purple-600">OUR
                                STORY</a>
                            <a href="#" class="block text-gray-800 font-medium hover:text-purple-600">LOGOUT</a>
                        </nav>
                    </div>
                    <!-- Modal on hover, shifted more to the left -->
                    {{-- <div
                        class="absolute -left-52 mt-7 w-72 p-4 bg-white shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-10">
                        <h3 class="text-xl font-semibold text-gray-800">Your Account</h3>
                        <p class="text-sm text-gray-600 mb-4">Access account & manage your orders.</p>
                        <div class="flex space-x-2">
                            <a href="{{route('signup')}}"
                                class="w-full py-2 text-center text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg font-semibold">
                                Sign Up
                            </a>
                            <a href="{{route('login')}}"
                                class="w-full py-2 text-center text-gray-700 border border-purple-500 rounded-lg font-semibold">
                                Log In
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Wishlist Icon -->
            <a href="{{ route('wishlist') }}">
                <span class="material-icons text-gray-600">favorite</span>
            </a>

            <!-- Shopping Cart Icon with Badge -->
            <div class="relative">
                <span class="material-icons text-gray-600">shopping_cart</span>
                <span
                    class="absolute -top-2 -right-2 bg-purple-600 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">0</span>
            </div>
        </div>




</div>
</header>
</div>


{{-- <nav class="fixed bottom-0 left-0 right-0 bg-[#4F3267] text-white p-4 z-20 md:hidden">
    <ul class="flex justify-between items-center">
        <li class="flex-1 text-center">
            <a href="#" class="flex flex-row items-center justify-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <span class="text-xs">CATEGORY</span>
            </a>
        </li>
        <li class="flex-1 text-center">
            <a href="#" class="flex flex-row items-center justify-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                <span class="text-xs">NEW ARRIVALS</span>
            </a>
        </li>
        <li class="flex-1 text-center">
            <a href="#" class="flex flex-row items-center justify-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <span class="text-xs">BESTSELLERS</span>
            </a>
        </li>
    </ul>
</nav> --}}



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const firstText = document.getElementById('first-text');
        const secondText = document.getElementById('second-text');

        // After 2 seconds, hide the first text and show the second text
        setTimeout(function() {
            firstText.classList.add('opacity-0'); // Fade out the first text
            secondText.classList.remove('opacity-0'); // Fade in the second text
            secondText.classList.add('opacity-100');
        }, 2000); // 2 seconds delay
    });
</script>


<script>
    const mobileMenu = document.getElementById('mobile-menu');
    const openMenuBtn = document.getElementById('open-menu');
    const closeMenuBtn = document.getElementById('close-menu');

    function openMenu() {
        mobileMenu.classList.remove('-translate-x-full'); // Show the menu from the left
        openMenuBtn.classList.add('hidden'); // Hide the "menu" button
        closeMenuBtn.classList.remove('hidden'); // Show the "close" button
    }

    function closeMenu() {
        mobileMenu.classList.add('-translate-x-full'); // Hide the menu by moving it left
        openMenuBtn.classList.remove('hidden'); // Show the "menu" button
        closeMenuBtn.classList.add('hidden'); // Hide the "close" button
    }

    openMenuBtn.addEventListener('click', openMenu);
    closeMenuBtn.addEventListener('click', closeMenu);
</script>
