@extends('components.main')
@section('content')

<div class="flex flex-col sm:flex-row gap-4 w-full px-12 py-8">
    <!-- First Item -->
    <div class="relative overflow-hidden rounded-lg aspect-[3/2] group w-full sm:w-1/2">
        <img src="{{asset('asset/img/mj1.jpg')}}" alt="New Trends" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-60">
            
        </div>
    </div>
    <!-- Second Item -->
    <div class="relative overflow-hidden rounded-lg aspect-[3/2] group w-full sm:w-1/2">
        <img src="{{asset('asset/img/mj2.jpg')}}" alt="Affordable Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-60">
            <p class="text-white text-center font-semibold">
                Affordable<br>Designs Inside
            </p>
        </div>
    </div>
</div>


<div class="max-w-full mx-auto px-4 md:px-8"> 
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      
        <!-- Third Item (Square) -->
        <div class="relative overflow-hidden rounded-lg aspect-square group">
            <img src="/api/placeholder/300/300" alt="Top Category Picks" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-60">
                <p class="text-white text-center font-semibold">
                    Top Category Picks<br>(Earrings + Rings)
                </p>
            </div>
        </div>
        <!-- Fourth Item -->
        <div class="relative overflow-hidden rounded-lg aspect-square group">
            <img src="/api/placeholder/300/300" alt="Most Wishlisted Kids' Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-60">
                <p class="text-white text-center font-semibold">
                    Most Wishlisted<br>Kids' Designs
                </p>
            </div>
        </div>
        <!-- Fifth Item -->
        <div class="relative overflow-hidden rounded-lg aspect-square group">
            <img src="/api/placeholder/300/300" alt="Last-Minute Gifting" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-60">
                <p class="text-white text-center font-semibold">
                    Last-Minute<br>Gifting
                </p>
            </div>
        </div>
        <!-- Sixth Item -->
        <div class="relative overflow-hidden rounded-lg aspect-square group">
            <img src="/api/placeholder/300/300" alt="3D Printed Designs" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-60">
                <p class="text-white text-center font-semibold">
                    Our Signature<br>3D Printed Designs
                </p>
            </div>
        </div>
        <!-- Seventh Item -->
        <div class="relative overflow-hidden rounded-lg aspect-square group">
            <img src="/api/placeholder/300/300" alt="International Bestsellers" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition-opacity duration-300 group-hover:bg-opacity-60">
                <p class="text-white text-center font-semibold">
                    All-Time<br>International Bestsellers
                </p>
            </div>
        </div>
    </div>
</div>


@endsection