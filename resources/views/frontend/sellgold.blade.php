
@extends('components.main')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Process Steps -->
    <div class="max-w-6xl mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18l-1 16H4L3 3zm4 5h2m4 0h2M6 7h12" />
                    </svg>
                </div>
                <p class="text-gray-800">Add to cart any Gold coin(s) or Jewellery</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H6.5a2.5 2.5 0 01-5 0H1m13 0h3.5a2.5 2.5 0 005 0H23m-6 0a6 6 0 01-12 0" />
                    </svg>
                </div>
                <p class="text-gray-800">Pay by Digital Gold option at Checkout</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 16l-2-2m0 0l4-4m-4 4l4 4M7 8h10M3 16h12m-2-2l4 4m-4-4l4-4" />
                    </svg>
                </div>
                <p class="text-gray-800">Get it delivered at your Doorstep, free of cost!</p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mt-12">
            <button class="px-6 py-2 border-2 border-purple-600 text-purple-600 rounded-lg hover:bg-purple-50 transition-colors">
                View Jewellery designs
            </button>
            <span class="text-center py-2">OR</span>
            <button class="px-6 py-2 border-2 border-purple-600 text-purple-600 rounded-lg hover:bg-purple-50 transition-colors">
                View all Gold coins
            </button>
        </div>

        <!-- Exchange Rate Card -->
        <div class="bg-white rounded-lg shadow-lg p-6 mt-12">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-xl font-semibold">EXCHANGE Rate</h2>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                        </svg>
                        <span class="text-sm text-gray-500">Price valid for 4:35 min</span>
                    </div>
                    <p class="text-2xl font-bold mt-2">₹7367.15/gram</p>
                    <p class="text-sm text-purple-600">24K 99.99% Purity</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m-9-6H6m4 0h.01M6 8v0" />
                </svg>
            </div>
        </div>

        <!-- Notice -->
        <div class="bg-purple-50 p-4 rounded-lg mt-8 flex items-start gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-600 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h3.75L12 6" />
            </svg>
            <p class="text-sm text-gray-600">
                You can also Redeem your Gold Balance online as well as offline stores of Caratlane & our Jewellery Partner.
            </p>
        </div>

        <!-- FAQ Section -->
        <div class="mt-12 space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold">Exchange</h2>
                <span class="text-sm text-purple-600">FAQs</span>
            </div>
            <div>
                <div class="p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow flex justify-between items-center group">
                    <span class="text-gray-800">How can I exchange my Digital Gold for Physical Jewellery?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 group-hover:text-purple-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

