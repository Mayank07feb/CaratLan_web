@extends('components.main')

@section('content')

<!-- Navigation Bar -->
<nav class="bg-white shadow-sm">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center h-16">
      <div class="flex items-center space-x-8">
        <!-- Logo -->
        <img src="/api/placeholder/120/40" alt="CaratLane Logo" class="h-8">
        <!-- Navigation Links (Desktop) -->
        <div class="hidden md:flex space-x-8">
          <a href="#" class="text-gray-600 hover:text-purple-600">Rings</a>
          <a href="#" class="text-gray-600 hover:text-purple-600">Earrings</a>
          <a href="#" class="text-gray-600 hover:text-purple-600">Bracelets & Bangles</a>
          <a href="#" class="text-gray-600 hover:text-purple-600">Solitaires</a>
          <a href="#" class="text-gray-600 hover:text-purple-600">Mangalsutras</a>
          <a href="#" class="text-gray-600 hover:text-purple-600">Necklaces</a>
        </div>
      </div>
      <!-- Right Section (Search, Delivery, Profile) -->
      <div class="flex items-center space-x-4">
        <!-- Search Bar -->
        <div class="relative">
          <input type="text" placeholder="Search Price" class="w-64 pl-4 pr-10 py-2 border rounded-full bg-gray-50 focus:outline-none focus:ring-2 focus:ring-purple-500" aria-label="Search price">
          <button class="absolute right-0 top-0 h-full px-4 text-purple-600" aria-label="Search">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
        </div>
        <!-- Delivery & Stores Link -->
        <a href="#" class="text-gray-600 hover:text-purple-600" aria-label="Delivery & Stores">
          Delivery & Stores
        </a>
        <!-- User Profile Icon -->
        <a href="#" class="text-gray-600 hover:text-purple-600" aria-label="User profile">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Testimonial Section -->
<div class="max-w-6xl mx-auto my-12 px-4">
  <div class="bg-white rounded-xl shadow-lg overflow-hidden">
    <div class="flex flex-col md:flex-row items-center p-8 gap-8">
      <!-- Image Column -->
      <div class="w-full md:w-1/3">
        <div class="relative aspect-square rounded-lg overflow-hidden shadow-lg">
          <img src="{{asset('asset/img/Mithun.png')}}" alt="Professional headshot" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
        </div>
      </div>

      <!-- Content Column -->
      <div class="w-full md:w-2/3">
        <blockquote class="relative">
          <svg class="absolute -top-6 -left-4 h-12 w-12 text-purple-100 transform -rotate-180" fill="currentColor" viewBox="0 0 32 32">
            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
          </svg>
          <p class="mt-8 text-2xl md:text-4xl font-light text-gray-800 leading-relaxed">
            The design capability of CaratLane is impressive.
          </p>
          <footer class="mt-8">
            <div class="text-xl font-medium text-purple-600">
              Mr. C K Venkataraman
            </div>
            <div class="text-gray-600">
              Managing Director, Titan Company Ltd
            </div>
            <div class="mt-4">
              <img src="/api/placeholder/100/40" alt="Titan Logo" class="h-8 object-contain">
            </div>
          </footer>
        </blockquote>

        <!-- Navigation Dots -->
        <div class="flex gap-2 mt-8">
          <button class="w-6 h-2 rounded-full bg-purple-600" aria-label="Current slide"></button>
          <button class="w-2 h-2 rounded-full bg-gray-300 hover:bg-purple-400 transition-all" aria-label="Go to slide 2"></button>
          <button class="w-2 h-2 rounded-full bg-gray-300 hover:bg-purple-400 transition-all" aria-label="Go to slide 3"></button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Main Content -->
<main class="container mx-auto py-8">
  <section class="mb-8">
    <h2 class="text-2xl font-bold mb-4">
      In July 2016, we joined forces with Tanishq, India's largest and most trusted jewellery brand. This takes us a step closer to our mission - Bringing you beautiful jewellery that's affordable and accessible!
    </h2>
  </section>

  <!-- Feature Blocks Section -->
  <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="p-4 bg-gray-100 rounded-md">
      <h3 class="text-xl font-bold mb-2">Only the Best Practices</h3>
      <p>We strictly adhere to the Tata Code of Conduct and Corporate Policies to bring you only the best customer practices in the industry!</p>
    </div>
    <div class="p-4 bg-gray-100 rounded-md">
      <h3 class="text-xl font-bold mb-2">Exceptional Quality</h3>
      <p>Some of our designs are manufactured at Tanishq's state-of-the-art facility. We follow stringent quality checks for all our products - gold, diamonds, solitaires, gemstones, and more!</p>
    </div>
    <div class="p-4 bg-gray-100 rounded-md">
      <h3 class="text-xl font-bold mb-2">Exclusive Titan Privileges</h3>
      <p>Enjoy exclusive benefits like Titan Circle and more!</p>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="mt-8">
    <h2 class="text-2xl font-bold mb-4">FAQ's</h2>
    <div class="space-y-4">
      <div>
        <button class="w-full bg-gray-100 hover:bg-gray-200 rounded-md py-2 px-4 flex justify-between items-center">
          <span class="text-lg font-medium">How to check my order status?</span>
          <svg class="w-6 h-6 transform rotate-0 transition-all group-open:rotate-180" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 5v14l7-7-7-7z" />
          </svg>
        </button>
        <div class="overflow-hidden max-h-0 group-open:max-h-32 transition-all p-4">
          <p>To track your order, please visit your order history page or use the tracking number provided in your email receipt.</p>
        </div>
      </div>
      <!-- Additional FAQ items can follow the same structure -->
    </div>
  </section>
</main>

@endsection
