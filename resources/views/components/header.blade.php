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
        width: 40px;
        height: 40px;
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
        class="fixed inset-0 z-40 bg-gray-50 transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex justify-between items-center bg-purple-800 p-4">
            <button id="close-menu" class="text-white text-2xl">&times;</button>
        </div>

        <!-- Scrollable Content Area -->
        <div class="p-4 pb-20 h-screen overflow-y-auto scrollbar-hide">
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

            <!-- Recently Viewed Section -->
            <div class="mb-4">
                <h3 class="font-bold mb-2">Your Recently Viewed</h3>
                <div class="bg-gray-100 p-2 rounded">
                    <p class="text-sm text-gray-600">Check out your recently viewed section</p>
                </div>
            </div>

            <!-- Menu Items Section -->
            <div class="space-y-2">
                <div class="menu-item flex items-center space-x-4">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="Earrings"
                        class="rounded-full w-[100px] h-[100px]" />
                    <span
                        class="bg-white text-black border border-gray-300 rounded-[12px] px-4 py-6 w-full shadow-lg block text-left">Earrings</span>
                </div>
                <div class="menu-item flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="Rings" class="rounded-full w-[40px] h-[40px]" />
                    <span>Rings</span>
                </div>
                <div class="menu-item flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="Bracelets & Bangles"
                        class="rounded-full w-[40px] h-[40px]" />
                    <span>Bracelets & Bangles</span>
                </div>
                <div class="menu-item flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="Solitaires" class="rounded-full w-[40px] h-[40px]" />
                    <span>Solitaires</span>
                </div>
                <div class="menu-item flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="Mangalsutras" class="rounded-full w-[40px] h-[40px]" />
                    <span>Mangalsutras</span>
                </div>
                <div class="menu-item flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="Necklaces" class="rounded-full w-[40px] h-[40px]" />
                    <span>Necklaces</span>
                </div>
                <div class="menu-item flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="Men's Jewellery" class="rounded-full w-[40px] h-[40px]" />
                    <span>Men's Jewellery</span>
                </div>
            </div>

            <!-- Image Cards Section -->
            <div class="grid grid-cols-2 gap-4 mb-6 mt-4">
                <div class="relative rounded-lg overflow-hidden">
                    <img src="{{ asset('asset/img/best10.webp') }}" alt="Fast Delivery" class="w-full h-auto" />
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white p-4">
                        <p class="text-sm font-semibold">Fast Delivery</p>
                    </div>
                </div>
                <div class="relative rounded-lg overflow-hidden">
                    <img src="{{ asset('asset/img/best1.webp') }}" alt="New In" class="w-full h-auto" />
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white p-4">
                        <p class="text-sm font-semibold">New In</p>
                    </div>
                </div>
                <div class="relative rounded-lg overflow-hidden">
                    <img src="{{ asset('asset/img/best3.webp') }}" alt="Necklaces" class="w-full h-auto" />
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white p-4">
                        <p class="text-sm font-semibold">Necklaces</p>
                    </div>
                </div>
                <div class="relative rounded-lg overflow-hidden">
                    <img src="{{ asset('asset/img/best2.webp') }}" alt="For Kids" class="w-full h-auto" />
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white p-4">
                        <p class="text-sm font-semibold">For Kids</p>
                    </div>
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
    <header class="bg-white shadow-md relative">

        <div class="container mx-auto flex items-center justify-between py-4">

            <!-- Mobile Toggle Button -->
            <button id="open-menu" class="lg:hidden text-gray-600 hover:text-purple-600 focus:outline-none ml-5">
                <span class="material-icons">menu</span>
            </button>

            <!-- Logo -->
            <div class="w-10">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="w-full h-auto">
            </div>

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
                <a href="{{route('gold')}}"
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
                <a href="#"
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
            <div class="flex items-center space-x-4">
                <img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" alt="Flag"
                    class="w-6 h-4 mr-2">
                <span class="material-icons text-gray-600">person</span>
                <span class="material-icons text-gray-600">favorite</span>
                <div class="relative">
                    <span class="material-icons text-gray-600">shopping_cart</span>
                    <span
                        class="absolute -top-2 -right-2 bg-purple-600 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">0</span>
                </div>
            </div>
        </div>
    </header>
</div>

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
        mobileMenu.classList.remove('translate-x-full');
    }

    function closeMenu() {
        mobileMenu.classList.add('translate-x-full');
    }

    openMenuBtn.addEventListener('click', openMenu);
    closeMenuBtn.addEventListener('click', closeMenu);
</script>
