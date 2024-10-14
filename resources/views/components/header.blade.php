<div class="bg-white">
    <!-- Header -->
    <header class="relative bg-white shadow-sm">
        <!-- Promo Banner -->
        <div class="bg-[#4F3267] text-white text-sm hidden lg:flex">
            <div class="container mx-auto flex justify-center items-center py-2">
                <div class="flex items-center space-x-4 text-center">
                    <span class="text-sm font-semibold">CaratLane - A Tanishq Partnership</span>
                    <div class="border-l border-gray-400 h-4"></div>
                    <span class="text-sm">Introducing CaratLane PoP! 9=10 | Plan your purchase
                        <span class="text-pink-500">
                            <a href="" class="underline hover:text-pink-700">here</a>
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="flex h-16 items-center">
                    <!-- Mobile menu button -->
                    <button id="open-mobile-menu" type="button"
                        class="relative rounded-md p-2 text-gray-400 lg:hidden">
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="{{ route('home') }}">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="{{ asset('asset/img/logo.png') }}" alt="Company Logo">
                        </a>
                    </div>

                    <!-- Desktop Navigation Menu -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="flex h-full space-x-8">
                            <div class="relative group">
                                <a href="{{ route('alljewellery') }}"
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                    All Jewellery
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-0.5 bg-[#d4af37] transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                                </a>
                                <!-- Dropdown Menu -->
                                <div
                                    class="absolute left-0 mt-2 w-screen max-w-screen-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
                                        <!-- Categories Section -->
                                        <div class="space-y-6">
                                            <p class="font-medium text-gray-900 mb-4">Categories</p>
                                            <ul class="space-y-4">
                                                <li>
                                                    <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset/img/logo.png') }}" alt="Necklaces" class="h-6 w-6 mr-3">
                                                        Necklaces
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset\img\nav-img') }}" alt="Rings" class="h-6 w-6 mr-3">
                                                        Rings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset\img\nav-img') }}" alt="Bracelets" class="h-6 w-6 mr-3">
                                                        Bracelets
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset\img\nav-img') }}" alt="Earrings" class="h-6 w-6 mr-3">
                                                        Earrings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset\img\nav-img') }}" alt="Watches" class="h-6 w-6 mr-3">
                                                        Watches
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Featured Items Section -->
                                        <div class="col-span-2 md:col-span-1 lg:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <!-- Featured Item 1 -->
                                            <div class="relative overflow-hidden rounded-lg bg-gray-100 group">
                                                <img src="{{ asset('asset/img/0.jpg') }}" alt="New Arrivals"
                                                    class="w-full h-full object-cover object-center group-hover:opacity-80">
                                                <div
                                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center p-4 group-hover:opacity-100 opacity-0 transition-opacity z-10">
                                                    <div>
                                                        <p class="text-lg font-medium">New Arrivals</p>
                                                        <a href="#" class="mt-2 inline-block bg-white text-black py-2 px-4 rounded-full text-sm">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Featured Item 2 -->
                                            <div class="relative overflow-hidden rounded-lg bg-gray-100 group">
                                                <img src="{{ asset('asset/img/latest.jpg') }}" alt="Popular Items"
                                                    class="w-full h-full object-cover object-center group-hover:opacity-80">
                                                <div
                                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center p-4 group-hover:opacity-100 opacity-0 transition-opacity z-10">
                                                    <div>
                                                        <p class="text-lg font-medium">Popular Items</p>
                                                        <a href="#" class="mt-2 inline-block bg-white text-black py-2 px-4 rounded-full text-sm">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative">
                                <a href="{{ route('diamondjewellery') }}"
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:text-[#d4af37]">
                                    Diamond
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-0.5 bg-[#d4af37] transition-transform duration-300 transform scale-x-0 hover:scale-x-100"></span>
                                </a>
                            </div>

                            <div class="relative">
                                <a href="{{ route('gold') }}"
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:text-[#d4af37]">
                                    Gold
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-0.5 bg-[#d4af37] transition-transform duration-300 transform scale-x-0 hover:scale-x-100"></span>
                                </a>
                            </div>

                            <a href="{{ route('silver') }}"
                                class="relative flex items-center text-sm font-medium text-gray-700 hover:text-[#d4af37]">
                                Silver
                                <span
                                    class="absolute bottom-0 left-0 w-full h-0.5 bg-[#d4af37] transform scale-x-0 transition-transform duration-300 hover:scale-x-100"></span>
                            </a>

                            <a href="{{ route('collection') }}"
                                class="relative flex items-center text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                Collections
                                <span
                                    class="absolute bottom-5 left-0 w-full h-0.5 bg-[#d4af37] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                            </a>

                            <a href="{{ route('bullions') }}"
                                class="relative flex items-center text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                Bullions
                                <span
                                    class="absolute bottom-5 left-0 w-full h-0.5 bg-[#d4af37] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                            </a>

                            <a href="{{ route('contact') }}"
                                class="relative flex items-center text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                Contact
                                <span
                                    class="absolute bottom-5 left-0 w-full h-0.5 bg-[#d4af37] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
