@extends('components.main')
@section('content')
{{-- BANNER-IMAGE --}}
<div class="flex justify-center mx-6">
    <img src="{{asset('asset/img/gemstone.png')}}" alt="">
</div>
{{-- Diamond Buying Guide --}}
<div class="bg-[#F6F6F6] w-full flex flex-col justify-center items-center p-6 md:p-10">
    <!-- Title Section -->
    <div class="text-2xl font-bold text-gray-800 mb-4 md:mb-6 text-center">
        Gemstone Guide
    </div>

    <!-- Content Section -->
    <div class="max-w-2xl text-gray-700 leading-relaxed text-center">
        Here’s your guide to Everything-Gemstones! With more than a rainbow of colors to choose from - you can go with your very own birthstone, or just pick your favourite colour too!
    </div>
</div>

{{-- Gems --}}


    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
        <!-- Garnet Card -->
        <div class="bg-white p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0 mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/garnet.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Garnet</h2>
                <p class="text-gray-600 mb-1">January</p>
                <p class="text-gray-700 italic mb-2">Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.</p>
                <p class="text-gray-600">
                    Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                </p>
            </div>
        </div>

        <!-- Amethyst Card -->
        <div class="bg-white  p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0  mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/amethyst.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Amethyst</h2>
                <p class="text-gray-600 mb-1">February</p>
                <p class="text-gray-700 italic mb-2">Amethyst is said to be associated with qualities of peace, courage and stability.</p>
                <p class="text-gray-600">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as the come, so be prepared to be transported to a soothing state of mind.
                </p>
            </div>
        </div>

         <!-- Aquamarine Card -->
         <div class="bg-white p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0 mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/aquamarine.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1 item-start">Aquamarine</h2>
                <p class="text-gray-600 mb-1 pl-4">March</p>
                <p class="text-gray-700 italic mb-2 pl-4">Aquamarine: a timeless symbol of youth, health and hope.</p>
                <p class="text-gray-600">
                    Sea, salt, sun and everything fun! These aqua-blue colored babies are a perfect ode to the ocean. So if you’re a total beach baby or if you just love the mesmerising hues of blue, go ahead and pick one.
                </p>
            </div>
        </div>

        <!--Diamond Card -->
        <div class="bg-white  p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0  mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/daimond-cart2.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Diamond</h2>
                <p class="text-gray-600 mb-1">Diamond</p>
                <p class="text-gray-700 italic mb-2">Considered as a paramount of gestures, it’s a symbol of eternal and endless love.</p>
                <p class="text-gray-600">
                    They say diamonds are a girl’s best friend. Well, they’re absolutely right. :) A diamond is the perfect gesture that there is, and honestly, who can say no to it? Wearing a diamond is also said to bring benefits such as balance, clarity and abundance. So go ahead, and give it a try.
                </p>
            </div>
        </div>

         <!-- Emerald Card -->
         <div class="bg-white p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0 mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/emerald.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Emerald
                </h2>
                <p class="text-gray-600 mb-1">May</p>
                <p class="text-gray-700 italic mb-2">Emerald, known as the gem of Venus, is considered to be a strong symbol of the bonds of love and rebirth.</p>
                <p class="text-gray-600">
                    Royal. Bold. Elegant. For all our Queens out there, there’s no other way to slay the royalty quotient than with a glorious Emerald. The deep hues of green will make you weak in the knees. 
                </p>
            </div>
        </div>

        <!-- Pearl Card -->
        <div class="bg-white  p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0  mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/amethyst.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Pearl</h2>
                <p class="text-gray-600 mb-1">June</p>
                <p class="text-gray-700 italic mb-2">Pearl is a symbol of purity and innocence.</p>
                <p class="text-gray-600">
                    Be it a pair of ripped denim, a blazer or a formal gown: Pearl is a one stop solution to give you that charming look you’ve been wanting. They’re sophisticated, classy and will be sure to make heads turn.
                </p>
            </div>
        </div>

         <!-- Ruby Card -->
         <div class="bg-white p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0 mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/garnet.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Ruby</h2>
                <p class="text-gray-600 mb-1">July</p>
                <p class="text-gray-700 italic mb-2">Ruby, the King of Gemstones, is said to represent love, courage and passion</p>
                <p class="text-gray-600">
                    The Ruby is said to be the reigning gemstone, and is said to bring an abundance of love. The deeper and more glorious the hue of the gemstone, the more valuable it is. Pick a gorgeous Ruby out, we promise you won’t regret it.
                </p>
            </div>
        </div>

        <!-- Peridot Card -->
        <div class="bg-white  p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0  mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/amethyst.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Amethyst</h2>
                <p class="text-gray-600 mb-1">February</p>
                <p class="text-gray-700 italic mb-2">Amethyst is said to be associated with qualities of peace, courage and stability.</p>
                <p class="text-gray-600">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as the come, so be prepared to be transported to a soothing state of mind.
                </p>
            </div>
        </div>

         <!-- Garnet Card -->
         <div class="bg-white p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0 mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/garnet.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Garnet</h2>
                <p class="text-gray-600 mb-1">January</p>
                <p class="text-gray-700 italic mb-2">Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.</p>
                <p class="text-gray-600">
                    Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                </p>
            </div>
        </div>

        <!-- Amethyst Card -->
        <div class="bg-white  p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0  mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/amethyst.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Amethyst</h2>
                <p class="text-gray-600 mb-1">February</p>
                <p class="text-gray-700 italic mb-2">Amethyst is said to be associated with qualities of peace, courage and stability.</p>
                <p class="text-gray-600">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as the come, so be prepared to be transported to a soothing state of mind.
                </p>
            </div>
        </div>

         <!-- Garnet Card -->
         <div class="bg-white p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0 mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/garnet.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Garnet</h2>
                <p class="text-gray-600 mb-1">January</p>
                <p class="text-gray-700 italic mb-2">Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.</p>
                <p class="text-gray-600">
                    Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                </p>
            </div>
        </div>

        <!-- Amethyst Card -->
        <div class="bg-white  p-6 flex flex-row items-center">
            <div class="w-24 h-24 flex-shrink-0  mr-6 flex items-center justify-center">
               <img src="{{asset('asset/img/amethyst.png')}}" alt="">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Amethyst</h2>
                <p class="text-gray-600 mb-1">February</p>
                <p class="text-gray-700 italic mb-2">Amethyst is said to be associated with qualities of peace, courage and stability.</p>
                <p class="text-gray-600">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as the come, so be prepared to be transported to a soothing state of mind.
                </p>
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