@extends('components.main')

@section('content')
  
    <style>
        .carousel-cell {
            width: 100%;
            padding: 0 20px;
        }

        @media (min-width: 768px) {
            .carousel-cell {
                width: 33.333%;
            }
        }

        .flickity-button {
            background: #fff;
        }

        .flickity-button:hover {
            background: #f0f0f0;
        }

        .flickity-prev-next-button {
            width: 40px;
            height: 40px;
        }

        .flickity-page-dots {
            bottom: -40px;
        }
    </style>

    <div class="max-w-7xl mx-auto">
        <div class="carousel">
            <div class="carousel-cell">
                <img src="/api/placeholder/400/300" alt="New CEO Tanishq" class="w-full h-auto rounded-lg shadow-md mb-4">
                <div class="content bg-white p-4 rounded-lg shadow-md transition-transform duration-300 hover:translate-y-[-5px]">
                    <div class="header text-lg font-bold mb-2">CaratLane completes Tanishq from a technology, new age and talent perspective.</div>
                    <div class="para text-gray-700 mb-1">Bhaskar Bhat, Ex-Managing Director, Titan Company Ltd</div>
                    <div class="text text-gray-500 italic">Titan</div>
                </div>
            </div>
            <div class="carousel-cell">
                <img src="/api/placeholder/400/300" alt="Another Image" class="w-full h-auto rounded-lg shadow-md mb-4">
                <div class="content bg-white p-4 rounded-lg shadow-md transition-transform duration-300 hover:translate-y-[-5px]">
                    <div class="header text-lg font-bold mb-2">Slide Title 2</div>
                    <div class="para text-gray-700 mb-1">Description for slide 2.</div>
                    <div class="text text-gray-500 italic">Company 2</div>
                </div>
            </div>
            <div class="carousel-cell">
                <img src="/api/placeholder/400/300" alt="Yet Another Image" class="w-full h-auto rounded-lg shadow-md mb-4">
                <div class="content bg-white p-4 rounded-lg shadow-md transition-transform duration-300 hover:translate-y-[-5px]">
                    <div class="header text-lg font-bold mb-2">Slide Title 3</div>
                    <div class="para text-gray-700 mb-1">Description for slide 3.</div>
                    <div class="text text-gray-500 italic">Company 3</div>
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
