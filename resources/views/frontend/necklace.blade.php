@include('components.shayaheader')

  
    <!-- Category Header and Filter Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:items-center md:justify-between">
            <!-- Category Title -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Exploring</h2>
                <h1 class="text-3xl font-bold text-gray-900">Earrings</h1>
            </div>

            <!-- Filter Controls -->
            <div class="flex items-center space-x-4">
                <!-- Sort Dropdown -->
                <div class="relative">
                    <button class="inline-flex items-center px-4 py-2 border border-gray-300 bg-black text-white text-sm font-medium rounded-md hover:bg-gray-800 focus:outline-none">
                        SORT BY
                        <i data-lucide="chevron-down" class="ml-2 h-4 w-4"></i>
                    </button>
                </div>

                <!-- Popular Filter -->
                <div class="relative">
                    <button class="inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-gray-700 text-sm font-medium rounded-md hover:bg-gray-50 focus:outline-none">
                        Popular
                        <i data-lucide="chevron-down" class="ml-2 h-4 w-4"></i>
                    </button>
                </div>

                <!-- Filter Button -->
                <button class="inline-flex items-center px-4 py-2 border border-gray-300 bg-black text-white text-sm font-medium rounded-md hover:bg-gray-800 focus:outline-none">
                    FILTER
                    <i data-lucide="filter" class="ml-2 h-4 w-4"></i>
                </button>
            </div>

            <!-- Total Items Count -->
            <div class="text-gray-600">
                457 Designs
            </div>
        </div>

        <!-- Active Filters -->
        <div class="mt-4 flex flex-wrap items-center gap-2">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-sm text-gray-800">
                Earrings
                <button class="ml-1 text-gray-500 hover:text-gray-700">
                    <i data-lucide="x" class="h-4 w-4"></i>
                </button>
            </div>
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-sm text-gray-800">
                Silver
                <button class="ml-1 text-gray-500 hover:text-gray-700">
                    <i data-lucide="x" class="h-4 w-4"></i>
                </button>
            </div>
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-sm text-gray-800">
                Brass
                <button class="ml-1 text-gray-500 hover:text-gray-700">
                    <i data-lucide="x" class="h-4 w-4"></i>
                </button>
            </div>
        </div>
    </div>

  <!-- Product Grid -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Product Card 1 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Garden of Love Choker" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Garden of Love Choker in Gold Plated 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹9,000</p>
                        <p class="text-sm text-gray-500 line-through">₹10,000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Feeling Sundar Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Feeling Sundar Oxidised Collar Necklace in 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹12,400</p>
                        <p class="text-sm text-gray-500 line-through">₹13,500</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Bridechilla Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Bridechilla Necklace in Gold Plated 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹15,750</p>
                        <p class="text-sm text-gray-500 line-through">₹17,500</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Athena's Naari Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Athena's Naari Necklace in Oxidised 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹11,700</p>
                        <p class="text-sm text-gray-500 line-through">₹13,000</p>
                    </div>
                </div>
            </div>
        </div>

           <!-- Product Card 1 -->
           <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Garden of Love Choker" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Garden of Love Choker in Gold Plated 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹9,000</p>
                        <p class="text-sm text-gray-500 line-through">₹10,000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Feeling Sundar Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Feeling Sundar Oxidised Collar Necklace in 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹12,400</p>
                        <p class="text-sm text-gray-500 line-through">₹13,500</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Bridechilla Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Bridechilla Necklace in Gold Plated 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹15,750</p>
                        <p class="text-sm text-gray-500 line-through">₹17,500</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Athena's Naari Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Athena's Naari Necklace in Oxidised 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹11,700</p>
                        <p class="text-sm text-gray-500 line-through">₹13,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    <script>
        lucide.createIcons();
    </script>
@include('components.shayafooter')