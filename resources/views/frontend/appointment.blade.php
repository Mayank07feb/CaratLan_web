@extends('components.main')
@section('content')


    <!-- Hero Section -->
    <section class="container mx-auto px-14 py-12 flex flex-wrap items-center bg-gradient-to from-[#F1E6FF] to-[#F2EDFF]">
        <!-- Text Section -->
        <div class="w-full md:w-1/2 mb-8 md:mb-0 px-16">
            <h1 class="text-4xl font-bold text-purple-800 mb-4">
                Try Jewellery at Home, for Free.
            </h1>
            <p class="text-gray-600 mb-6">
                Find up to 5 designs to try in the comfort of your home at your convenience.
            </p>
    
            <!-- Search Form -->
            <form class="flex flex-wrap gap-0 mb-4">
                <input type="text" placeholder="Search" class="flex-grow p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 transition duration-200">
                <button class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition duration-200">
                    Search
                </button>
            </form>
    
            <!-- Book Try at Home Button -->
            <button class="bg-purple-600 text-white px-6 py-3 rounded-lg w-full hover:bg-purple-700 transition duration-200">
                Book Try at Home
            </button>
        </div>
    
        <!-- Video Section -->
        <div class="w-full md:w-1/3 flex justify-center relative">
            <div class="absolute inset-0 bg-purple-600 opacity-50 z-10 rounded-3xl -top-4 -right-4"></div>
            <div class="relative z-20">
                <video controls class="rounded-3xl shadow-lg w-full max-w-lg">
                    <source src="{{ asset('asset/img/TAH-Mobile-Snippet.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        
    </section>
    

    <!-- How It Works -->
    <section class="bg-gradient-to-tr from-pink-200 to-pink-200 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">How It Works?</h2>
           <div class="flex flex-row gap-4 mx-12">
            <div class="bg-white rounded-3xl shadow-lg p-8 max-w-sm w-full">
                <div class="flex justify-center mb-6">
                    <div class="bg-purple-100 rounded-2xl p-4">
                        <i class="ri-refresh-line text-purple-500 text-sm"></i>
                    </div>
                </div>
                <h1 class="text-md font-bold text-center text-gray-800 mb-2">
                    Pick Your Favourite Designs
                </h1>
                <p class="text-center text-gray-600 text-sm">
                    Top five that stole your Heart
                </p>
            </div>
            <div class="bg-white rounded-3xl shadow-lg p-8 max-w-sm w-full">
                <div class="flex justify-center mb-6">
                    <div class="bg-purple-100 rounded-2xl p-4">
                        <i class="fas fa-camera text-purple-500 text-sm"></i>
                    </div>
                </div>
                <h1 class="text-md font-bold text-center text-gray-800 mb-2">
                    Pick Your Favourite Designs
                </h1>
                <p class="text-center text-gray-600 text-sm">
                    Top five that stole your Heart
                </p>
            </div>
            <div class="bg-white rounded-3xl shadow-lg p-8 max-w-sm w-full">
                <div class="flex justify-center mb-6">
                    <div class="bg-purple-100 rounded-2xl p-4">
                        <i class="fas fa-camera text-purple-500 text-sm"></i>
                    </div>
                </div>
                <h1 class="text-md font-bold text-center text-gray-800 mb-2">
                    Pick Your Favourite Designs
                </h1>
                <p class="text-center text-gray-600 text-sm">
                    Top five that stole your Heart
                </p>
            </div>
            <div class="bg-white rounded-3xl shadow-lg p-8 max-w-sm w-full">
                <div class="flex justify-center mb-6">
                    <div class="bg-purple-100 rounded-2xl p-4">
                        <i class="fas fa-camera text-purple-500 text-sm"></i>
                    </div>
                </div>
                <h1 class="text-md font-bold text-center text-gray-800 mb-2">
                    Pick Your Favourite Designs
                </h1>
                <p class="text-center text-gray-600 text-sm">
                    Top five that stole your Heart
                </p>
            </div>
           </div>
        </div>
    </section>

    <!-- Browse Designs -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Browse Designs</h2>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <!-- Repeat for each product -->
            <div class="bg-white rounded-lg shadow p-4">
                <img src="/api/placeholder/200/200" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                <h3 class="font-semibold">Product Name</h3>
                <p class="text-sm text-gray-600">₹12,999</p>
                <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
            </div>
        </div>
    </section>

    <!-- More sections... -->

    <!-- Footer -->
    <footer class="bg-purple-100 py-8">
        <div class="container mx-auto px-4 grid grid-cols-2 md:grid-cols-5 gap-8">
            <div>
                <h3 class="font-semibold mb-2">Know Your Jewellery</h3>
                <ul class="text-sm space-y-1">
                    <li><a href="#" class="text-gray-600 hover:text-purple-600">Diamond Guide</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-purple-600">Jewellery Guide</a></li>
                    <!-- More links... -->
                </ul>
            </div>
            <!-- Repeat for other footer columns -->
        </div>
    </footer>

    
@endsection