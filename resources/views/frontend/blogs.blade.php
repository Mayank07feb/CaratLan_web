
  <script src="https://cdn.tailwindcss.com"></script>

  <nav class="bg-gray-100 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="text-white text-2xl font-bold">
        <a href="#"><img src="{{asset('asset/img/Horizondal.jpg')}}" alt="" class="h-10 w-40"></a>
      </div>

      <!-- Navbar Items -->
      <ul class="flex space-x-6 text-black font-extralight">
        <li><a href="#" class="hover:text-black">Men</a></li>
        <li><a href="#" class="hover:text-black">Women</a></li>
        <li><a href="#" class="hover:text-black">Kids</a></li>
        <li><a href="#" class="hover:text-black">Collection</a></li>
        <li><a href="#" class="hover:text-black">Occassion</a></li>
        <li><a href="#" class="hover:text-black">The How-TOS</a></li>
        <li><a href="#" class="hover:text-black">Shop</a></li>
        <li><a href="#" class="hover:text-black">Web Stories</a></li>
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
 
  {{-- BANNER --}}
  <style>
    /* Custom CSS for vertical text */
    .vertical-text {
      writing-mode: vertical-rl;
      transform: rotate(180deg); /* Flips the text to be readable */
    }
  </style>
  <div class="relative h-[90vh]">
    <!-- Background Image (Right Half) -->
    <div class="absolute right-0 top-0 w-1/2 h-full bg-cover bg-center" style="background-image: url('{{asset('asset/img/blog-bg.jpeg')}}');"></div>
    
    <!-- Overlay to darken the background slightly (on the right side only) -->
    <div class="absolute right-0 top-0 w-1/2 h-full bg-white opacity-50"></div>

    <!-- Content -->
    <div class="relative z-10 flex items-center h-full pl-12 pr-24">
      <!-- Vertical Text on the Left -->
      <div class="text-black text-sm font-light text-pretty text-space-2 vertical-text pr-8">
        LATEST
      </div>

      <!-- Main Text (Centered Content) -->
      <div class="text-black pl-4 text-8xl font-light leading-tight w-full">

        Best Jewellery Gifts in 2024: Diwali Special
      </div>
      <div>
        <a href="#" class="items-center text-black hover:underline">
            Read More
            <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
          </a>
      </div> 
    
      <!-- Overlapping Image on the Right -->
      <div class="absolute right-24 bottom-12 transform translate-y-1/4">
        <img src="{{asset('asset/img/blog-olapimg.jpg')}}" alt="Stacking Bangle" class="w-80 h-auto object-cover">
      </div>
    </div>
  </div>

  {{-- BLOGS --}}
  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- First Column -->
        <div class="bg-white p-6 ">
            <img src="{{asset('asset/img/blogp1.jpg')}}" alt="Jewelry rings" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-xl  mb-2">Best Jewellery Gifts in 2024: Diwali Special</h2>
            <p class="text-gray-600 text-sm mb-4">With so little time left for Diwali, do you think you have left getting gifts a little too late? You are probably scrambling around for ideas, and your list of people to give gifts to is also quite long. Diwali is such a special occasion and delights us</p>
            <a href="#" class="items-center text-sm text-black hover:underline">
                Read More
                <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
              </a>
        </div>

        <!-- Second Column -->
        <div class="bg-white p-6 ">
            <img src="{{asset('asset/img/blogp2.jpg')}}" alt="Jewelry set" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-xl mb-2">Find Your Perfect Diwali Jewellery Sets: Exclusive Matching Necklaces & Earrings</h2>
            <p class="text-gray-600 text-sm mb-4">Diwali is the perfect time to adorn yourself with stunning jewellery that reflects the joy and sparkle of the celebration. Whether you're attending family gatherings, hosting festive parties, or simply celebrating the occasion at home, matching jewellery sets—necklaces and earrings—can instantly bring on the festive vibe. Caratlane offers exquisite jewellery</p>
            <a href="#" class="items-center text-sm text-black hover:underline">
                Read More
                <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
              </a>
        </div>

        <!-- Third Column -->
        <div class="bg-white p-6 ">
            <img src="{{asset('asset/img/blogp3.jpg')}}" alt="Stacking bangles" class="w-full h-48 object-cover mb-4 rounded">
            <h2 class="text-xl  mb-2">New Stacking Bangle Designs for Diwali: Perfect for Festive Season Styling</h2>
            <p class="text-gray-600 mb-4  text-sm">It is time for festivities to begin as Diwali approaches, and also the time to think of all that goes with it. To start with, let's get our festive wardrobe ready. But attire is only a part of it; the accessories are vital to whatever ensemble we are planning on.</p>
            <a href="#" class="items-center text-sm text-black hover:underline">
                Read More
                <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
              </a>
              
        </div>

 <!-- First Column -->
 <div class="bg-white p-6 ">
    <img src="{{asset('asset/img/blogp1.jpg')}}" alt="Jewelry rings" class="w-full h-48 object-cover mb-4 rounded">
    <h2 class="text-xl  mb-2">Best Jewellery Gifts in 2024: Diwali Special</h2>
    <p class="text-gray-600 text-sm mb-4">With so little time left for Diwali, do you think you have left getting gifts a little too late? You are probably scrambling around for ideas, and your list of people to give gifts to is also quite long. Diwali is such a special occasion and delights us</p>
    <a href="#" class="items-center text-sm text-black hover:underline">
        Read More
        <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
      </a>
</div>

<!-- Second Column -->
<div class="bg-white p-6 ">
    <img src="{{asset('asset/img/blogp2.jpg')}}" alt="Jewelry set" class="w-full h-48 object-cover mb-4 rounded">
    <h2 class="text-xl mb-2">Find Your Perfect Diwali Jewellery Sets: Exclusive Matching Necklaces & Earrings</h2>
    <p class="text-gray-600 text-sm mb-4">Diwali is the perfect time to adorn yourself with stunning jewellery that reflects the joy and sparkle of the celebration. Whether you're attending family gatherings, hosting festive parties, or simply celebrating the occasion at home, matching jewellery sets—necklaces and earrings—can instantly bring on the festive vibe. Caratlane offers exquisite jewellery</p>
    <a href="#" class="items-center text-sm text-black hover:underline">
        Read More
        <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
      </a>
</div>

<!-- Third Column -->
<div class="bg-white p-6 ">
    <img src="{{asset('asset/img/blogp3.jpg')}}" alt="Stacking bangles" class="w-full h-48 object-cover mb-4 rounded">
    <h2 class="text-xl  mb-2">New Stacking Bangle Designs for Diwali: Perfect for Festive Season Styling</h2>
    <p class="text-gray-600 mb-4  text-sm">It is time for festivities to begin as Diwali approaches, and also the time to think of all that goes with it. To start with, let's get our festive wardrobe ready. But attire is only a part of it; the accessories are vital to whatever ensemble we are planning on.</p>
    <a href="#" class="items-center text-sm text-black hover:underline">
        Read More
        <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
      </a>
      
</div>

 <!-- First Column -->
 <div class="bg-white p-6 ">
    <img src="{{asset('asset/img/blogp1.jpg')}}" alt="Jewelry rings" class="w-full h-48 object-cover mb-4 rounded">
    <h2 class="text-xl  mb-2">Best Jewellery Gifts in 2024: Diwali Special</h2>
    <p class="text-gray-600 text-sm mb-4">With so little time left for Diwali, do you think you have left getting gifts a little too late? You are probably scrambling around for ideas, and your list of people to give gifts to is also quite long. Diwali is such a special occasion and delights us</p>
    <a href="#" class="items-center text-sm text-black hover:underline">
        Read More
        <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
      </a>
</div>

<!-- Second Column -->
<div class="bg-white p-6 ">
    <img src="{{asset('asset/img/blogp2.jpg')}}" alt="Jewelry set" class="w-full h-48 object-cover mb-4 rounded">
    <h2 class="text-xl mb-2">Find Your Perfect Diwali Jewellery Sets: Exclusive Matching Necklaces & Earrings</h2>
    <p class="text-gray-600 text-sm mb-4">Diwali is the perfect time to adorn yourself with stunning jewellery that reflects the joy and sparkle of the celebration. Whether you're attending family gatherings, hosting festive parties, or simply celebrating the occasion at home, matching jewellery sets—necklaces and earrings—can instantly bring on the festive vibe. Caratlane offers exquisite jewellery</p>
    <a href="#" class="items-center text-sm text-black hover:underline">
        Read More
        <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
      </a>
</div>

<!-- Third Column -->
<div class="bg-white p-6 ">
    <img src="{{asset('asset/img/blogp3.jpg')}}" alt="Stacking bangles" class="w-full h-48 object-cover mb-4 rounded">
    <h2 class="text-xl  mb-2">New Stacking Bangle Designs for Diwali: Perfect for Festive Season Styling</h2>
    <p class="text-gray-600 mb-4  text-sm">It is time for festivities to begin as Diwali approaches, and also the time to think of all that goes with it. To start with, let's get our festive wardrobe ready. But attire is only a part of it; the accessories are vital to whatever ensemble we are planning on.</p>
    <a href="#" class="items-center text-sm text-black hover:underline">
        Read More
        <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-16 -mt-4">
      </a>
      
</div>

    </div>
</div>


{{-- BLOG JEWELLERY --}}
<style>
    .vertical-text {
        writing-mode: vertical-rl; /* Rotate text vertically */
        transform: rotate(180deg); /* Flip text to be readable */
        letter-spacing: 1em; /* Adjust letter spacing */
        font-size: 1.2rem; /* Adjust size as needed */
        color: #4B5563; /* Tailwind gray-700 */
    }
</style>
<div class="w-full mx-auto p-4 bg-[#F5F3F1] rounded-lg shadow-lg">
    <div class="mb-4 relative flex items-start">
        <!-- Vertical Text -->
        <div class="absolute top-20 left-4 transform">
            <span class="vertical-text text-black text-sm">JEWELLERY</span>
        </div>
        <div class="flex flex-col w-full">
            
        </div>
    </div>
    <div class="flex flex-col md:flex-row items-center justify-around">
        <div class="md:w-1/3 p-4">
            <p class="text-3xl font-light text-gray-800 text-center mb-4">How to Choose the Best Jewellery For Your Lehenga</p>
        </div>
        <div class="md:w-1/2 p-2 flex justify-center">
            <img src="{{asset('asset/img/blog-jewellery.jpg')}}" alt="Jewellery for Lehenga" class="w-full h-auto rounded-lg shadow-md max-w-xs">
        </div>
    </div>
</div>