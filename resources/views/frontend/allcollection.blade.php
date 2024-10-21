@extends('components.main')
@section('content')

<div class="flex flex-col sm:flex-row lg:gap-12 w-full lg:px-28 lg:py-8 px-4 py-2 gap-2">
    <!-- First Item -->
    <div class="relative overflow-hidden rounded-3xl aspect-[3/2] group w-full sm:w-1/2">
        <img src="{{asset('asset/img/all1.jpg')}}" alt="New Trends" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
        </div>
    </div>
    <!-- Second Item -->
    <div class="relative overflow-hidden rounded-3xl aspect-[3/2] group w-full sm:w-1/2">
        <img src="{{asset('asset/img/all2.jpg')}}" alt="Affordable Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
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
            <img src="{{asset('asset/img/all3.jpg')}}" alt="Top Category Picks" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Fourth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all4.jpg')}}" alt="Most Wishlisted Kids' Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Fifth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all5.jpg')}}" alt="Last-Minute Gifting" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Sixth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all6.jpg')}}" alt="3D Printed Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Seventh Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all7.jpg')}}" alt="International Bestsellers" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>


          <!-- Third Item (Square) -->
          <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all8.jpg')}}" alt="Top Category Picks" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Fourth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all9.jpg')}}" alt="Most Wishlisted Kids' Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>


          <!-- Third Item (Square) -->
          <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all10.jpg')}}" alt="Top Category Picks" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Fourth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all11.jpg')}}" alt="Most Wishlisted Kids' Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>


        <!-- Third Item (Square) -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all12.jpg')}}" alt="Top Category Picks" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Fourth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all13.jpg')}}" alt="Most Wishlisted Kids' Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Fifth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all14.jpg')}}" alt="Last-Minute Gifting" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Sixth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all15.jpg')}}" alt="3D Printed Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Seventh Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all16.jpg')}}" alt="International Bestsellers" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>


          <!-- Third Item (Square) -->
          <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all17.jpg')}}" alt="Top Category Picks" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Fourth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all18.jpg')}}" alt="Most Wishlisted Kids' Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>


          <!-- Third Item (Square) -->
          <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all19.jpg')}}" alt="Top Category Picks" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>

        <!-- Fourth Item -->
        <div class="relative overflow-hidden rounded-3xl aspect-square group">
            <img src="{{asset('asset/img/all20.jpg')}}" alt="Most Wishlisted Kids' Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-10 flex items-center justify-center transition-opacity duration-300">
            </div>
        </div>


    </div>
</div>

@endsection
