@extends('components.main')

@section('content')
<style>
    .clip-path {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 53% 100%, 50% 97%, 46% 100%, 0 100%);
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .slider-wrapper {
        display: flex;
        transition: transform 0.7s ease-in-out;
    }
    .slider-slide {
        min-width: 100%; /* Ensures only one slide is visible at a time */
        height: 100%;
        position: relative;
    }
</style>

{{-- HOME BANNER SLIDER --}}
<!-- Slider Container -->
<div class="relative w-full  md:h-100 overflow-hidden">
    <!-- Slider Wrapper -->
    <div class="relative w-full h-full flex items-center justify-center overflow-hidden">
        <!-- Slides Wrapper -->
        <div id="sliderWrapper" class="slider-wrapper">
            <!-- Slide 1 -->
            <div class="slider-slide">
                <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/09_Sep/Banners/DT/Offer/02/Desktop1920x694_R1.webp"
                    alt="Banner Image" class="w-full h-full object-cover clip-path rounded shadow-lg">
            </div>

            <!-- Slide 2 -->
            <div class="slider-slide">
                <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/Egold/1/Desktop_1920x694.jpg"
                    alt="E-Gold Banner" class="w-full h-full object-cover clip-path rounded shadow-lg">
            </div>

            <!-- Slide 3 -->
            <div class="slider-slide">
                <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/07_JULY/Banner/SolitaireBlog/Desktop.webp"
                    alt="Solitaire Blog Banner" class="w-full h-full object-cover clip-path rounded shadow-lg">
            </div>
        </div>

        <!-- Pagination -->
        <div class="slider-pagination absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <button class="pagination-dot bg-white rounded-full w-3 h-3 focus:outline-none" data-index="0"></button>
            <button class="pagination-dot bg-white rounded-full w-3 h-3 focus:outline-none" data-index="1"></button>
            <button class="pagination-dot bg-white rounded-full w-3 h-3 focus:outline-none" data-index="2"></button>
        </div>
    </div>
</div>

<script>
    const slides = document.querySelectorAll('.slider-slide');
    const paginationDots = document.querySelectorAll('.pagination-dot');
    let currentIndex = 0;

    function showSlide(index) {
        const sliderWrapper = document.getElementById('sliderWrapper');
        sliderWrapper.style.transform = `translateX(-${index * 100}%)`;
        paginationDots.forEach((dot, i) => {
            dot.classList.toggle('bg-gray-400', i !== index);
            dot.classList.toggle('bg-white', i === index);
        });
    }

    paginationDots.forEach(dot => {
        dot.addEventListener('click', (e) => {
            currentIndex = parseInt(e.target.dataset.index);
            showSlide(currentIndex);
        });
    });

    // Auto slide functionality (optional)
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }, 5000); // Change slide every 5 seconds
</script>


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
                alt="Banner Image" class="w-full h-auto rounded ">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_2.jpg"
                alt="Banner Image" class="w-full h-auto rounded ">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_4.jpg"
                alt="Banner Image" class="w-full h-auto rounded ">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_3.jpg"
                alt="Banner Image" class="w-full h-auto rounded ">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_5.jpg"
                alt="Banner Image" class="w-full h-auto rounded ">
        </div>
        <div>
            <img src="https://cdn.caratlane.com/media/static/images/V4/2024/CL/10_OCT/Banner/6tile/01/Desktop_6.jpg"
                alt="Banner Image" class="w-full h-auto rounded ">
        </div>
    </section>


    {{-- HD VIDEO SECTION --}}

    {{-- <div class="relative w-full h-auto mx-0 overflow-hidden shadow-2xl grid grid-cols-1 md:grid-cols-3">
        <!-- Video Section -->
        <div class="relative col-span-2 pt-[56.25%]" dir="ltr">
            <iframe class="absolute top-0 left-0 w-full h-full rounded-t-xl md:rounded-s-3xl"
                src="https://www.youtube.com/embed/kYOP52BUZTI?autoplay=1&mute=1&loop=1&playlist=kYOP52BUZTI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    
        <!-- Overlay and Text Section -->
        <div class="flex items-center justify-center bg-purple-900 p-6 rounded-b-xl md:rounded-s-3xl col-span-1" dir="rtl">
            <div class="text-right max-w-md">
                <h2 class="text-6xl md:text-5xl text-pretty text-white mb-2 drop-shadow-lg">
                    <span class="cursive font-light text-balance">𝗟𝗮𝘁𝗲𝘀𝘁</span><br>𝒟𝑒𝓈𝒾𝑔𝓃
                </h2>
                <p class="text-lg md:text-xl text-white font-light drop-shadow">Perfectly festive,<br>effortlessly stunning</p>
                <i class="ri-arrow-right-line bg-white rounded-full text-3xl mt-6"></i>
            </div>
        </div>
    </div> --}}
    <div class="relative w-full h-full mx-0 overflow-hidden shadow-2xl grid grid-cols-1 md:grid-cols-3">
        <!-- Video Section -->
        <div class="relative col-span-2 aspect-video" dir="ltr">
            <iframe class="absolute top-0 left-0 w-full h-full rounded-l-lg"
                src="https://www.youtube.com/embed/kYOP52BUZTI?autoplay=1&mute=1&loop=1&playlist=kYOP52BUZTI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    
        <!-- Overlay and Text Section -->
        <div class="flex items-center justify-center bg-purple-900 p-6 rounded-r-lg col-span-1" dir="rtl">
            <div class="text-right max-w-md">
                <h2 class="text-6xl md:text-5xl text-pretty text-white mb-2 drop-shadow-lg">
                    <span class="cursive font-light text-balance">𝗟𝗮𝘁𝗲𝘀𝘁</span><br>𝒟𝑒𝓈𝒾𝑔𝓃
                </h2>
                <p class="text-lg md:text-xl text-white font-light drop-shadow">Perfectly festive,<br>effortlessly stunning</p>
                <i class="ri-arrow-right-line bg-white rounded-full text-3xl mt-6"></i>
            </div>
        </div>
    </div>
    


    {{-- COLLECTIONS --}}
    {{-- <div class="container mx-auto p-4 py-24">
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
    </div> --}}
    <div class="container mx-auto p-4 py-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Image 1 -->
            <div class="relative group overflow-hidden">
                <img src="{{ asset('asset/img/Collection_disney_11.jpg') }}" alt="Disney Collection"
                    class="w-full h-auto rounded-lg shadow-md transition-transform duration-300 transform group-hover:scale-105">
            </div>
    
            <!-- Image 2 (Centered and Adjusted) -->
            <div class="relative group overflow-hidden flex items-center justify-center">
                <img src="{{ asset('asset/img/Utsav.jpg') }}" alt="Utsav Collection"
                    class="w-full h-auto rounded-lg shadow-md transition-transform duration-300 transform group-hover:scale-105">
                <button
                    class="absolute bottom-4 text-black bg-white py-2 px-4 rounded-lg opacity-90 hover:opacity-100 transition duration-300">
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
    

{{-- card images --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 m-4 p-2">
        <div><img src="{{ asset('asset/img/cart1.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart2.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart3.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart4.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart5.webp') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart6.jpg') }}" alt=""></div>
        <div><img src="{{ asset('asset/img/cart7.webp') }}" alt=""></div>
        <div><img src="{{asset('asset/img/2x (1).webp')}}" alt=""></div>
    </div>

    {{-- VIDEO HD SECOND --}}
    {{-- <div class="relative w-full h-auto mx-auto overflow-hidden py-4 grid grid-cols-1 lg:grid-cols-3 px-4 md:px-4">
        <!-- Video Section -->
        <div class="relative col-span-2 pt-[56.25%]" dir="ltr">
            <iframe 
                class="absolute top-0 left-0 w-full h-full rounded-t-xl md:rounded-s-3xl"
                src="https://www.youtube.com/embed/xuuNZQwhEn4?si=wAVU0dgJMPh7Ijs1&autoplay=1&mute=1&controls=0&loop=1&playlist=xuuNZQwhEn4" 
                title="Latest Design Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen>
            </iframe>
        </div>
    
        <!-- Overlay and Text Section -->
        <aside class="flex items-center justify-center bg-purple-900 p-6 rounded-b-xl md:rounded-s-3xl col-span-1" dir="rtl">
            <div class="text-right max-w-md">
                <h2 class="text-6xl md:text-5xl text-pretty text-white mb-2 drop-shadow-lg">
                    <span class="cursive font-light text-balance">Get</span><br>100%
                </h2>
                <p class="text-lg md:text-xl text-white font-light drop-shadow">
                    of Your Gold Exachange Value
                </p>
                <i class="ri-arrow-right-line bg-white rounded-full text-3xl mt-6"></i>
            </div>
        </aside>
    </div> --}}
    <div class="relative w-full h-full mx-auto overflow-hidden py-4 grid grid-cols-1 lg:grid-cols-3">
        <!-- Video Section -->
        <div class="relative col-span-2 aspect-video" dir="ltr">
            <iframe 
                class="absolute top-0 left-0 w-full h-full rounded-l-lg"
                src="https://www.youtube.com/embed/xuuNZQwhEn4?si=wAVU0dgJMPh7Ijs1&autoplay=1&mute=1&controls=0&loop=1&playlist=xuuNZQwhEn4" 
                title="Latest Design Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen>
            </iframe>
        </div>
    
        <!-- Overlay and Text Section -->
        <aside class="flex items-center justify-center bg-purple-900 p-6 rounded-r-lg col-span-1" dir="rtl">
            <div class="text-right max-w-md">
                <h2 class="text-6xl md:text-5xl text-pretty text-white mb-2 drop-shadow-lg">
                    <span class="cursive font-light text-balance">Get</span><br>100%
                </h2>
                <p class="text-lg md:text-xl text-white font-light drop-shadow">
                    of Your Gold Exchange Value
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
    {{-- FOR DESKTOP --}}
    {{-- <div class="container mx-auto  py-6 bg-gray-50 lg:block hidden">
        <div class="flex flex-col md:flex-row gap-2 md:gap-40 justify-center">
            <!-- Left Section -->
            <div class="w-1/3 md:w-1/3 relative mb-6 md:mb-0">
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-black rounded-lg p-4 transform translate-x-1/2">
                    <h2 class="text-sm md:text-md font-bold mb-2 text-nowrap px-6">Unsure Which Design To Pick?</h2>
                    <p class="text-sm md:text-base mb-2 text-nowrap">Book A FREE Home Trial!</p>
                    <button class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-4 py-2 rounded text-sm md:text-base transition duration-300 hover:from-pink-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-opacity-50">
                        Schedule Appointment
                    </button>
                </div>
                <div class="mt-4">
                    <img src="{{ asset('asset/img/T@H.webp') }}" alt="Customers discussing designs" class="w-full rounded object-cover">
                </div>
            </div>
    
            <!-- Right Section -->
            <div class="w-1/2 md:w-1/3 relative mb-6 md:mb-0">
                <div class="absolute  inset-0 flex flex-col justify-center items-center text-center text-black rounded-lg p-4 transform translate-x-1/2">
                    <h2 class="text-sm md:text-md font-bold mb-2 text-nowrap px-4">Come Visit Us At Any of Our Stores!</h2>
                    <div class="mb-4 w-1/2">
                        <input type="text" placeholder="Enter Pincode or City" class="w-full p-2 border border-pink-500 rounded text-sm md:text-base focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-opacity-50">
                    </div>
                </div>
                <div class="mt-4">
                    <img src="{{ asset('asset/img/store.webp') }}" alt="Store interior" class="w-full rounded object-cover">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container mx-auto py-6 bg-gray-50 lg:block md:hidden hidden">
        <div class="relative flex flex-col md:flex-row gap-2 md:gap-0 justify-center">
            <!-- Left Section -->
            <div class="w-full md:w-1/3 relative mb-6 md:mb-0 left-0">
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-black rounded-lg p-0 transform translate-x-1/2">
                    <h2 class="text-sm md:text-md font-bold mb-2 text-nowrap px-4">Unsure Which Design To Pick?</h2>
                    <p class="text-sm md:text-base mb-2 text-nowrap">Book A FREE Home Trial!</p>
                    <button class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-4 py-2 rounded text-sm md:text-base transition duration-300 hover:from-pink-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-opacity-50">
                        Schedule Appointment
                    </button>
                </div>
                <div class="mt-4">
                    <img src="{{ asset('asset/img/T@H.webp') }}" alt="Customers discussing designs" class="w-full rounded object-cover">
                </div>
            </div>
    
            <!-- Right Section -->
            <div class="w-full md:w-1/3 relative mb-6 md:mb-0 left-2"style="margin-left: 200px;"
            >
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-black rounded-lg p-0 transform translate-x-1/3">
                    <h2 class="text-sm md:text-md font-bold mb-2 text-nowrap px-4">Come Visit Us At Any of Our Stores!</h2>
                    <div class="mb-4 w-1/2">
                        <input type="text" placeholder="Enter Pincode or City" class="w-full p-2 border border-pink-500 rounded text-sm md:text-base focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-opacity-50">
                    </div>
                </div>
                <div class="mt-4">
                    <img src="{{ asset('asset/img/store.webp') }}" alt="Store interior" class="w-full rounded object-cover">
                </div>
            </div>
        </div>
    </div>
    
    
    
{{-- FOR MOBILE --}}

<div class="container mx-auto px-4 py-6 bg-gray-50 lg:hidden block">
    <div class="flex flex-col md:flex-row gap-8 md:gap-40 justify-center">
        <!-- Left Section -->
        <div class="w-full">
            <div class="mt-4">
                <img src="{{ asset('asset/img/T@H.webp') }}" alt="Customers discussing designs" class="w-full rounded object-cover">
            </div>
            <div class=" justify-center items-center text-center text-black my-2">
                <h2 class="text-lg md:text-xl font-bold mb-2">Unsure Which Design To Pick?</h2>
                <p class="text-sm md:text-base mb-2">Book A FREE Home Trial!</p>
                <button class="bg-gradient-to-r from-pink-500 to-purple-600 text-black px-4 py-2 rounded text-sm md:text-base transition duration-300 hover:from-pink-600 hover:to-purple-700">
                    Schedule Appointment
                </button>
            </div>
           
        </div>

        <!-- Right Section -->
        <div class="w-full relative">
            <div class="mt-4">
                <img src="{{ asset('asset/img/store.webp') }}" alt="Store interior" class="w-full rounded object-cover">
            </div>
            <div class="justify-center items-center text-center text-black my-2">
                <h2 class="text-lg md:text-xl font-bold mb-2">Come visit us at any of our stores!</h2>
                <div class="mb-4">
                    <input type="text" placeholder="Enter Pincode or City" class="w-full p-2 border border-pink-500 rounded text-sm md:text-base">
                </div>
            </div>
           
        </div>
    </div>
</div>


    {{-- GOLD DIV --}}
    <div class="container mx-auto px-4 py-6 my-2">
        <div class="bg-gray-50 p-2 grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Section Title -->
            <div class="flex flex-col items-center justify-center">
                <img src="{{asset('asset/img/OLD-GOLD_.png')}}" alt="">
            </div>
    
            <!-- Description Section -->
            <div class="lg:mt-8 flex flex-col justify-center">
                <h2 class="lg:text-3xl text-lg text-center font-semibold text-gray-800">A Stylish Upgrade</h2>
                <p class="mt-2 text-gray-600 text-center text-sm lg:text-lg">
                    - Enjoy 0% Deduction on your gold exchange value. Please note: The old gold doesn't have to be from only CaratLane; it can be any gold jewellery you have.
                </p>
                <button
                    class="mt-4 bg-gradient-to-r from-pink-500 to-purple-500 text-white px-6 py-2 rounded transition duration-300 hover:from-pink-600 hover:to-purple-600">
                    Know More
                </button>
            </div>
        </div>
    </div>
    

    {{-- SECTION --}}
    <div class="flex items-center justify-center py-8 bg-purple-900">
        <div class="max-w-xl w-full px-4 md:px-0 text-center">
            <h1 class="text-2xl md:text-2xl lg:text-2xl font-bold text-yellow-600 mb-4">
                The trust of TaniSHQ,
            </h1>
            <h1 class="text-2xl md:text-3xl lg:text-3xl font-bold text-white mb-4">
                The spirit of CARATLANE
            </h1>
            <p class="text-sm md:text-md lg:text-md text-purple-300 mb-6">
                The highest quality of craftsmanship and innovation, that brings you modern, everyday designs.
            </p>
            <button
                class="bg-gradient-to-r from-pink-600 to-purple-700 hover:from-pink-500 hover:to-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500 text-white px-6 py-2 rounded transition duration-300">
                Know More
            </button>
        </div>
    </div>

    {{-- SLIDER - - CARDS --}}
    {{-- <div class="container mx-auto px-4 py-8">
        <!-- Header with Tabs -->
        <div class="grid grid-cols-1 lg:grid-cols-2 justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 text-center">Best of CaratLane</h2>
            <div class="inline-flex rounded-md shadow-sm justify-center mt-2" role="group">
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
                    <ul class="glide__slides flex space-x-4">
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
                <div class="glide__arrows flex justify-between mt-4" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left bg-white p-2 rounded-full shadow-md"
                        data-glide-dir="<" aria-label="Previous Slide">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button class="glide__arrow glide__arrow--right bg-white p-2 rounded-full shadow-md"
                        data-glide-dir=">" aria-label="Next Slide">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    
        <!-- Slider 2 (MEN) -->
        <div id="slider2" class="tab-content hidden mx-auto">
            <div class="glide" id="glide2">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides flex space-x-4">
                        <!-- Example Product Card -->
                        <li class="glide__slide w-48 flex-shrink-0">
                            <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                                <div class="relative">
                                    <a href="{{ route('productdetail') }}">
                                        <img src="{{ asset('asset/img/best1.webp') }}" alt="Best Seller Gold Nath"
                                            class="w-full h-48 object-cover" loading="lazy">
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                    <h3 class="text-lg font-semibold text-gray-800 mt-1">Best Seller Gold Nath</h3>
                                </div>
                            </div>
                        </li>
                        <!-- Additional Product Cards... -->
                    </ul>
                </div>
                <div class="glide__arrows flex justify-between mt-4" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left bg-white p-2 rounded-full shadow-md"
                        data-glide-dir="<" aria-label="Previous Slide">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button class="glide__arrow glide__arrow--right bg-white p-2 rounded-full shadow-md"
                        data-glide-dir=">" aria-label="Next Slide">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container mx-auto px-4 py-8">
        <!-- Header with Tabs -->
        <div class="grid grid-cols-1 lg:grid-cols-2 justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 text-center">Best of CaratLane</h2>
            <div class="inline-flex rounded-md shadow-sm justify-center mt-2" role="group">
                <button id="women-tab" type="button"
                    class="tab-btn px-4 py-2 text-sm font-medium text-white bg-purple-500 rounded-l-lg hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    data-tab="slider1" aria-controls="slider1" aria-selected="true">
                    WOMEN
                </button>
                <button id="men-tab" type="button"
                    class="tab-btn px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-r-lg border border-gray-200 hover:bg-gray-100 hover:text-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500"
                    data-tab="slider2" aria-controls="slider2" aria-selected="false">
                    MEN
                </button>
            </div>
        </div>
    
        <!-- Slider 1 (WOMEN) -->
        <div id="slider1" class="tab-content">
            <div class="glide" id="glide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides flex space-x-4">
                        <!-- Product 1 -->
                        <li class="glide__slide w-48 flex-shrink-0">
                            <img src="{{ asset('asset/img/j1.jpg') }}" alt="Glitter Miracle Diamond Ring"
                                class="w-full h-48 object-cover rounded-lg mb-2" loading="lazy">
                            <p class="font-semibold text-lg">₹25,699</p>
                            <p class="text-sm text-gray-500 line-through">₹28,555</p>
                            <p class="text-sm text-gray-700">Glitter Miracle Diamond Ring</p>
                        </li>
                        <!-- Additional Products... -->
                    </ul>
                </div>
                <div class="glide__arrows flex justify-between mt-4" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left bg-white p-2 rounded-full shadow-md"
                        data-glide-dir="<" aria-label="Previous Slide">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button class="glide__arrow glide__arrow--right bg-white p-2 rounded-full shadow-md"
                        data-glide-dir=">" aria-label="Next Slide">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    
        <!-- Slider 2 (MEN) -->
        <div id="slider2" class="tab-content hidden w-full">
            <div class="glide" id="glide2">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides flex space-x-4">
                        <!-- Product 1 -->
                        <li class="glide__slide w-48 flex-shrink-0">
                            <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                                <div class="relative">
                                    <a href="{{ route('productdetail') }}">
                                        <img src="{{ asset('asset/img/best1.webp') }}" alt="Best Seller Gold Nath"
                                            class="w-full h-48 object-cover" loading="lazy">
                                    </a>
                                </div>
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">₹20,664</h2>
                                    <h3 class="text-lg font-semibold text-gray-800 mt-1">Best Seller Gold Nath</h3>
                                </div>
                            </div>
                        </li>
                        <!-- Additional Products... -->
                    </ul>
                </div>
                <div class="glide__arrows flex justify-between mt-4" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left bg-white p-2 rounded-full shadow-md"
                        data-glide-dir="<" aria-label="Previous Slide">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button class="glide__arrow glide__arrow--right bg-white p-2 rounded-full shadow-md"
                        data-glide-dir=">" aria-label="Next Slide">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
<script>
document.querySelectorAll('.tab-btn').forEach(button => {
    button.addEventListener('click', () => {
        const tabID = button.getAttribute('data-tab');
        document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));
        document.getElementById(tabID).classList.remove('hidden');
        
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('bg-purple-500', 'text-white');
            btn.classList.add('bg-white', 'text-gray-700');
        });
        button.classList.add('bg-purple-500', 'text-white');
    });
});
    
</script>    
    
     
    
    <!-- Initialize Glide.js -->
    <script>



        document.addEventListener('DOMContentLoaded', function () {
            var glide1 = new Glide('#glide1', {
                type: 'carousel',
                perView: 3,
                gap: 20,
                breakpoints: {
                    640: {
                        perView: 1
                    },
                    768: {
                        perView: 2
                    }
                }
            }).mount();
    
            var glide2 = new Glide('#glide2', {
                type: 'carousel',
                perView: 3,
                gap: 20,
                breakpoints: {
                    640: {
                        perView: 1
                    },
                    768: {
                        perView: 2
                    }
                }
            }).mount();
    
            // Tab functionality
            const tabs = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('.tab-content');
    
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = tab.dataset.tab;
    
                    tabs.forEach(t => {
                        t.classList.toggle('bg-purple-500', t === tab);
                        t.classList.toggle('text-white', t === tab);
                        t.classList.toggle('text-gray-700', t !== tab);
                        t.classList.toggle('bg-white', t !== tab);
                    });
    
                    contents.forEach(content => {
                        content.classList.toggle('hidden', content.id !== target);
                    });
                });
            });
        });
    </script>
    

    {{-- services features --}}
    <div class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 items-center">
                <!-- 100% Certified & Free Shipping -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('asset/img/download.jpeg') }}" alt="Certified & Free Shipping" class="h-20">
                    <div class="w-full">
                        <h3 class="text-sm font-semibold mb-2">100% Certified & Free Shipping</h3>
                        <p class="text-sm text-purple-300">Our jewellery always comes with a certificate of authentication.</p>
                    </div>
                </div>
    
                <!-- 15 Day Money-Back -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('asset/img/download.jpeg') }}" alt="15 Day Money-Back" class="h-20">
                    <div class="w-full">
                        <h3 class="text-sm font-semibold mb-2">15 Day Money-Back</h3>
                        <p class="text-sm text-purple-300">Get 100% refund if you don't like your jewellery.</p>
                    </div>
                </div>
    
                <!-- Lifetime Exchange -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('asset/img/download.jpeg') }}" alt="Lifetime Exchange" class="h-20">
                    <div class="w-full">
                        <h3 class="text-sm font-semibold mb-2">Lifetime Exchange</h3>
                        <p class="text-sm text-purple-300">Exchange your old designs anytime you want an upgrade.</p>
                    </div>
                </div>
    
                <!-- One Year Warranty* -->
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('asset/img/download.jpeg') }}" alt="One Year Warranty" class="h-20">
                    <div class="w-full">
                        <h3 class="text-sm font-semibold mb-2">One Year Warranty*</h3>
                        <p class="text-sm text-purple-300">If your jewellery has a defect, we will fix it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    {{-- ***************** REVIEWS ************* --}}

  
        <div class="relative w-full mx-auto overflow-hidden my-8 mb-4">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide px-4">
                        <div class="w-full p-6 rounded-lg shadow-md">
                            <div class="flex justify-center mb-4">
                                <!-- Testimonial Image -->
                                <img src="{{ asset('asset/img/insta-icon.png') }}" alt="Instagram Icon"
                                    class="w-24 h-24 object-center">
                            </div>
                            <!-- Testimonial Text -->
                            <p class="italic text-gray-700 text-center">
                                "I received this Mangalsutra bracelet as my first Karva Chauth gift! It's simple and sweet, just
                                like my husband."
                            </p>
                            <p class="font-semibold mt-2 text-sm text-gray-500 text-center">
                                - Akanksha Joshi via Instagram
                            </p>
                            <!-- Read More Button -->
                            <div class="flex justify-center mt-4 mb-4">
                                <button
                                    class="border border-purple-500 text-purple-500 px-4 py-2 rounded-md transition duration-300 hover:from-pink-600 hover:to-purple-600">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <!-- Slide 2 -->
                    <div class="swiper-slide px-4">
                        <div class="w-full p-6 rounded-lg shadow-md">
                            <div class="flex justify-center mb-4">
                                <!-- Testimonial Image -->
                                <img src="{{ asset('asset/img/insta-icon.png') }}" alt="Instagram Icon"
                                    class="w-24 h-24 object-center">
                            </div>
                            <!-- Testimonial Text -->
                            <p class="italic text-gray-700 text-center">
                                "I received this Mangalsutra bracelet as my first Karva Chauth gift! It's simple and sweet, just
                                like my husband."
                            </p>
                            <p class="font-semibold mt-2 text-sm text-gray-500 text-center">
                                - Akanksha Joshi via Instagram
                            </p>
                            <!-- Read More Button -->
                            <div class="flex justify-center mt-4 mb-4">
                                <button
                                    class="border border-purple-500 text-purple-500 px-4 py-2 rounded-md transition duration-300 hover:from-pink-600 hover:to-purple-600">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <!-- Slide 3 -->
                    <div class="swiper-slide px-4">
                        <div class="w-full  p-6 rounded-lg shadow-md">
                            <div class="flex justify-center mb-4">
                                <!-- Testimonial Image -->
                                <img src="{{ asset('asset/img/insta-icon.png') }}" alt="Instagram Icon"
                                    class="w-24 h-24 object-center">
                            </div>
                            <!-- Testimonial Text -->
                            <p class="italic text-gray-700 text-center">
                                "I received this Mangalsutra bracelet as my first Karva Chauth gift! It's simple and sweet, just
                                like my husband."
                            </p>
                            <p class="font-semibold mt-2 text-sm text-gray-500 text-center">
                                - Akanksha Joshi via Instagram
                            </p>
                            <!-- Read More Button -->
                            <div class="flex justify-center mt-4 mb-4">
                                <button
                                    class="border border-purple-500 text-purple-500 px-4 py-2 rounded-md transition duration-300 hover:from-pink-600 hover:to-purple-600">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
    
            
            </div>
        </div>
    
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
              
            });
        </script>

    








    {{-- **************** shop by instagram*********** --}}

    <div class="main py-12 px-6 md:px-12">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-10">
            <h1 class="text-xl md:text-2xl font-semibold">Shop Our Instagram</h1>
            <h2 class="text-xl md:text-2xl text-black mt-4 md:mt-0">#MyCaratLaneStory</h2>
        </div>

        <!-- Image Grid Section -->
        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Large Image -->
            <div class="w-full overflow-hidden">
                <img src="https://cdn.caratlane.com/media/catalog/product/U/T/UT01166-1Y0000_3_lar.jpg"
                    alt="Product Image"
                    class="h-[400px] object-cover transition-transform scale-95 hover:scale-100 ease-in-out duration-300">
            </div>

            <!-- Smaller Image Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-3">
                <div class="overflow-hidden">
                    <img src="{{ asset('asset/img/insta1.jpg') }}" alt="Instagram Image"
                        class="w-full h-full object-cover transition-transform scale-95 hover:scale-100 ease-in-out duration-300">
                </div>
                <div class="overflow-hidden">
                    <img src="{{ asset('asset/img/insta2.jpg') }}" alt="Instagram Image"
                        class="w-full h-full object-cover transition-transform scale-95 hover:scale-100 ease-in-out duration-300">
                </div>
                <div class="overflow-hidden">
                    <img src="{{ asset('asset/img/insta3.jpg') }}" alt="Instagram Image"
                        class="w-full h-full object-cover transition-transform scale-95 hover:scale-100 ease-in-out duration-300">
                </div>
                <div class="overflow-hidden">
                    <img src="{{ asset('asset/img/insta4.jpg') }}" alt="Instagram Image"
                        class="w-full h-full object-cover transition-transform scale-95 hover:scale-100 ease-in-out duration-300">
                </div>
                <div class="overflow-hidden">
                    <img src="{{ asset('asset/img/insta5.jpg') }}" alt="Instagram Image"
                        class="w-full h-full object-cover transition-transform scale-95 hover:scale-100 ease-in-out duration-300">
                </div>
                <div class="overflow-hidden">
                    <img src="{{ asset('asset/img/insta6.jpg') }}" alt="Instagram Image"
                        class="w-full h-full object-cover transition-transform scale-95 hover:scale-100 ease-in-out duration-300">
                </div>
            </div>
        </div>


    </div>



    {{-- contact --}}
    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6 bg-gradient-to-b from-purple-900 to-purple-400 rounded-lg shadow-md items-center justify-center mx-4 md:mx-12">
        <!-- Left Section -->
        <div class="flex items-center justify-center space-x-4 px-4 md:px-8">
            <div>
                <img src="{{ asset('asset/img/purple-gift-icon.png') }}" alt="Gift Icon" class="w-24 h-24">
            </div>
            <div>
                <h1 class="text-xl font-semibold text-white">Join CaratLane Insider</h1>
                <p class="text-gray-200">Discover enticing deals, latest arrivals, & more.</p>
            </div>
        </div>
    
        <!-- Right Section -->
        <div class="flex flex-col space-y-4">
            <!-- Email Input -->
            <div class="mb-4">
                <input type="text" placeholder="Enter your email"
                    class="w-full md:w-1/2 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-300">
            </div>
    
            <div>
                <button
                    class="w-full md:w-1/2 px-6 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-300">Submit</button>
            </div>
    
            <!-- Gender Selection -->
            <div class="flex flex-col space-y-2">
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" class="form-radio text-purple-500" aria-label="Female">
                    <span class="ml-2 text-white">Female</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" class="form-radio text-purple-500" aria-label="Male">
                    <span class="ml-2 text-white">Male</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" class="form-radio text-purple-500" aria-label="Others">
                    <span class="ml-2 text-white">Others</span>
                </label>
            </div>
        </div>
    </div>
     --}}


    <div
        class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:p-6 p-2 bg-gradient-to-b from-purple-900 to-purple-400 rounded-lg shadow-md items-center justify-center lg:mx-12 mx-4">
        <!-- Left Section -->
        <div class="lg:flex items-center justify-center space-x-4 lg:px-8">
            <div class="flex justify-center">
                <img src="{{ asset('asset/img/purple-gift-icon.png') }}" alt="Gift Icon" class="w-24 h-24 object-center">
            </div>
            <div>
                <h1 class="lg:text-xl font-semibold text-white text-center">Join CaratLane Insider</h1>
                <p class="text-gray-200 text-center">Discover enticing deals, latest arrivals, & more.</p>
            </div>
        </div>

        <!-- Right Section -->
        <div class=" flex flex-col items-center justify-center space-y-4 lg:space-y-0 lg:grid">
            <!-- Email Input -->
           <div class="grid grid-cols-2 lg:grid-cols-1 px-8 lg:px-0">
            <div class="space-y-2 mb-4 w-full">
                <input type="text" placeholder="Enter your email"
                    class="lg:w-full w-full px-2 lg:px-6 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-300">
            
                </div>

            <div class="space-y-2 mb-4 w-full">
                <button
                    class="lg:px-6 py-2 px-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-300">Submit</button>
            </div>
           </div>

            <!-- Gender Selection -->
            <div class="space-y-2">
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" class="form-radio text-purple-500" aria-label="Female">
                    <span class="lg:ml-2 text-white">Female</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" class="form-radio text-purple-500" aria-label="Male">
                    <span class="lg:ml-2 text-white">Male</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" class="form-radio text-purple-500" aria-label="Others">
                    <span class="lg:ml-2 text-white">Others</span>
                </label>
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
