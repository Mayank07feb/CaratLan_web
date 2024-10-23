@extends('components.main')

@section('content')

<div class="max-w-7xl mx-auto">
    <div class="carousel" role="region" aria-label="Featured Highlights">
        <div class="carousel-cell w-full p-2 sm:w-1/3">
            <img src="/api/placeholder/400/300" alt="Innovative Leadership" class="w-full h-auto rounded-lg shadow-md mb-4">
            <div class="bg-white p-4 rounded-lg shadow-md transition-transform duration-300 hover:-translate-y-1">
                <div class="text-lg font-bold mb-2">Innovative Leadership in Technology</div>
                <div class="text-gray-700 mb-1">John Doe, CEO of Tech Innovators</div>
                <div class="text-gray-500 italic">Tech Innovators</div>
            </div>
        </div>
        <div class="carousel-cell w-full p-2 sm:w-1/3">
            <img src="/api/placeholder/400/300" alt="Next-Gen Solutions" class="w-full h-auto rounded-lg shadow-md mb-4">
            <div class="bg-white p-4 rounded-lg shadow-md transition-transform duration-300 hover:-translate-y-1">
                <div class="text-lg font-bold mb-2">Next-Gen Solutions for Tomorrow</div>
                <div class="text-gray-700 mb-1">Jane Smith, CTO of Future Tech</div>
                <div class="text-gray-500 italic">Future Tech</div>
            </div>
        </div>
        <div class="carousel-cell w-full p-2 sm:w-1/3">
            <img src="/api/placeholder/400/300" alt="Sustainable Innovations" class="w-full h-auto rounded-lg shadow-md mb-4">
            <div class="bg-white p-4 rounded-lg shadow-md transition-transform duration-300 hover:-translate-y-1">
                <div class="text-lg font-bold mb-2">Sustainable Innovations in Business</div>
                <div class="text-gray-700 mb-1">Alex Johnson, Founder of Green Solutions</div>
                <div class="text-gray-500 italic">Green Solutions</div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const flkty = new Flickity('.carousel', {
            cellAlign: 'left',
            contain: true,
            wrapAround: true,
            autoPlay: 5000,
            pageDots: true,
            prevNextButtons: true,
            adaptiveHeight: true,
            groupCells: true // Ensures responsive behavior
        });
    });
</script>

@endsection
