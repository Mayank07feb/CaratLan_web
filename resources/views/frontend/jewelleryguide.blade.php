@extends('components.main')
@section('content')
{{-- intro --}}
<div class="w-full lg:mx-12 flex justify-center mt-24 lg:mt-0">
    <img 
        src="{{ asset('asset/img/3c1194b2df314b05b8e2d862b7a7b5c9 (1).png') }}" 
        alt="Description of the image" 
        class="w-full max-w-screen-lg h-auto object-contain"
    >
</div>

{{-- Details --}}
<div class="bg-[#F9F3E6] p-6 md:p-8 rounded-lg shadow-md max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">Jewellery Buying Guide</h2>
    <p class="text-gray-700 text-center mb-4 px-4 sm:px-6">
        Having the right pieces of jewellery can take your simple look to a gorgeous statement look. Whether you love a traditional or classic style, if you prefer rose gold or gold or perhaps even a combination of the two, never be afraid to try something new. Jewellery always lets you accessorise with confidence and express your style. 
    </p>
    <p class="text-gray-700 text-center px-4 sm:px-6">
        There are various categories of jewellery made with different types of metals that have unique personalities of their own, and we bet we can find something that best suits yours.
    </p>
</div>

{{--1. Pick the Right Metal--}}
<div class="bg-[#F9F3E6] p-6 md:p-8 rounded-lg shadow-md max-w-4xl mx-auto">
    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-center text-gray-800">Jewellery Buying Guide</h2>
    <p class="text-gray-700 text-center mb-4 px-4 sm:px-6">
        Having the right pieces of jewellery can take your simple look to a gorgeous statement look. Whether you love a traditional or classic style, if you prefer rose gold or gold or perhaps even a combination of the two, never be afraid to try something new. Jewellery always lets you accessorise with confidence and express your style.
    </p>
    <p class="text-gray-700 text-center px-4 sm:px-6">
        There are various categories of jewellery made with different types of metals that have unique personalities of their own, and we bet we can find something that best suits yours.
    </p>
</div>




<!-- Choose Your Diamond or Gemstone Section -->
<section class="flex flex-col items-center p-8 bg-gray-50">
    <h1 class="text-3xl md:text-4xl font-bold mb-6 text-center text-gray-800">Choose Your Diamond or Gemstone</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl w-full">
        <!-- Diamond Selection Card -->
        <div class="relative bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/jguide.jpeg') }}" alt="Diamond Selection" class="w-full h-64 md:h-80 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent p-4 flex flex-col items-center justify-center text-center">
                <h2 class="text-2xl md:text-3xl font-semibold text-white">Diamond Selection</h2>
                <p class="mt-2 text-white text-sm md:text-base">Become a diamond expert in under 5 minutes</p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-200 font-semibold hover:underline transition-all duration-300">
                    Become a diamond expert
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Gemstone Selection Card -->
        <div class="relative bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/jguide2.jpeg') }}" alt="Gemstone Selection" class="w-full h-64 md:h-80 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent p-4 flex flex-col items-center justify-center text-center">
                <h2 class="text-2xl md:text-3xl font-semibold text-white">Gemstone Selection</h2>
                <p class="mt-2 text-white text-sm md:text-base">So many colors to know about and choose from</p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-200 font-semibold hover:underline transition-all duration-300">
                    Become a gemstone expert
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>



{{-- RING SECTION --}}
<div class="flex flex-col items-center p-8 bg-gray-50 mx-4 md:mx-12">
    <!-- Title and Description -->
    <div class="text-center mb-6">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Rings</h1>
        <p class="mt-2 text-gray-700 max-w-3xl mx-auto">For rings, the more, the merrier. Multiple and stacked rings are grouped together and worn on different fingers for a nice style statement.</p>
        
        <h2 class="text-xs font-semibold mt-4 text-purple-400">CaratLane Style Tip:</h2>
        <p class="mt-2 text-gray-700 max-w-3xl mx-auto">Let your personality shine through your rings by mixing a variety of colours & designs. The rainbow awaits...minus the unicorns though ;)</p>
    </div>

    <!-- Image Gallery -->
    <div class="overflow-x-auto w-full">
        <div class="flex flex-wrap justify-center gap-4 p-4">
            <img src="{{ asset('asset/img/ring1.jpg') }}" alt="Ring 1" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ring2.jpg') }}" alt="Ring 2" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ring3.jpg') }}" alt="Ring 3" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ring4.jpg') }}" alt="Ring 4" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ring5.jpg') }}" alt="Ring 5" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ring6.jpg') }}" alt="Ring 6" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ring7.jpg') }}" alt="Ring 7" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ring8.jpg') }}" alt="Ring 8" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
        </div>
    </div>
</div>

{{-- Earing Section --}}
<div class="flex flex-col items-center p-8 bg-gray-50 mx-4 md:mx-12">
    <!-- Title and Description -->
    <div class="text-center mb-6">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Earrings</h1>
        <p class="mt-2 text-gray-700 max-w-3xl mx-auto">For rings, the more, the merrier. Multiple and stacked rings are grouped together and worn on different fingers for a nice style statement.</p>
        
        <h2 class="text-xs font-semibold mt-4 text-purple-400">CaratLane Style Tip:</h2>
        <p class="mt-2 text-gray-700 max-w-3xl mx-auto">Let your personality shine through your rings by mixing a variety of colours & designs. The rainbow awaits...minus the unicorns though ;)</p>
    </div>

    <!-- Image Gallery -->
    <div class="overflow-x-auto w-full">
        <div class="flex flex-wrap justify-center gap-4 p-4">
            <img src="{{ asset('asset/img/ear1.jpg') }}" alt="ear 1" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ear2.jpg') }}" alt="ear 2" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ear3.jpg') }}" alt="ear 3" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ear4.jpg') }}" alt="ear 4" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ear5.jpg') }}" alt="ear 5" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ear6.jpg') }}" alt="ear 6" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/ear7.jpg') }}" alt="ear 7" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
        </div>
    </div>
</div>


{{-- Bracelets
 --}}
 <div class="flex flex-col items-center p-8 bg-gray-50 mx-4 md:mx-12">
    <!-- Title and Description -->
    <div class="text-center mb-6">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Bracelets</h1>
        <p class="mt-2 text-gray-700 max-w-3xl mx-auto">For rings, the more, the merrier. Multiple and stacked rings are grouped together and worn on different fingers for a nice style statement.</p>
        
        <h2 class="text-xs font-semibold mt-4 text-purple-400">CaratLane Style Tip:</h2>
        <p class="mt-2 text-gray-700 max-w-3xl mx-auto">Let your personality shine through your rings by mixing a variety of colours & designs. The rainbow awaits...minus the unicorns though ;)</p>
    </div>

    <!-- Image Gallery -->
    <div class="overflow-x-auto w-full">
        <div class="flex flex-wrap justify-center gap-4 p-4">
            <img src="{{ asset('asset/img/b1.jpg') }}" alt="b 1" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/b2.jpg') }}" alt="b 2" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/b3.jpg') }}" alt="b 3" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/b4.jpg') }}" alt="b 4" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/b5.jpg') }}" alt="b 5" class="w-32 sm:w-48 md:w-64 h-32 sm:h-48 md:h-64 object-cover rounded-lg transition-transform transform hover:scale-105">
        </div>
    </div>
</div>



{{-- list  --}}
<div class="p-4 mx-4 md:mx-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Image Section -->
        <div class="flex justify-center mb-6 md:mb-0">
            <img src="{{ asset('asset/img/your daimond.png') }}" alt="Your Diamond" class="max-w-full h-auto rounded-lg shadow-lg">
        </div>

        <!-- Jewellery Care Section -->
        <div class="p-6 md:p-8 bg-gray-50 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold mb-4 text-center md:text-left text-gray-800">Jewellery Care</h1>
            <h2 class="text-xl font-semibold mb-2 text-center md:text-left text-purple-600">Handle it with Love</h2>

            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Put on your jewellery after you’ve applied your cosmetics like creams and perfumes.</li>
                <li>Clean your jewellery with warm water, gentle soap, and a soft brush.</li>
                <li>Remove it when you go swimming or while doing household chores.</li>
                <li>Get your jewellery to any of our CaratLane stores for a professional clean-up once every 6 months.</li>
                <li>Store it right: keep your jewellery in separate boxes to reduce the chances of scratches and tangles.</li>
                <li>Keep it away from moisture by storing it in a fabric-lined box.</li>
                <li>Wipe your pearl jewellery with a soft cloth before you store it after wearing, as even sweat can be damaging to pearls.</li>
            </ul>

            <p class="mt-6 font-semibold text-center md:text-left text-purple-700">CaratLane - A Tanishq Partnership</p>
        </div>
    </div>
</div>




@endsection