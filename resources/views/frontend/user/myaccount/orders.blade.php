@extends('frontend.user.layout')
@section('profileContent')
    <!-- Main Content -->
    <main class="flex-1 bg-white flex flex-col">
        <!-- Order Content -->
        <div class="p-4">
            <div class="border rounded-lg overflow-hidden flex w-96">
                <button id="myorderBtn" class="py-2 text-sm font-base text-purple-600 bg-white focus:outline-none w-1/2"
                    onclick="showOrders('myOrders')">
                    MY ORDERS
                </button>
                <button id="cancelledBtn"
                    class="py-2 text-sm font-base text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none w-1/2"
                    onclick="showOrders('cancelledOrders')">
                    CANCELLED ORDERS
                </button>
            </div>
        </div>

        <!-- My Orders Section -->
        <div id="myOrders" class="flex flex-col items-center justify-center flex-1 py-20 text-center rounded-lg shadow">
            <img src="{{ asset('asset/img/profile-section.png') }}" alt="No Orders"
                class="w-24 h-24 md:w-64 md:h-28 mb-4" />
            <p class="text-gray-800 text-lg font-semibold">No Active Orders</p>
            <button class="mt-4 px-6 py-2 text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg font-semibold">
                Continue Shopping
            </button>
        </div>

        <!-- Cancelled Orders Section (Initially Hidden) -->
        <div id="cancelledOrders"
            class="flex flex-col items-center justify-center flex-1 py-20 text-center rounded-lg shadow-lg bg-white hidden">
            <!-- Section Header with Icon -->
            <div class="flex flex-col items-center mb-6">
                <img src="{{ asset('asset/img/cancelled-section.png') }}" alt="No Cancelled Orders"
                    class="w-28 h-28 md:w-40 md:h-40 mb-4 opacity-80" />
                <h2 class="text-gray-900 text-2xl font-bold">Cancelled Orders</h2>
                <p class="text-gray-500 text-sm mt-2">You currently have no cancelled orders.</p>
            </div>

            <!-- Divider Line for Visual Separation -->
            <div class="w-3/4 mx-auto border-b-2 border-gray-200 mb-8"></div>

            <!-- Continue Shopping Button -->
            <button
                class="mt-8 px-8 py-3 text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg font-semibold transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-600">
                Continue Shopping
            </button>
        </div>

    </main>

    <script>
        function showOrders(sectionId) {
            document.getElementById('myOrders').classList.add('hidden');
            document.getElementById('cancelledOrders').classList.add('hidden');
            document.getElementById(sectionId).classList.remove('hidden');
        }
    </script>
@endsection
