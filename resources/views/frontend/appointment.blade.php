@extends('components.main')
@section('content')


    <!-- Hero Section -->
    <section class="container mx-auto px-4 md:px-14 py-12 flex flex-wrap items-center bg-gradient-to from-[#F1E6FF] to-[#F2EDFF]">
        <!-- Text Section -->
        <div class="w-full md:w-1/2 mb-8 md:mb-0 px-4 md:px-16">
            <h1 class="text-3xl md:text-4xl font-bold text-purple-800 mb-4">
                Try Jewellery at Home, for Free.
            </h1>
            <p class="text-gray-600 mb-6 text-sm md:text-base">
                Find up to 5 designs to try in the comfort of your home at your convenience.
            </p>
    
            <!-- Search Form -->
            <form class="flex flex-col md:flex-row gap-2 mb-4">
                <input type="text" placeholder="Search" class="flex-grow p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 transition duration-200">
                <button class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition duration-200">
                    Search
                </button>
            </form>
            
            <nav class="bg-white p-4 rounded-lg mb-2">
                <ul class="flex flex-wrap gap-2">
                    <li><a href="#" class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full hover:bg-purple-200 transition duration-300">Rings</a></li>
                    <li><a href="#" class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full hover:bg-purple-200 transition duration-300">Bracelets</a></li>
                    <li><a href="#" class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full hover:bg-purple-200 transition duration-300">Necklaces</a></li>
                    <li><a href="#" class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full hover:bg-purple-200 transition duration-300">Earrings</a></li>
                </ul>
            </nav>
    
            <!-- Book Try at Home Button -->
            <button class="bg-purple-600 text-white px-6 py-3 rounded-lg w-full hover:bg-purple-700 transition duration-200">
                Book Try at Home
            </button>
        </div>
    
        <!-- Video Section -->
        <div class="w-full md:w-1/3 flex justify-center relative">
            <div class="absolute inset-0 bg-purple-600 opacity-50 z-10 rounded-3xl -top-4 -left-4"></div>
            <div class="relative z-20">
                <video controls class="rounded-3xl shadow-lg w-full max-w-lg">
                    <source src="{{ asset('asset/img/TAH-Mobile-Snippet.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
    

    <!-- How It Works -->
    <section class="bg-gradient-to-tr from-pink-200 to-pink-300 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">How It Works?</h2>
            <div class="flex flex-col md:flex-row gap-4 mx-auto justify-center">
                <div class="bg-white rounded-3xl shadow-lg p-8 max-w-sm w-full">
                    <div class="flex justify-center mb-6">
                        <div class="bg-purple-100 rounded-2xl p-4">
                            <i class="ri-refresh-line text-purple-500 text-xl"></i>
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
                            <i class="fas fa-camera text-purple-500 text-xl"></i>
                        </div>
                    </div>
                    <h1 class="text-md font-bold text-center text-gray-800 mb-2">
                        Capture Your Moments
                    </h1>
                    <p class="text-center text-gray-600 text-sm">
                        Document your top picks beautifully
                    </p>
                </div>
    
                <div class="bg-white rounded-3xl shadow-lg p-8 max-w-sm w-full">
                    <div class="flex justify-center mb-6">
                        <div class="bg-purple-100 rounded-2xl p-4">
                            <i class="fas fa-heart text-purple-500 text-xl"></i>
                        </div>
                    </div>
                    <h1 class="text-md font-bold text-center text-gray-800 mb-2">
                        Enjoy Your Selection
                    </h1>
                    <p class="text-center text-gray-600 text-sm">
                        Experience the joy of your chosen designs
                    </p>
                </div>
    
                <div class="bg-white rounded-3xl shadow-lg p-8 max-w-sm w-full">
                    <div class="flex justify-center mb-6">
                        <div class="bg-purple-100 rounded-2xl p-4">
                            <i class="fas fa-gift text-purple-500 text-xl"></i>
                        </div>
                    </div>
                    <h1 class="text-md font-bold text-center text-gray-800 mb-2">
                        Share with Friends
                    </h1>
                    <p class="text-center text-gray-600 text-sm">
                        Show off your favorites to your loved ones
                    </p>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Browse Designs -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Browse Designs</h2>
        <div class="relative">
            <!-- Slider Container -->
            <div id="slider" class="flex overflow-hidden">
                <!-- Duplicated Slides for Infinite Loop -->
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <!-- Repeat for each product -->
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <!-- Duplicating the first three slides for infinite effect -->
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
            </div>
            
            <!-- Navigation Buttons -->
            <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-purple-600 text-white rounded-full p-2 focus:outline-none">❮</button>
            <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-purple-600 text-white rounded-full p-2 focus:outline-none">❯</button>
        </div>
    </section>
    
    <style>
        #slider {
            transition: transform 0.5s ease;
        }
    </style>
    
    <script>
        const slider = document.getElementById('slider');
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
    
        let currentIndex = 0;
        const slidesToShow = 2; // Adjust how many slides you want to show
    
        function updateSlider() {
            const slideWidth = slides[0].offsetWidth + 16; // Width of one slide + margin
            slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }
    
        nextButton.addEventListener('click', () => {
            currentIndex++;
            if (currentIndex > slides.length - slidesToShow) {
                currentIndex = slidesToShow; // Reset to the first slide after the last
                slider.style.transition = 'none'; // Disable transition for seamless effect
                slider.style.transform = `translateX(-${currentIndex * (slides[0].offsetWidth + 16)}px)`;
            }
            updateSlider();
            slider.style.transition = ''; // Re-enable transition for further movement
        });
    
        prevButton.addEventListener('click', () => {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = slides.length - slidesToShow; // Jump to the last slide
                slider.style.transition = 'none'; // Disable transition for seamless effect
                slider.style.transform = `translateX(-${currentIndex * (slides[0].offsetWidth + 16)}px)`;
            }
            updateSlider();
            slider.style.transition = ''; // Re-enable transition for further movement
        });
    </script>
    
 {{-- category --}}
 <div class="max-w-6xl mx-auto p-4">
    <header class="text-center mb-6">
        <h1 class="text-3xl font-bold">Bring the Store Experience Home</h1>
        <p class="text-lg mt-2">Enjoy the Best of Shopping at Home, Together with Your Family</p>
    </header>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="rounded-lg overflow-hidden shadow">
            <div class="aspect-w-1 aspect-h-1">
                <img src="{{ asset('asset/img/j1.jpg') }}" alt="Moti Ring - Elegant Design" class="object-cover">
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow">
            <div class="aspect-w-1 aspect-h-1">
                <img src="{{ asset('asset/img/j1.jpg') }}" alt="Moti Ring - Elegant Design" class="object-cover">
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow">
            <div class="aspect-w-1 aspect-h-1">
                <img src="{{ asset('asset/img/j1.jpg') }}" alt="Moti Ring - Elegant Design" class="object-cover">
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow">
            <div class="aspect-w-1 aspect-h-1">
                <img src="{{ asset('asset/img/j1.jpg') }}" alt="Moti Ring - Elegant Design" class="object-cover">
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow">
            <div class="aspect-w-1 aspect-h-1">
                <img src="{{ asset('asset/img/j1.jpg') }}" alt="Moti Ring - Elegant Design" class="object-cover">
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow">
            <div class="aspect-w-1 aspect-h-1">
                <img src="{{ asset('asset/img/j1.jpg') }}" alt="Moti Ring - Elegant Design" class="object-cover">
            </div>
        </div>
    </div>
</div>

{{-- HOME STORE --}}
<div class="container mx-auto px-4">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">Bring the Store Experience Home</h1>
        <p class="text-lg text-gray-600">Enjoy the Best of Shopping at Home, Together with Your Family</p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 py-8 mb-6 px-12">
        <div class="relative rounded-lg">
            <img src="{{asset('asset/img/home1.jpeg')}}" alt="" class="w-full h-32 object-cover rounded-lg">
            <div class="absolute inset-0 flex items-center justify-start bg-gradient-to from-[#1F275F] to-[#5468C1] bg-opacity-0 text-white text-lg p-4">Necklace</div>
        </div>
        <div class="relative rounded-lg">
            <img src="{{asset('asset/img/home2.jpeg')}}" alt="" class="w-full h-32 object-cover rounded-lg">
            <div class="absolute inset-0 left-0 flex items-center justify-start bg-gradient-to from-[#E6A89F] to-[#DFC0C6] bg-opacity-50 text-white text-lg p-4">Ring</div>
        </div>
        <div class="relative rounded-lg">
            <img src="{{asset('asset/img/home3.jpeg')}}" alt="" class="w-full h-32 object-cover rounded-lg">
            <div class="absolute inset-0 flex items-center justify-start bg-gradient-to from-[#D4C297] to-[#B5B188] bg-opacity-50 text-white text-lg p-4">Earing</div>
        </div>
        <div class="relative rounded-lg">
            <img src="{{asset('asset/img/home4.jpeg')}}" alt="" class="w-full h-32 object-cover rounded-lg">
            <div class="absolute inset-0 flex items-center justify-start bg-gradient-to from-[#0D1722] to-[#21354C] bg-opacity-50 text-white text-lg p-4">Ring</div>
        </div>
        <div class="relative rounded-lg">
            <img src="{{asset('asset/img/home5.jpeg')}}" alt="" class="w-full h-32 object-cover rounded-lg ">
            <div class="absolute inset-0 flex items-center justify-start bg-gradient-to from-[#40374B] to-[#312D43] bg-opacity-50 text-white text-lg p-4">Nacklance</div>
        </div>
        <div class="relative rounded-lg">
            <img src="{{asset('asset/img/home3.jpeg')}}" alt="" class="w-full h-32 object-cover rounded-lg">
            <div class="absolute inset-0 flex items-center justify-start bg-gradient-to from-[#D4C297] to-[#B5B188] bg-opacity-50 text-white text-lg p-4">Earing</div>
        </div>
    </div>
    
</div>
{{-- REVIEW  --}}
<div class="max-w-7xl mx-auto py-12">
    <h2 class="text-3xl font-semibold text-center mb-4">1200+ Unforgettable Moments</h2>
    <p class="text-center text-gray-600 mb-8">Try anything designed at home & discover your perfect match</p>

    <div class="overflow-hidden relative">
        <div id="testimonial-carousel" class="flex transition-transform duration-500">
            <!-- Testimonial Card 1 -->
            <div class="testimonial-card bg-white rounded-lg p-6 shadow-sm flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="font-medium">Customer Name 1</h3>
                        <p class="text-gray-500 text-sm">Member</p>
                    </div>
                    <div class="flex text-blue-500">
                        <!-- Star Rating -->
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
                <p class="text-gray-600 text-sm">Great experience! The product exceeded my expectations. Very satisfied with the quality and service.</p>
            </div>

            <!-- Testimonial Card 2 -->
            <div class="testimonial-card bg-white rounded-lg p-6 shadow-sm flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="font-medium">Customer Name 2</h3>
                        <p class="text-gray-500 text-sm">Member</p>
                    </div>
                    <div class="flex text-blue-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
                <p class="text-gray-600 text-sm">I loved the personalized service! It made my shopping experience so much better.</p>
            </div>

            <!-- Testimonial Card 3 -->
            <div class="testimonial-card bg-white rounded-lg p-6 shadow-sm flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="font-medium">Customer Name 3</h3>
                        <p class="text-gray-500 text-sm">Member</p>
                    </div>
                    <div class="flex text-blue-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
                <p class="text-gray-600 text-sm">Fantastic products! I will definitely be returning for more.</p>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="absolute top-1/2 left-0 right-0 flex justify-between transform -translate-y-1/2">
            <button id="prev" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Prev</button>
            <button id="next" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Next</button>
        </div>
    </div>
</div>

<script>
    let currentIndex = 0;
    const testimonials = document.querySelectorAll('.testimonial-card');
    const totalTestimonials = testimonials.length;

    function showTestimonial(index) {
        const offset = -index * (100 / totalTestimonials);
        document.getElementById('testimonial-carousel').style.transform = `translateX(${offset}%)`;
    }

    function showNextTestimonial() {
        currentIndex = (currentIndex + 1) % totalTestimonials;
        showTestimonial(currentIndex);
    }

    function showPrevTestimonial() {
        currentIndex = (currentIndex - 1 + totalTestimonials) % totalTestimonials;
        showTestimonial(currentIndex);
    }

    document.getElementById('next').addEventListener('click', showNextTestimonial);
    document.getElementById('prev').addEventListener('click', showPrevTestimonial);

    // Auto-Swipe Functionality
    setInterval(showNextTestimonial, 3000); // Change every 3 seconds
</script>




    
@endsection