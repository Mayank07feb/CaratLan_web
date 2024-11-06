@extends('components.main')
@section('content')

{{-- BANNER IMAGE --}}
<div class="max-w-6xl mx-auto mt-24 py-8">
    <!-- Diamond Grid Container -->
    <div class="grid grid-cols-1 items-center justify-center">
        <!-- Jewelry Image -->
        <div class="overflow-hidden relative group ">
            <img src="{{asset('asset/img/pic7.png')}}" alt="Gold necklace detail" 
                 class="w-full h-full object-cover flex justify-center transform group-hover:scale-125 group-hover:rotate-12 transition-transform duration-300 ease-in-out">
        </div>
    </div>
</div>

{{-- WHO WE ARE???? --}}
<div class="max-w-6xl mx-auto p-6 mt-8">
    <!-- Who Are We Section -->
    <section class="mb-12">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6 text-center">Who Are We</h2>
        <div class="w-20 h-0.5 bg-gradient-to-r from-pink-500 to-purple-500 mx-auto mb-6"></div>

        <p class="text-gray-600 text-center text-lg sm:text-xs mb-4 font-light">
            At CaratLane, we believe that every woman deserves exquisite jewelry that complements her unique style and dynamic lifestyle. Conversations with hundreds of women across the country revealed a common challenge: the struggle to find beautiful, high-quality jewelry for significant occasions, often settling for designs that didn’t resonate with their daily lives.
        </p>
        <p class="text-gray-600 text-center text-lg sm:text-xs mb-4 font-light">
            Founded in 2008, CaratLane was created to bridge the gap between opulent jewelry designed for special moments and the need for everyday wear. We aim to make diamond jewelry not only accessible and affordable but also a timeless addition to your wardrobe, allowing you to wear elegance effortlessly every day.
        </p>
        <p class="text-gray-600 text-center text-lg sm:text-xs font-bold">
            Today, CaratLane proudly stands as India’s largest omni-channel jeweler, with a strong presence in over 100 cities and more than 250 retail stores nationwide.
        </p>
    </section>

    <!-- Featured In Section -->
    <section class="mb-12">
        <h2 class="text-2xl sm:text-3xl font-light text-gray-800 mb-6 text-center">Featured In</h2>
        <!-- Grid of Featured Logos (Responsive) -->
        {{-- <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 justify-items-center">
            <!-- Example Logo 1 -->
            <div class="w-32 h-32 sm:w-40 sm:h-40">
                <img src="https://via.placeholder.com/150x150.png?text=Logo+1" alt="Featured in Logo 1" class="object-contain">
            </div>
            <!-- Example Logo 2 -->
            <div class="w-32 h-32 sm:w-40 sm:h-40">
                <img src="https://via.placeholder.com/150x150.png?text=Logo+2" alt="Featured in Logo 2" class="object-contain">
            </div>
            <!-- Example Logo 3 -->
            <div class="w-32 h-32 sm:w-40 sm:h-40">
                <img src="https://via.placeholder.com/150x150.png?text=Logo+3" alt="Featured in Logo 3" class="object-contain">
            </div>
            <!-- Example Logo 4 -->
            <div class="w-32 h-32 sm:w-40 sm:h-40">
                <img src="https://via.placeholder.com/150x150.png?text=Logo+4" alt="Featured in Logo 4" class="object-contain">
            </div>
            <!-- Example Logo 5 -->
            <div class="w-32 h-32 sm:w-40 sm:h-40">
                <img src="https://via.placeholder.com/150x150.png?text=Logo+5" alt="Featured in Logo 5" class="object-contain">
            </div>
        </div> --}}
    </section>
</div>


{{-- features --}}
<div class="overflow-x-auto p-6">
    <div class="flex flex-nowrap gap-4">
        <div class="flex-shrink-0 w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/3">
            <img src="{{ asset('asset/img/f1.png') }}" alt="Feature 1" class="w-full h-20 rounded shadow-md">
        </div>
        <div class="flex-shrink-0 w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/3">
            <img src="{{ asset('asset/img/f2.png') }}" alt="Feature 2" class="w-full h-20 rounded shadow-md">
        </div>
        <div class="flex-shrink-0 w-1/2 sm:w-1/2 md:w-1/3  lg:w-1/3">
            <img src="{{ asset('asset/img/f3.png') }}" alt="Feature 3" class="w-full h-20 rounded shadow-md">
        </div>
        <div class="flex-shrink-0 w-1/2 sm:w-1/2 md:w-1/3  lg:w-1/3">
            <img src="{{ asset('asset/img/f4.png') }}" alt="Feature 4" class="w-full h-20 rounded shadow-md">
        </div>
        <div class="flex-shrink-0 w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/3">
            <img src="{{ asset('asset/img/f5.png') }}" alt="Feature 5" class="w-full h-20 rounded shadow-md">
        </div>
    </div>
</div>


{{-- OUR MISSION --}}
<div class="max-w-screen-xl mx-auto p-6 bg-white my-12 flex flex-col md:flex-row gap-6">
    <!-- Mission Section -->
    <div class="flex-1">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Mission</h2>
        <p class="text-lg text-gray-600 leading-relaxed">
            Our mission is to make beautiful jewellery accessible. Jewellery that not only makes a woman look beautiful but also makes her feel beautiful and loved.
        </p>
    </div>

    <!-- Promise Section -->
    <div class="flex-1">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Promise</h2>
        <ul class="list-disc list-inside text-lg text-gray-600 space-y-3">
            <li>Our style is relentlessly modern, yet intensely respectful of traditions.</li>
            <li>We always look for better and newer ways to do things; from the designs that we make to the experiences that we deliver.</li>
            <li>We are open in our interactions with our customers. Our prices and policies are always transparent.</li>
        </ul>
    </div>
</div>



{{-- services features --}}
<div class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            
            <!-- 100% Certified & Free Shipping -->
            <div class="flex flex-col lg:flex-row items-center space-y-4">
                <img src="{{ asset('asset/img/download.jpeg') }}" alt="Certified & Free Shipping" class="h-44 w-44 object-cover"> 
                <a href="{{route('policy')}}"><div class="text-start">
                    <h3 class="text-xs font-semibold mb-2">100% Certified & Free Shipping</h3>
                    
                </div></a>
            </div>
            
            <!-- 15 Day Money-Back -->
            <div class="flex flex-col lg:flex-row items-center space-y-4">
                <img src="{{ asset('asset/img/download.jpeg') }}" alt="15 Day Money-Back" class="h-44 w-44 object-cover">
                <a href="{{route('policy')}}"><div class="text-start">
                    <h3 class="text-xs font-semibold mb-2">15 Day Money-Back</h3>
                   
                </div></a>
            </div>
            
            <!-- Lifetime Exchange -->
            <div class="flex flex-col lg:flex-row items-center space-y-4 lg:pl-24">
                <img src="{{ asset('asset/img/download.jpeg') }}" alt="Lifetime Exchange" class="h-44 w-44 object-cover">
                <a href="{{route('policy')}}"><div class="text-start">
                    <h3 class="text-xs font-semibold mb-2">Lifetime Exchange</h3>
                   
                </div></a>
            </div>
            
            <!-- One Year Warranty* -->
            <div class="flex flex-col lg:flex-row items-center space-y-4 lg:pl-24">
                <img src="{{ asset('asset/img/download.jpeg') }}" alt="One Year Warranty" class="h-44 w-44 object-cover">
                <a href="{{route('policy')}}"><div class="text-start">
                    <h3 class="text-xs font-semibold mb-2">One Year Warranty*</h3>
                
                </div></a>
            </div>

        </div>
    </div>
</div>




   

    <!-- Founders Section -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row items-center space-x-12 px-4">
            <!-- Founder Images and Timeline Sections -->
            <div class="flex flex-col items-start space-y-8">
                <!-- Founder 1 -->
                <div class="flex flex-col items-start" id="founder-2008">
                    <img src="{{ asset('asset/img/begin.png') }}" alt="Founder" class="w-64 h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-medium">Mithun Sacheti</h3>
                    <p class="text-pink-500">FOUNDER AND MD</p>
                </div>
    
                <!-- Founder 2012 -->
                <div class="flex flex-col items-start hidden" id="founder-2012">
                    <img src="{{ asset('asset/img/2012.png') }}" alt="Founder" class="w-64 h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-medium">Mithun Sacheti</h3>
                    <p class="text-pink-500">FOUNDER AND MD</p>
                </div>
    
                <!-- Founder 2015 -->
                <div class="flex flex-col items-start hidden" id="founder-2015">
                    <img src="{{ asset('asset/img/2015.png') }}" alt="Founder" class="w-64 h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-medium">Mithun Sacheti</h3>
                    <p class="text-pink-500">FOUNDER AND MD</p>
                </div>
    
                <!-- Founder 2016 -->
                <div class="flex flex-col items-start hidden" id="founder-2016">
                    <img src="{{ asset('asset/img/2016.png') }}" alt="Founder" class="w-64 h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-medium">Mithun Sacheti</h3>
                    <p class="text-pink-500">FOUNDER AND MD</p>
                </div>
    
                <!-- Founder 2020 -->
                <div class="flex flex-col items-start hidden" id="founder-2020">
                    <img src="{{ asset('asset/img/2020.png') }}" alt="Founder" class="w-64 h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-medium">Mithun Sacheti</h3>
                    <p class="text-pink-500">FOUNDER AND MD</p>
                </div>
            </div>
    
            <!-- Timeline Section -->
            <div class="flex-1 items-start px-4 mt-4">
                <h2 class="text-3xl font-medium mb-8">The Beginning</h2>
    
                <!-- Timeline -->
                <div class="flex norwrap items-start  lg:space-x-4 mb-8 ">
                    <span class="text-pink-500 font-medium cursor-pointer" onclick="toggleFounder('2008')">2008</span>
                    <span class="text-gray-300">—</span>
                    <span class="text-gray-600 cursor-pointer" onclick="toggleFounder('2012')">2012</span>
                    <span class="text-gray-300">—</span>
                    <span class="text-gray-600 cursor-pointer" onclick="toggleFounder('2015')">2015</span>
                    <span class="text-gray-300">—</span>
                    <span class="text-gray-600 cursor-pointer" onclick="toggleFounder('2016')">2016</span>
                    <span class="text-gray-300">—</span>
                    <span class="text-gray-600 cursor-pointer" onclick="toggleFounder('2020')">2020</span>
                </div>
    
                <p class="text-gray-700 leading-relaxed">
                    CaratLane was founded by Mithun Sacheti and Srinivasa Gopalan with a refreshing and courageous objective – 
                    to make beautiful jewellery accessible, affordable and forever wearable.
                </p>
            </div>
        </div>
    </section>
    
    <script>
        // Function to toggle visibility of founder images
        function toggleFounder(year) {
            // Hide all founder divs first
            const founderDivs = document.querySelectorAll('[id^="founder-"]');
            founderDivs.forEach(div => div.classList.add('hidden'));
    
            // Show the selected founder div
            const selectedDiv = document.getElementById(`founder-${year}`);
            if (selectedDiv) {
                selectedDiv.classList.remove('hidden');
            }
        }
    </script>
    


{{-- team --}}
<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mx-4 md:mx-12 lg:mx-24">
    <!-- Team Card 1 -->
    <div class="bg-white dark:bg-gray-800 dark:border-gray-700  overflow-hidden">
        <a href="#">
            <img class="w-full h-56 object-cover" src="{{ asset('asset/img/team1.png') }}" alt="product image" />
        </a>
        <div class="px-5 py-4">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Mithun Sacheti</h2>
            <p class="text-gray-600 dark:text-gray-400">Founder and MD</p>
        </div>
    </div>

    <!-- Team Card 2 -->
    <div class="bg-white dark:bg-gray-800 dark:border-gray-700  overflow-hidden">
        <a href="#">
            <img class="w-full h-56 object-cover" src="{{ asset('asset/img/team2.png') }}" alt="product image" />
        </a>
        <div class="px-5 py-4">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Mithun Sacheti</h2>
            <p class="text-gray-600 dark:text-gray-400">Founder and MD</p>
        </div>
    </div>

    <!-- Team Card 3 -->
    <div class="bg-white dark:bg-gray-800 dark:border-gray-700  overflow-hidden ">
        <a href="#">
            <img class="w-full h-56 object-cover" src="{{ asset('asset/img/team3.png') }}" alt="product image" />
        </a>
        <div class="px-5 py-4">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Mithun Sacheti</h2>
            <p class="text-gray-600 dark:text-gray-400">Founder and MD</p>
        </div>
    </div>

    <!-- Team Card 4 -->
    <div class="bg-white dark:bg-gray-800 dark:border-gray-700  overflow-hidden">
        <a href="#">
            <img class="w-full h-56 object-cover" src="{{ asset('asset/img/team4.png') }}" alt="product image" />
        </a>
        <div class="px-5 py-4 ">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Mithun Sacheti</h2>
            <p class="text-gray-600 dark:text-gray-400">Founder and MD</p>
        </div>
    </div>
</div>



<div class="max-w-4xl mx-auto p-6  my-12 text-center">
    <h2 class="lg:text-3xl md:text-xl font-bold text-gray-800 mb-4">CaratLane Advantage</h2>
    <p class="text-gray-600 lg:text-lg text-sm ">
        When you shop at CaratLane, you can always be assured of the highest quality standards. Every piece of jewellery is meticulously crafted with the utmost care. It goes through a thorough quality check and is then taken through certification.
    </p>
</div>


    {{-- ***************** REVIEWS ************* --}}

  
    <div class="relative w-full mx-auto overflow-hidden lg:my-8 mb-4">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide px-4">
                    <div class="w-full p-6 ">
                        <div class="flex justify-center mb-4">
                            <!-- Testimonial Image -->
                            <i class="ri-instagram-line text-5xl bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent"></i>

                        </div>
                        <!-- Testimonial Text -->
                        <p class="italic text-gray-700 text-center lg:text-3xl md:text-md text-sm lg:px-12">
                            "I received this Mangalsutra bracelet as my first Karva Chauth gift! It's simple and sweet, just
                            like my husband."
                        </p>
                        <p class="font-semibold mt-2 lg:text-sm text-xs text-gray-500 text-center">
                            - Akanksha Joshi via Instagram
                        </p>
                        <!-- Read More Button -->
                        <div class="flex justify-center lg:mt-4 lg:mb-4 my-2">
                            <button
                                class="border border-purple-500 text-purple-500 px-4 py-2 rounded-md transition duration-300 hover:from-pink-600 hover:to-purple-600">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide px-4">
                    <div class="w-full p-6 ">
                        <div class="flex justify-center mb-4">
                            <!-- Testimonial Image -->
                            <i class="ri-instagram-line text-5xl bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent"></i>

                        </div>
                        <!-- Testimonial Text -->
                        <p class="italic text-gray-700 text-center lg:text-3xl md:text-md text-sm  lg:px-12">
                            "I received this Mangalsutra bracelet as my first Karva Chauth gift! It's simple and sweet, just
                            like my husband."
                        </p>
                        <p class="font-semibold mt-2 lg:text-sm text-xs text-gray-500 text-center">
                            - Akanksha Joshi via Instagram
                        </p>
                        <!-- Read More Button -->
                        <div class="flex justify-center lg:mt-4 lg:mb-4 my-2">
                            <button
                                class="border border-purple-500 text-purple-500 px-4 py-2 rounded-md transition duration-300 hover:from-pink-600 hover:to-purple-600">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide px-4">
                    <div class="w-full  p-6 ">
                        <div class="flex justify-center mb-4">
                            <!-- Testimonial Image -->
                            <i class="ri-instagram-line text-5xl bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent"></i>

                        </div>
                        <!-- Testimonial Text -->
                        <p class="italic text-gray-700 text-center lg:text-3xl md:text-md text-sm  lg:px-12">
                            "I received this Mangalsutra bracelet as my first Karva Chauth gift! It's simple and sweet, just
                            like my husband."
                        </p>
                        <p class="font-semibold mt-2 lg:text-sm text-xs text-gray-500 text-center">
                            - Akanksha Joshi via Instagram
                        </p>
                        <!-- Read More Button -->
                        <div class="flex justify-center lg:mt-4 lg:mb-4 my-2">
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

{{-- making process --}}
<div class="flex flex-col md:flex-row gap-6 my-12">
    <!-- Image Section -->
    <div class="flex-shrink-0 w-full md:w-1/2">
        <img src="{{ asset('asset/img/processing.png') }}" alt="Making Process" class="w-full h-auto">
    </div>
    
    <!-- Text Section -->
    <div class="max-w-4xl p-6 bg-white text-start w-full md:w-1/2">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Making Process</h2>
        <p class="text-gray-600 text-lg">
            Our designs always come with a unique CaratLane touch through innovative designs or techniques, or both. Uncover our jewellery-making process, from the inspiration to the final outcome.
        </p>
    </div>
</div>

<!-- Button Section -->
<div class="flex justify-center my-4">
    <button class="bg-gradient-to-r from-pink-600 to-purple-500 text-white font-semibold py-2 px-6 rounded-lg shadow transition duration-300 hover:opacity-90">
        Continue Shopping
    </button>
</div>


{{-- shop by instagram --}}
<div class="main overflow-hidden my-6">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row justify-between items-center lg:mx-12 lg:my-4">
        <h1 class="text-xl md:text-2xl font-semibold">Shop Our Instagram</h1>
        <h2 class="lg:text-xl md:text-lg text-sm text-black mt-4 md:mt-0">#MyCaratLaneStory</h2>
    </div>

    <!-- Image Grid Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 bg-red-800 lg:mx-12">
        <!-- Large Image -->
        <div class="w-full h-full overflow-hidden bg-yellow-400">
            <img src="https://cdn.caratlane.com/media/catalog/product/U/T/UT01166-1Y0000_3_lar.jpg"
                alt="Product Image"
                class="h-hull w-full object-cover">
        </div>

        <!-- Smaller Image Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 bg-blue-400">
            <div class="overflow-hidden w-full h-full">
                <img src="{{ asset('asset/img/insta1.jpg') }}" alt="Instagram Image"
                    class="w-full h-full object-cover ">
            </div>
            <div class="overflow-hidden w-full h-full">
                <img src="{{ asset('asset/img/insta2.jpg') }}" alt="Instagram Image"
                    class="w-full h-full object-cover  ">
            </div>
            <div class="overflow-hidden w-full h-full">
                <img src="{{ asset('asset/img/insta3.jpg') }}" alt="Instagram Image"
                    class="w-full h-full object-cover  ">
            </div>
            <div class="overflow-hidden w-full h-full">
                <img src="{{ asset('asset/img/insta4.jpg') }}" alt="Instagram Image"
                    class="w-full h-full object-cover  ">
            </div>
            <div class="overflow-hidden w-full h-full">
                <img src="{{ asset('asset/img/insta5.jpg') }}" alt="Instagram Image"
                    class="w-full h-full object-cover  ">
            </div>
            <div class="overflow-hidden w-full h-full">
                <img src="{{ asset('asset/img/insta6.jpg') }}" alt="Instagram Image"
                    class="w-full h-full object-cover  ">
            </div>
        </div>
    </div>
</div>


@endsection
