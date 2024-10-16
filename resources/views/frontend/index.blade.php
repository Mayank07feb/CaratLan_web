@extends('components.main')

@section('content')
    <style>
        .clip-path {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 53% 100%, 50% 97%, 46% 100%, 0 100%);

            width: 100%;
            /* Ensure it covers full width */
            height: 100%;
            /* Ensure it covers full height */
            object-fit: cover;
            /* Maintain aspect ratio */
        }
    </style>
    {{-- HOME BANNER SLIDER --}}
    <!-- Slider Container -->
    <div class="relative w-full lg:h-full md:h-100 overflow-hidden">
        <!-- Slider Wrapper -->
        <div class="relative w-full h-full flex items-center justify-center overflow-hidden">
            <!-- Slides Wrapper -->
            <div id="sliderWrapper" class="slider-wrapper flex transition-transform duration-700 ease-in-out">
                <!-- Slide 1 -->
                <div class="slider-slide w-full h-full flex-shrink-0 relative">
                    <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/09_Sep/Banners/DT/Offer/02/Desktop1920x694_R1.webp"
                        alt="Banner Image" class="w-full h-full object-cover rounded shadow-lg">
                </div>

                <!-- Slide 2 -->
                <div class="slider-slide w-full h-full flex-shrink-0 relative">
                    <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/Egold/1/Desktop_1920x694.jpg"
                        alt="E-Gold Banner" class="w-full h-full object-cover rounded shadow-lg">
                </div>

                <!-- Slide 3 -->
                <div class="slider-slide w-full h-full flex-shrink-0 relative">
                    <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/07_JULY/Banner/SolitaireBlog/Desktop.webp"
                        alt="Solitaire Blog Banner" class="w-full h-full object-cover rounded shadow-lg">
                </div>
            </div>

            <!-- Pagination -->
            <div class="slider-pagination absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="pagination-dot bg-white rounded-full w-3 h-3" data-index="0"></button>
                <button class="pagination-dot bg-white rounded-full w-3 h-3" data-index="1"></button>
                <button class="pagination-dot bg-white rounded-full w-3 h-3" data-index="2"></button>
            </div>
        </div>
    </div>


    {{-- div containers --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-4 pt-4">
        <div class="flex items-center justify-center">
            <img src="{{ asset('asset/img/Responsive-11.jpg') }}" alt="Best Image 12"
                class="w-full h-auto rounded shadow-lg">
        </div>
        <div class="grid grid-rows-2 gap-4">
            <div class="flex items-center justify-center">
                <img src="{{ asset('asset/img/2x (1).webp') }}" alt="Best Image 10" class="w-full h-auto rounded shadow-lg">
            </div>
            <div class="flex items-center justify-center">
                <img src="{{ asset('asset/img/2X.webp') }}" alt="Best Image 11" class="w-full h-auto rounded shadow-lg">
            </div>
        </div>
    </div>


    {{-- VISUAL TABS --}}
    <section class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-4 m-4 lg:py-8 lg:px-4">
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_1.jpg"
                alt="Banner Image" class="w-full h-auto rounded shadow-lg">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_2.jpg"
                alt="Banner Image" class="w-full h-auto rounded shadow-lg">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_4.jpg"
                alt="Banner Image" class="w-full h-auto rounded shadow-lg">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_3.jpg"
                alt="Banner Image" class="w-full h-auto rounded shadow-lg">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_5.jpg"
                alt="Banner Image" class="w-full h-auto rounded shadow-lg">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_6.jpg"
                alt="Banner Image" class="w-full h-auto rounded shadow-lg">
        </div>
    </section>


    {{-- HD VIDEO SECTION --}}

    <div class="relative w-full h-auto mx-auto overflow-hidden shadow-2xl grid grid-cols-1 md:grid-cols-3 px-4 md:px-8">
        <!-- Video Section -->
        <div class="relative col-span-2 pt-[56.25%]" dir="ltr">
            <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl md:rounded-s-3xl"
                src="https://www.youtube.com/embed/kYOP52BUZTI?si=V0wW0Zp2QNuG2wlp" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Overlay and Text Section -->
        <div class="flex items-center justify-center bg-[#381a40] p-6 rounded-b-xl md:rounded-s-3xl col-span-1"
            dir="rtl">
            <div class="text-right max-w-md">
                <h2 class="text-6xl md:text-5xl text-pretty text-white mb-2 drop-shadow-lg">
                    <span class="cursive font-light text-balance">𝗟𝗮𝘁𝗲𝘀𝘁</span><br>𝒟𝑒𝓈𝒾𝑔𝓃
                </h2>
                <p class="text-lg md:text-xl text-white font-light drop-shadow">Perfectly festive,<br>effortlessly stunning
                </p>
                <i class="ri-arrow-right-line bg-white rounded-full text-3xl mt-6"></i>
            </div>
        </div>

    </div>


    {{-- COLLECTIONS --}}
    <div class="container mx-auto p-4 py-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Image 1 -->
            <div class="relative group overflow-hidden">
                <img src="{{ asset('asset/img/Collection_disney_11.jpg') }}" alt="Disney Collection"
                    class="w-full h-auto rounded-lg shadow-md transition-transform duration-300 transform group-hover:scale-105">
            </div>

            <!-- Image 2 (Centered and Adjusted) -->
            <div class="relative group overflow-hidden flex items-center justify-center -mt-20 mb-4">
                <img src="{{ asset('asset/img/Utsav.jpg') }}" alt="Utsav Collection"
                    class="w-full h-auto rounded-lg shadow-md transition-transform duration-300 transform group-hover:scale-105 overflow-hidden">
                <button
                    class="absolute bottom-0 text-black py-0 px-4 rounded-lg opacity-90 hover:opacity-100 transition duration-300">
                    View All Collections
                </button>
            </div>

            <!-- Image 3 -->
            <div class="relative group overflow-hidden">
                <img src="{{ asset('asset/img/Collection_Harry_potter.jpg') }}" alt="Harry Potter Collection"
                    class="w-full h-auto rounded-lg shadow-md transition-transform duration-300 transform group-hover:scale-105">
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 m-4 p-2">
        <div><img src="{{ asset('asset/img/cart1.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart2.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart3.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart4.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart5.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart6.jpg') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart7.webp') }}" alt=""></div>
    </div>

    {{-- VIDEO HD SECOND --}}
    <div class="relative w-full h-auto mx-auto overflow-hidden py-4 grid grid-cols-1 md:grid-cols-3 px-4 md:px-8">
        <!-- Video Section -->
        <div class="relative col-span-2 pt-[56.25%]" dir="ltr">
            <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl md:rounded-s-3xl"
                src="https://www.youtube.com/embed/xuuNZQwhEn4?si=wAVU0dgJMPh7Ijs1" title="Latest Design Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>

        <!-- Overlay and Text Section -->
        <aside class="flex items-center justify-center bg-[#160618] p-6 rounded-b-xl md:rounded-s-3xl col-span-1"
            dir="rtl">
            <div class="text-right max-w-md">
                <h2 class="text-6xl md:text-5xl text-pretty text-white mb-2 drop-shadow-lg">
                    <span class="cursive font-light text-balance">𝗟𝗮𝘁𝗲𝘀𝘁</span><br>𝒟𝑒𝓈𝒾𝑔𝓃
                </h2>
                <p class="text-lg md:text-xl text-white font-light drop-shadow">
                    Perfectly festive,<br>effortlessly stunning
                </p>
                <i class="ri-arrow-right-line bg-white rounded-full text-3xl mt-6"></i>
            </div>
        </aside>
    </div>


    {{-- LOCATION --}}
    {{-- <div class="container mx-auto px-0 py-6 bg-gray-50">
        <div class="  flex flex-col md:flex-row gap-40 justify-center">
            <!-- Left Section -->
            <div class="w-1/3 relative">
                <div
                    class="absolute  inset-0 flex flex-col justify-center items-center text-center text-black rounded-lg p-4 transform translate-x-1/2">
                    <h2 class="text-xl font-bold mb-2">Unsure Which Design To Pick?</h2>
                    <p class="text-sm mb-2">Book A FREE Home Trial!</p>
                    <button
                        class="bg-gradient-to-r from-pink-500 to-purple-600 text-black px-4 py-2 rounded text-sm transition duration-300 hover:from-pink-600 hover:to-purple-700">
                        Schedule Appointment
                    </button>

                </div>
                <div class="mt-4">
                    <img src="{{ asset('asset/img/T@H.webp') }}" alt="Customers discussing designs"
                        class="w-full rounded object-cover ">
                </div>
            </div>

            <!-- Right Section -->
            <div class="w-1/3 relative">
                <div
                    class="absolute  inset-0 flex flex-col justify-center items-center text-center text-black rounded-lg p-4 transform translate-x-1/2">
                    <h2 class="text-xl font-bold mb-2">Come visit us at any of our stores!</h2>
                    <div class="mb-4">
                        <input type="text" placeholder="Enter Pincode or City"
                            class="w-full p-2 border border-pink-500 to-purple-500 rounded text-sm">
                    </div>

                </div>
                <div class="mt-4">
                    <img src="{{ asset('asset\img\store.webp') }}" alt="Store interior"
                        class="w-full rounded object-cover">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container mx-auto px-4 py-6 bg-gray-50">
        <div class="flex flex-col md:flex-row gap-8 md:gap-40 justify-center">
            <!-- Left Section -->
            <div class="w-full md:w-1/3 relative">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center text-center text-black rounded-lg p-4 transform translate-x-1/2">
                    <h2 class="text-lg md:text-xl font-bold mb-2">Unsure Which Design To Pick?</h2>
                    <p class="text-sm md:text-base mb-2">Book A FREE Home Trial!</p>
                    <button
                        class="bg-gradient-to-r from-pink-500 to-purple-600 text-black px-4 py-2 rounded text-sm md:text-base transition duration-300 hover:from-pink-600 hover:to-purple-700">
                        Schedule Appointment
                    </button>
                </div>
                <div class="mt-4">
                    <img src="{{ asset('asset/img/T@H.webp') }}" alt="Customers discussing designs"
                        class="w-full rounded object-cover">
                </div>
            </div>
    
            <!-- Right Section -->
            <div class="w-full md:w-1/3 relative">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center text-center text-black rounded-lg p-4 transform translate-x-1/2">
                    <h2 class="text-lg md:text-xl font-bold mb-2">Come visit us at any of our stores!</h2>
                    <div class="mb-4">
                        <input type="text" placeholder="Enter Pincode or City"
                            class="w-full p-2 border border-pink-500 rounded text-sm md:text-base">
                    </div>
                </div>
                <div class="mt-4">
                    <img src="{{ asset('asset/img/store.webp') }}" alt="Store interior" class="w-full rounded object-cover">
                </div>
            </div>
        </div>
    </div>
    

    {{-- GOLD DIV --}}
    <div class="container mx-auto px-4 py-6 my-12">
        <div class="bg-gray-50 grid grid-cols-2 p-6 py-8 gap-4">
            <!-- Section Title -->
            <div class="text-center pt-8">
                <h1 class="text-8xl font-light bg-gradient-to-r from-pink-500 to-purple-500 bg-clip-text text-transparent">
                    GOLD</h1>
                <p class="text-3xl bg-gradient-to-r from-pink-500 to-purple-500 bg-clip-text text-transparent">EXCHANGE
                    PROGRAM</p>
            </div>


            <!-- Description Section -->
            <div class="mt-8">
                <h2 class="text-3xl font-semibold text-gray-800">A Stylish Upgrade</h2>
                <p class="mt-2 text-gray-600">
                    - Enjoy 0% Deduction on your gold exchange value. Please note: The old gold doesn't have to be from only
                    CaratLane; it can be any gold jewellery you have.
                </p>
                <button
                    class="mt-4 bg-gradient-to-r from-pink-500 to-purple-500 text-white px-6 py-2 rounded transition duration-300 hover:from-pink-600 hover:to-purple-600">
                    Know More
                </button>
            </div>
        </div>
    </div>

    {{-- SECTION --}}
    <div class="flex items-center justify-center py-8 bg-[#1d012d]">
        <div class="max-w-xl w-full px-4 md:px-0 rounded-lg shadow-lg text-center">
          <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-yellow-600 mb-4">
            The trust of TaniSHQ,
          </h1>
          <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-4">
            The spirit of CARATLANE
          </h1>
          <p class="text-sm md:text-md lg:text-lg text-gray-50 mb-6">
            The highest quality of craftsmanship and innovation, that brings you modern, everyday designs.
          </p>
          <button class="bg-gradient-to-r from-pink-600 to-purple-700 hover:from-pink-500 hover:to-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500 text-white px-6 py-2 rounded transition duration-300">
            Know More
          </button>
        </div>
      </div>
      
    {{-- SLIDER - - CARDS --}}

    <div class="container mx-auto px-4 py-8">
        <!-- Header with Tabs -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Best of CaratLane</h2>
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button id="women-tab" type="button"
                    class="tab-btn px-4 py-2 text-sm font-medium text-white bg-purple-500 rounded-l-lg hover:bg-purple-600 focus:ring-2 focus:ring-purple-500"
                    data-tab="slider1">
                    WOMEN
                </button>
                <button id="men-tab" type="button"
                    class="tab-btn px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-r-lg border border-gray-200 hover:bg-gray-100 hover:text-purple-700 focus:ring-2 focus:ring-purple-500"
                    data-tab="slider2">
                    MEN
                </button>
            </div>
        </div>

        <!-- Slider 1 (WOMEN) -->
        <div id="slider1" class="tab-content">
            <div class="glide" id="glide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides flex space-x-6">
                        <!-- Product 1 -->
                        <li class="glide__slide w-48 flex-shrink-0">
                            <img src="{{ asset('asset/img/j1.jpg') }}" alt="Glitter Miracle Diamond Ring"
                                class="w-full h-48 object-cover rounded-lg mb-2">
                            <p class="font-semibold text-lg">₹25,699</p>
                            <p class="text-sm text-gray-500 line-through">₹28,555</p>
                            <p class="text-sm text-gray-700">Glitter Miracle Diamond Ring</p>
                        </li>
                        <!-- Product 2 -->
                        <li class="glide__slide w-48 flex-shrink-0">
                            <img src="{{ asset('asset/img/j2.jpg') }}" alt="Intertwined Slim Diamond Ring"
                                class="w-full h-48 object-cover rounded-lg mb-2">
                            <p class="font-semibold text-lg">₹21,358</p>
                            <p class="text-sm text-gray-500 line-through">₹23,731</p>
                            <p class="text-sm text-gray-700">Intertwined Slim Diamond Ring</p>
                        </li>
                        <!-- Additional Products... -->
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button
                        class="glide__arrow glide__arrow--left absolute left-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md"
                        data-glide-dir="<">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>
                    <button
                        class="glide__arrow glide__arrow--right absolute right-0 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md"
                        data-glide-dir=">">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Slider 2 (MEN) -->
        <div id="slider2" class="tab-content hidden">
            <div class="glide" id="glide2">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <!-- Product 1 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-2">
                            <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                                <div class="relative">
                                    <img src="{{ asset('asset/img/j5.jpg') }}" alt="Best Seller 1"
                                        class="w-full h-48 object-cover" loading="lazy"></a>
                                </div>
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                    <h3 class="text-lg font-semibold text-gray-800 mt-1">Best Seller Gold Nath</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Product 1 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-2">
                            <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                                <div class="relative">
                                    <img src="{{ asset('asset/img/j5.jpg') }}" alt="Best Seller 1"
                                        class="w-full h-48 object-cover" loading="lazy"></a>
                                </div>
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                    <h3 class="text-lg font-semibold text-gray-800 mt-1">Best Seller Gold Nath</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Product 1 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-2">
                            <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                                <div class="relative">
                                    <img src="{{ asset('asset/img/j5.jpg') }}" alt="Best Seller 1"
                                        class="w-full h-48 object-cover" loading="lazy"></a>
                                </div>
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                    <h3 class="text-lg font-semibold text-gray-800 mt-1">Best Seller Gold Nath</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Product 1 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-2">
                            <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                                <div class="relative">
                                    <img src="{{ asset('asset/img/j5.jpg') }}" alt="Best Seller 1"
                                        class="w-full h-48 object-cover" loading="lazy"></a>
                                </div>
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                    <h3 class="text-lg font-semibold text-gray-800 mt-1">Best Seller Gold Nath</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Products... -->
                    </ul>
                </div>
                <div class="glide__arrows flex justify-center my-4 gap-2" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left border-black border" data-glide-dir="<"><i
                            class="ri-arrow-left-s-line text-3xl"></i></button>
                    <button class="glide__arrow glide__arrow--right border-black border" data-glide-dir=">"><i
                            class="ri-arrow-right-s-line text-3xl"></i></button>
                </div>
            </div>
        </div>
    </div>

    {{-- services features --}}
    <div class="bg-gray-900 text-white py-12 px-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 items-center ">
                <!-- 100% Certified & Free Shipping -->
                <div class="flex items-start space-x-4 pl-8">
                    <img src="{{ asset('asset/img/download.jpeg') }}" alt="" class="h-20">
                    <div class="px-8 w-1/2">
                        <h3 class="text-sm font-semibold mb-2">100% Certified & Free Shipping</h3>
                        <p class="text-sm text-purple-300">Our jewellery always comes with a certificate of authentication.
                        </p>
                    </div>
                </div>

                <!-- 15 Day Money-Back -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('asset/img/download.jpeg') }}" alt="" class="h-20">
                    <div class="px-8 w-1/2">
                        <h3 class="text-sm font-semibold mb-2">15 Day Money-Back</h3>
                        <p class="text-sm text-purple-300">Get 100% refund if you don't like your jewellery.</p>
                    </div>
                </div>

                <!-- Lifetime Exchange -->
                <div class="flex items-start space-x-4 pl-8">
                    <img src="{{ asset('asset/img/download.jpeg') }}" alt="" class="h-20">
                    <div class="px-8 w-1/2">
                        <h3 class="text-sm font-semibold mb-2">Lifetime Exchange</h3>
                        <p class="text-sm text-purple-300">Exchange your old designs anytime you want an upgrade.</p>
                    </div>
                </div>

                <!-- One Year Warranty* -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('asset/img/download.jpeg') }}" alt="" class="h-20">
                    <div class="px-8 w-1/2">
                        <h3 class="text-sm font-semibold mb-2">One Year Warranty*</h3>
                        <p class="text-sm text-purple-300">If your jewellery has a defect, we will fix it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- REVIEWS --}}
    <!-- Include Swiper CSS -->
    {{-- <link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/> --}}
    <!-- Include Swiper JS -->
    {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<div class="w-full">
  <!-- Swiper Container -->
  <div class="swiper-container w-full">
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper">
      <!-- Testimonial Slide 1 -->
      <div class="swiper-slide">
        <div class="flex flex-col items-center bg-white ">
          <div class="flex-shrink-0">
            <div class="bg-purple-100 p-4 rounded-full">
              <svg
                class="w-8 h-8 text-purple-600"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.75 2C4.548 2 2 4.548 2 7.75v8.5C2 19.452 4.548 22 7.75 22h8.5C19.452 22 22 19.452 22 16.25v-8.5C22 4.548 19.452 2 16.25 2h-8.5zM4.5 7.75c0-1.794 1.456-3.25 3.25-3.25h8.5c1.794 0 3.25 1.456 3.25 3.25v8.5c0 1.794-1.456 3.25-3.25 3.25h-8.5c-1.794 0-3.25-1.456-3.25-3.25v-8.5zm13 0a.75.75 0 1 1 1.5 0v1.75a.75.75 0 1 1-1.5 0V7.75zM12 8.25a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5zm0 1.5a2.25 2.25 0 1 1 0 4.5 2.25 2.25 0 0 1 0-4.5z"
                ></path>
              </svg>
            </div>
          </div>

          <!-- Testimonial Text -->
          <div>
            <p class="text-lg font-medium text-gray-700">
              "I received this Mangalsutra bracelet as my first Karva Chauth
              gift! It's simple and sweet, just like my husband."
            </p>
            <h5 class="text-sm font-semibold text-gray-500 mt-4">
              - Akanksha Joshi via Instagram
            </h5>
            <div class="flex justify-center">
              <button
                class="mt-6 bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-lg transition duration-300"
              >
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Add more slides here -->
      <div class="swiper-slide"> <!-- Slide 2, Slide 3 etc. --> </div>
    </div>

    <!-- Swiper Pagination -->
    <div class="swiper-pagination"></div>

    <!-- Swiper Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div> --}}

    <!-- Swiper JS Initialization -->
    {{-- <script>
  var swiper = new Swiper(".swiper-container", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
    },
  });
</script> --}}

    <div class="main py-8">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <h1 class="text-lg md:text-xl font-semibold">Shop Our Instagram</h1>
            <h2 class="text-lg md:text-xl text-purple-600">#MyCaratLaneStory</h2>
        </div>

        <!-- Image Grid Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Large Image -->
            <div class="w-full">
                <img src="{{ asset('asset/img/j6.jpg') }}" alt="Instagram Image"
                    class="w-full h-auto object-cover rounded-lg shadow-lg">
            </div>

            <!-- Smaller Image Grid -->
            <div class="grid grid-cols-3 gap-4">
                <div><img src="{{ asset('asset/img/j4.jpg') }}" alt="Instagram Image"
                        class="w-full h-auto object-cover rounded-lg shadow-lg"></div>
                <div><img src="{{ asset('asset/img/j4.jpg') }}" alt="Instagram Image"
                        class="w-full h-auto object-cover rounded-lg shadow-lg"></div>
                <div><img src="{{ asset('asset/img/j4.jpg') }}" alt="Instagram Image"
                        class="w-full h-auto object-cover rounded-lg shadow-lg"></div>
                <div><img src="{{ asset('asset/img/j4.jpg') }}" alt="Instagram Image"
                        class="w-full h-auto object-cover rounded-lg shadow-lg"></div>
                <div><img src="{{ asset('asset/img/j4.jpg') }}" alt="Instagram Image"
                        class="w-full h-auto object-cover rounded-lg shadow-lg"></div>
                <div><img src="{{ asset('asset/img/j4.jpg') }}" alt="Instagram Image"
                        class="w-full h-auto object-cover rounded-lg shadow-lg"></div>
            </div>
        </div>
    </div>






    <!-- JavaScript to handle the tab switching -->


    <script>
        // Select tab buttons and content
        const tabs = document.querySelectorAll('.tab-btn');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                // Remove 'hidden' class from the associated slider
                contents.forEach(content => content.classList.add('hidden'));
                const targetTab = document.getElementById(tab.getAttribute('data-tab'));
                targetTab.classList.remove('hidden');

                // Update button active state
                tabs.forEach(t => t.classList.remove('bg-purple-500', 'text-white'));
                tab.classList.add('bg-purple-500', 'text-white');
            });
        });
    </script>
@endsection
