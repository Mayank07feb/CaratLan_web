@extends('components.main')
@section('content')
    {{-- BANNER --}}
    <div class="flex justify-center mt-8">
        <video 
            src="{{ asset('asset/img/self-rewards-banner-video-desktop.mp4') }}" 
            controls 
            autoplay 
            muted 
            loop 
            style="max-width: 100%; height: auto;">
            Your browser does not support the video tag.
        </video>
    </div>
    {{--  --}}
    <div class="flex justify-between items-start p-4 mx-16 py-8">
        <div class="text-5xl font-bold font-cursive">
            Wear <br><span class="text-purple-500">Your Wins</span>
        </div>
        <div class="max-w-md">
            <p class="mb-4">
                In life's journey, you have moments big & small, where you conquer challenges and rise above them all. Each win, whether it's a huge success or a tiny gain, deserves a celebration; a moment to reign.
            </p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                Know More
            </button>
        </div>    
    </div>
       
    {{-- slider --}}

     {{-- heading --}}
     <div style=" padding: 30px; text-align: center;">
        <h1 class="text-4xl font-bold text-purple-500 mb-4">Discover Designs</h1>
        <p class="text-lg text-black italic mb-6">
            That stand for who you are</p>
    </div>


<style>
.product-slider {
    scroll-behavior: smooth;
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.product-slider::-webkit-scrollbar {
    display: none;
}
</style>

<div class="max-w-7xl mx-auto px-4 py-4">
<!-- Slider Container -->
<div class="relative">
    <!-- Products Wrapper -->
    <div class="product-slider flex space-x-6 overflow-x-scroll p-4">
        <!-- Product Card 1 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j1.jpg')}}" alt="Jewelry Rock Diamond Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Jewelry Rock Diamond Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹26,671</span>
                    <span class="text-white text-sm line-through ml-2">₹34,025</span>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j2.jpg')}}" alt="Threaded Treasure Diamond Band" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Threaded Treasure Diamond Band</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹68,314</span>
                    <span class="text-white text-sm line-through ml-2">₹76,780</span>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j3.jpg')}}" alt="Snake Spring Diamond Cocktail Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Snake Spring Diamond Cocktail Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹28,406</span>
                    <span class="text-white text-sm line-through ml-2">₹34,321</span>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j4.jpg')}}" alt="Maharani Gemstone Cocktail Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Maharani Gemstone Cocktail Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹52,452</span>
                    <span class="text-white text-sm line-through ml-2">₹60,753</span>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j5.jpg')}}" alt="Darning Diamond Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Darning Diamond Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹95,154</span>
                    <span class="text-white text-sm line-through ml-2">₹1,03,108</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-10 h-10 bg-black rounded-full shadow-lg flex items-center justify-center text-white" onclick="document.querySelector('.product-slider').scrollBy(-288, 0)">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-10 h-10 bg-black rounded-full shadow-lg flex items-center justify-center text-white" onclick="document.querySelector('.product-slider').scrollBy(288, 0)">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>

<!-- See More Button -->
<div class="text-center mt-8">
    <button class="border border-r-violet-600 text-black px-8 py-3 rounded-full font-medium transition duration-300">
        View all Designs
    </button>
</div>
</div>

<script>
// Optional: Add touch scroll support
const slider = document.querySelector('.product-slider');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', () => {
    isDown = false;
});

slider.addEventListener('mouseup', () => {
    isDown = false;
});

slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2;
    slider.scrollLeft = scrollLeft - walk;
});
</script>


{{-- cards --}}
<div class="flex flex-row gap-4 justify-center">
    
<div class="max-w-sm">
    <div style=" padding: 20px; max-width: 400px; margin: auto; text-align: center;">
        <h2>My Firsts</h2>
        <p>
            My debut at Cannes was a tribute to my hard work; this necklace is my reward.
        </p>
        <p style="font-weight: bold; margin-top: 20px;">
            Nancy Tyagi, Content Creator & Designer
        </p>
    </div>
    
    <a href="#">
        <img class="rounded-t-lg" src="{{asset('asset/img/my-firsts.jpg')}}" alt="" />
    </a>
</div>


<div class="max-w-sm ">
    <div style=" padding: 20px; max-width: 400px; margin: auto; text-align: center;">
        <h2>My Firsts</h2>
        <p>
            My debut at Cannes was a tribute to my hard work; this necklace is my reward.
        </p>
        <p style="font-weight: bold; margin-top: 20px;">
            Nancy Tyagi, Content Creator & Designer
        </p>
    </div>
    
    <a href="#">
        <img class="rounded-t-lg" src="{{asset('asset/img/professional-wins.jpg')}}" alt="" />
    </a>
</div>


<div class="max-w-sm">
    <div style="padding: 20px; max-width: 400px; margin: auto; text-align: center;">
        <h2>My Firsts</h2>
        <p>
            My debut at Cannes was a tribute to my hard work; this necklace is my reward.
        </p>
        <p style="font-weight: bold; margin-top: 20px;">
            Nancy Tyagi, Content Creator & Designer
        </p>
    </div>
    
    <a href="#">
        <img class="rounded-t-lg" src="{{asset('asset/img/conquering-barriers.jpg')}}" alt="" />
    </a>
</div>

</div>



{{-- peak video --}}
<div class="max-w-lg mx-auto bg-white rounded-lg mt-4 p-6 text-center mb-6">
    <h2 class="text-2xl font-bold mb-4">Introducing ‘Peak’</h2>
    <h3 class="text-xl font-semibold mb-2">by CaratLane</h3>
    <p class="text-gray-700 mb-4">
        When you’re at the peak of success, the world sees
        a brilliant and shining version of you!
    </p>
</div>

<div class="flex justify-center">
    <video 
        src="{{ asset('asset/img/peak-video-desktop.mp4') }}" 
        controls 
        autoplay 
        muted 
        loop 
        class="rounded-lg" 
        style="max-width: 100%; height: auto;">
        Your browser does not support the video tag.
    </video>
</div>


{{-- slider 2 --}}

   {{-- slider --}}

     {{-- heading --}}
     <div style=" padding: 30px; text-align: center;">
        <h1 class="text-4xl font-bold text-purple-500 mb-4">Discover Designs</h1>
        <p class="text-lg text-black italic mb-6">
            That stand for who you are</p>
    </div>


<style>
.product-slider {
    scroll-behavior: smooth;
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.product-slider::-webkit-scrollbar {
    display: none;
}
</style>

<div class="max-w-7xl mx-auto px-4 py-4">
<!-- Slider Container -->
<div class="relative">
    <!-- Products Wrapper -->
    <div class="product-slider flex space-x-6 overflow-x-scroll p-4">
        <!-- Product Card 1 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j1.jpg')}}" alt="Jewelry Rock Diamond Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Jewelry Rock Diamond Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹26,671</span>
                    <span class="text-white text-sm line-through ml-2">₹34,025</span>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j2.jpg')}}" alt="Threaded Treasure Diamond Band" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Threaded Treasure Diamond Band</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹68,314</span>
                    <span class="text-white text-sm line-through ml-2">₹76,780</span>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j3.jpg')}}" alt="Snake Spring Diamond Cocktail Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Snake Spring Diamond Cocktail Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹28,406</span>
                    <span class="text-white text-sm line-through ml-2">₹34,321</span>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j4.jpg')}}" alt="Maharani Gemstone Cocktail Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Maharani Gemstone Cocktail Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹52,452</span>
                    <span class="text-white text-sm line-through ml-2">₹60,753</span>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j5.jpg')}}" alt="Darning Diamond Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Darning Diamond Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹95,154</span>
                    <span class="text-white text-sm line-through ml-2">₹1,03,108</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-10 h-10 bg-black rounded-full shadow-lg flex items-center justify-center text-white" onclick="document.querySelector('.product-slider').scrollBy(-288, 0)">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-10 h-10 bg-black rounded-full shadow-lg flex items-center justify-center text-white" onclick="document.querySelector('.product-slider').scrollBy(288, 0)">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>

<!-- See More Button -->
<div class="text-center mt-8">
    <button class="border border-r-violet-600 text-black px-8 py-3 rounded-full font-medium transition duration-300">
        View all Designs
    </button>
</div>
</div>

<script>
// Optional: Add touch scroll support
const slider = document.querySelector('.product-slider');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', () => {
    isDown = false;
});

slider.addEventListener('mouseup', () => {
    isDown = false;
});

slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2;
    slider.scrollLeft = scrollLeft - walk;
});
</script>

{{-- Card --}}
<div class="max-w-lg mx-auto bg-white p-6 text-center mb-6">
    <h2 class="text-2xl font-bold mb-4">Let Us Make Your Special Day</h2>
    <p class="text-xl font-semibold text-gray-700">Truly Extraordinary!</p>
</div>

<div class="flex justify-center gap-4 mb-6">
    <div class="flex-shrink-0">
        <img src="{{ asset('asset/img/postcards-slide.jpg') }}" alt="Postcards" class="rounded-lg shadow-md max-w-sm h-auto" />
    </div>
    <div class="flex-shrink-0">
        <img src="{{ asset('asset/img/Engraved.png') }}" alt="Emerald" class="rounded-lg shadow-md max-w-sm h-auto" />
    </div>
    <div class="flex-shrink-0">
        <img src="{{ asset('asset/img/truly-extraordinary_3.jpg') }}" alt="Truly Extraordinary" class="rounded-lg shadow-md max-w-sm h-auto" />
    </div>
</div>


{{-- celebrating card --}}
<div class="max-w-lg mx-auto  p-6 text-center mb-6">
    <h2 class="text-3xl font-bold mb-4">Celebrating Wins</h2>
    <h3 class="text-xl font-semibold text-gray-700">Blogs & Ideas</h3>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mx-12">
    <div class="">
        <img src="{{asset('asset/img/cele1.jpg')}}" alt="Celebrating Wins 1" class="rounded mb-2">
        <p class="font-semibold">Celebrate Your Wins: Why Women Should Embrace Self-Rewards</p>
    </div>
    <div class="">
        <img src="{{asset('asset/img/cele2.jpg')}}" alt="Celebrating Wins 2" class="rounded mb-2">
        <p class="font-semibold">From Self-Doubt To Self-Rewards: Celebrating Women’s Successes</p>
    </div>
    <div class="">
        <img src="{{asset('asset/img/cele3.jpg')}}" alt="Celebrating Wins 3" class="rounded mb-2">
        <p class="font-semibold">Women Stories: How To Reward Yourself With No Regrets?</p>
    </div>
</div>


{{-- slider3 --}}
{{-- slider 2 --}}

   {{-- slider --}}

     {{-- heading --}}
     <div style=" padding: 30px; text-align: center;">
        <h1 class="text-4xl font-bold text-purple-500 mb-4">Discover Designs</h1>
        <p class="text-lg text-black italic mb-6">
            That stand for who you are</p>
    </div>


<style>
.product-slider {
    scroll-behavior: smooth;
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.product-slider::-webkit-scrollbar {
    display: none;
}
</style>

<div class="max-w-7xl mx-auto px-4 py-4">
<!-- Slider Container -->
<div class="relative">
    <!-- Products Wrapper -->
    <div class="product-slider flex space-x-6 overflow-x-scroll p-4">
        <!-- Product Card 1 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j1.jpg')}}" alt="Jewelry Rock Diamond Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Jewelry Rock Diamond Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹26,671</span>
                    <span class="text-white text-sm line-through ml-2">₹34,025</span>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j2.jpg')}}" alt="Threaded Treasure Diamond Band" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Threaded Treasure Diamond Band</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹68,314</span>
                    <span class="text-white text-sm line-through ml-2">₹76,780</span>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j3.jpg')}}" alt="Snake Spring Diamond Cocktail Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Snake Spring Diamond Cocktail Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹28,406</span>
                    <span class="text-white text-sm line-through ml-2">₹34,321</span>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j4.jpg')}}" alt="Maharani Gemstone Cocktail Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Maharani Gemstone Cocktail Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹52,452</span>
                    <span class="text-white text-sm line-through ml-2">₹60,753</span>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="flex-none w-64">
            <div class="bg-white rounded-lg shadow-md p-4 relative group">
                <img src="{{asset('asset/img/j5.jpg')}}" alt="Darning Diamond Ring" class="w-full h-48 object-contain mb-4">
                <div class="text-gray-800 font-medium">Darning Diamond Ring</div>
                <div class="flex items-baseline mt-2">
                    <span class="text-purple-600 text-lg font-semibold">₹95,154</span>
                    <span class="text-white text-sm line-through ml-2">₹1,03,108</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-10 h-10 bg-black rounded-full shadow-lg flex items-center justify-center text-white" onclick="document.querySelector('.product-slider').scrollBy(-288, 0)">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-10 h-10 bg-black rounded-full shadow-lg flex items-center justify-center text-white" onclick="document.querySelector('.product-slider').scrollBy(288, 0)">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>

<!-- See More Button -->
<div class="text-center mt-8">
    <button class="border border-r-violet-600 text-black px-8 py-3 rounded-full font-medium transition duration-300">
        View all Designs
    </button>
</div>
</div>

<script>
// Optional: Add touch scroll support
const slider = document.querySelector('.product-slider');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', () => {
    isDown = false;
});

slider.addEventListener('mouseup', () => {
    isDown = false;
});

slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2;
    slider.scrollLeft = scrollLeft - walk;
});
</script>






    <!-- FAQ Section -->
    <main class="max-w-3xl mx-auto py-8 px-4">
        <div class="space-y-4">
            <!-- FAQ Items -->
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white" data-inactive-classes="bg-white">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-sm">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border border-gray-200 focus:ring-4 focus:ring-purple-200 hover:bg-purple-50" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>How to reward myself for an achievement?</span>
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="p-5 border-t border-gray-200">
                            <p class="text-gray-700">Consider treating yourself to something meaningful that commemorates your success.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-sm">
                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border border-gray-200 focus:ring-4 focus:ring-purple-200 hover:bg-purple-50" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>Who is Nancy Tyagi and what is her connection to CaratLane?</span>
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="p-5 border-t border-gray-200">
                            <p class="text-gray-700">Nancy Tyagi is associated with CaratLane's Self Rewards collection.</p>
                        </div>
                    </div>
                </div>

                 <!-- FAQ Item 1 -->
                 <div class="bg-white rounded-lg shadow-sm">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border border-gray-200 focus:ring-4 focus:ring-purple-200 hover:bg-purple-50" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>How to reward myself for an achievement?</span>
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="p-5 border-t border-gray-200">
                            <p class="text-gray-700">Consider treating yourself to something meaningful that commemorates your success.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-sm">
                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border border-gray-200 focus:ring-4 focus:ring-purple-200 hover:bg-purple-50" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>Who is Nancy Tyagi and what is her connection to CaratLane?</span>
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="p-5 border-t border-gray-200">
                            <p class="text-gray-700">Nancy Tyagi is associated with CaratLane's Self Rewards collection.</p>
                        </div>
                    </div>
                </div>
                 <!-- FAQ Item 1 -->
                 <div class="bg-white rounded-lg shadow-sm">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border border-gray-200 focus:ring-4 focus:ring-purple-200 hover:bg-purple-50" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>How to reward myself for an achievement?</span>
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="p-5 border-t border-gray-200">
                            <p class="text-gray-700">Consider treating yourself to something meaningful that commemorates your success.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-sm">
                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border border-gray-200 focus:ring-4 focus:ring-purple-200 hover:bg-purple-50" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>Who is Nancy Tyagi and what is her connection to CaratLane?</span>
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="p-5 border-t border-gray-200">
                            <p class="text-gray-700">Nancy Tyagi is associated with CaratLane's Self Rewards collection.</p>
                        </div>
                    </div>
                </div>
                 <!-- FAQ Item 1 -->
                 <div class="bg-white rounded-lg shadow-sm">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border border-gray-200 focus:ring-4 focus:ring-purple-200 hover:bg-purple-50" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>How to reward myself for an achievement?</span>
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="p-5 border-t border-gray-200">
                            <p class="text-gray-700">Consider treating yourself to something meaningful that commemorates your success.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-sm">
                    <h2 id="accordion-flush-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border border-gray-200 focus:ring-4 focus:ring-purple-200 hover:bg-purple-50" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>Who is Nancy Tyagi and what is her connection to CaratLane?</span>
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="p-5 border-t border-gray-200">
                            <p class="text-gray-700">Nancy Tyagi is associated with CaratLane's Self Rewards collection.</p>
                        </div>
                    </div>
                </div>
                <!-- Additional FAQ items follow the same pattern -->
                <!-- For brevity, I'm showing just two items, but you can add all items following the same structure -->

            </div>
        </div>
    </main>

   

    <script>
        // Simple accordion functionality
        document.querySelectorAll('[data-accordion-target]').forEach(button => {
            button.addEventListener('click', () => {
                const target = document.querySelector(button.dataset.accordionTarget);
                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                
                // Toggle the content
                target.classList.toggle('hidden');
                
                // Update the aria-expanded attribute
                button.setAttribute('aria-expanded', !isExpanded);
                
                // Toggle the plus/minus icon (you can enhance this part)
                const icon = button.querySelector('svg');
                if (isExpanded) {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>';
                } else {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>';
                }
            });
        });
    </script>
{{-- text --}}
<div class="text-center mt-6">
    <p class="text-gray-600">
        To know more, see our <a href="/terms" class="text-blue-500 underline">Terms of Service</a> and <a href="/privacy" class="text-blue-500 underline">Privacy Policy</a>.
    </p>
</div>

<div class="max-w-3xl mx-auto p-6 mb-6">
    <h2 class="text-3xl font-bold text-center mb-4">Celebrate Yourself with CaratLane Self Rewards Jewellery</h2>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Celebrate Yourself with Nancy Tyagi’s Self-Reward Jewellery</h3>
    <p class="mb-4">
        Celebrate your achievements with the Wear Your Wins collection by CaratLane, inspired by Nancy Tyagi. It’s time to embrace self-rewards and boost your self-motivation with beautiful jewellery that symbolizes your victories. Whether you're treating yourself after reaching a goal or looking for a gift for yourself, this collection is perfect for enhancing your self-esteem. Each piece is a daily reminder that you deserve to celebrate your journey.
    </p>
    <p class="mb-4">
        Pamper yourself with a meaningful gift that reflects your resilience and determination. Let these pieces symbolize your accomplishments, inspiring you to keep going. After all, self-care isn't just about relaxation—it’s about recognizing your worth. So, if you're ready to treat yourself, explore the collection and reward your inner champion today. Embrace the art of gifting yourself and wear your wins with pride.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Self Rewards & CaratLane - How To Motivate Yourself?</h3>
    <p class="mb-4">
        Should I reward myself? Oh, yes! Self rewards in jewellery gifting are significant as they add a touch of individuality and thoughtfulness to the gesture. These are hands-down well-deserved rewards that make us feel truly special and cherished, enhancing the emotional value of the gift. Make jewellery self-gifting a motivation for self.
    </p>
    <p class="mb-4">
        Rewarding yourself with jewellery is a meaningful way to celebrate personal milestones and achievements. It serves as a tangible reminder of your accomplishments, enhancing your self-esteem and adding a touch of indulgence to your life.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">From Me, To Me: Motivation for Self</h3>
    <p class="mb-4">
        At CaratLane, we understand the importance of self-love and milestone celebrations. Our collection of exquisite jewellery designs is a token of your success journey, a reminder of your personal growth, and a symbol of self-recognition.
    </p>
    <p class="mb-4">
        Did you know? According to a poll, 63% of people treat themselves ‘because they feel it’s important’, while 27% do so because they believe they deserve a gift for working hard!
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Nancy Tyagi x CaratLane: A Journey of Personal Achievements - Self Rewards</h3>
    <p class="mb-4">
        CaratLane's Self Rewards collection celebrates the spirit of self-motivation and personal achievements. Inspired by Nancy Tyagi, the sensational fashion influencer who took the Cannes Film Festival by storm with her stunning pink gown, this collection embodies the essence of self-designed elegance.
    </p>
    
    <h4 class="text-lg font-semibold text-gray-600 mb-2">Who is Nancy Tyagi?</h4>
    <p class="mb-4">
        Nancy Tyagi is an inspirational story in herself, a symbol of dedication, self-motivation, and creativity. Nancy became a sensation after her debut at the Cannes Film Festival, where she wore a self-designed pink gown that left everyone in awe. Her journey with CaratLane began with this remarkable moment, and she now proudly represents our jewellery brand.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Explore Our Collection</h3>
    <p class="mb-4">
        At CaratLane, we believe in celebrating every milestone, big or small. Our Self Rewards Collection is designed to inspire you to recognize your personal achievements and reward yourself with exquisite jewellery that reflects your journey. Let Nancy Tyagi's story be a beacon of inspiration, motivating you to celebrate your victories and embrace self-motivation.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Self Rewards: Small Steps, Big Changes</h3>
    <p class="mb-4">
        We believe in the power of positive reinforcement and self-investment. Our jewellery designs are crafted to help you cultivate a success mindset, empowering you to achieve your long-term goals and celebrate your achievements, no matter how big or small.
    </p>
    <p class="mb-4">
        Treat yourself to a design from our collection and celebrate your success journey in style. Whether you prefer a delicate necklace, a statement ring, a timeless bracelet, or a pair of elegant earrings, our jewellery is sure to make you feel special and deserving of all the success that comes your way through personal growth.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Self Rewards: Motivation for Self</h3>
    <p class="mb-4">
        Reward yourself with CaratLane and make every milestone celebration a memorable one. Start your journey of self-praise, self-observation, and self-recognition with our exquisite collection of jewellery designs. Celebrate your small steps that lead to big changes, treat yourself, and let our jewellery be a part of your success story.
    </p>

    <h4 class="text-lg font-semibold text-gray-600 mb-2">Some Facts about Self Reward - Gift for Me</h4>
    <ul class="list-disc list-inside mb-4">
        <li>65% of consumers buy jewellery for themselves. (Source: Mintel)</li>
        <li>31% of consumers consider jewellery a treat for themselves. (Source: Mintel)</li>
        <li>Self-gifting accounts for 15-20% of total jewellery sales. (Source: JCK)</li>
        <li>42% of self-purchasers see jewellery as a way to express their individuality. (Source: JCK)</li>
    </ul>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Embracing Firsts with CaratLane - CaratLane Self Motivation Gifts</h3>
    <p class="mb-4">
        Starting new things often feels both exciting and overwhelming. Your first job is a big step towards career success. As you settle into your new job, you might reward yourself with a self-gift from CaratLane. Celebrate milestones like getting a new car or moving into your new house. CaratLane self-recognition gifts are perfect for these moments, making your achievements even more special.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Breaking Free and Bouncing Back</h3>
    <p class="mb-4">
        In your journey, maintaining a healthy lifestyle is crucial. If you are focusing on weight loss, it is important to stay motivated. Reward yourself with CaratLane self-rewards as you reach your milestones. These rewards can keep you motivated and celebrate your progress in a meaningful way.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">Striving for Career Growth</h3>
    <p class="mb-4">
        As you advance, continuous professional development is key. Learning new skills can pave the way for career growth and goal achievement. CaratLane gifts for professional success can be a wonderful way to acknowledge your hard work and dedication.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">How To Motivate Yourself? Self Reward Ideas</h3>
    <p class="mb-4">
        The simple answer to ‘how to motivate yourself’ lies within you. Treat yourself to a special design of jewellery after reaching milestones. The sparkle will remind you of your hard work. Self-reward boosts motivation by creating a pleasurable feedback loop. Pick meaningful jewels that symbolize your accomplishments.
    </p>

    <h3 class="text-xl font-semibold text-gray-700 mb-4">What Are Achievement Gifts For Me?</h3>
    <p class="mb-4">
        ‘Achievement gifts for me’ are personal tokens of recognition and celebration—a perfect self-reward idea. These designs symbolize milestones reached, goals accomplished, or challenges overcome—a token of motivation for oneself. Each piece serves as a reminder of your journey, a reflection of resilience, and a celebration of personal growth and success.
    </p>
</div>

@endsection