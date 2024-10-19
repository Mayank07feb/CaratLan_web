
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
    font-size: 0.8rem; /* Adjust size as needed */
    color: #4B5563; /* Tailwind gray-700 */
}
.content-wrapper {
    min-height: 600px;
    width: 600px; /* Set minimum height */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding-left: 24px;
    
}
.image-wrapper {
    max-width: 400px; /* Limit image size */
    height: auto;
}
</style>

<div class="w-full mx-auto p-4 bg-[#F5F3F1] rounded-lg shadow-lg">
<div class="mb-4 relative">
    <!-- Vertical Text -->
    <div class="absolute top-1/2 left-4 transform -translate-y-1/2">
        <span class="vertical-text">JEWELLERY</span>
    </div>

    <div class="grid grid-cols-2 content-wrapper mx-20 gap-4">
        <p class="text-3xl font-semibold text-gray-800 text-center mt-2">
            How to Choose the Best Jewellery For Your Lehenga <br> <br>
            <a href="#" class="items-center text-sm text-black hover:underline">
              Read More
              <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-36 -mt-4">
            </a>
        </p>
       
        <div class="image-wrapper pl-12">
            <img src="{{asset('asset/img/blog-jewellery.jpg')}}" 
                 alt="Jewellery for Lehenga" 
                 class="w-full h-auto ">
        </div>
    </div>
</div>
</div>



{{-- container --}}
{{-- <div class="flex flex-col lg:flex-row space-y-8 lg:space-y-0 lg:space-x-8 p-4">
<!-- Carousel Section -->
<div class="flex flex-col lg:flex-row lg:w-1/2">
  <!-- Carousel -->
  <div id="carousel" class="carousel rounded-box w-full lg:w-64 overflow-hidden mb-4 lg:mb-0">
    <div class="carousel-item w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp"
        class="w-full"
        alt="Tailwind CSS Carousel component" />
    </div>
    <div class="carousel-item w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp"
        class="w-full"
        alt="Tailwind CSS Carousel component" />
    </div>
    <div class="carousel-item w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp"
        class="w-full"
        alt="Tailwind CSS Carousel component" />
    </div>
    <div class="carousel-item w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp"
        class="w-full"
        alt="Tailwind CSS Carousel component" />
    </div>
    <div class="carousel-item w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp"
        class="w-full"
        alt="Tailwind CSS Carousel component" />
    </div>
    <div class="carousel-item w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp"
        class="w-full"
        alt="Tailwind CSS Carousel component" />
    </div>
    <div class="carousel-item w-full">
      <img
        src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp"
        class="w-full"
        alt="Tailwind CSS Carousel component" />
    </div>
  </div>

  <!-- Text Content for Carousel -->
  <div class="lg:ml-6">
    <h1 class="text-xl font-semibold mb-2">How to Choose the Best Jewellery for Your Gown</h1>
    <p class="text-gray-600">Do you choose the gown first or the jewellery? That is a question that does crop up from time to...</p>
  </div>
</div>

<!-- Image with Text Section -->
<div class="flex flex-col lg:w-1/2">
  <!-- Image -->
  <div class="mb-4">
    <img src="{{asset('asset/img/j6.jpg')}}" alt="Solitaire Jewellery" class="w-full h-auto rounded-lg shadow-md">
  </div>

  <!-- Text Content for Image -->
  <div>
    <h1 class="text-xl font-semibold mb-2">Mark Those Special Moments with Solitaire Jewellery</h1>
    <p class="text-gray-600">Memory fades, pictures get lost, but a solitaire marks a moment that can be remembered forever...</p>
  </div>
</div>

<!-- Read More Section -->
<a href="#" class="flex items-center text-sm text-black hover:underline mt-4 lg:mt-0">
  <span>Read More</span>
  <img src="{{asset('asset/img/arrow.png')}}" alt="Arrow" class="h-8 w-8 ml-2">
</a>
</div> --}}

<!-- Autoplay Carousel JavaScript -->
{{-- <script>
// JavaScript to autoplay the carousel
const carousel = document.getElementById('carousel');
const items = carousel.getElementsByClassName('carousel-item');
let index = 0;

function showSlide(i) {
  // Hide all items
  for (let item of items) {
    item.style.display = 'none';
  }
  // Show the current item
  items[i].style.display = 'block';
}

function nextSlide() {
  index = (index + 1) % items.length; // Loop back to start
  showSlide(index);
}

// Initial display
showSlide(index);

// Autoplay the carousel every 3 seconds
setInterval(nextSlide, 3000);
</script> --}}
<div class="w-full mx-auto px-24 bg-[#F5F3F1] mt-0">
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
  <!-- First Column -->
  <div class="flex flex-row bg-[#F5F3F1] p-4  gap-4">
    <div class="w-full h-full overflow-hidden rounded">
      <img src="{{asset('asset/img/j1.gif')}}" alt="Woman wearing necklace 1" class="w-full h-full object-cover">
    </div>
    
    <div>
      <h2 class="text-xl font-semibold mb-2">How to choose the best jewellery for your gown</h2>
      <p class="text-gray-600 text-sm">Do you choose the gown first or the jewellery? That is a question that does crop up from time to</p>
    </div>
  </div>

  <!-- Second Column -->
  <div class="bg-[#F5F3F1] p-4">
    <div class="grid grid-cols-2 gap-4 mb-4">
      <img src="{{asset('asset/img/jr1.jpg')}}" alt="Ring" class="w-full h-full object-cover rounded">
      <div>
        <h2 class="text-xl font-semibold mb-2">How to choose the best jewellery for your gown</h2>
        <p class="text-gray-600 text-sm">Do you choose the gown first or the jewellery? That is a question that does crop up from time to</p>
      </div>
    </div>
  </div>
</div>

<!-- View All Link -->
<div class="text-right mt-4">
  <a href="#" class="text-blue-600 hover:underline">View all →</a>
</div>
</div>


{{-- VIDEO MAIN SECTION --}}
<section class="relative">
<div class="absolute top-1/2 left-4 transform -translate-y-1/2">
  <span class="vertical-text">VIDEO</span>
</div>
<div>
<div>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/SpUK7U7kDtE?si=OWLlmV5iaFI-DAPe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<span class="">Vlog</span>
<p>
  CaratLane's Festive Jewellery Collection</p>
</div>
<div class="flex flex-row">
  <div><a href=""></a></div>
  <div></div>
  <div></div>
</div>
</div>
</section>