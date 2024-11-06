<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-gray-100 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-white text-2xl font-bold">
            <a href="#"><img src="{{asset('asset/img/Horizondal.jpg')}}" alt="Logo" class="h-10 w-40"></a>
        </div>

        <!-- Navbar Items -->
        <ul class="flex space-x-6 text-black font-extralight relative">
            <li><a href="{{route('men')}}" class="hover:text-black">Men</a></li>
            <li><a href="{{route('women')}}" class="hover:text-black">Women</a></li>
            <li><a href="{{route('kids')}}" class="hover:text-black">Kids</a></li>
            
            <!-- Dropdown for Collection and Occasion -->
            <li class="relative group">
                <a href="#" class="hover:text-black">Collection</a>
                <div class="absolute left-0 hidden mt-2 w-40 bg-white rounded-lg shadow-lg group-hover:block z-10">
                    <ul class="py-2">
                        <li><a href="{{route('Collaborations')}}" class="block px-4 py-2 hover:bg-gray-100">Collaborations</a></li>
                        <li><a href="{{route('WhatNew')}}" class="block px-4 py-2 hover:bg-gray-100">What’s New</a></li>
                    </ul>
                </div>
            </li>
            <li class="relative group">
                <a href="#" class="hover:text-black">Occasion</a>
                <div class="absolute left-0 hidden mt-2 w-40 bg-white rounded-lg shadow-lg group-hover:block z-10">
                    <ul class="py-2">
                        <li><a href="{{route('occasion')}}" class="block px-4 py-2 hover:bg-gray-100">Diwali</a></li>
                       
                    </ul>
                </div>
            </li>
            <li class="relative group">
                <a href="#" class="hover:text-black">The-how-tos</a>
                <div class="absolute left-0 hidden mt-2 w-40 bg-white rounded-lg shadow-lg group-hover:block z-10">
                    <ul class="py-2">
                        <li><a href="{{route('Jewellerycaretips')}}" class="block px-4 py-2 hover:bg-gray-100">Jewellery care tips</a></li>
                        <li><a href="{{route('Jewelleryguides')}}" class="block px-4 py-2 hover:bg-gray-100">Jewellery guide</a></li>
                        <li><a href="{{route('Jewellerystylingideas')}}" class="block px-4 py-2 hover:bg-gray-100">Jewellery styling ideas</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#" class="hover:text-black">Shop</a></li>
            <li><a href="{{route('webstories')}}" class="hover:text-black">Web Stories</a></li>
        </ul>

        <!-- Search Icon -->
        <div>
            <a href="#" class="text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19a8 8 0 100-16 8 8 0 000 16zM21 21l-4.35-4.35" />
                </svg>
            </a>
        </div>
    </div>
</nav>

<div class="max-w-full mx-auto bg-[#F5F3F1] p-6 mb-6">
    <h2 class="text-3xl font-bold text-center mb-4">Men</h2>
   
    {{-- <div class="text-center">
        <a href="/news" class="inline-block  text-black rounded-lg px-4 py-2">
            Browse News
        </a>
    </div> --}}
</div>

  <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Grid Layout for Blog Posts -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blaze Collection Post -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men1.jpg')}}" alt="Blaze Collection" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">CaratLane Launches Their New Collection – Blaze</h2>
                    <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                    <p class="text-gray-700">The collection is available at all 170+ CaratLane stores across the country. CaratLane has launched its first dazzling collection for 2023, Blaze. This col...</p>
                </div>
            </article>

            <!-- Marketer's Guide Post -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men2.jpg')}}" alt="Marketing Guide" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Marketer's guide to 2023</h2>
                    <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                    <p class="text-gray-700">Marketing heads discuss which strategies are best to employ this year and which ones are best avoided. From reinventing consumer segmentation and the marketing mix...</p>
                </div>
            </article>

            <!-- Propose Day Post -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men3.jpg')}}" alt="Ring Trends" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">Propose Day 2023: 5 Stylish Ring Trends She Will Not Be Able To Say No To</h2>
                    <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                    <p class="text-gray-700">Propose Day 2023: She will surely say yes to you and these stunning rings. These rings are perfect for your partner</p>
                </div>
            </article>

            <!-- Valentine's Campaign Post -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men4.jpg')}}" alt="Valentine Campaign" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">CaratLane Launches Heart-warming Campaign, #KhulKeKaroExpress For Valentine's Day</h2>
                    <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                    <p class="text-gray-700">CaratLane has launched its Valentine's Day campaign, "Khul Ke Karo Express". Building on the brand's core purpose to help consumers express themselves...</p>
                </div>
            </article>

            <!-- Style Guide Post -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men5.jpg')}}" alt="Valentine Style Guide" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">From Heart Soaked Bags To Sexy Lingerie, A Style Guide To Build Your Valentine's Day Look</h2>
                    <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                    <p class="text-gray-700">It is the month of love and the perfect time to dress up and swipe right to that cute date. And while most of us...</p>
                </div>
            </article>

            <!-- D2C Post -->
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men6.jpg')}}" alt="D2C Trends" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">D2C: Where's it headed in 2023?</h2>
                    <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                    <p class="text-gray-700">With the reduction of online dependence for purchases post the pandemic, ETBrandEquity asked a few D2C brands to unveil the upcoming trends they foresee in...</p>
                </div>
            </article>
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men7.jpg')}}" alt="D2C Trends" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">D2C: Where's it headed in 2023?</h2>
                    <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                    <p class="text-gray-700">With the reduction of online dependence for purchases post the pandemic, ETBrandEquity asked a few D2C brands to unveil the upcoming trends they foresee in...</p>
                </div>
            </article>
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men8.jpg')}}" alt="D2C Trends" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">D2C: Where's it headed in 2023?</h2>
                    <p class="text-gray-500 text-sm mb-3">MARCH 7, 2023</p>
                    <p class="text-gray-700">With the reduction of online dependence for purchases post the pandemic, ETBrandEquity asked a few D2C brands to unveil the upcoming trends they foresee in...</p>
                </div>
            </article>
            <article class="bg-white rounded-lg overflow-hidden shadow-sm">
                <img src="{{asset('asset/img/men9.jpg')}}" alt="D2C Trends" class="w-full h-64 object-cover">
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
            <form class="flex gap-4">
                <input type="email" placeholder="Email" class="flex-1 px-4 py-2 rounded-md text-gray-800">
                <button type="submit" class="bg-gray-900 text-white px-6 py-2 rounded-md hover:bg-gray-800 transition-colors">
                    SUBSCRIBE
                </button>
            </form>
        </div>
    </main>

    <footer class="max-w-7xl mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
            <!-- Left Side - Contact Information -->
            <div class="space-y-4">
                <h1 class="text-3xl md:text-4xl font-serif mb-8">Stay Connected with CaratLane</h1>
                
                <div class="space-y-2">
                    <h2 class="text-gray-800 font-medium">CONTACT US</h2>
                    
                    <div class="text-gray-600">
                        <p>1800-102-0103 (TOLL FREE)</p>
                        <p>+91-44-4293-5000</p>
                        <p class="uppercase">contactus@caratlane.com</p>
                    </div>
                </div>
            </div>

            <!-- Right Side - Social Media Icons -->
            <div class="flex items-center space-x-6 mt-8 md:mt-0">
                <div class="flex items-center">
                    <i class="fab fa-instagram text-xl"></i>
                    <span class="ml-2 text-gray-800 font-medium">CARATLANE</span>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-800 hover:text-gray-600 transition-colors">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-800 hover:text-gray-600 transition-colors">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-800 hover:text-gray-600 transition-colors">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-800 hover:text-gray-600 transition-colors">
                        <i class="fab fa-pinterest text-xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll to Top Button -->
        <div class="fixed bottom-8 right-8">
            <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
                    class="bg-gray-100 p-3 rounded-full hover:bg-gray-200 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                </svg>
            </button>
        </div>
    </footer>

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


