@extends('components.main')
@section('content')

<main class="p-4 mt-44 overflow-x-auto">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-black text-lg font-bold">Gold Exchange</div>
        <!-- Navigation links -->
        <div class="flex flex-wrap space-x-4 mt-4 lg:mt-0">
            <a href="{{route('buygold')}}" class="text-black hover:text-yellow-500">Buy Gold</a>
            <a href="{{route('redeem')}}" class="text-black hover:text-yellow-500">Exchange / Redeem</a>
            <a href="{{route('sellgold')}}" class="text-black hover:text-yellow-500">Sell Gold</a>
            <a href="#faqs" class="text-black hover:text-yellow-500">FAQs</a>
        </div>
    </div>
</main>


<!-- Hero Section -->
<main class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('asset/img/egold.jpeg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Overlay for text readability -->
    <div class="max-w-7xl mx-auto px-4 py-20 flex flex-col lg:flex-row items-center relative z-10"> <!-- Content layout adjustment for large screens -->
        <!-- Left Content -->
        <div class="w-full lg:w-1/2 text-white space-y-8 text-center lg:text-left">
            <h1 class="text-4xl lg:text-6xl font-bold leading-tight">CaratLane Digital Gold</h1>
            <p class="text-lg lg:text-xl text-gray-300">Invest in Pure 24K Gold Online - 100% Safe & Trustworthy</p>
            <div class="flex justify-center lg:justify-start space-x-6 mt-6">
                <button class="bg-purple-600 hover:bg-purple-700 text-white p-4 lg:px-8 lg:py-3 rounded-lg text-base transition duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50">
                    Buy Now
                </button>
                <button class="flex items-center text-white hover:text-purple-500 transition duration-300">
                    Learn more
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Optional Right Content (You can add an image, icon, or other info here) -->
        <!-- <div class="w-full lg:w-1/2 mt-12 lg:mt-0">
            <img src="your-image.png" alt="Digital Gold" class="max-w-full h-auto rounded-lg shadow-lg" />
        </div> -->
    </div>
</main>



<!-- Gift Card Banner -->
<div class="bg-gradient-to-r from-yellow-50 to-yellow-100 py-6 mx-4 lg:mx-12 mt-6 rounded-lg shadow-md">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center space-x-4">
        <!-- Left Content (Text and Button) -->
        <div class="flex items-center space-x-6">
            <h2 class="text-3xl lg:text-4xl font-semibold text-yellow-800">
                <span class="text-yellow-800">Have an</span>
                <span class="font-bold">eGold</span>
                <span class="text-yellow-800">Gift Card?</span>
            </h2>
            <button class="bg-yellow-700 hover:bg-yellow-800 text-white px-6 py-3 rounded-md uppercase font-medium tracking-wide transition duration-300 ease-in-out transform hover:scale-105">
                Claim Now!
            </button>
        </div>

        <!-- Right Content (Image) -->
        <div class="hidden lg:block">
            <img src="/api/placeholder/150/100" alt="Gift Card" class="h-20 object-contain">
        </div>
    </div>
</div>


<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 py-16">
    <!-- Know More Section -->
    <div class="mb-12">
        <a href="#" class="text-purple-600 hover:text-purple-700 text-lg font-medium">Know More</a>
        <h1 class="text-4xl md:text-5xl font-light text-gray-800 mt-6 max-w-3xl">
            Invest in a high-payoff digital gold. Buy, sell, or redeem your CaratLane eGold in exchange for beautiful jewellery.
        </h1>
        <div class="mt-8 flex flex-wrap space-x-6 justify-center lg:justify-start">
            <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg text-lg transition duration-300 ease-in-out transform hover:scale-105">
                Buy eGold Now
            </button>
            <button class="flex items-center text-gray-800 hover:text-purple-500 transition duration-300 ease-in-out">
                How to redeem?
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Features Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12 mt-16">
        <!-- Feature 1 -->
        <div class="flex space-x-6">
            <div class="flex-shrink-0">
                <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-2">Unparalleled convenience</h3>
                <p class="text-gray-600">Buy in-store or online 24×7. Purchase gold online or offline through one of our jewellery stores.</p>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="flex space-x-6">
            <div class="flex-shrink-0">
                <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-2">What you buy is what you get</h3>
                <p class="text-gray-600">No carrying cost or hidden charges. Every gram of CaratLane eGold you buy online is backed by real gold deposits worth the same.</p>
            </div>
        </div>

        <!-- Feature 3 -->
        <div class="flex space-x-6">
            <div class="flex-shrink-0">
                <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-2">100% guaranteed buyback</h3>
                <p class="text-gray-600">Redeem your CaratLane eGold balance for beautiful jewellery or sell it back to us.</p>
            </div>
        </div>
    </div>
</div>

{{-- Blink Section --}}
<div class="max-w-6xl mx-auto p-6">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
        <div class="mb-4 md:mb-0">
            <h1 class="text-3xl font-bold text-gray-800 leading-tight">
                eGold to Jewellery, in a Blink!
            </h1>
        </div>
        <div class="flex items-center bg-purple-50 rounded-lg p-3">
            <span class="text-purple-600 text-sm">
                Redeem your CaratLane eGold online or offline at one of our many jewellery stores across India.
            </span>
        </div>
    </div>

    <!-- Process Flow -->
    <div class="flex flex-col md:flex-row gap-8 justify-center items-center">
        <!-- Step 1 -->
        <div class="flex flex-col items-center text-center max-w-xs mx-auto">
            <div class="w-24 h-24 rounded-full bg-purple-100 flex items-center justify-center mb-4">
                <svg class="w-12 h-12 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Choose Your Favourite Jewellery</h3>
            <p class="text-gray-600">from CaratLane</p>
        </div>

        <!-- Arrow 1 -->
        <div class="hidden md:flex items-center justify-center">
            <svg class="w-8 h-8 text-purple-300 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </div>

        <!-- Step 2 -->
        <div class="flex flex-col items-center text-center max-w-xs mx-auto">
            <div class="w-24 h-24 rounded-full bg-purple-100 flex items-center justify-center mb-4">
                <svg class="w-12 h-12 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Redeem Your CaratLane eGold</h3>
            <p class="text-gray-600">at checkout</p>
        </div>

        <!-- Arrow 2 -->
        <div class="hidden md:flex items-center justify-center">
            <svg class="w-8 h-8 text-purple-300 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </div>
    </div>

    <!-- Additional Features -->
    <div class="mt-12 flex flex-col md:flex-row justify-between items-center gap-6">
        <!-- Feature 1: Get Your Jewellery -->
        <div class="bg-white rounded-lg p-6 shadow-md w-full md:w-auto">
            <div class="flex items-center">
                <svg class="w-8 h-8 text-purple-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                </svg>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Get Your Jewellery</h3>
                    <p class="text-gray-600">Delivered for free at your doorstep</p>
                </div>
            </div>
        </div>

        <!-- Feature 2: Visit Vault -->
        <div class="bg-white rounded-lg p-6 shadow-md w-full md:w-auto">
            <div class="flex items-center justify-between">
                <div class="mr-8">
                    <h3 class="text-lg font-semibold text-gray-800">Visit Vault</h3>
                    <p class="text-gray-600">Check Your Gold Balance</p>
                </div>
                <button class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition-colors">
                    Login to View →
                </button>
            </div>
        </div>
    </div>
</div>

<div class="w-full flex flex-col md:flex-row mx-auto p-6 bg-white rounded-lg shadow-md mt-12">
    <!-- Left Section -->
    <div class="flex flex-col w-full md:w-2/3 justify-between items-start mb-8 md:mb-0">
        <p class="text-purple-500 text-sm mb-2">Got questions? We have all the answers!</p>
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 leading-tight">
            If you have any questions regarding CaratLane eGold, give us your phone number and we will call you back to answer your questions.
        </h2>
    </div>

    <!-- Right Section (Icon & Text) -->
    <div class="flex-shrink-0 ml-4 mb-4 md:mb-0 md:w-1/3 flex items-center justify-center">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
            <svg
                class="w-8 h-8 text-purple-500 transform rotate-45"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                />
            </svg>
        </div>
        <p class="text-sm text-purple-700 text-center mt-2">At Your Service. Always.</p>
    </div>
</div>

<!-- Form Section -->
<form action="#" method="POST" class="space-y-6 md:w-1/2 mx-auto mt-8">
    <div>
        <label for="phone" class="block text-sm text-gray-600 mb-2">Mobile Number</label>
        <input
            type="tel"
            id="phone"
            name="phone"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent outline-none transition"
            placeholder="Enter your mobile number"
            required
        />
    </div>

    <button
        type="submit"
        class="w-full bg-purple-500 hover:bg-purple-600 text-white font-medium py-3 px-6 rounded-lg transition duration-200 ease-in-out transform hover:-translate-y-0.5"
    >
        Request Call Back
    </button>
</form>

{{-- Accordian --}}

    <style>
        .accordion-item {
            display: none;
        }
        .accordion-item.active {
            display: block;
        }
    </style>

    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">CaratLane Digital Gold FAQs</h1>

        <div class="space-y-4">
            <div class="flex justify-between items-center cursor-pointer border-b py-2" onclick="toggleAccordion('item1')">
                <span class="text-lg text-gray-800">What is digital gold?</span>
                <span class="text-purple-500">+</span>
            </div>
            <div id="item1" class="accordion-item p-2">
                <p class="text-gray-600">Digital gold refers to gold that is bought and stored digitally, allowing for easy transactions without the need for physical handling.</p>
            </div>

            <div class="flex justify-between items-center cursor-pointer border-b py-2" onclick="toggleAccordion('item2')">
                <span class="text-lg text-gray-800">What is CaratLane Digital Gold?</span>
                <span class="text-purple-500">+</span>
            </div>
            <div id="item2" class="accordion-item p-2">
                <p class="text-gray-600">CaratLane Digital Gold is a service that allows you to buy gold online, which is then stored in a secure vault until you choose to redeem it.</p>
            </div>

            <div class="flex justify-between items-center cursor-pointer border-b py-2" onclick="toggleAccordion('item3')">
                <span class="text-lg text-gray-800">Why should I buy CaratLane Digital Gold?</span>
                <span class="text-purple-500">+</span>
            </div>
            <div id="item3" class="accordion-item p-2">
                <p class="text-gray-600">Buying CaratLane Digital Gold offers a hassle-free way to invest in gold, with easy buying, selling, and redeeming options.</p>
            </div>

            <div class="flex justify-between items-center cursor-pointer border-b py-2" onclick="toggleAccordion('item4')">
                <span class="text-lg text-gray-800">How to buy CaratLane Digital Gold?</span>
                <span class="text-purple-500">+</span>
            </div>
            <div id="item4" class="accordion-item p-2">
                <p class="text-gray-600">You can buy CaratLane Digital Gold through the CaratLane website or app by selecting the amount of gold you wish to purchase.</p>
            </div>

            <div class="flex justify-between items-center cursor-pointer border-b py-2" onclick="toggleAccordion('item5')">
                <span class="text-lg text-gray-800">Where will the Digital Gold be stored after I buy it?</span>
                <span class="text-purple-500">+</span>
            </div>
            <div id="item5" class="accordion-item p-2">
                <p class="text-gray-600">The Digital Gold will be stored in a secure vault managed by CaratLane.</p>
            </div>

            <!-- Add more FAQ items similarly -->

        </div>
    </div>

    <script>
        function toggleAccordion(id) {
            const item = document.getElementById(id);
            const isActive = item.classList.contains('active');

            // Hide all items
            const items = document.querySelectorAll('.accordion-item');
            items.forEach(i => i.classList.remove('active'));

            // Show the clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        }
    </script>


    
@endsection
