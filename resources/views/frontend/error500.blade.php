@extends('components.main')
@section('content')

    <div class="max-w-full w-full flex flex-col md:flex-row items-center gap-8 lg:mt-24">
        <!-- Illustration container -->
        <div class="w-full md:w-1/2">
         <img src="{{asset('asset/videos/500.png')}}" alt="">
        </div>

        <!-- Text content -->
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Oh Snap.</h1>
            <h2 class="text-3xl font-bold text-gray-800 mb-6">We are Stuck!</h2>
            <p class="text-gray-600 mb-2">Internal Server Error 500</p>
            <p class="text-gray-500 mb-8">If you face this again & again click on Help</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <button class="px-6 py-2 bg-pink-100 text-pink-700 rounded-md hover:bg-pink-200 transition-colors">
                    Try Again
                </button>
                <button class="px-6 py-2 bg-pink-100 text-pink-700 rounded-md hover:bg-pink-200 transition-colors">
                    Go to Previous Page
                </button>
            </div>
        </div>
    </div>

@endsection