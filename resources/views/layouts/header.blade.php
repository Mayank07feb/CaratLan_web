<nav class="bg-gray-100 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold">
            <a href="#" aria-label="Homepage">
                <img src="{{ asset('asset/img/Horizondal.jpg') }}" alt="Logo" class="h-10 w-40">
            </a>
        </div>

        <!-- Hamburger Menu Button (Visible on mobile) -->
        <div class="block lg:hidden">
            <button id="menu-toggle" class="text-black focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Navbar Items -->
        <ul id="navbar" class="lg:flex lg:space-x-6 z-50 text-black font-extralight space-y-4 lg:space-y-0 absolute lg:relative left-0 w-full bg-gray-100 lg:bg-transparent top-16 lg:top-auto p-4 lg:p-0 hidden lg:block">
            <li><a href="#" class="hover:text-black" aria-label="Men's Collection">Home</a></li>
            <li><a href="{{ route('men') }}" class="hover:text-black" aria-label="Men's Collection">Men</a></li>
            <li><a href="{{ route('women') }}" class="hover:text-black" aria-label="Women's Collection">Women</a></li>
            <li><a href="{{ route('kids') }}" class="hover:text-black" aria-label="Kids Collection">Kids</a></li>

            <!-- Dropdown for Collection -->
            <li class="relative group">
                <a href="#" class="hover:text-black" aria-label="Collections">Collection</a>
                <div class="absolute left-0 hidden mt-2 w-40 bg-white rounded-lg shadow-lg group-hover:block z-10">
                    <ul class="py-2">
                        <li><a href="{{ route('Collaborations') }}" class="block px-4 py-2 hover:bg-gray-100" aria-label="Collaborations">Collaborations</a></li>
                        <li><a href="{{ route('WhatNew') }}" class="block px-4 py-2 hover:bg-gray-100" aria-label="What's New">What’s New</a></li>
                    </ul>
                </div>
            </li>

            <!-- Dropdown for Occasion -->
            <li class="relative group">
                <a href="#" class="hover:text-black" aria-label="Occasions">Occasion</a>
                <div class="absolute left-0 hidden mt-2 w-40 bg-white rounded-lg shadow-lg group-hover:block z-10">
                    <ul class="py-2">
                        <li><a href="{{ route('occasion') }}" class="block px-4 py-2 hover:bg-gray-100" aria-label="Diwali Occasion">Diwali</a></li>
                    </ul>
                </div>
            </li>

            <!-- Dropdown for The How-Tos -->
            <li class="relative group">
                <a href="#" class="hover:text-black" aria-label="The How-Tos">The How-Tos</a>
                <div class="absolute left-0 hidden mt-2 w-40 bg-white rounded-lg shadow-lg group-hover:block z-10">
                    <ul class="py-2">
                        <li><a href="{{ route('Jewellerycaretips') }}" class="block px-4 py-2 hover:bg-gray-100" aria-label="Jewellery Care Tips">Jewellery Care Tips</a></li>
                        <li><a href="{{ route('Jewelleryguides') }}" class="block px-4 py-2 hover:bg-gray-100" aria-label="Jewellery Guides">Jewellery Guide</a></li>
                        <li><a href="{{ route('Jewellerystylingideas') }}" class="block px-4 py-2 hover:bg-gray-100" aria-label="Jewellery Styling Ideas">Jewellery Styling Ideas</a></li>
                    </ul>
                </div>
            </li>

            <li><a href="#" class="hover:text-black" aria-label="Shop">Shop</a></li>
            <li><a href="{{ route('webstories') }}" class="hover:text-black" aria-label="Web Stories">Web Stories</a></li>
        </ul>

        <!-- Search Icon -->
        <div>
            <a href="#" class="text-black" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19a8 8 0 100-16 8 8 0 000 16zM21 21l-4.35-4.35" />
                </svg>
            </a>
        </div>
    </div>
</nav>

<!-- Add JS for Toggle -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const navbar = document.getElementById('navbar');
    
    menuToggle.addEventListener('click', () => {
        navbar.classList.toggle('hidden');
    });
</script>
