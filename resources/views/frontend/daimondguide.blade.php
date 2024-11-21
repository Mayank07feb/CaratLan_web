@extends('components.main')
@section('content')
{{-- BANNER-IMAGE --}}
<div class="flex justify-center mx-6 mt-44 lg:mt-0">
    <img src="{{asset('asset/img/daimond-cart.png')}}" alt="">
</div>
{{-- Diamond Buying Guide --}}
<div class="bg-[#F6F6F6] w-full flex flex-col justify-center items-center p-6 md:p-10">
    <!-- Title Section -->
    <div class="text-2xl font-bold text-gray-800 mb-4 md:mb-6 text-center">
        Diamond Buying Guide
    </div>

    <!-- Content Section -->
    <div class="max-w-2xl text-gray-700 leading-relaxed text-center">
        We know you’re here because you only want the best, and we would love to help you find the perfect diamond for you.
        Buying diamonds can be a little overwhelming, but that doesn’t mean that you should ever settle or stress! So just sit back with a cup of coffee and let us walk you through everything you need to know before you buy that sparkling diamond!
    </div>
</div>

{{-- Back to the Basics - The 4 Cs of a Diamond --}}
<div class="max-w-6xl mx-auto p-8">
    <h1 class="text-3xl text-center font-semibold text-indigo-900 mb-12">Back to the Basics - The 4 Cs of a Diamond</h1>
    
    <div class="grid md:grid-cols-2 gap-8 items-start">
        <!-- Left Content -->
        <div class="space-y-6">
            <h2 class="text-2xl font-semibold text-indigo-900">1. Cut:</h2>
            
            <p class="text-gray-800 leading-relaxed">
                We believe the cut is the most important aspect of choosing a diamond. It's basically 
                what determines the proportion, symmetry and polish of a diamond. The right cut will 
                enhance the sparke and the scintillation of the diamond. The better the cut, the more 
                likely your diamond is to sparkle bright and look gorgeous!
            </p>

            <div class="mt-6">
                <p class="text-purple-600 font-semibold mb-2 text-sm">CaratLane Hint:</p>
                <p class="text-gray-800 text-xs">
                    Invest in the cut. It's the ultimate diamond hack (you'll not find it in the books). A 
                    beautifully cut diamond can make the color and clarity appear better than they are.
                </p>
            </div>
        </div>

        <!-- Right Content -->
        <div class="space-y-6">
            <div class="flex justify-center gap-8 mb-8">
                <img src="{{asset('asset/img/cart-d-guide.jpeg')}}" alt="Diamond cut diagram" class="w-48 object-contain"/>
              
            </div>

            <div class="space-y-4">
                <div class="relative">
                    <div class="flex justify-between text-gray-700 mb-2 text-xs">
                        <span>Excellent</span>
                        <span>Very Good</span>
                        <span>Good</span>
                        <span>Fair</span>
                        <span>Poor</span>
                    </div>
                    <div class="h-2 bg-gray-100 rounded-full">
                        <div class="w-3/4 h-full bg-purple-400 rounded-full"></div>
                    </div>
                </div>

                <div class="bg-purple-50 p-4 rounded-lg">
                    <p class="text-purple-600 text-xs">Fair - Fair</p>
                </div>

                <div class="text-purple-600 text-xs">
                    CaratLane Recommended Cut - Good
                </div>
            </div>
        </div>
    </div>
    {{-- clartiy --}}
    <div class="grid md:grid-cols-2 gap-8 items-start">
        <!-- Left Content -->
        <div class="space-y-6">
            <h2 class="text-2xl font-semibold text-indigo-900">2. Clarity</h2>
            
            <p class="text-gray-800 leading-relaxed">
                When light passes through a diamond, it bounces back, making the diamond sparkle! Some diamonds have imperfections in the form of spots and blemishes. The more the imperfections, the more difficult it is for light to pass through, thereby reducing the sparkle. If you’re lost, here’s all you need to remember: Lesser imperfection and inclusions = Better clarity
            </p>

            <div class="mt-6">
                <p class="text-purple-600 font-semibold mb-2 text-sm">CaratLane Hint:</p>
                <p class="text-gray-800 text-xs">
                    If you’re buying a diamond that’s under a carat, don’t obsess over the spots or blemishes because they aren’t really visible to an untrained eye. It’s better to invest in the cut and sparkle on!
                </p>
            </div>
        </div>

        <!-- Right Content -->
        <div class="space-y-6">
            <div class="flex justify-center gap-8 mb-8">
                <img src="{{asset('asset/img/cart-clartiy.png')}}" alt="Diamond cut diagram" class="w-48 object-contain"/>
              
            </div>

            <div class="space-y-4">
                <div class="relative">
                    <div class="flex justify-between text-gray-700 mb-2 text-xs">
                        <span>
                            FL
                            </span>
                        <span>IF
                        </span>
                        <span>VVS1/VVS2
                        </span>
                        <span>VS1/VS2
                            S1/S2
                            </span>
                        <span>I1/I2/I3
                        </span>
                    </div>
                    <div class="h-2 bg-gray-100 rounded-full">
                        <div class="w-3/4 h-full bg-purple-400 rounded-full"></div>
                    </div>
                </div>

                <div class="bg-purple-50 p-4 rounded-lg">
                    <p class="text-purple-600 text-xs">Fair - Fair</p>
                </div>

                <div class="text-purple-600 text-xs">
                    CaratLane Recommended Cut - Good
                </div>
            </div>
        </div>
    </div>

    {{-- color --}}
    <div class="grid md:grid-cols-2 gap-8 items-start">
        <!-- Left Content -->
        <div class="space-y-6">
            <h2 class="text-2xl font-semibold text-indigo-900">3. Colour</h2>
            
            <p class="text-gray-800 leading-relaxed">
                Ironically, the best color for a diamond would be ‘colorless’. The colors range from D (colorless) and go all the way to Z (light yellow). To be honest, the colour difference in diamonds within a colour family is quite subtle to an untrained eye. Nevertheless, they do create a difference in the price and quality of the diamond. Bottom line is, colorless diamonds are the most precious!

            </p>

            <div class="mt-6">
                <p class="text-purple-600 font-semibold mb-2 text-sm">CaratLane Hint:</p>
                <p class="text-gray-800 text-xs">
                    As diamond size increases, colour becomes more noticeable. This is especially important to keep in mind if you are purchasing a diamond of two carats or greater. If you pick a slightly yellow colored diamond, you can pair it with a white gold or platinum band. The white gold will complement the yellow hue of your diamond, and they won’t clash with each other!

                </p>
            </div>
        </div>

        <!-- Right Content -->
        <div class="space-y-6">
            <div class="flex justify-center gap-8 mb-8">
                <img src="{{asset('asset/img/cart-collor.jpeg')}}" alt="Diamond cut diagram" class="w-48 object-contain"/>
              
            </div>

            <div class="space-y-4">
                <div class="relative">
                    <div class="flex justify-between text-gray-700 mb-2 text-xs">
                        <span>
                            D
                            </span>
                        <span>E
                        </span>
                        <span>F
                        </span>
                        <span>G-J
                            </span>
                        <span>K-M
                        </span>
                    </div>
                    <div class="h-2 bg-gray-100 rounded-full">
                        <div class="w-3/4 h-full bg-purple-400 rounded-full"></div>
                    </div>
                </div>

                <div class="bg-purple-50 p-4 rounded-lg">
                    <p class="text-purple-600 text-xs">Colorless</p>
                </div>

                <div class="text-purple-600 text-xs">
                    Colorless
                </div>
            </div>
        </div>
    </div>
    {{-- CARAT --}}
    <div class="grid md:grid-cols-2 gap-8 items-start">
        <!-- Left Content -->
        <div class="space-y-6">
            <h2 class="text-2xl font-semibold text-indigo-900">4. Carat</h2>
            
            <p class="text-gray-800 leading-relaxed">
                A carat (not karat or worse, carrot) is measured based on the weight of the diamond. Two diamonds of equal carat will have different prices, depending on the other 3 Cs you go with. It's quite simple, really. Your ideal carat depends on: How big you want your stone and obviously, your budget. (Can insert image of stone sizes. For ex:)
            </p>

            <div class="mt-6">
                <p class="text-purple-600 font-semibold mb-2 text-sm">CaratLane Hint:</p>
                <p class="text-gray-800 text-xs">
                    Save big bucks by picking a 0.90 carat over a 1 carat diamond. Thank us later :D
                </p>
            </div>
        </div>

        <!-- Right Content -->
        <div class="space-y-6">
            <div class="flex justify-center gap-8 mb-8">
                <img src="{{asset('asset/img/carat.jpeg')}}" alt="Diamond cut diagram" class="w-48 object-contain"/>
              
            </div>

            <div class="space-y-4">
                <div class="relative">
                    <div class="flex justify-between text-gray-700 mb-2 text-xs">
                        <span>
                            D
                            </span>
                        <span>E
                        </span>
                        <span>F
                        </span>
                        <span>G-J
                            </span>
                        <span>K-M
                        </span>
                    </div>
                    <div class="h-2 bg-gray-100 rounded-full">
                        <div class="w-3/4 h-full bg-purple-400 rounded-full"></div>
                    </div>
                </div>

                <div class="bg-purple-50 p-4 rounded-lg">
                    <p class="text-purple-600 text-xs">Colorless</p>
                </div>

                <div class="text-purple-600 text-xs">
                    Colorless
                </div>
            </div>
        </div>
    </div>
</div>

{{-- DAIMOND SHA[ES] --}}
<div class="w-full bg-white p-6">
    <!-- Section Title -->
    <div class="text-2xl font-bold text-gray-800 mb-8 text-center">
        Shop by Diamond Shapes
    </div>

    <!-- Shapes Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-1 justify-items-center">
        <!-- Shape Item -->
        <div class="flex flex-col items-center">
           <a href="{{route('selectshape')}}"> <img src="{{asset('asset/img/shape1.png')}}" alt="Round Diamond" class="w-24 h-24 object-cover mb-2"></a>
            <p class="text-gray-700 text-sm font-medium capitalize">Round</p>
        </div>

        <!-- Repeat the Shape Item for other shapes -->
        <div class="flex flex-col items-center">
            <a href="{{route('selectshape')}}"><img src="{{asset('asset/img/shape2.png')}}" alt="Round Diamond" class="w-24 h-24 object-cover mb-2"></a>
            <p class="text-gray-700 text-sm font-medium capitalize">Pear</p>
        </div>

        <div class="flex flex-col items-center">
            <a href="{{route('selectshape')}}"><img src="{{asset('asset/img/shap3.png')}}" alt="Round Diamond" class="w-24 h-24 object-cover mb-2"></a>
            <p class="text-gray-700 text-sm font-medium capitalize">Heart</p>
        </div>

        <div class="flex flex-col items-center">
            <a href="{{route('selectshape')}}"><img src="{{asset('asset/img/shape4.png')}}" alt="Round Diamond" class="w-24 h-24 object-cover mb-2"></a>
            <p class="text-gray-700 text-sm font-medium capitalize">Princess</p>
        </div>

        <div class="flex flex-col items-center">
            <a href="{{route('selectshape')}}"><img src="{{asset('asset/img/shape5.png')}}" alt="Round Diamond" class="w-24 h-24 object-cover mb-2"></a>
            <p class="text-gray-700 text-sm font-medium capitalize">Oval</p>
        </div>

        <div class="flex flex-col items-center">
            <a href="{{route('selectshape')}}"><img src="{{asset('asset/img/shape6.png')}}" alt="Round Diamond" class="w-24 h-24 object-cover mb-2"></a>
            <p class="text-gray-700 text-sm font-medium capitalize">Cushion</p>
        </div>

        <div class="flex flex-col items-center">
            <a href="{{route('selectshape')}}"><img src="{{asset('asset/img/shape7.png')}}" alt="Round Diamond" class="w-24 h-24 object-cover mb-2"></a>
            <p class="text-gray-700 text-sm font-medium capitalize">Emerald</p>
        </div>
    </div>
</div>

{{--  --}}
<div class="max-w-6xl mx-auto p-8">
    <!-- Shape and Grading Grid -->
    <div class="grid md:grid-cols-2 gap-12 mb-16">
        <!-- Shape Section -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Shape</h2>
            <p class="text-gray-700 leading-relaxed">
                Shape refers to the overall outline of the diamond when viewed from the top
                and that determines the price as well. The most expensive shape is the round
                diamond. That's because they are best at reflecting light and shine like
                there's no tomorrow! Although the choice of the shape mostly depends on
                your personal style, a princess, cushion or heart cut is what we would
                recommend if your diamond is bigger than 1 carat.
            </p>
        </div>

        <!-- Grading Section -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Diamond Grading</h2>
            <ul class="space-y-4 text-gray-700">
                <li class="flex items-start">
                    <span class="text-gray-400 mr-2">•</span>
                    <p>Say Hello to Halo! It makes the centre stone look bigger and works as a
                    protective shield as well Go fancy with cushion and emerald cuts.</p>
                </li>
                <li class="flex items-start">
                    <span class="text-gray-400 mr-2">•</span>
                    <p>They're usually priced lower and make 'em eyes pop, too!</p>
                </li>
                <li class="flex items-start">
                    <span class="text-gray-400 mr-2">•</span>
                    <p>Pick a diamond with an 'excellent' or 'ideal' cut and nothing less than that
                    Although the round is the most expensive cut, it hides the imperfections and
                    the yellowish colour in the best way. It's like a reallllly good concealer ;)</p>
                </li>
            </ul>
        </div>
    </div>

    <!-- Certifications Section -->
    <div class="text-center max-w-4xl mx-auto">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">3. Certifications</h2>
        <p class="text-gray-700 leading-relaxed">
            The Certification is basically your diamond's birth certificate. All our solitaire diamonds are meticulously analyzed and graded by the 
            Gemological Institute of America (GIA), Hoge Raadvoor Diamant (HRD) & the IGI, the most trusted (and known) labs in the world.
        </p>
    </div>
</div>

{{-- image --}}
<div class="w-full flex justify-center space-x-4">
    <img src="{{ asset('asset/img/GIA.png') }}" alt="GIA Image" class="h-auto max-h-40">
    <img src="{{ asset('asset/img/GLA.png') }}" alt="GLA Image" class="h-auto max-h-40">
</div>


<!-- Main Content -->
<div class="max-w-6xl mx-auto p-8">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <!-- Left Image -->
        <div>
            <img 
                src="{{asset('asset/img/your daimond.png')}}" 
                alt="Cleaning diamond ring" 
                class="w-full rounded-lg shadow-md"
            />
        </div>

        <!-- Right Content -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">How to Care for Your Diamond:</h2>
            <ul class="space-y-6">
                <li class="flex items-start">
                    <span class="text-purple-900 mr-2">•</span>
                    <p class="text-gray-700">Once every week, clean your diamond jewellery in lukewarm soap water and rub it down gently with a brush, to remove the dirt and grime from the surface and ensure a long lasting shine.</p>
                </li>
                <li class="flex items-start">
                    <span class="text-purple-900 mr-2">•</span>
                    <p class="text-gray-700">Remove your diamond jewellery when you go swimming or while doing household chores, so that the grime doesn't make your jewellery look dull.</p>
                </li>
                <li class="flex items-start">
                    <span class="text-purple-900 mr-2">•</span>
                    <p class="text-gray-700">Keep your jewellery in separate boxes to reduce the chances of scratches on the metal.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection