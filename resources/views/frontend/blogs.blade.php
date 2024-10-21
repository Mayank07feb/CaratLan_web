
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
{{-- <section class="relative">
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
</section> --}}
<div class="bg-black">
  <div class="container mx-auto p-4 bg-black w-full">
    <!-- Main Video Section -->
    <div class="relative aspect-video mb-6 px-8 py-8">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Rmz8Lxq6brU?si=IW_rXosxvb6aCkIy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-full h-full object-cover"></iframe>
      <div class="absolute inset-0 flex items-center justify-center">
        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 0a10 10 0 100 20 10 10 0 000-20zm-2 14.5v-9l6 4.5-6 4.5z" />
        </svg>
      </div>
    </div>
  
    <!-- Video Title -->
    <h1 class="text-2xl md:text-3xl font-bold text-white mb-6 text-center">CaratLane's Festive Jewellery Collection</h1>
  
    <!-- Related Videos Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Video 1 -->
      <div class="bg-black p-4 rounded-lg hover:scale-105 transition-transform flex flex-row">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/MR_R8wuM-ks?si=54a4pRVIgd1YNGsF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-1/2 h-32 object-cover rounded-lg mb-2"></iframe>
        <div>
          <div class="flex items-center mt-2 text-gray-400">
            <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="currentColor">
              <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0C23.512 20.55 23.971 18.196 24 12c-.029-6.185-.484-8.549-4.385-8.816zM9 16V8l8 3.993L9 16z"/>
            </svg>
            
          </div>
          <p class="text-sm text-white ">Everyday 22KT For The Modern Woman | Stylish</p>
        
        </div>
      </div>
  
      <!-- Video 2 -->
      <div class="bg-black p-4 rounded-lg hover:scale-105 transition-transform flex flex-row">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/39cnR1IBsiw?si=L9xTxoiBzxhti7rP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="w-1/2 h-32 object-cover rounded-lg mb-2"></iframe>
        <div>
          <div class="flex items-center mt-0 text-gray-400">
            <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="currentColor">
              <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0C23.512 20.55 23.971 18.196 24 12c-.029-6.185-.484-8.549-4.385-8.816zM9 16V8l8 3.993L9 16z"/>
            </svg>
            
          </div>
          <p class="text-sm text-white">Festive Jewellery: 100% Off on Diamond Making</p>
        
        </div>
      </div>
  
      <!-- Call to Action -->
      <div class="bg-black p-4 rounded-lg flex items-center justify-center hover:scale-105 transition-transform">
        <p class="text-center text-white">Check out our YouTube channel</p>
        <a href="https://www.youtube.com/@caratlane">
          <svg class="w-4 h-4 ml-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg></a>
      </div>
    </div>
  </div>
  
</div>

{{-- NEWLETTER SECTION --}}

  <!-- Newsletter Signup Section -->
  <div class="bg-gradient-to-r from-[#E56EEB] to-[#8A63FA] p-8 rounded-lg mb-8 lg:px-32 py-8 mx-32 my-12">
    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-start">Join our Free Newsletter and</h2>
    <p class="text-base md:text-lg mb-6 text-start">Get insider info on new arrivals, early access, and everything fine.</p>
    
    <form class="flex flex-col md:flex-row">
      <input type="email" placeholder="Email" class="flex-grow p-3 rounded-t-lg md:rounded-l-lg md:rounded-t-none focus:outline-none" required>
      <button type="submit" class="bg-gray-800 text-white px-6 py-3 rounded-b-lg md:rounded-r-lg md:rounded-b-none hover:bg-gray-700 transition duration-300 mt-4 md:mt-0">SUBSCRIBE</button>
    </form>
  </div>
  

  <!-- Contact Information Section -->
 <div class="flex flex-wrap justify-between items-center w-full px-4 md:px-8 py-4 lg:px-24">
  <!-- Contact Info -->
  <div class="w-full md:w-auto mb-6 md:mb-0">
      <h2 class="text-xl md:text-2xl font-semibold mb-2 md:mb-4">Stay Connected with CaratLane</h2>
      <h3 class="font-semibold mb-1 md:mb-2">CONTACT US</h3>
      <p class="text-sm md:text-base mb-1">1800-102-0103 (TOLL FREE)</p>
      <p class="text-sm md:text-base mb-1">+91-44-4299-5000</p>
      <p class="text-sm md:text-base">CONTACTUS@CARATLANE.COM</p>
  </div>

  <!-- Social Media Links -->
  <div class="flex items-center space-x-4">
      <span class="font-semibold text-sm md:text-base">CARATLANE</span>
      <a href="#" class="text-gray-600 hover:text-gray-800">
          <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
          </svg>
      </a>
      <a href="#" class="text-gray-600 hover:text-gray-800">
          <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
          </svg>
      </a>
      <a href="#" class="text-gray-600 hover:text-gray-800">
          <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
          </svg>
      </a>
      
      <a href="#" class="text-gray-600 hover:text-gray-800"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill-rule="evenodd" clip-rule="evenodd"/></svg></a>

  </div>
</div>
