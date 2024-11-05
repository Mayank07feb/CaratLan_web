@extends('frontend.profile.layout')

@section('profileContent')
    <!-- Main Content -->
    <main class="flex items-center justify-center min-h-screen w-full bg-white">

        <!-- Centered Content -->
        <div class="text-center w-full">
            <!-- Icon -->
            <div class="flex flex-col justify-center items-center mb-8">
                <!-- Add an SVG or image tag for the icon, adjust the styling as needed -->
                <svg class="w-24 h-24 text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.75C7.19 4.75 3.25 8.69 3.25 13.5S7.19 22.25 12 22.25 20.75 18.31 20.75 13.5 16.81 4.75 12 4.75z" />
                </svg>
                <p class="mt-4 text-lg text-gray-600">No Active Orders</p>
            </div>

            <!-- Button -->
            <button class="px-12 py-3 bg-gradient-to-r from-purple-400 to-pink-400 text-white font-semibold rounded-lg shadow-md hover:from-purple-500 hover:to-pink-500 transition duration-300 focus:outline-none focus:ring-2 focus:ring-purple-300">
                Continue Shopping
            </button>
        </div>

    </main>
@endsection
