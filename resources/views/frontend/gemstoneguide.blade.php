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

<div class="max-w-6xl mx-auto">
        <!-- Birthstones Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Garnet Section -->
            <div class="bg-white overflow-hidden transform transition-transform hover:scale-105">
                <div class="p-8">
                    <div class="flex items-start space-x-6">
                        <!-- Gemstone Image -->
                        <div class="flex-shrink-0">
                            <div class="w-32 h-32 flex items-center justify-center transform transition-transform hover:rotate-45">
                                <div class="w-28 h-28  flex items-center justify-center">
                                    <img src="{{asset('asset/img/gem1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="flex-1">
                            <h2 class="text-4xl font-bold text-gray-800 mb-2">Garnet</h2>
                            <p class="text-xl text-gray-600 mb-4">January</p>
                            <p class="text-gray-500 italic mb-6">
                                Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.
                            </p>
                        </div>
                    </div>
                    
                    <p class="text-gray-700 mt-6 leading-relaxed">
                        Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                    </p>
                </div>
            </div>

            <!-- Amethyst Section -->
            <div class="bg-white  overflow-hidden transform transition-transform hover:scale-105">
                <div class="p-8">
                    <div class="flex items-start space-x-6">
                        <!-- Gemstone Image -->
                        <div class="flex-shrink-0">
                            <div class="w-32 h-32  flex items-center justify-center transform transition-transform hover:rotate-45">
                                <div class="w-28 h-28  flex items-center justify-center">
                                   <img src="{{asset('asset/img/gem2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="flex-1">
                            <h2 class="text-4xl font-bold text-gray-800 mb-2">Amethyst</h2>
                            <p class="text-xl text-gray-600 mb-4">February</p>
                            <p class="text-gray-500 italic mb-6">
                                Amethyst is said to be associated with qualities of peace, courage and stability.
                            </p>
                        </div>
                    </div>
                    
                    <p class="text-gray-700 mt-6 leading-relaxed">
                        The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as they come, so be prepared to be transported to a soothing state of mind.
                    </p>
                </div>
            </div>
        </div>
</div>
<div class="max-w-6xl mx-auto">
    <!-- Birthstones Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Garnet Section -->
        <div class="bg-white overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                                <img src="{{asset('asset/img/gem1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Garnet</h2>
                        <p class="text-xl text-gray-600 mb-4">January</p>
                        <p class="text-gray-500 italic mb-6">
                            Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                </p>
            </div>
        </div>

        <!-- Amethyst Section -->
        <div class="bg-white  overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32  flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                               <img src="{{asset('asset/img/gem2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Amethyst</h2>
                        <p class="text-xl text-gray-600 mb-4">February</p>
                        <p class="text-gray-500 italic mb-6">
                            Amethyst is said to be associated with qualities of peace, courage and stability.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as they come, so be prepared to be transported to a soothing state of mind.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="max-w-6xl mx-auto">
    <!-- Birthstones Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Garnet Section -->
        <div class="bg-white overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                                <img src="{{asset('asset/img/gem1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Garnet</h2>
                        <p class="text-xl text-gray-600 mb-4">January</p>
                        <p class="text-gray-500 italic mb-6">
                            Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                </p>
            </div>
        </div>

        <!-- Amethyst Section -->
        <div class="bg-white  overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32  flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                               <img src="{{asset('asset/img/gem2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Amethyst</h2>
                        <p class="text-xl text-gray-600 mb-4">February</p>
                        <p class="text-gray-500 italic mb-6">
                            Amethyst is said to be associated with qualities of peace, courage and stability.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as they come, so be prepared to be transported to a soothing state of mind.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto">
    <!-- Birthstones Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Garnet Section -->
        <div class="bg-white overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                                <img src="{{asset('asset/img/gem1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Garnet</h2>
                        <p class="text-xl text-gray-600 mb-4">January</p>
                        <p class="text-gray-500 italic mb-6">
                            Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                </p>
            </div>
        </div>

        <!-- Amethyst Section -->
        <div class="bg-white  overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32  flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                               <img src="{{asset('asset/img/gem2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Amethyst</h2>
                        <p class="text-xl text-gray-600 mb-4">February</p>
                        <p class="text-gray-500 italic mb-6">
                            Amethyst is said to be associated with qualities of peace, courage and stability.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as they come, so be prepared to be transported to a soothing state of mind.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="max-w-6xl mx-auto">
    <!-- Birthstones Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Garnet Section -->
        <div class="bg-white overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                                <img src="{{asset('asset/img/gem1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Garnet</h2>
                        <p class="text-xl text-gray-600 mb-4">January</p>
                        <p class="text-gray-500 italic mb-6">
                            Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                </p>
            </div>
        </div>

        <!-- Amethyst Section -->
        <div class="bg-white  overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32  flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                               <img src="{{asset('asset/img/gem2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Amethyst</h2>
                        <p class="text-xl text-gray-600 mb-4">February</p>
                        <p class="text-gray-500 italic mb-6">
                            Amethyst is said to be associated with qualities of peace, courage and stability.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as they come, so be prepared to be transported to a soothing state of mind.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="max-w-6xl mx-auto">
    <!-- Birthstones Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Garnet Section -->
        <div class="bg-white overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                                <img src="{{asset('asset/img/gem1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Garnet</h2>
                        <p class="text-xl text-gray-600 mb-4">January</p>
                        <p class="text-gray-500 italic mb-6">
                            Garnet's virtues have been long believed to include passion, friendship, success, loyalty and faith.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    Bold oranges, royal greens and hues of purples and pinks - are some of the hues of a Garnet. If you're a January baby, you're in for a treat! There are so many varieties to pick from, so go ahead uplift your spirit with your favorite Garnet gemstone.
                </p>
            </div>
        </div>

        <!-- Amethyst Section -->
        <div class="bg-white  overflow-hidden transform transition-transform hover:scale-105">
            <div class="p-8">
                <div class="flex items-start space-x-6">
                    <!-- Gemstone Image -->
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32  flex items-center justify-center transform transition-transform hover:rotate-45">
                            <div class="w-28 h-28  flex items-center justify-center">
                               <img src="{{asset('asset/img/gem2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1">
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Amethyst</h2>
                        <p class="text-xl text-gray-600 mb-4">February</p>
                        <p class="text-gray-500 italic mb-6">
                            Amethyst is said to be associated with qualities of peace, courage and stability.
                        </p>
                    </div>
                </div>
                
                <p class="text-gray-700 mt-6 leading-relaxed">
                    The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as they come, so be prepared to be transported to a soothing state of mind.
                </p>
            </div>
        </div>
    </div>
</div>

    <div class="max-w-6xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Image Section -->
                <div class="p-8 flex items-center justify-center bg-gray-50">
                    <div class="relative w-full max-w-md">
                        <div class="aspect-w-16 aspect-h-12 rounded-lg overflow-hidden shadow-lg">
                            <img src="{{asset('asset/img/j-guide.png')}}" alt="Cleaning jewelry with brush" class="object-cover w-full h-full">
                        </div>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="p-8">
                    <h2 class="text-3xl font-bold text-purple-900 mb-6">How to Care for Your Gems:</h2>
                    
                    <div class="space-y-6">
                        <!-- Care Instructions -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 mt-1">
                                <div class="w-2 h-2 bg-purple-600 rounded-full transform rotate-45"></div>
                            </div>
                            <p class="text-gray-700">Clean your gemstone jewellery with some warm water and gentle soap.</p>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 mt-1">
                                <div class="w-2 h-2 bg-purple-600 rounded-full transform rotate-45"></div>
                            </div>
                            <p class="text-gray-700 font-medium">Do not soak your pearls, corals or turquoise jewellery in water. We repeat, don't do it.</p>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 mt-1">
                                <div class="w-2 h-2 bg-purple-600 rounded-full transform rotate-45"></div>
                            </div>
                            <p class="text-gray-700">Humidity and moisture? Trust us, they are the enemy.</p>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 mt-1">
                                <div class="w-2 h-2 bg-purple-600 rounded-full transform rotate-45"></div>
                            </div>
                            <p class="text-gray-700">Don't wear your jewellery while swimming, in the shower or at the gym.</p>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 mt-1">
                                <div class="w-2 h-2 bg-purple-600 rounded-full transform rotate-45"></div>
                            </div>
                            <p class="text-gray-700">Your gemstones aren't perfume-friendly or lotion-friendly. So apply them first, and wear your jewellery after they settle into your skin.</p>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 mt-1">
                                <div class="w-2 h-2 bg-purple-600 rounded-full transform rotate-45"></div>
                            </div>
                            <p class="text-gray-700">Got yourself a pretty string of pearls? Don't forget to get them restrung every other year or so.</p>
                        </div>
                    </div>

                    <!-- Additional Tips Box -->
                    <div class="mt-8 p-4 bg-purple-50 rounded-lg border border-purple-100">
                        <p class="text-sm text-purple-800">
                            <span class="font-semibold">Pro Tip:</span> Store your jewelry pieces separately to prevent scratches and keep them in a cool, dry place.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection