@extends('layouts.main')
@section('content')

<!-- Header Section -->
<div class="max-w-full mx-auto bg-[#F5F3F1] p-6 mb-6">
    <h2 class="text-3xl font-bold text-center mb-4">What’s New</h2>
</div>

<!-- Articles Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach(range(1, 10) as $index)
        <article class="flex flex-col">
            <img src="{{asset("asset/img/what$index.jpg")}}" alt="Article Image" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Sample Article Title {{$index}}</h2>
                <p class="text-sm text-gray-500">OCTOBER {{15 + $index}}, 2024</p>
                <p class="text-gray-600 text-sm line-clamp-3">Short summary of the article goes here...</p>
            </div>
        </article>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="flex justify-center gap-2 mt-8">
        <span class="px-3 py-1 bg-purple-600 text-white rounded">1</span>
        <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded">2</a>
        <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded">3</a>
        <span class="px-3 py-1 text-gray-600">...</span>
        <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded">6</a>
    </div>
</div>

<!-- Newsletter Section -->
<!-- Newsletter Section -->
<div class="max-w-3xl mx-auto mt-16 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg p-8 text-white">
    <h2 class="text-3xl font-semibold mb-4">Join our Free Newsletter and</h2>
    <p class="mb-6">Get insider info on new arrivals, early access, and everything fine.</p>
    <form class="flex md:gap-4">
        <input type="email" placeholder="Email" class="flex-1 md:px-4 md:py-2 p-1 rounded-md text-gray-800">
        <button type="submit" class="bg-gray-900 text-white md:px-6 md:py-2 p-1 rounded-md hover:bg-gray-800 transition-colors">
            SUBSCRIBE
        </button>
    </form>
</div>
@endsection
