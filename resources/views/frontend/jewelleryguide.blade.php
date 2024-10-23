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

{{-- Choose Your Diamond or Gemstone --}}
<div class="flex flex-col items-center p-8">
    <h1 class="text-3xl font-bold mb-6">Choose Your Diamond or Gemstone</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="relative bg-white shadow-lg rounded-lg">
            <img src="{{asset('asset/img/jguide.jpeg')}}" alt="Diamond Selection" class="w-full h-48 object-cover rounded-t-lg">
            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 rounded-lg">
                <h2 class="text-2xl font-semibold text-white">Diamond Selection</h2>
                <p class="mt-2 text-white">Become a diamond expert in under 5 minutes</p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-200 font-semibold hover:underline transition">
                    Become a diamond expert
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="relative bg-white shadow-lg rounded-lg">
            <img src="{{asset('asset/img/jguide2.jpeg')}}" alt="Gemstone Selection" class="w-full h-48 object-cover rounded-t-lg">
            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 rounded-lg">
                <h2 class="text-2xl font-semibold text-white">Gemstone Selection</h2>
                <p class="mt-2 text-white">So many colors to know about and choose from</p>
                <a href="#" class="mt-4 inline-flex items-center text-blue-200 font-semibold hover:underline transition">
                    Become a gemstone expert
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>





@endsection