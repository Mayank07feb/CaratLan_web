@extends('components.main')
@section('content')
{{-- intro --}}
<div class="w-full mx-12 flex justify-center">
    <img src="{{ asset('asset/img/3c1194b2df314b05b8e2d862b7a7b5c9 (1).png') }}" alt="Description of the image" class=" h-auto ">
</div>
{{-- Details --}}
<div class="bg-[#F9F3E6] p-8 rounded-lg shadow-md ">
    <h2 class="text-2xl font-bold mb-4 text-center">Jewellery Buying Guide</h2>
    <p class="text-gray-700 text-center">
        Having the right pieces of jewellery can take your simple look to a gorgeous statement look. Whether you love a traditional or classic style, if you prefer rose gold or gold or perhaps even a combination of the two, never be afraid to try something new. Jewellery always lets you accessorise with confidence and express your style. 
    </p>
    <p class="text-gray-700 text-center">
        There are various categories of jewellery made with different types of metals that have unique personalities of their own, and we bet we can find something that best suits yours.
    </p>
</div>
{{--1. Pick the Right Metal--}}
<div class="flex flex-col items-center p-8">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-center">1. Pick the Right Metal</h1>
        <img src="{{asset('asset/img/j-guide.png')}}" alt="Guide to Choosing Metal" class="mt-4">
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white  p-6 max-w-md">
            <h2 class="text-2xl font-semibold">White Gold</h2>
            <p>
                White gold is an alloy of pure yellow gold mixed with silvery-white metals such as palladium and silver. Its neutral color and durability make it an ideal setting for all gemstones. With a beautiful and classic appearance, white gold complements a variety of outfits and events.
            </p>
        </div>
        <div class="bg-white  p-6 max-w-md">
            <h2 class="text-2xl font-semibold">Rose Gold</h2>
            <p>
                Rose gold is a stunning blend of gold and a small percentage of copper, which enhances its strength and durability. This trendy metal offers a romantic hue, making it a popular choice for modern jewelry designs.
            </p>
        </div>
        <div class="bg-white  p-6 max-w-md">
            <h2 class="text-2xl font-semibold">Yellow Gold</h2>
            <p>
                Yellow gold is the natural form of gold and is a classic choice for wedding jewelry. Its warm tone is visually appealing and complements most skin tones. Diamonds set in yellow gold bands symbolize "happily ever after."
            </p>
        </div>
        <div class="bg-white  p-6 max-w-md">
            <h2 class="text-2xl font-semibold">Platinum</h2>
            <p>
                Platinum is a robust, white-toned metal that is rarer than gold. Known for its exquisite appearance, platinum requires low maintenance, making it an excellent choice for those seeking durability and elegance.
            </p>
        </div>
    </div>
</div>



<!-- Choose Your Diamond or Gemstone Section -->
<section class="flex flex-col items-center p-8 bg-gray-50">
    <h1 class="text-3xl font-bold mb-6 text-center">Choose Your Diamond or Gemstone</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl w-full">
        <!-- Diamond Selection Card -->
        <div class="relative bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/jguide.jpeg') }}" alt="Diamond Selection" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex flex-col items-center justify-center ">
                <h2 class="text-2xl font-semibold text-black">Diamond Selection</h2>
                <p class="mt-2 text-black text-center">Become a diamond expert in under 5 minutes</p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-200 font-semibold hover:underline transition">
                    Become a diamond expert
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Gemstone Selection Card -->
        <div class="relative bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ asset('asset/img/jguide2.jpeg') }}" alt="Gemstone Selection" class="w-full h-full object-cover">
            <div class="absolute inset-16 flex flex-col items-center justify-center ">
                <h2 class="text-2xl font-semibold text-black">Gemstone Selection</h2>
                <p class="mt-2 text-black text-center">So many colors to know about and choose from</p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-200 font-semibold hover:underline transition">
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
<div class="flex flex-col items-center p-8 bg-gray-50 mx-12">
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold">Rings</h1>
        <p class="mt-2">For rings, the more, the merrier. Multiple and stacked rings are grouped together and worn on different fingers for a nice style statement.</p>
        <h2 class="text-xs font-semibold mt-4 text-purple-400">CaratLane Style Tip:</h2>
        <p class="mt-2">Let your personality shine through your rings by mixing a variety of colours & designs. The rainbow awaits...minus the unicorns though ;)</p>
    </div>

    <div class="overflow-x-auto w-full">
        <div class="flex items-center justify-center space-x-4 p-4">
            <img src="{{ asset('asset/img/ring1.jpg') }}" alt="Ring 1" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ring2.jpg') }}" alt="Ring 2" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ring3.jpg') }}" alt="Ring 3" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ring4.jpg') }}" alt="Ring 4" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ring5.jpg') }}" alt="Ring 5" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ring6.jpg') }}" alt="Ring 3" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ring7.jpg') }}" alt="Ring 4" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ring8.jpg') }}" alt="Ring 5" class="w-48 h-48 object-cover rounded-lg">

            <!-- Add more images as needed -->
        </div>
    </div>
</div>
{{-- Earing Section --}}
<div class="flex flex-col items-center p-8 bg-gray-50 mx-12">
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold">Earrings</h1>
        <p class="mt-2">For rings, the more, the merrier. Multiple and stacked rings are grouped together and worn on different fingers for a nice style statement.</p>
        <h2 class="text-xs font-semibold mt-4 text-purple-400">CaratLane Style Tip:</h2>
        <p class="mt-2">Let your personality shine through your rings by mixing a variety of colours & designs. The rainbow awaits...minus the unicorns though ;)</p>
    </div>

    <div class="overflow-x-auto w-full">
        <div class="flex items-center justify-center space-x-4 p-4">
            <img src="{{ asset('asset/img/ear1.jpg') }}" alt="ear 1" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ear2.jpg') }}" alt="ear 2" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ear3.jpg') }}" alt="ear 3" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ear4.jpg') }}" alt="ear 4" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ear5.jpg') }}" alt="ear 5" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ear6.jpg') }}" alt="ear 3" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/ear7.jpg') }}" alt="ear 4" class="w-48 h-48 object-cover rounded-lg">

            <!-- Add more images as needed -->
        </div>
    </div>
</div>

{{-- Bracelets
 --}}
 <div class="flex flex-col items-center p-8 bg-gray-50 mx-12">
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold">Bracelets</h1>
        <p class="mt-2">For rings, the more, the merrier. Multiple and stacked rings are grouped together and worn on different fingers for a nice style statement.</p>
        <h2 class="text-xs font-semibold mt-4 text-purple-400">CaratLane Style Tip:</h2>
        <p class="mt-2">Let your personality shine through your rings by mixing a variety of colours & designs. The rainbow awaits...minus the unicorns though ;)</p>
    </div>

    <div class="overflow-x-auto w-full">
        <div class="flex items-center justify-center space-x-4 p-4">
            <img src="{{ asset('asset/img/b1.jpg') }}" alt="b 1" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/b2.jpg') }}" alt="b 2" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/b3.jpg') }}" alt="b 3" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/b4.jpg') }}" alt="b 4" class="w-48 h-48 object-cover rounded-lg">
            <img src="{{ asset('asset/img/b5.jpg') }}" alt="b 5" class="w-48 h-48 object-cover rounded-lg">
            
            <!-- Add more images as needed -->
        </div>
    </div>
</div>


{{-- list  --}}
<div class="p-4 mx-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
        <!-- Image Section -->
        <div class="flex justify-center">
            <img src="{{ asset('asset/img/your daimond.png') }}" alt="Your Diamond" class="max-w-full h-auto ">
        </div>
        
        <!-- Jewellery Care Section -->
        <div class="p-8 bg-gray-50 ">
            <h1 class="text-3xl font-bold mb-4">Jewellery Care</h1>
            <h2 class="text-xl font-semibold mb-2">Handle it with Love</h2>
            
            <ul class="list-disc list-inside space-y-2">
                <li>Put on your jewellery after you’ve applied your cosmetics like creams and perfumes.</li>
                <li>Clean your jewellery with warm water, gentle soap, and a soft brush.</li>
                <li>Remove it when you go swimming or while doing household chores.</li>
                <li>Get your jewellery to any of our CaratLane stores for a professional clean-up once every 6 months.</li>
                <li>Store it right: keep your jewellery in separate boxes to reduce the chances of scratches and tangles.</li>
                <li>Keep it away from moisture by storing it in a fabric-lined box.</li>
                <li>Wipe your pearl jewellery with a soft cloth before you store it after wearing, as even sweat can be damaging to pearls.</li>
            </ul>
        
            <p class="mt-6 font-semibold">CaratLane - A Tanishq Partnership</p>
        </div>
    </div>
</div>



@endsection