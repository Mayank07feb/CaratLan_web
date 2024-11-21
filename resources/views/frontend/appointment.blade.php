@extends('components.main')
@section('content')


    <!-- Hero Section -->
    <section class="container md:mt-44 lg:mt-56 mx-auto px-6 md:px-14 py-12 flex flex-wrap items-center bg-gradient-to-r from-[#F1E6FF] to-[#F2EDFF]">
        <!-- Video Section -->
        <div class="w-full md:w-1/2 lg:w-1/3 flex justify-center relative mb-8 md:mb-0">
            <!-- Background Overlay -->
            <div class="absolute inset-0 bg-purple-600 opacity-40 md:opacity-50 z-10 rounded-3xl -top-4 -left-4"></div>
            
            <!-- Video -->
            <div class="relative z-20">
                <video controls class="rounded-3xl shadow-lg w-full max-w-lg">
                    <source src="{{ asset('asset/img/TAH-Mobile-Snippet.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        
        <!-- Text Section -->
        <div class="w-full md:w-1/2 lg:w-2/3 px-4 md:px-16">
            <h1 class="text-3xl md:text-4xl font-bold text-purple-800 mb-4 text-center md:text-left">
                Try Jewellery at Home, for Free.
            </h1>
            <p class="text-gray-600 mb-6 text-center md:text-left text-sm md:text-base">
                Find up to 5 designs to try in the comfort of your home at your convenience.
            </p>
            
            <!-- Search Form -->
            <form class="flex flex-col md:flex-row gap-2 mb-4">
                <input type="text" placeholder="Search" class="flex-grow p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 transition duration-200">
                <button class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition duration-200">
                    Search
                </button>
            </form>
            
            <!-- Category Links -->
            <nav class="rounded-lg w-full">
                <ul class="flex flex-wrap gap-2 sm:gap-3 justify-center md:justify-start w-full">
                    <li><a href="#" class="bg-purple-200 text-purple-800 md:px-4 md:py-2 p-2 rounded-full hover:bg-purple-300 transition duration-300">Rings</a></li>
                    <li><a href="#" class="bg-purple-200 text-purple-800 md:px-4 md:py-2 p-2 rounded-full hover:bg-purple-300 transition duration-300">Bracelets</a></li>
                    <li><a href="#" class="bg-purple-200 text-purple-800 md:px-4 md:py-2 p-2 rounded-full hover:bg-purple-300 transition duration-300">Necklaces</a></li>
                    <li><a href="#" class="bg-purple-200 text-purple-800 md:px-4 md:py-2 p-2 rounded-full hover:bg-purple-300 transition duration-300">Earrings</a></li>
                </ul>
            </nav>
    
            <!-- Book Try at Home Button (Visible only on mobile screens) -->
            <div class="fixed bottom-0 left-0 w-full px-4 py-4 z-50 md:hidden">
                <button class="bg-purple-600 text-white px-6 py-3 rounded-lg w-full hover:bg-purple-700 transition duration-200">
                    Book Try at Home
                </button>
            </div>
            <button class="hidden md:block bg-purple-600 text-white px-6 py-3 mt-4 rounded-lg w-full hover:bg-purple-700 transition duration-200">
                Book Try at Home
            </button> 
        </div>
    </section>
    
    
    

    <!-- How It Works -->
    <section class="bg-gradient-to-tr from-pink-300 to-purple-400 py-8 md:py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-gray-800 mb-8 md:mb-12">
                How It Works?
            </h2>
            
            <div class="flex flex-col md:flex-row flex-wrap gap-4 md:gap-6 justify-center">
                <!-- Step 1 -->
                <div class="bg-white rounded-3xl shadow-lg p-6 md:p-8 w-full sm:max-w-[18rem] lg:max-w-[20rem]">
                    <div class="flex justify-center mb-4 md:mb-6">
                        <div class="bg-purple-100 rounded-2xl p-3 md:p-4">
                            <i class="ri-refresh-line text-purple-500 text-xl md:text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold text-center text-gray-800 mb-2">
                        Pick Your Favourite Designs
                    </h3>
                    <p class="text-center text-gray-600 text-xs md:text-sm">
                        Top five that stole your Heart
                    </p>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-white rounded-3xl shadow-lg p-6 md:p-8 w-full sm:max-w-[18rem] lg:max-w-[20rem]">
                    <div class="flex justify-center mb-4 md:mb-6">
                        <div class="bg-purple-100 rounded-2xl p-3 md:p-4">
                            <i class="fas fa-camera text-purple-500 text-xl md:text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold text-center text-gray-800 mb-2">
                        Capture Your Moments
                    </h3>
                    <p class="text-center text-gray-600 text-xs md:text-sm">
                        Document your top picks beautifully
                    </p>
                </div>
                
                <!-- Step 3 -->
                <div class="bg-white rounded-3xl shadow-lg p-6 md:p-8 w-full sm:max-w-[18rem] lg:max-w-[20rem]">
                    <div class="flex justify-center mb-4 md:mb-6">
                        <div class="bg-purple-100 rounded-2xl p-3 md:p-4">
                            <i class="fas fa-heart text-purple-500 text-xl md:text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold text-center text-gray-800 mb-2">
                        Enjoy Your Selection
                    </h3>
                    <p class="text-center text-gray-600 text-xs md:text-sm">
                        Experience the joy of your chosen designs
                    </p>
                </div>
                
                <!-- Step 4 -->
                <div class="bg-white rounded-3xl shadow-lg p-6 md:p-8 w-full sm:max-w-[18rem] lg:max-w-[20rem]">
                    <div class="flex justify-center mb-4 md:mb-6">
                        <div class="bg-purple-100 rounded-2xl p-3 md:p-4">
                            <i class="fas fa-gift text-purple-500 text-xl md:text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-base md:text-lg font-semibold text-center text-gray-800 mb-2">
                        Share with Friends
                    </h3>
                    <p class="text-center text-gray-600 text-xs md:text-sm">
                        Show off your favorites to your loved ones
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    

    <!-- Browse Designs -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Browse Designs</h2>
        <div class="relative overflow-hidden">
            <!-- Slider Container -->
            <div id="slider" class="flex transition-transform duration-500">
                <!-- Cloned Slides at Start for Infinite Loop -->
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
    
                <!-- Original Slides -->
                <!-- Repeat for each product -->
                <div class="slide bg-white rounded-lg shadow p-4 flex-shrink-0 w-full md:w-1/3 lg:w-1/5 mx-2">
                    <img src="{{asset('asset/img/j1.jpg')}}" alt="Product" class="w-full h-40 object-cover rounded-lg mb-2">
                    <h3 class="font-semibold">Product Name</h3>
                    <p class="text-sm text-gray-600">₹12,999</p>
                    <button class="mt-2 w-full bg-purple-600 text-white py-1 rounded">Try at Home</button>
                </div>
                <!-- Additional slides as needed... -->
    
                <!-- Cloned Slides at End for Infinite Loop -->
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
        const slidesToShow = 3; // Adjust how many slides you want to show at once
        const slideCount = slides.length;
        const slideWidth = slides[0].offsetWidth + 16; // Width of one slide + margin
    
        // Clone first and last few slides for seamless infinite scroll
        const startClone = slides[0].cloneNode(true);
        const endClone = slides[slideCount - 1].cloneNode(true);
        slider.appendChild(startClone);
        slider.insertBefore(endClone, slider.firstChild);
    
        function updateSlider() {
            slider.style.transition = 'transform 0.5s ease';
            slider.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}px)`;
        }
    
        nextButton.addEventListener('click', () => {
            currentIndex++;
            updateSlider();
            if (currentIndex >= slideCount) {
                setTimeout(() => {
                    slider.style.transition = 'none';
                    currentIndex = 0;
                    slider.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}px)`;
                }, 500); // Match with the CSS transition duration
            }
        });
    
        prevButton.addEventListener('click', () => {
            currentIndex--;
            updateSlider();
            if (currentIndex < 0) {
                setTimeout(() => {
                    slider.style.transition = 'none';
                    currentIndex = slideCount - 1;
                    slider.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}px)`;
                }, 500); // Match with the CSS transition duration
            }
        });
    </script>
    
    
 {{-- category --}}
 {{-- <div class="max-w-6xl mx-auto p-4">
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
</div> --}}

{{-- HOME STORE --}}
<div class="container mx-auto px-4">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">Bring the Store Experience Home</h1>
        <p class="text-lg text-gray-600">Enjoy the Best of Shopping at Home, Together with Your Family</p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 lg:py-8 lg:mb-6 lg:px-12">
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
{{-- <div class="max-w-7xl mx-auto py-12">
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
        {{-- <div class="absolute top-1/2 left-0 right-0 flex justify-between transform -translate-y-1/2">
            <button id="prev" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Prev</button>
            <button id="next" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Next</button>
        </div> --}}
    {{-- </div>
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
</script> --}} 

<section class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
      <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
        Read trusted reviews from our customers
      </h2>
  
      <!-- Swiper container -->
      <div class="mt-8 overflow-x-auto">
        <div class="swiper-container">
          <div class="swiper-wrapper ">
            <!-- Review 1 -->
            <div class="swiper-slide">
              <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                <div class="flex items-center gap-4">
                  <img
                    alt="Review 1"
                    src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                    class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                    <div class="flex justify-center gap-0.5 text-green-500">
                      <!-- Star Icons (5 stars) -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <!-- Repeat the above 4 more times for 5 stars -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                    </div>
                    <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                  </div>
                </div>
                <p class="mt-4 text-gray-700">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                  consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                  error officiis atque voluptates magnam!
                </p>
              </blockquote>
            </div>
            
            <!-- Review 1 -->
            <div class="swiper-slide">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                  <div class="flex items-center gap-4">
                    <img
                      alt="Review 1"
                      src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                      class="w-14 h-14 rounded-full object-cover"
                    />
                    <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                        <!-- Star Icons (5 stars) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <!-- Repeat the above 4 more times for 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                  </div>
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                    consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                    error officiis atque voluptates magnam!
                  </p>
                </blockquote>
              </div>
              <!-- Review 1 -->
            <div class="swiper-slide">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                  <div class="flex items-center gap-4">
                    <img
                      alt="Review 1"
                      src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                      class="w-14 h-14 rounded-full object-cover"
                    />
                    <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                        <!-- Star Icons (5 stars) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <!-- Repeat the above 4 more times for 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                  </div>
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                    consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                    error officiis atque voluptates magnam!
                  </p>
                </blockquote>
              </div>
              <!-- Review 1 -->
            <div class="swiper-slide">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                  <div class="flex items-center gap-4">
                    <img
                      alt="Review 1"
                      src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                      class="w-14 h-14 rounded-full object-cover"
                    />
                    <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                        <!-- Star Icons (5 stars) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <!-- Repeat the above 4 more times for 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                  </div>
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                    consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                    error officiis atque voluptates magnam!
                  </p>
                </blockquote>
              </div>
              <!-- Review 1 -->
            <div class="swiper-slide">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                  <div class="flex items-center gap-4">
                    <img
                      alt="Review 1"
                      src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                      class="w-14 h-14 rounded-full object-cover"
                    />
                    <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                        <!-- Star Icons (5 stars) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <!-- Repeat the above 4 more times for 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                  </div>
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                    consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                    error officiis atque voluptates magnam!
                  </p>
                </blockquote>
              </div>
              <!-- Review 1 -->
            <div class="swiper-slide">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                  <div class="flex items-center gap-4">
                    <img
                      alt="Review 1"
                      src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                      class="w-14 h-14 rounded-full object-cover"
                    />
                    <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                        <!-- Star Icons (5 stars) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <!-- Repeat the above 4 more times for 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                  </div>
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                    consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                    error officiis atque voluptates magnam!
                  </p>
                </blockquote>
              </div>

            <!-- R<!-- Review 1 -->
            <div class="swiper-slide">
              <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                <div class="flex items-center gap-4">
                  <img
                    alt="Review 1"
                    src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                    class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                    <div class="flex justify-center gap-0.5 text-green-500">
                      <!-- Star Icons (5 stars) -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <!-- Repeat the above 4 more times for 5 stars -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                    </div>
                    <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                  </div>
                </div>
                <p class="mt-4 text-gray-700">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                  consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                  error officiis atque voluptates magnam!
                </p>
              </blockquote>
            </div><!-- Review 1 -->
            <div class="swiper-slide">
              <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                <div class="flex items-center gap-4">
                  <img
                    alt="Review 1"
                    src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                    class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                    <div class="flex justify-center gap-0.5 text-green-500">
                      <!-- Star Icons (5 stars) -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <!-- Repeat the above 4 more times for 5 stars -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                    </div>
                    <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                  </div>
                </div>
                <p class="mt-4 text-gray-700">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                  consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                  error officiis atque voluptates magnam!
                </p>
              </blockquote>
            </div><!-- Review 1 -->
            <div class="swiper-slide">
              <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                <div class="flex items-center gap-4">
                  <img
                    alt="Review 1"
                    src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                    class="w-14 h-14 rounded-full object-cover"
                  />
                  <div>
                    <div class="flex justify-center gap-0.5 text-green-500">
                      <!-- Star Icons (5 stars) -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <!-- Repeat the above 4 more times for 5 stars -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                      </svg>
                    </div>
                    <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                  </div>
                </div>
                <p class="mt-4 text-gray-700">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                  consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                  error officiis atque voluptates magnam!
                </p>
              </blockquote>
            </div>epeat the above block for each review -->
            <!-- Review 1 -->
            <div class="swiper-slide">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                  <div class="flex items-center gap-4">
                    <img
                      alt="Review 1"
                      src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                      class="w-14 h-14 rounded-full object-cover"
                    />
                    <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                        <!-- Star Icons (5 stars) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <!-- Repeat the above 4 more times for 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                  </div>
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                    consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                    error officiis atque voluptates magnam!
                  </p>
                </blockquote>
              </div><!-- Review 1 -->
              <div class="swiper-slide">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                  <div class="flex items-center gap-4">
                    <img
                      alt="Review 1"
                      src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                      class="w-14 h-14 rounded-full object-cover"
                    />
                    <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                        <!-- Star Icons (5 stars) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <!-- Repeat the above 4 more times for 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                  </div>
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                    consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                    error officiis atque voluptates magnam!
                  </p>
                </blockquote>
              </div><!-- Review 1 -->
              <div class="swiper-slide">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                  <div class="flex items-center gap-4">
                    <img
                      alt="Review 1"
                      src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                      class="w-14 h-14 rounded-full object-cover"
                    />
                    <div>
                      <div class="flex justify-center gap-0.5 text-green-500">
                        <!-- Star Icons (5 stars) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <!-- Repeat the above 4 more times for 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                          />
                        </svg>
                      </div>
                      <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                    </div>
                  </div>
                  <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
                    consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius accusamus
                    error officiis atque voluptates magnam!
                  </p>
                </blockquote>
              </div>
          </div>
         
        </div>

        {{-- 2 --}}
  
        
        <!-- Swiper Pagination and Navigation -->
        {{-- <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
      </div>
    </div>
</section>
  
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      spaceBetween: 20,
      slidesPerView: 1,
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>
  
  
  


    
@endsection