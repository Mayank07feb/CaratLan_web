
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
<div class="mx-12">
    



<div class="max-w-7xl mx-auto p-6">
    <!-- Categories Section -->
    <div class="flex flex-wrap gap-4 mb-6">
        <a href="#" class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full transition duration-300 hover:bg-gray-300">Collections</a>
        <a href="#" class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full transition duration-300 hover:bg-gray-300">Diwali</a>
        <a href="#" class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full transition duration-300 hover:bg-gray-300">Men</a>
        <a href="#" class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full transition duration-300 hover:bg-gray-300">What's New</a>
        <a href="#" class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-full transition duration-300 hover:bg-gray-300">Women</a>
    </div>

    <!-- Featured Article Section -->
    <article class="bg-white p-6 rounded-lg shadow-md transition duration-300 hover:shadow-lg">
        <h2 class="text-2xl font-serif font-medium mb-2">Latest Festive Postcard Rings: Top 15 Best-Selling Designs for Men and Women</h2>
        <p class="text-sm text-gray-500 mb-4">OCTOBER 18, 2024</p>
        <p class="text-gray-600">Explore our curated list of the best-selling festive postcard rings, perfect for celebrating the season in style. Whether for yourself or as a gift, these designs are sure to impress!</p>
        <a href="#" class="mt-4 inline-block text-purple-600 hover:underline">Read More</a>
    </article>
</div>

{{-- image --}}
<div>
    <img src="{{asset('asset/img/detail1.jpg')}}" alt="">
</div>
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Festive Gifting: Discover the Magic of Postcard Rings</h1>
    <div class="mb-6">
        <p>
            The festive season is the perfect time to think about giving gifts to your loved ones. It’s a season for exchanging presents and taking advantage of special offers and discounts. This year, why not surprise them with something truly unique and personal? Consider innovative gifts like Postcard Rings, which combine stunning design with heartfelt messages.
        </p>
        <p>
            In this blog post, we’ll explore the top 15 best-selling Postcard Ring designs for both men and women, perfect for spreading joy and creating lasting memories this festive season and beyond.
        </p>
    </div>

    <h2 class="text-2xl font-semibold mb-4">What Are Postcard Rings?</h2>
    <div class="mb-6">
        <p>
            Before we dive into our top picks, let’s quickly see what makes Postcard Rings so special. These aren’t just beautifully designed pieces of jewelry; they offer a unique, heartfelt experience. Each ring comes with an embedded video message from the giver, accessible through a mobile app at any time.
        </p>
        <p>
            Whether it’s a declaration of love, a message of support, or a celebratory note, it’s like carrying a personal postcard from your loved one on your finger! This feature makes Postcard Rings the perfect gift for this festive season, combining the timeless beauty of fine jewelry with a cutting-edge, sentimental touch.
        </p>
    </div>

    <h2 class="text-2xl font-semibold mb-4">Experience the Innovation</h2>
    <div class="mb-6">
        <p>
            To learn more about the Postcard Rings feature and experience this innovation firsthand, download the app. By scanning your ring through the app, the embedded video message comes alive, making it a memorable piece to cherish forever.
        </p>
    </div>

    <h2 class="text-2xl font-semibold mb-4">Explore More</h2>
    <div class="space-y-2 mb-6">
        <a href="#" class="text-blue-500 hover:underline">Solitaire Rings for Men and Women</a>
        <a href="#" class="text-blue-500 hover:underline">Diamond Rings at Best Prices</a>
        <a href="#" class="text-blue-500 hover:underline">Best-Selling Festive Rings for Men</a>
    </div>

    <div class="mt-6">
        <p>
            This festive season, give the gift of a Postcard Ring and make the moments that matter even more special.
        </p>
    </div>
</div>


<div>
    <img src="{{asset('asset/img/detail1.jpg')}}" alt="">
</div>

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Top 15 Best-Selling Postcard Rings</h1>

    <div class="mb-8">
        <h2 class="text-2xl font-semibold mb-4">For Men</h2>
        <div class="space-y-4">
            <div class="ring-item">
                <h3 class="font-medium">Issac Diamond Ring</h3>
                <p>
                    Combining luxury and personalization, the Issac Diamond Ring offers men a sophisticated design with the option to engrave a message. The Postcard feature adds a deeper layer of connection, making it perfect for those who want a constant reminder of a special bond.
                </p>
            </div>
            <div class="ring-item">
                <h3 class="font-medium">Glimmer Solitaire Ring</h3>
                <p>
                    With its minimalist yet powerful solitaire design, the Glimmer Solitaire Ring is ideal for men who prefer understated elegance. Its embedded video message adds a heartfelt touch to this classic design.
                </p>
            </div>
            <div class="ring-item">
                <h3 class="font-medium">Ayan Diamond Ring For Men</h3>
                <p>
                    The Ayan Diamond Ring has a bold design and is perfect for men who like to make a statement. Combined with the Postcard Ring feature, it becomes a keepsake that carries a message of love or inspiration.
                </p>
            </div>
            <div class="ring-item">
                <h3 class="font-medium">Dean Diamond Band For Men</h3>
                <p>
                    The Dean Diamond Band offers a blend of classic style and modern appeal. Its Postcard Ring technology ensures that this ring is not just a fashion statement but a personal reminder of a meaningful connection.
                </p>
            </div>
            <div class="ring-item">
                <h3 class="font-medium">Carter Platinum Band For Men</h3>
                <p>
                    Crafted from platinum, this sleek and durable Carter Platinum Band exudes strength. Paired with a personalized video message, it becomes a ring that holds both style and sentimental value.
                </p>
            </div>
            <div class="ring-item">
                <h3 class="font-medium">Justin Diamond Band For Men</h3>
                <p>
                    The Justin Diamond Band combines modern design with the brilliance of diamonds. The Postcard feature makes this ring memorable, capturing emotions in form and function.
                </p>
            </div>
            <div class="ring-item">
                <h3 class="font-medium">Adler Gold Band For Men</h3>
                <p>
                    The Adler Gold Band embodies timeless elegance with its sleek and sophisticated design. Paired with the innovative Postcard Ring feature, this gold band transforms into a heartfelt keepsake.
                </p>
            </div>
        </div>
    </div>
<div class="flex flex-row gap-4 justify-center">
    <img src="{{asset('asset/img/blog-det1.jpg')}}" alt="" class="w-1/3 h-1/2">
    <img src="{{asset('asset/img/blog-det2.jpg')}}" alt="" class="w-1/3 h-1/2">
</div>



    <main class="container mx-auto my-10 p-4">
        <section class="">
            <article class="bg-white p-5">
                <h2 class="text-xl font-semibold">The Blush Miracle Plate Diamond Ring</h2>
                <p class="mt-2">A delicate, blush-hued setting that magnifies diamond sparkle. Perfect for elegance and technology.</p>
            </article>

            <article class="bg-white p-5">
                <h2 class="text-xl font-semibold">Sparking Diamond Vanki Ring</h2>
                <p class="mt-2">Inspired by South Indian bridal jewellery, this ring blends timeless beauty with modern technology.</p>
            </article>

            <article class="bg-white p-5">
                <h2 class="text-xl font-semibold">Nora Rising Sun Diamond Ring</h2>
                <p class="mt-2">Symbolising warmth and light, this ring connects you with loved ones through its unique message feature.</p>
            </article>

            <article class="bg-white p-5">
                <h2 class="text-xl font-semibold">Citric Sparkle Diamond Ring</h2>
                <p class="mt-2">Bright and playful, this ring ensures every glance brings joy and cherished memories.</p>
            </article>

            <article class="bg-white p-5">
                <h2 class="text-xl font-semibold">Scattered Miracle Plate Band</h2>
                <p class="mt-2">Simple yet captivating, perfect for everyday wear with added emotional depth.</p>
            </article>

            <article class="bg-white p-5">
                <h2 class="text-xl font-semibold">Enchant Platinum Solitaire Ring</h2>
                <p class="mt-2">Timeless beauty combined with modern features, carrying the emotions of your loved ones.</p>
            </article>

            <article class="bg-white p-5">
                <h2 class="text-xl font-semibold">Evelyn Diamond Ring</h2>
                <p class="mt-2">Vintage-inspired elegance that transforms into a personal memento.</p>
            </article>

            <article class="bg-white p-5">
                <h2 class="text-xl font-semibold">Tri-Stripe Ring</h2>
                <p class="mt-2">A three-tone design with a heart, allowing you to revisit cherished moments.</p>
            </article>
        </section>

       
    </main>
    <div class="max-w-4xl mx-auto p-6 bg-gray-50">
        <div class="flex items-start space-x-4">
            <img src="/api/placeholder/80/80" alt="Profile Picture" class="w-20 h-20 rounded-full object-cover">
            <div class="flex-1">
                <h2 class="text-xl font-semibold text-gray-900">Profile Name</h2>
                <p class="mt-1 text-gray-600">
                    Strives to create innovative designs that add value and tell a compelling story.
                </p>
                <button class="mt-2 text-gray-700 font-medium hover:text-gray-900">
                    VIEW PROFILE
                </button>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-3 gap-4">
            <button class="flex items-center justify-center px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition">
                <span class="font-medium text-gray-700">Share</span>
            </button>
            <button class="flex items-center justify-center px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition">
                <span class="font-medium text-gray-700">Pin</span>
            </button>
            <button class="flex items-center justify-center px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition">
                <span class="font-medium text-gray-700">Tweet</span>
            </button>
        </div>

       
    </div>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <article class="bg-white p-4 ">
            <h3 class="text-lg font-semibold text-gray-900">75 Happy Diwali Wishes, Quotes, and Greetings.</h3>
        </article>
        <article class="bg-white p-4 ">
            <h3 class="text-lg font-semibold text-gray-900">Types of Gold Investments: Secure Your Future with Gold Coins and EGold</h3>
        </article>
        <article class="bg-white p-4 ">
            <h3 class="text-lg font-semibold text-gray-900">Trending Self-Gift Ideas: Jewellery Designs to Pamper Yourself</h3>
        </article>
    </div>

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
<script src="https://cdn.tailwindcss.com"></script>