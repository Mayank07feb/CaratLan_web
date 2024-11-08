@extends('components.main')

@section('content')

<!-- Container for the slider -->
<div class="max-w-7xl mx-auto mt-8">
    <!-- Carousel -->
    <div class="carousel flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory">
        <!-- Slider Item 1 -->
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 snap-start w-72 md:w-96">
            <img class="object-cover w-full rounded-t-lg h-56 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="Noteworthy technology acquisitions 2021">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
        <!-- Slider Item 2 -->
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 snap-start w-72 md:w-96">
            <img class="object-cover w-full rounded-t-lg h-56 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="Next-Gen Solutions for Tomorrow">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Next-Gen Solutions for Tomorrow</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">An overview of the most innovative tech solutions shaping the future of business.</p>
            </div>
        </a>
        <!-- Slider Item 3 -->
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 snap-start w-72 md:w-96">
            <img class="object-cover w-full rounded-t-lg h-56 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="Sustainable Innovations in Business">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sustainable Innovations in Business</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Discover the businesses pioneering sustainability and innovation across industries.</p>
            </div>
        </a>
        <!-- Add more items here -->
    </div>
</div>

<!-- Add Flickity JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Flickity slider
        const flkty = new Flickity('.carousel', {
            cellAlign: 'left',
            contain: true,
            wrapAround: true,
            autoPlay: 5000, // Set auto play time in ms
            prevNextButtons: true, // Show arrows for next/prev
            pageDots: true, // Show dots for navigation
            adaptiveHeight: true, // Adjust height based on content
            groupCells: true, // Group cells based on screen size
        });
    });
</script>



<main class="container mx-auto py-8">
    <section class="mb-8">
      <h2 class="text-2xl font-bold mb-4">In July 2016, we joined forces with Tanishq, India's largest and most trusted jewellery brand. This takes us a step closer to our mission - Bringing you beautiful jewellery that's affordable and accessible!</h2>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="p-4 bg-gray-100 rounded-md">
        <h3 class="text-xl font-bold mb-2">Only the Best Practices</h3>
        <p>We strictly adhere to the Tata Code of Conduct and Corporate Policies to bring you only the best customer practices in the industry!</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-md">
        <h3 class="text-xl font-bold mb-2">Exceptional Quality</h3>
        <p>Some of our designs are manufactured at Tanishq's state-of-the-art facility. We follow the stringent quality checks for all our products - gold, diamonds, solitaires, gemstones, and everything else!</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-md">
        <h3 class="text-xl font-bold mb-2">Exclusive Titan Privileges</h3>
        <p>Enjoy exclusive benefits like Titan circle and more!</p>
      </div>
    </section>

    <section class="mt-8">
      <h2 class="text-2xl font-bold mb-4">FAQ's</h2>
      <div class="space-y-4">
        <div>
          <button class="w-full bg-gray-100 hover:bg-gray-200 rounded-md py-2 px-4 flex justify-between items-center">
            <span>Can I see or buy CaratLane designs at my nearest Tanishq store?</span>
            <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
        </div>
        <!-- Add more FAQ items here -->
      </div>
    </section>
  </main>




@endsection
