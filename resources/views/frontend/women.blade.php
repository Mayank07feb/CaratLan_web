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
    <h2 class="text-3xl font-bold text-center mb-4">Women</h2>
</div>

<div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Article 1 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women1.jpg')}}" alt="Diwali Gift Ideas" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Best Diwali Gift Ideas for Wife: Thoughtful Jewellery She'll Love</h2>
                <p class="text-sm text-gray-500">OCTOBER 25, 2024</p>
                <p class="text-gray-600 text-sm">Diwali is as much a time for celebrations, sweets, and festive decor as it is the perfect opportunity to express your love and appreciation for...</p>
            </div>
        </article>

        <!-- Article 2 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women2.jpg')}}" alt="Festive Postcard Rings" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Latest Festive Postcard Rings: Top 15 Best-Selling Designs for Men and Women</h2>
                <p class="text-sm text-gray-500">OCTOBER 18, 2024</p>
                <p class="text-gray-600 text-sm">Festive seasons are the perfect time to think about giving gifts to your loved ones. For one thing, it is the time...</p>
            </div>
        </article>

        <!-- Article 3 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women3.jpg')}}" alt="Stacking Bangle Designs" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">New Stacking Bangle Designs for Diwali: Perfect for Festive Season Styling</h2>
                <p class="text-sm text-gray-500">OCTOBER 17, 2024</p>
                <p class="text-gray-600 text-sm">It is time for festivities to begin as Diwali approaches, and also the time to think of all that goes with it. To...</p>
            </div>
        </article>

        <!-- Article 4 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women4.jpg')}}" alt="Stylish Earring Picks" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Stylish Earring Picks for Diwali: Classy Jhumkas, Hoops, Danglers and More</h2>
                <p class="text-sm text-gray-500">OCTOBER 17, 2024</p>
                <p class="text-gray-600 text-sm">As the festival of lights approaches, it's time to elevate your Diwali look with stunning earrings that capture the joyous spirit of celebration...</p>
            </div>
        </article>

        <!-- Article 5 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women5.jpg')}}" alt="Mangalsutra Designs" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">New Latest Mangalsutra Designs for Diwali: Trendy Styles at Best Prices</h2>
                <p class="text-sm text-gray-500">OCTOBER 17, 2024</p>
                <p class="text-gray-600 text-sm">As Diwali approaches, searching for the perfect gift for a loved one intensifies. What could be better than a mangalsutra? The support...</p>
            </div>
        </article>

        <!-- Article 6 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women6.jpg')}}" alt="Gold Pendants" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Trendy 22k Gold Pendants for Effortless Everyday Styling</h2>
                <p class="text-sm text-gray-500">OCTOBER 9, 2024</p>
                <p class="text-gray-600 text-sm">Accessories play a crucial role in taking your look to new heights and expressing your style. Among these, gold pendants hold a special place...</p>
            </div>
        </article>

        <!-- Article 7 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women7.jpg')}}" alt="Gold Pendants" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Trendy 22k Gold Pendants for Effortless Everyday Styling</h2>
                <p class="text-sm text-gray-500">OCTOBER 9, 2024</p>
                <p class="text-gray-600 text-sm">Accessories play a crucial role in taking your look to new heights and expressing your style. Among these, gold pendants hold a special place...</p>
            </div>
        </article>

        <!-- Article 8 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women8.jpg')}}" alt="Gold Pendants" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Trendy 22k Gold Pendants for Effortless Everyday Styling</h2>
                <p class="text-sm text-gray-500">OCTOBER 9, 2024</p>
                <p class="text-gray-600 text-sm">Accessories play a crucial role in taking your look to new heights and expressing your style. Among these, gold pendants hold a special place...</p>
            </div>
        </article>

        <!-- Article 9 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/women9.jpg')}}" alt="Gold Pendants" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Trendy 22k Gold Pendants for Effortless Everyday Styling</h2>
                <p class="text-sm text-gray-500">OCTOBER 9, 2024</p>
                <p class="text-gray-600 text-sm">Accessories play a crucial role in taking your look to new heights and expressing your style. Among these, gold pendants hold a special place...</p>
            </div>
        </article>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center gap-2 mt-8">
        <span class="px-3 py-1 bg-purple-600 text-white rounded">1</span>
        <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded">2</a>
        <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded">3</a>
        <span class="px-3 py-1 text-gray-600">...</span>
        <a href="#" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded">6</a>
    </div>
</div>

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
