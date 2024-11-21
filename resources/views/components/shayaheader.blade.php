<!-- Include Tailwind CSS and Remix Icons -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

<!-- Top Notification Bar -->
<nav class="bg-[#DDF2EF] flex justify-center text-center">
    <div class="text-sm p-2 font-medium text-gray-700">
        <span>Buy 2 or more and Get Extra 5% Off</span>
    </div>
</nav>

<!-- Header -->
<header class="bg-white dark:bg-black border-b border-gray-200 dark:border-gray-700">
    <div class="max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo and Navigation -->
        <div class="flex items-center space-x-8">
            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle" aria-expanded="false" aria-controls="mobile-menu" class="lg:hidden p-2 text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="sr-only">Toggle Menu</span>
                <i class="ri-menu-line text-xl"></i>
            </button>
            <!-- Logo -->
            <a href="#" class="font-bold text-gray-900 dark:text-white text-xl">SHAYA</a>
            <!-- Desktop Menu -->
            <nav class="hidden lg:flex space-x-6">
                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Earrings</a>
                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Necklaces</a>
                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Bracelets</a>
                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Rings</a>
                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500">More Styles</a>
                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Stories</a>
                <a href="#" class="text-sm font-medium text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Gifts</a>
            </nav>
        </div>

        <!-- Action Icons -->
        <div class="flex items-center space-x-4">
            <button aria-label="Search" class="text-gray-900 dark:text-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="ri-search-line text-xl"></i>
            </button>
            <button id="cartButton" aria-label="Cart" class="text-gray-900 dark:text-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="ri-shopping-cart-line text-xl"></i>
            </button>
            <button aria-label="Favorites" class="text-gray-900 dark:text-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="ri-heart-line text-xl"></i>
            </button>
            <button id="userDropdownButton" aria-label="User Account" class="text-gray-900 dark:text-white hover:text-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="ri-user-line text-xl"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Sidebar Menu -->
<aside id="mobile-menu" class="fixed inset-y-0 left-0 w-full h-auto bg-white transform -translate-x-full transition-transform z-50 shadow-lg lg:hidden">
    <div class="p-4">
        <button id="close-mobile-menu" class="text-gray-900 bg-white dark:text-black text-xl">
            <i class="ri-close-line text-4xl"></i>
        </button>
        <nav class="mt-4 space-y-4 bg-white">
            <a href="#" class="block  font-medium text-gray-900 hover:text-blue-700 dark:hover:text-blue-500 text-4xl border ">Earrings</a>
            <a href="#" class="block  font-medium text-gray-900 hover:text-blue-700 dark:hover:text-blue-500 text-4xl border ">Necklaces</a>
            <a href="#" class="block  font-medium text-gray-900 hover:text-blue-700 dark:hover:text-blue-500 text-4xl border ">Bracelets</a>
            <a href="#" class="block  font-medium text-gray-900 hover:text-blue-700 dark:hover:text-blue-500 text-4xl border ">Rings</a>
            <a href="#" class="block  font-medium text-gray-900 hover:text-blue-700 dark:hover:text-blue-500 text-4xl border ">More Styles</a>
            <a href="#" class="block  font-medium text-gray-900 hover:text-blue-700 dark:hover:text-blue-500 text-4xl border ">Stories</a>
            <a href="#" class="block  font-medium text-gray-900 hover:text-blue-700 dark:hover:text-blue-500 text-4xl border ">Gifts</a>
        </nav>
    </div>
</aside>

<!-- Filter Bar -->
<section class="bg-gray-100 p-4 shadow-md">
    <div class="flex items-center justify-between max-w-screen-xl mx-auto">
        <h2 class="text-lg font-semibold text-gray-800">Exploring <span class="text-gray-600">Silver</span></h2>
        <div class="hidden md:flex items-center space-x-4">
            <button class="bg-black text-white py-2 px-4 rounded-md hover:bg-gray-800 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Sort By
            </button>
            <button class="bg-white border border-black text-black py-2 px-4 rounded-md hover:bg-gray-200 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Popular
            </button>
            <button class="bg-black text-white py-2 px-4 rounded-md flex items-center gap-2 hover:bg-gray-800 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Filter <i class="ri-filter-3-fill"></i>
            </button>
        </div>
        <span class="text-sm font-medium text-gray-600">42 Designs</span>
    </div>
</section>

<!-- JavaScript -->
<script>
    // Toggle Mobile Menu
    document.getElementById('mobile-menu-toggle').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.toggle('-translate-x-full');
    });

    // Close Mobile Menu
    document.getElementById('close-mobile-menu').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.add('-translate-x-full');
    });

    // Placeholder actions
    document.getElementById('cartButton').addEventListener('click', () => alert('Cart dropdown logic here'));
    document.getElementById('userDropdownButton').addEventListener('click', () => alert('User account dropdown logic here'));
</script>
