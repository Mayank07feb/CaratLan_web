@extends('layouts.main')
@section('content')
<div class="max-w-full mx-auto bg-[#F5F3F1] p-6 mb-6">
    <h2 class="text-3xl font-bold text-center mb-4">Press Release</h2>
   
    <div class="text-center">
        <a href="/news" class="inline-block  text-black rounded-lg px-4 py-2">
            Browse News
        </a>
    </div>
</div>

{{-- grids --}}
<main class="max-w-6xl mx-auto px-4 py-8">
    <!-- Grid Layout for Blog Posts -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blaze Collection Post -->
        <article class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{asset('asset/img/press1.jpg')}}" alt="Blaze Collection" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">CaratLane Launches Their New Collection – Blaze</h2>
                <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                <p class="text-gray-700">The collection is available at all 170+ CaratLane stores across the country. CaratLane has launched its first dazzling collection for 2023, Blaze. This col...</p>
            </div>
        </article>

        <!-- Marketer's Guide Post -->
        <article class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{asset('asset/img/press2.png')}}" alt="Marketing Guide" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Marketer's guide to 2023</h2>
                <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                <p class="text-gray-700">Marketing heads discuss which strategies are best to employ this year and which ones are best avoided. From reinventing consumer segmentation and the marketing mix...</p>
            </div>
        </article>

        <!-- Propose Day Post -->
        <article class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{asset('asset/img/press3.png')}}" alt="Ring Trends" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Propose Day 2023: 5 Stylish Ring Trends She Will Not Be Able To Say No To</h2>
                <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                <p class="text-gray-700">Propose Day 2023: She will surely say yes to you and these stunning rings. These rings are perfect for your partner</p>
            </div>
        </article>

        <!-- Valentine's Campaign Post -->
        <article class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{asset('asset/img/press4.jpg')}}" alt="Valentine Campaign" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">CaratLane Launches Heart-warming Campaign, #KhulKeKaroExpress For Valentine's Day</h2>
                <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                <p class="text-gray-700">CaratLane has launched its Valentine's Day campaign, "Khul Ke Karo Express". Building on the brand's core purpose to help consumers express themselves...</p>
            </div>
        </article>

        <!-- Style Guide Post -->
        <article class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{asset('asset/img/press5.png')}}" alt="Valentine Style Guide" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">From Heart Soaked Bags To Sexy Lingerie, A Style Guide To Build Your Valentine's Day Look</h2>
                <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                <p class="text-gray-700">It is the month of love and the perfect time to dress up and swipe right to that cute date. And while most of us...</p>
            </div>
        </article>

        <!-- D2C Post -->
        <article class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{asset('asset/img/press6.jpg')}}" alt="D2C Trends" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">D2C: Where's it headed in 2023?</h2>
                <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                <p class="text-gray-700">With the reduction of online dependence for purchases post the pandemic, ETBrandEquity asked a few D2C brands to unveil the upcoming trends they foresee in...</p>
            </div>
        </article>

        <!-- Duplicate D2C Post (you may want to adjust or remove this) -->
        <article class="bg-white rounded-lg overflow-hidden shadow-sm">
            <img src="{{asset('asset/img/press7.jpg')}}" alt="D2C Trends" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">D2C: Where's it headed in 2023?</h2>
                <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                <p class="text-gray-700">With the reduction of online dependence for purchases post the pandemic, ETBrandEquity asked a few D2C brands to unveil the upcoming trends they foresee in...</p>
            </div>
        </article>
    </div>

    <!-- Newsletter Section -->
    <div class="mt-16 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg p-8 text-white">
        <h2 class="text-3xl font-semibold mb-4">Join our Free Newsletter and</h2>
        <p class="mb-6">Get insider info on new arrivals, early access, and everything fine.</p>
        <form class="flex flex-col sm:flex-row gap-4">
            <input type="email" placeholder="Email" class="flex-1 px-4 py-2 rounded-md text-gray-800 mb-4 sm:mb-0">
            <button type="submit" class="bg-gray-900 text-white px-6 py-2 rounded-md hover:bg-gray-800 transition-colors">
                SUBSCRIBE
            </button>
        </form>
    </div>
</main>



<script>
        // Show/hide scroll to top button based on scroll position
        window.onscroll = function() {
            const scrollButton = document.querySelector('button');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollButton.classList.remove('hidden');
            } else {
                scrollButton.classList.add('hidden');
            }
        };
</script>

@endsection
