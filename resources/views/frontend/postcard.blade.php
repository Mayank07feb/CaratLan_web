@extends('components.main')
@section('content')
<div style="background-image: url('{{ asset('asset/img/background-poat.jpeg') }}'); background-size: cover; background-position: center; position: relative;">
    <!-- Dark Overlay -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>

    <div class="text-white relative z-10">
        <div class="container mx-auto flex flex-col md:flex-row items-center py-16 px-6 md:px-12">
            <!-- Left Column (Text Section) -->
            <div class="md:w-1/2 mb-8 md:mb-0 text-center md:text-left">
                <!-- Brand Name -->
                <h1 class="text-xl font-bold text-white mb-2">CARATLANE</h1>
                
                <!-- Main Title -->
                <h2 class="text-3xl font-bold text-white mb-6">p[💛]stcards</h2>
                
                <!-- Slogan -->
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Endless Love</h1>
                <h2 class="text-2xl md:text-4xl text-white mb-6">Preserved For Eternity</h2>
                
                <!-- Subtitle -->
                <p class="text-xl text-white italic mb-6">Within Every Ring!</p>
                
                <!-- Buttons -->
                <div class="space-y-4 md:space-y-0 md:space-x-4">
                    <button class="bg-yellow-400 text-gray-900 px-8 py-3 rounded-full font-semibold hover:bg-yellow-300 w-full md:w-auto">
                        Download App
                    </button>
                    <button class="border-2 border-yellow-400 text-yellow-400 px-8 py-3 rounded-full font-semibold hover:bg-yellow-400 hover:text-gray-50 w-full md:w-auto">
                        Learn More
                    </button>
                </div>
                
                <!-- Available Only Banner -->
                <div class="py-4 text-center text-gray-50 mt-6">
                    <p class="text-lg">Available exclusively through our mobile application</p>
                </div>
            </div>
            
            <!-- Right Column (Video Section) -->
            <div class="md:w-1/2">
                <div class="bg-yellow-400 p-8 rounded-2xl">
                    <!-- Video Player -->
                    <video src="{{ asset('asset/img/gifts.mp4') }}" class="object-cover w-full h-full rounded-lg mb-6" controls></video>
                    <!-- Text Below Video -->
                    <div class="text-gray-900 text-center">
                        <h3 class="text-2xl font-bold mb-4">Make Your Gift Special</h3>
                        <p class="text-lg">Create personalized messages for your loved ones. Share the joy as they discover your heartfelt words.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<!-- Postcard Section -->
<div class="text-white relative z-10 overflow-x-auto">
    <div class="flex flex-nowrap py-16 px-6 md:px-12">
        <!-- Video Section -->
        <div class="min-w-[300px] md:w-1/2 p-6 md:p-12 mb-8 md:mb-0">
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <!-- Video Player -->
                <video src="{{ asset('asset/img/postcards.mp4') }}" class="object-cover w-full h-full rounded-2xl" controls></video>
                <!-- Video Call to Action -->
                <div class="text-center mt-4">
                    <h3 class="text-2xl font-bold mb-4 text-yellow-400">Click here to play</h3>
                </div>
            </div>
        </div>

        <!-- Text Section -->
        <div class="min-w-[300px] md:w-1/2 text-center md:text-left">
            <div class="p-6 md:p-12">
                <h1 class="text-4xl font-bold text-[#E4B261] mb-6">Say it with Postcards</h1>
                <p class="text-lg md:text-xl text-gray-700 mb-6">Send a video message with your gift & express your heartfelt emotions to your loved ones!</p>
                <div class="space-y-4 md:space-y-0 md:space-x-6">
                    <button class="bg-yellow-400 text-gray-900 px-8 py-3 rounded-full font-semibold hover:bg-yellow-300 transition duration-300 w-full md:w-auto">
                        Send a Postcard
                    </button>
                    <button class="border-2 border-yellow-400 text-yellow-400 px-8 py-3 rounded-full font-semibold hover:bg-yellow-400 hover:text-gray-50 transition duration-300 w-full md:w-auto">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="relative w-full bg-black h-24 overflow-hidden">
    <!-- Background with gradient and sparkle effect -->
    <div class="absolute inset-0 bg-gradient-to-r from-black via-gray-900 to-black opacity-90">
        <!-- Decorative dots -->
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, rgba(251, 191, 36, 0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
    </div>

    <!-- Content Container -->
    <div class="relative h-full max-w-7xl mx-auto px-6 md:px-8 flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <!-- Text Section -->
        <div class="flex flex-col text-center md:text-left md:w-1/2">
            <span class="text-yellow-400 font-serif italic text-lg">For the Gifter</span>
            <h1 class="text-white text-2xl md:text-3xl font-bold">Become the gifting expert</h1>
        </div>

        <!-- Buttons Section -->
        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto md:justify-end">
            <button class="px-6 py-3 border border-yellow-400 text-yellow-400 rounded-lg w-full md:w-auto hover:bg-yellow-400 hover:text-black transition duration-300">
                ORDER AT STORE
            </button>
            <button class="px-6 py-3 bg-yellow-400 rounded-lg w-full md:w-auto hover:bg-yellow-500 transition duration-300">
                ORDER ONLINE
            </button>
        </div>
    </div>
</div>


<div class="container mx-auto max-w-6xl px-4">
    <!-- Steps Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Step 1 -->
        <div class="relative rounded-2xl border border-yellow-600/30 p-8 flex flex-col items-center text-center">
            <img src="/api/placeholder/120/120" alt="Gold Ring" class="mb-8 w-24 h-24 md:w-32 md:h-32 object-cover">
            <div class="bg-white text-black w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl mb-6">1</div>
            <h3 class="text-yellow-400 text-2xl font-semibold mb-4">Select a Ring</h3>
            <p class="text-gray-300 mb-4">Browse rings that make the perfect gift.</p>
            <a href="#" class="text-yellow-400 hover:text-yellow-300 underline">View Designs</a>
        </div>

        <!-- Step 2 -->
        <div class="relative rounded-2xl border border-yellow-600/30 p-8 flex flex-col items-center text-center">
            <div class="flex space-x-2 mb-8">
                <div class="bg-gray-800 p-4 rounded-lg">
                    <svg class="w-16 h-16 text-yellow-400" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 21l-8-9h16l-8 9z"/>
                        <path d="M12 21V11M12 3v4" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
            </div>
            <div class="bg-white text-black w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl mb-6">2</div>
            <h3 class="text-yellow-400 text-2xl font-semibold mb-4">Personalise with Postcards</h3>
            <p class="text-gray-300">Upload/record a special video message at checkout.</p>
        </div>

        <!-- Step 3 -->
        <div class="relative rounded-2xl border border-yellow-600/30 p-8 flex flex-col items-center text-center">
            <div class="mb-8">
                <svg class="w-24 h-24 text-yellow-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M20 12v7a2 2 0 01-2 2H6a2 2 0 01-2-2v-7M12 2v10M12 2l5 5M12 2L7 7" stroke-width="2"/>
                </svg>
            </div>
            <div class="bg-white text-black w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl mb-6">3</div>
            <h3 class="text-yellow-400 text-2xl font-semibold mb-4">Place your Order</h3>
            <p class="text-gray-300">Confirm your ring purchase & surprise your loved ones!</p>
        </div>
    </div>

    <!-- Note Section -->
    <div class="mt-12 text-gray-300 text-lg text-center">
        <p>Note: The video message will be delivered after the order is received.</p>
    </div>

    <!-- Receiver Section -->
    <div class="mt-12 text-center">
        <h2 class="text-yellow-400 text-3xl italic font-serif">For the Receiver</h2>
    </div>

    <!-- Postcards Heading -->
    <div class="py-16 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Postcards</h1>
        <p class="text-lg text-white mb-6">from across the country!</p>
    </div>

<!-- Testimonials Slider Section -->
<div class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="relative">
            <!-- Horizontal Scrolling Container -->
            <div class="flex space-x-6 overflow-x-auto py-4 scrollbar-hidden">
                <!-- Testimonial Cards -->
                <div class="relative w-72 h-96 rounded-lg overflow-hidden shadow-lg">
                    <video src="{{asset('asset/img/Diksha.mp4')}}" alt="Testimonial 1" class="w-full h-full object-cover" controls>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </div>
                        </div>
                    </video>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white text-center bg-gradient-to-t from-black to-transparent">
                        <p>Diksha's postcards to daughter</p>
                    </div>
                </div>

                <div class="relative w-72 h-96 rounded-lg overflow-hidden shadow-lg">
                    <video src="{{asset('asset/videos/v2.mp4')}}" alt="Testimonial 2" class="w-full h-full object-cover" controls>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </div>
                        </div>
                    </video>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white text-center bg-gradient-to-t from-black to-transparent">
                        <p>Neha's postcards to Sister</p>
                    </div>
                </div>

                <div class="relative w-72 h-96 rounded-lg overflow-hidden shadow-lg">
                    <video src="{{asset('asset/videos/v3.mp4')}}" alt="Testimonial 3" class="w-full h-full object-cover" controls>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </div>
                        </div>
                    </video>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white text-center bg-gradient-to-t from-black to-transparent">
                        <p>Agam's postcards to Sister</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Postcards Section 2 -->
<div class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="relative">
            <div class="flex space-x-4 overflow-x-auto">
                <!-- Testimonial Cards 2 -->
                <div class="relative w-72 h-96 rounded-lg overflow-hidden">
                    <video src="{{asset('asset/videos/cart.mp4')}}" alt="Testimonial 1" class="w-full h-full object-cover" controls>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </div>
                        </div>
                    </video>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white text-center bg-gradient-to-t from-black to-transparent">
                        <p>Diksha's postcards to daughter</p>
                    </div>
                </div>

                <div class="relative w-72 h-96 rounded-lg overflow-hidden">
                    <video src="{{asset('asset/videos/v2.mp4')}}" alt="Testimonial 2" class="w-full h-full object-cover" controls>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </div>
                        </div>
                    </video>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white text-center bg-gradient-to-t from-black to-transparent">
                        <p>Neha's postcards to Sister</p>
                    </div>
                </div>

                <div class="relative w-72 h-96 rounded-lg overflow-hidden">
                    <video src="{{asset('asset/videos/v3.mp4')}}" alt="Testimonial 3" class="w-full h-full object-cover" controls>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-play text-white text-2xl"></i>
                            </div>
                        </div>
                    </video>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white text-center bg-gradient-to-t from-black to-transparent">
                        <p>Agam's postcards to Sister</p>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>

    <!-- Final Heading -->
<div class="py-16 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Rings that steal hearts</h1>
        <p class="text-lg text-white italic mb-6">every time!</p>
</div>
</div>


<style>
    .product-slider {
        scroll-behavior: smooth;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .product-slider::-webkit-scrollbar {
        display: none;
    }
    .product-card {
        transition: transform 0.3s ease-in-out;
    }
    .product-card:hover {
        transform: scale(1.05);
    }
</style>

<div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Slider Container -->
    <div class="relative">
        <!-- Products Wrapper -->
        <div class="product-slider flex space-x-6 overflow-x-scroll p-4 md:overflow-x-auto">
            <!-- Product Card 1 -->
            <div class="flex-none w-64 sm:w-72 md:w-80 lg:w-96">
                <div class="bg-white rounded-lg shadow-md p-4 relative group product-card">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Jewelry Rock Diamond Ring" class="w-full h-48 object-contain mb-4">
                    <div class="text-gray-800 font-medium">Jewelry Rock Diamond Ring</div>
                    <div class="flex items-baseline mt-2">
                        <span class="text-purple-600 text-lg font-semibold">₹26,671</span>
                        <span class="text-white text-sm line-through ml-2">₹34,025</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="flex-none w-64 sm:w-72 md:w-80 lg:w-96">
                <div class="bg-white rounded-lg shadow-md p-4 relative group product-card">
                    <img src="{{asset('asset/img/j2.jpg')}}" alt="Threaded Treasure Diamond Band" class="w-full h-48 object-contain mb-4">
                    <div class="text-gray-800 font-medium">Threaded Treasure Diamond Band</div>
                    <div class="flex items-baseline mt-2">
                        <span class="text-purple-600 text-lg font-semibold">₹68,314</span>
                        <span class="text-white text-sm line-through ml-2">₹76,780</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="flex-none w-64 sm:w-72 md:w-80 lg:w-96">
                <div class="bg-white rounded-lg shadow-md p-4 relative group product-card">
                    <img src="{{asset('asset/img/j3.jpg')}}" alt="Snake Spring Diamond Cocktail Ring" class="w-full h-48 object-contain mb-4">
                    <div class="text-gray-800 font-medium">Snake Spring Diamond Cocktail Ring</div>
                    <div class="flex items-baseline mt-2">
                        <span class="text-purple-600 text-lg font-semibold">₹28,406</span>
                        <span class="text-white text-sm line-through ml-2">₹34,321</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="flex-none w-64 sm:w-72 md:w-80 lg:w-96">
                <div class="bg-white rounded-lg shadow-md p-4 relative group product-card">
                    <img src="{{asset('asset/img/j4.jpg')}}" alt="Maharani Gemstone Cocktail Ring" class="w-full h-48 object-contain mb-4">
                    <div class="text-gray-800 font-medium">Maharani Gemstone Cocktail Ring</div>
                    <div class="flex items-baseline mt-2">
                        <span class="text-purple-600 text-lg font-semibold">₹52,452</span>
                        <span class="text-white text-sm line-through ml-2">₹60,753</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="flex-none w-64 sm:w-72 md:w-80 lg:w-96">
                <div class="bg-white rounded-lg shadow-md p-4 relative group product-card">
                    <img src="{{asset('asset/img/j5.jpg')}}" alt="Darning Diamond Ring" class="w-full h-48 object-contain mb-4">
                    <div class="text-gray-800 font-medium">Darning Diamond Ring</div>
                    <div class="flex items-baseline mt-2">
                        <span class="text-purple-600 text-lg font-semibold">₹95,154</span>
                        <span class="text-white text-sm line-through ml-2">₹1,03,108</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-10 h-10 bg-black rounded-full shadow-lg flex items-center justify-center text-white" onclick="document.querySelector('.product-slider').scrollBy(-288, 0)">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-10 h-10 bg-black rounded-full shadow-lg flex items-center justify-center text-white" onclick="document.querySelector('.product-slider').scrollBy(288, 0)">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <!-- See More Button -->
    <div class="text-center mt-8">
        <button class="bg-yellow-400 hover:bg-yellow-300 text-black px-8 py-3 rounded-full font-medium transition duration-300">
            SEE MORE RINGS
        </button>
    </div>
</div>

<div id="accordion-collapse" class="mx-4 sm:mx-8 md:mx-16 lg:mx-24">
    <!-- Accordion Item 1 -->
    <div class="mb-4">
        <button id="accordion-collapse-heading-1" class="accordion-button w-full p-5 text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 flex items-center justify-between gap-3" aria-expanded="true" aria-controls="accordion-collapse-body-1">
            <span>What is Flowbite?</span>
            <svg data-accordion-icon class="w-3 h-3 transform transition-transform rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
        <div id="accordion-collapse-body-1" class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-out p-5 border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
            <p class="mb-2 text-white dark:text-white">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
            <p class="text-white dark:text-white">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
        </div>
    </div>

    <!-- Accordion Item 2 -->
    <div class="mb-4">
        <button id="accordion-collapse-heading-2" class="accordion-button w-full p-5 text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 flex items-center justify-between gap-3" aria-expanded="false" aria-controls="accordion-collapse-body-2">
            <span>Is there a Figma file available?</span>
            <svg data-accordion-icon class="w-3 h-3 transform transition-transform rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
        <div id="accordion-collapse-body-2" class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-out p-5 border-b-0 border-gray-200 dark:border-gray-700">
            <p class="mb-2 text-white dark:text-white">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
            <p class="text-white dark:text-white">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
        </div>
    </div>

    <!-- Accordion Item 3 -->
    <div class="mb-4">
        <button id="accordion-collapse-heading-3" class="accordion-button w-full p-5 text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 flex items-center justify-between gap-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
            <span>What are the differences between Flowbite and Tailwind UI?</span>
            <svg data-accordion-icon class="w-3 h-3 transform transition-transform rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
        </button>
        <div id="accordion-collapse-body-3" class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-out p-5 border-b-0 border-gray-200 dark:border-gray-700">
            <p class="mb-2 text-white dark:text-white">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
            <p class="mb-2 text-white dark:text-white">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
            <p class="mb-2 text-white dark:text-white">Learn more about these technologies:</p>
            <ul class="ps-5 text-white list-disc dark:text-white">
                <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    // Optional: Accordion script for handling collapse and expand
    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('aria-controls');
            const targetContent = document.getElementById(targetId);
            const isExpanded = button.getAttribute('aria-expanded') === 'true';

            // Toggle expanded state
            button.setAttribute('aria-expanded', !isExpanded);

            // Add/remove open class to content
            targetContent.classList.toggle('open', !isExpanded);
        });
    });
</script>


@endsection
