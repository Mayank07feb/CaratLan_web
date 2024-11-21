@extends('components.main')
@section('content')
    <div class="w-full h-full flex items-center justify-center mt-40 lg:mt-0">
        <img src="{{ asset('asset/img/harrry.jpg') }}" alt="Disney Collection"
             class="w-full h-full object-cover md:object-contain">
    </div>

    {{-- fjid --}}
    <div class="bg-[#021B31] text-white p-6 md:p-10 text-center lg:py-24">
        <p class="text-sm md:text-lg lg:text-xl font-medium leading-relaxed">
            IMAGE CAPTION <br>
            Inspired by the friendship of Disney’s Mickey & Friends, the magic of Disney Princess, the sweetness of Disney’s Winnie the Pooh, and the free spirit of Disney Frozen’s Elsa—all beautifully captured in gold & diamonds!
        </p>
    </div>
    

    {{-- grid --}}
    <div class="bg-[#021B31] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 p-8">
        <div>
            <img src="{{ asset('asset/img/Mickey-Friends.jpg') }}" alt="Mickey & Friends" class="w-full h-auto rounded-lg shadow-md">
        </div>
        <div>
            <img src="{{ asset('asset/img/Mickey-Friends.jpg') }}" alt="Mickey & Friends" class="w-full h-auto rounded-lg shadow-md">
        </div>
        <div>
            <img src="{{ asset('asset/img/Mickey-Friends.jpg') }}" alt="Mickey & Friends" class="w-full h-auto rounded-lg shadow-md">
        </div>
        <div>
            <img src="{{ asset('asset/img/Mickey-Friends.jpg') }}" alt="Mickey & Friends" class="w-full h-auto rounded-lg shadow-md">
        </div>
    </div>
    

    {{-- collection --}}
    <div class="bg-[#290A10] p-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>
            
            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>

            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>

            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>
            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>
            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>
            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>
            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>
            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>
            <!-- Product Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>

            <!-- Duplicate each product item as needed -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('asset/videos/harrypoter1.png') }}" alt="Disney Earrings" class="w-full h-auto rounded-lg shadow-md">
                <p class="text-white text-center p-2">Disney's Mickey Mouse Inspired Textured Diamond Earrings</p>
            </div>
    
            <!-- Repeat for all items -->
        </div>
    
        <!-- Explore All Button -->
        <div class="flex justify-center mt-6">
            <a href="#" class="bg-transparent border border-white text-white rounded-lg px-6 py-3 hover:bg-white hover:text-[#2C1043] transition duration-300">
                <h1 class="text-lg font-semibold">Explore All</h1>
            </a>
        </div>
    </div>
    
    {{-- disney video --}}
    <div class="flex justify-center items-center">
        <video src="{{ asset('asset/videos/poter.mp4') }}" 
               class="w-full h-auto max-w-full rounded-lg shadow-lg"
               controls 
               autoplay 
               loop 
               muted
               playsinline>
            Your browser does not support the video tag.
        </video>
    </div>
    
    @endsection
