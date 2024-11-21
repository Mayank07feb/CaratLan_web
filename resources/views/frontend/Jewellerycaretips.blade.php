@extends('layouts.main')
@section('content')


<div class="max-w-full mx-auto bg-[#F5F3F1] p-6 mb-6">
    <h2 class="text-3xl font-bold text-center mb-4">Jewellery care tips</h2>
</div>

<div class="max-w-7xl md:mx-auto mx-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Article 1 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/what1.jpg')}}" alt="Diwali Gift Ideas" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Best Diwali Gift Ideas for Wife: Thoughtful Jewellery She'll Love</h2>
                <p class="text-sm text-gray-500">OCTOBER 25, 2024</p>
                <p class="text-gray-600 text-sm">Diwali is as much a time for celebrations, sweets, and festive decor as it is the perfect opportunity to express your love and appreciation for...</p>
            </div>
        </article>

        <!-- Article 2 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/what2.jpg')}}" alt="Festive Postcard Rings" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">Latest Festive Postcard Rings: Top 15 Best-Selling Designs for Men and Women</h2>
                <p class="text-sm text-gray-500">OCTOBER 18, 2024</p>
                <p class="text-gray-600 text-sm">Festive seasons are the perfect time to think about giving gifts to your loved ones. For one thing, it is the time...</p>
            </div>
        </article>

        <!-- Article 3 -->
        <article class="flex flex-col">
            <img src="{{asset('asset/img/what3.jpg')}}" alt="Stacking Bangle Designs" class="w-full h-64 object-cover rounded-lg mb-4">
            <div class="space-y-2">
                <h2 class="text-xl font-serif font-medium">New Stacking Bangle Designs for Diwali: Perfect for Festive Season Styling</h2>
                <p class="text-sm text-gray-500">OCTOBER 17, 2024</p>
                <p class="text-gray-600 text-sm">It is time for festivities to begin as Diwali approaches, and also the time to think of all that goes with it. To...</p>
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
    <form class="flex md:gap-4">
        <input type="email" placeholder="Email" class="flex-1 md:px-4 md:py-2 p-1 rounded-md text-gray-800">
        <button type="submit" class="bg-gray-900 text-white md:px-6 md:py-2 p-1 rounded-md hover:bg-gray-800 transition-colors">
            SUBSCRIBE
        </button>
    </form>
</div>
@endsection
