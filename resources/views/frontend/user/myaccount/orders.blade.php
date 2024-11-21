@extends('frontend.user.layout')

@section('profileContent')
    <!-- Main Content -->
    <main class="flex-1 bg-gray-50 flex flex-col p-4">
        <!-- Order Tabs -->
        <div class="flex justify-center mb-8">
            <div class="border rounded-lg overflow-hidden flex w-full max-w-md">
                <button id="myorderBtn"
                    class="py-2 w-1/2 text-sm font-medium text-purple-600 bg-white focus:outline-none focus:ring-2 focus:ring-purple-600"
                    onclick="showOrders('myOrders', this)">
                    MY ORDERS
                </button>
                <button id="cancelledBtn"
                    class="py-2 w-1/2 text-sm font-medium text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-600"
                    onclick="showOrders('cancelledOrders', this)">
                    CANCELLED ORDERS
                </button>
            </div>
        </div>

        <!-- My Orders Section -->
        <div id="myOrders"
            class="flex flex-col items-center justify-center flex-1 py-20 text-center rounded-lg shadow bg-white">
            <img src="{{ asset('asset/img/profile-section.png') }}" alt="No Orders"
                class="w-24 h-24 md:w-32 md:h-32 mb-4 rounded-full object-cover" />
            <p class="text-gray-800 text-lg font-semibold">No Active Orders</p>
            <button
                class="mt-4 px-6 py-2 text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg font-semibold hover:shadow-md hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-purple-500">
                Continue Shopping
            </button>
        </div>

        <!-- Cancelled Orders Section (Initially Hidden) -->
        <div id="cancelledOrders"
            class="flex flex-col items-center justify-center flex-1 py-20 text-center rounded-lg shadow bg-white hidden">
            <img src="{{ asset('asset/img/profile-section.png') }}" alt="No Cancelled Orders"
                class="w-28 h-28 md:w-36 md:h-36 mb-4 rounded-full object-cover opacity-80" />
            <h2 class="text-gray-900 text-2xl font-bold">Cancelled Orders</h2>
            <p class="text-gray-500 text-sm mt-2">You currently have no cancelled orders.</p>
            <button
                class="mt-8 px-8 py-3 text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg font-semibold hover:shadow-lg hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-purple-500">
                Continue Shopping
            </button>
        </div>
    </main>

    <!-- JavaScript -->
    <script>
        function showOrders(sectionId, btn) {
            // Hide all sections
            document.getElementById('myOrders').classList.add('hidden');
            document.getElementById('cancelledOrders').classList.add('hidden');

            // Show the selected section
            document.getElementById(sectionId).classList.remove('hidden');

            // Update active tab styles
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.classList.remove('text-purple-600', 'bg-white');
                button.classList.add('text-gray-500', 'bg-gray-100');
            });

            btn.classList.add('text-purple-600', 'bg-white');
            btn.classList.remove('text-gray-500', 'bg-gray-100');
        }
    </script>
@endsection
