<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-[#DDF2EF] text-black text-center py-2 text-sm">
    Extra 10% Off on purchases above Rs. 5,000
</div>

<header class="bg-black text-white px-6 py-4 flex items-center justify-between flex-wrap">
    <div class="text-2xl font-bold">SHAYA</div>
    <nav class="hidden md:flex md:space-x-6 flex-grow">
        <a href="{{route('earing')}}" class="hover:text-gray-300">EARRINGS</a>
        <a href="{{route('necklace')}}" class="hover:text-gray-300">NECKLACES</a>
        <a href="{{route('earing')}}" class="hover:text-gray-300">BRACELETS</a>
        <a href="{{route('earing')}}" class="hover:text-gray-300">RINGS</a>
        <a href="{{route('earing')}}" class="hover:text-gray-300">MORE STYLES</a>
        <a href="{{route('stories')}}" class="hover:text-gray-300">STORIES</a>
        <a href="{{route('earing')}}" class="hover:text-gray-300">GIFTS</a>
    </nav>
    <div class="flex items-center space-x-4">
        <button class="hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </button>
        <button>
            <img src="{{asset('asset/img/shaya-icon.png')}}" alt="" class="h-10 w-10">
        </button>
        <button class="hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        <button class="hover:text-gray-300 relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            <span class="absolute -top-1 -right-1 bg-pink-500 text-xs w-4 h-4 rounded-full flex items-center justify-center">0</span>
        </button>
        <button class="hover:text-gray-300 relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            <span class="absolute -top-1 -right-1 bg-teal-500 text-xs w-4 h-4 rounded-full flex items-center justify-center">0</span>
        </button>
    </div>
    
    <!-- Hamburger Menu for Mobile -->
    <div class="md:hidden flex items-center">
        <button id="mobile-menu-button" class="hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</header>

<!-- Mobile Menu -->
<nav id="mobile-menu" class="md:hidden bg-black text-white hidden">
    <div class="flex flex-col space-y-2 px-6 py-4">
        <a href="{{route('earing')}}" class="hover:text-gray-300">EARRINGS</a>
        <a href="{{route('necklace')}}" class="hover:text-gray-300">NECKLACES</a>
        <a href="{{route('earing')}}" class="hover:text-gray-300">BRACELETS</a>
        <a href="{{route('earing')}}" class="hover:text-gray-300">RINGS</a>
        <a href="{{route('earing')}}" class="hover:text-gray-300">MORE STYLES</a>
        <a href="{{route('stories')}}" class="hover:text-gray-300">STORIES</a>
        <a href="{{route('earing')}}" class="hover:text-gray-300">GIFTS</a>
    </div>
</nav>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
