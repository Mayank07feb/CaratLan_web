@extends('frontend.profile.layout')
@section('profileContent')
    <!-- Main Content -->
    <main class="flex-1 bg-white flex flex-col"> 
        <!-- Order Content -->
        <div class="p-4">
            <div class="border rounded-lg overflow-hidden flex w-96">
                <button class="py-2 text-sm font-base text-purple-600 bg-white focus:outline-none w-1/2">
                    MY ORDERS
                </button>
                <button class="py-2 text-sm font-base text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none w-1/2">
                    CANCELLED ORDERS
                </button>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center flex-1 py-20 text-center rounded-lg shadow">
            <img src="{{ asset('asset/img/profile-section.png') }}" alt="No Orders" class="w-24 h-24 md:w-64 md:h-28 mb-4" />
            <p class="text-gray-800 text-lg font-semibold">No Active Orders</p>
            <button class="mt-4 px-6 py-2 text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg font-semibold">
                Continue Shopping
            </button>
        </div>

    </main>
@endsection
