@extends('components.main')
@section('content')

<div class="flex flex-col sm:flex-row lg:gap-12 w-full lg:px-28 lg:py-8 px-4 py-2 gap-2">
    <!-- First Item -->
    <div class="relative overflow-hidden rounded-3xl aspect-[3/2] group w-full sm:w-1/2">
        <img src="{{asset('asset/img/mj1.jpg')}}" alt="New Trends" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-20">
        </div>
    </div>
    <!-- Second Item -->
    <div class="relative overflow-hidden rounded-3xl aspect-[3/2] group w-full sm:w-1/2">
        <img src="{{asset('asset/img/mj2.jpg')}}" alt="Affordable Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-20">
            <p class="text-white text-center font-semibold">
                Affordable<br>Designs Inside
            </p>
        </div>
    </div>
</div>

<div class="max-w-full mx-auto px-4 md:px-8 lg:px-24 lg:py-8"> 
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
      
        <!-- Third Item (Square) -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/mj3.jpg')}}" alt="Top Category Picks" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-20">
            </div>
        </div>

        <!-- Fourth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/mj4.jpg')}}" alt="Most Wishlisted Kids' Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-20">
            </div>
        </div>

        <!-- Fifth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/mj5.jpg')}}" alt="Last-Minute Gifting" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-20">
            </div>
        </div>

        <!-- Sixth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/mj6.jpg')}}" alt="3D Printed Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-20">
            </div>
        </div>

        <!-- Seventh Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/mj7.jpg')}}" alt="International Bestsellers" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-20">
            </div>
        </div>

    </div>
</div>

@endsection
