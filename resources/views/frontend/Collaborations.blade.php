@extends('layouts.main')
@section('content')

<!-- Header Section -->
<div class="max-w-full mx-auto bg-[#F5F3F1] p-6 mb-6">
    <h2 class="text-3xl font-bold text-center mb-4">Collaborations</h2>
</div>

<!-- Main Content Section -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Celebrity Spotlight Card -->
        <article class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform hover:scale-105 duration-300">
            <div class="aspect-w-16 aspect-h-9 relative">
                <img src="{{asset('asset/img/colla1.jpg')}}" alt="Fashion Collaboration" class="w-full h-64 object-cover">
            </div>
            <div class="p-6">
                <p class="text-sm text-gray-500">APRIL 4, 2024</p>
                <h2 class="mt-2 text-xl font-semibold">Celebrity Spotlight: Fashion Style Collaboration</h2>
                <p class="mt-3 text-gray-600 line-clamp-3">
                    A fascinating collaboration featuring elegant jewelry designs in our latest fashion campaign.
                </p>
            </div>
        </article>

        <!-- Trending Design Card -->
        <article class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform hover:scale-105 duration-300">
            <div class="aspect-w-16 aspect-h-9 relative">
                <img src="{{asset('asset/img/colla2.jpg')}}" alt="Jewelry Design" class="w-full h-64 object-cover">
            </div>
            <div class="p-6">
                <p class="text-sm text-gray-500">AUGUST 5, 2023</p>
                <h2 class="mt-2 text-xl font-semibold">The Trending Lotus Jewellery Design</h2>
                <p class="mt-3 text-gray-600 line-clamp-3">
                    Discover our latest collection inspired by the timeless beauty of lotus flowers.
                </p>
            </div>
        </article>

        <!-- Special Collection Card -->
        <article class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform hover:scale-105 duration-300">
            <div class="aspect-w-16 aspect-h-9 relative">
                <img src="{{asset('asset/img/colla3.jpg')}}" alt="Special Collection" class="w-full h-64 object-cover">
            </div>
            <div class="p-6">
                <p class="text-sm text-gray-500">AUGUST 29, 2018</p>
                <h2 class="mt-2 text-xl font-semibold">The Kashmir Experience Collection</h2>
                <p class="mt-3 text-gray-600 line-clamp-3">
                    A special preview of our latest collection featuring traditional designs with a modern twist.
                </p>
            </div>
        </article>

             <!-- Trending Design Card -->
             <article class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform hover:scale-105 duration-300">
                <div class="aspect-w-16 aspect-h-9 relative">
                    <img src="{{asset('asset/img/colla4.jpg')}}" alt="Jewelry Design" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <p class="text-sm text-gray-500">AUGUST 5, 2023</p>
                    <h2 class="mt-2 text-xl font-semibold">The Trending Lotus Jewellery Design</h2>
                    <p class="mt-3 text-gray-600 line-clamp-3">
                        Discover our latest collection inspired by the timeless beauty of lotus flowers.
                    </p>
                </div>
            </article>
    
    </div>
</main>

<!-- Newsletter Section -->
<div class="mt-16 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg p-8 text-white max-w-lg mx-auto sm:p-6 lg:max-w-2xl xl:max-w-3xl">
    <h2 class="text-3xl font-semibold mb-4 text-center sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Join our Free Newsletter and</h2>
    <p class="mb-6 text-center text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">Get insider info on new arrivals, early access, and everything fine.</p>
    <form class="flex flex-col gap-4 sm:flex-row items-center">
        <input type="email" placeholder="Email" class="flex-1 px-4 py-2 rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-purple-600 sm:w-full lg:px-6 lg:py-3">
        <button type="submit" class="bg-gray-900 text-white px-6 py-2 rounded-md hover:bg-gray-800 transition-colors sm:w-full lg:py-3 lg:px-8 xl:text-lg">
            SUBSCRIBE
        </button>
    </form>
</div>



@endsection
