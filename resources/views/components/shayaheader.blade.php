<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
                {{-- TOPBAR --}}
<nav class="bg-[#DDF2EF] flex justify-center">
<div class="text-sm p-1"> Buy 2 or more and Get Extra 5% Off</div>
</nav>

                {{-- HEADER --}}
<nav class="bg-white dark:bg-black antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="#" class="font-bold text-white text-xl ">SHAYA</a>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center justify-start gap-6 py-3 sm:justify-center">
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Earrings</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Necklaces</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Bracelets</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Rings</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">More Styles</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Stories</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Gifts</a></li>
                </ul>
            </div>

            <div class="flex items-center space-x-4 lg:space-x-2">
                <!-- Search Icon -->
                <button>
                    <i class="ri-search-line text-white text-xl"></i>
                </button>

                <!-- Cart Button (Icon) -->
                <button id="cartButton" class="text-white">
                    <svg class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                    </svg>
                </button>

                <!-- Wishlist Icon -->
                <button>
                    <i class="ri-heart-line text-white text-xl"></i>
                </button>

                <!-- User Account Icon -->
                <button id="userDropdownButton" class="text-white">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </button>

                <!-- Shopping Bag Icon -->
                <button>
                    <i class="ri-shopping-bag-line text-white text-xl"></i>
                </button>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" aria-controls="mobile-menu" aria-expanded="false" class="lg:hidden p-2 text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                    <span class="sr-only">Open Menu</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden bg-gray-50 dark:bg-gray-700 dark:border-gray-600 border border-gray-200 rounded-lg mt-4 px-4 py-3 hidden ">
            <ul>
                <li><a href="#" class="block text-sm text-gray-900 dark:text-white">Earrings</a></li>
                <li><a href="#" class="block text-sm text-gray-900 dark:text-white">Necklaces</a></li>
                <li><a href="#" class="block text-sm text-gray-900 dark:text-white">Bracelets</a></li>
                <li><a href="#" class="block text-sm text-gray-900 dark:text-white">Rings</a></li>
                <li><a href="#" class="block text-sm text-gray-900 dark:text-white">More Styles</a></li>
                <li><a href="#" class="block text-sm text-gray-900 dark:text-white">Stories</a></li>
                <li><a href="#" class="block text-sm text-gray-900 dark:text-white">Gifts</a></li>
            </ul>
        </div>
    </div>
</nav>
                    {{-- FLITER NAV --}}
                    <nav class="flex items-center justify-between bg-gray-100 p-4 shadow-md">
                        <!-- Logo / Title Section -->
                        <div class="text-lg font-semibold text-gray-800">
                            Exploring <span class="text-gray-600">Silver</span>
                        </div>
                    
                        <!-- Navigation Links -->
                        <ul class="flex space-x-4 text-gray-700">
                           <button class="bg-black text-white p-2"><li class="hover:text-gray-900 cursor-pointer font-medium">Sort BY</li></button>
                           <button class="bg-white text-black border-black p-2"> <li class="hover:text-gray-900 cursor-pointer font-medium">Popular</li></button>
                           <button class="bg-black text-white p-2"><li class="hover:text-gray-900 cursor-pointer font-medium p-2">Filter</li></button>
                            <li class="hover:text-gray-900 cursor-pointer font-medium p-2">Silver</li>
                            <li class="hover:text-gray-900 cursor-pointer font-medium p-2">Mehfil</li>
                        </ul>
                    
                        <!-- Designs Count -->
                        <div class="text-sm font-medium text-gray-600">
                            42 Designs
                        </div>
                    </nav>
                    
<script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        menu.classList.toggle('hidden');
    });

    // Cart Dropdown Toggle (Implement dropdown logic if needed)
    document.getElementById('cartButton').addEventListener('click', function() {
        const cartDropdown = document.getElementById('cartDropdown'); // Ensure you have the correct ID for the cart dropdown
        cartDropdown.classList.toggle('hidden');
    });

    // User Account Dropdown Toggle
    document.getElementById('userDropdownButton').addEventListener('click', function() {
        const userDropdown = document.getElementById('userDropdown'); // Ensure you have the correct ID for the user dropdown
        userDropdown.classList.toggle('hidden');
    });
</script>
