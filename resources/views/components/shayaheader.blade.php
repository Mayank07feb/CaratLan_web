<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

{{-- Top Bar --}}
<nav class="bg-[#DDF2EF] flex justify-center">
    <div class="text-sm p-2">Buy 2 or more and Get Extra 5% Off</div>
</nav>

{{-- Header --}}
<nav class="bg-white dark:bg-black antialiased">
    <div class="max-w-screen-xl px-4 mx-auto py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="#" class="font-bold text-gray-900 dark:text-white text-xl">SHAYA</a>
                </div>

                {{-- Desktop Menu --}}
                <ul class="hidden lg:flex items-center space-x-6">
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Earrings</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Necklaces</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Bracelets</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Rings</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">More Styles</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Stories</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Gifts</a></li>
                </ul>
            </div>

            {{-- Icons Section --}}
            <div class="flex items-center space-x-4">
                <button><i class="ri-search-line text-gray-900 dark:text-white text-xl"></i></button>
                <button id="cartButton"><i class="ri-shopping-cart-line text-gray-900 dark:text-white text-xl"></i></button>
                <button><i class="ri-heart-line text-gray-900 dark:text-white text-xl"></i></button>
                <button id="userDropdownButton"><i class="ri-user-line text-gray-900 dark:text-white text-xl"></i></button>
                <button class="lg:hidden p-2 text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md" id="mobile-menu-toggle">
                    <span class="sr-only">Open Menu</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="lg:hidden bg-gray-50 dark:bg-gray-700 rounded-lg mt-4 px-4 py-3 hidden">
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

{{-- Filter Nav --}}
<nav class="flex items-center justify-between bg-gray-100 p-4 shadow-md">
    <div class="text-lg font-semibold text-gray-800">
        Exploring <span class="text-gray-600">Silver</span>
    </div>
    
    <ul class="hidden md:flex items-center space-x-4">
        <button class="bg-black text-white p-2"><li class="cursor-pointer font-medium">Sort By</li></button>
        <button class="bg-white border border-black text-black p-2"><li class="cursor-pointer font-medium">Popular</li></button>
        <button class="bg-black text-white p-2 flex gap-2"><li class="cursor-pointer font-medium">Filter</li><i class="ri-filter-3-fill "></i> </button>
        <li class="cursor-pointer font-medium p-2">Silver</li>
        <li class="cursor-pointer font-medium p-2">Mehfil</li>
    </ul>
    
    <div class="text-sm font-medium text-gray-600">
        42 Designs
    </div>
</nav>

@yield('content')

<script>
    // Toggle for Mobile Menu
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        this.setAttribute('aria-expanded', menu.classList.contains('hidden') ? 'false' : 'true');
    });

    // Cart Button Toggle Placeholder
    document.getElementById('cartButton').addEventListener('click', function() {
        alert('Cart dropdown logic here');
    });

    // User Dropdown Toggle Placeholder
    document.getElementById('userDropdownButton').addEventListener('click', function() {
        alert('User account dropdown logic here');
    });
</script>
