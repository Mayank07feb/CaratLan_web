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



    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="flex flex-col">
                <div class="text-center space-y-4 mb-8">
                    <h1 class="text-2xl font-serif">Looking for Diwali gifts? It's the perfect time to gift your little ones their favourite jewellery</h1>
                    <p class="text-sm text-gray-500">OCTOBER 25, 2024</p>
                    <p class="text-gray-600">Children's imagination knows no bounds, and their world is filled with magic, adventure, and wonder. What better way to celebrate their innocence and growing sense</p>
                </div>
                <img src="{{asset('asset/img/kid1.jpg')}}" alt="Kids with jewelry" class="w-full h-64 object-cover rounded-lg">
            </article>

            <!-- Article 2 -->
            <article class="flex flex-col">
                <img src="{{asset('asset/img/kid2.jpg')}}" alt="Kids showing earrings" class="w-full h-64 object-cover rounded-lg mb-4">
                <div class="space-y-2">
                    <h2 class="text-xl font-serif">How to Choose the Best Earrings for Babies</h2>
                    <p class="text-sm text-gray-500">MAY 28, 2024</p>
                    <p class="text-gray-600">Choosing the perfect earrings for your little one can be delightful yet daunting. As tiny as they are, ear-rings add more than cuteness to your</p>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="flex flex-col">
                <img src="{{asset('asset/img/kid3.jpg')}}" alt="Kids celebrating" class="w-full h-64 object-cover rounded-lg mb-4">
                <div class="space-y-2">
                    <h2 class="text-xl font-serif">5 Jewellery Pieces That Make Great Gifts for Kids on Children's Day</h2>
                    <p class="text-sm text-gray-500">NOVEMBER 7, 2023</p>
                    <p class="text-gray-600">When Children's Day approaches, we often find ourselves scrambling for gift ideas that are both meaningful and lasting. While toys and games are typical presents,</p>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="flex flex-col">
                <img src="{{asset('asset/img/kid2.jpg')}}" alt="Father and daughter" class="w-full h-64 object-cover rounded-lg mb-4">
                <div class="space-y-2">
                    <h2 class="text-xl font-serif">Tiny Treasures: Exploring the World of Gold Jewellery for Baby Girls</h2>
                    <p class="text-sm text-gray-500">OCTOBER 16, 2023</p>
                    <p class="text-gray-600">The innocence and charm of baby girls are often celebrated through various means, from cute clothes to adorable accessories. Among these, gold jewellery stands out</p>
                </div>
            </article>

            <!-- Article 5 - Ear Piercing Promo -->
            <article class="flex flex-col">
                <img src="{{asset('asset/img/kid4.jpg')}}" alt="Ear piercing promotion" class="w-full h-[500px] object-cover rounded-lg mb-4">
                <div class="space-y-2">
                    <h2 class="text-xl font-serif">When Can I Get My Baby's Ears Pierced?</h2>
                    <p class="text-sm text-gray-500">MARCH 28, 2023</p>
                    <p class="text-gray-600">The simple answer to the question of when you can have your baby's ears pierced is that you can do it at any time you</p>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="flex flex-col">
                <img src="{{asset('asset/img/kid5.gif')}}" alt="Kids jewelry collection" class="w-full h-64 object-cover rounded-lg mb-4">
                <div class="space-y-2">
                    <h2 class="text-xl font-serif">Best Kids Jewellery for Special Occasions</h2>
                    <p class="text-sm text-gray-500">JANUARY 19, 2023</p>
                    <p class="text-gray-600">Kids are synonymous with joy and wonder. We get to see the world through their eyes and get some of that wonder back into our</p>
                </div>
            </article>
        </div>
    </main>












<!-- Newsletter Section -->
<div class="max-w-3xl mx-auto mt-16 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg p-8 text-white">
    <h2 class="text-3xl font-semibold mb-4">Join our Free Newsletter and</h2>
    <p class="mb-6">Get insider info on new arrivals, early access, and everything fine.</p>
    <form class="flex gap-4">
        <input type="email" placeholder="Email" class="flex-1 px-4 py-2 rounded-md text-gray-800">
        <button type="submit" class="bg-gray-900 text-white px-6 py-2 rounded-md hover:bg-gray-800 transition-colors">
            SUBSCRIBE
        </button>
    </form>
</div>

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
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="bg-gray-100 p-3 rounded-full hover:bg-gray-200 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>
    </div>
</footer>
