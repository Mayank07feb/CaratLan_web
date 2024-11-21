@extends('layouts.main')
@section('content')


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
<div class="mt-16 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg p-8 text-white max-w-md mx-auto sm:p-6">
    <h2 class="text-3xl font-semibold mb-4 text-center sm:text-2xl">Join our Free Newsletter and</h2>
    <p class="mb-6 text-center text-sm sm:text-base">Get insider info on new arrivals, early access, and everything fine.</p>
    <form class="flex flex-col gap-4 sm:flex-row">
        <input type="email" placeholder="Email" class="flex-1 px-4 py-2 rounded-md text-gray-800 sm:w-full">
        <button type="submit" class="bg-gray-900 text-white px-6 py-2 rounded-md hover:bg-gray-800 transition-colors sm:w-full">
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
@endsection