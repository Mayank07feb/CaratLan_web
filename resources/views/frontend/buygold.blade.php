@extends('components.main')

@section('content')

<main class="p-4 mt-24 overflow-x-auto">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-black text-lg font-bold">Gold Exchange</div>
        <!-- Navigation links -->
        <div class="flex flex-wrap space-x-4 mt-4 lg:mt-0">
            <a href="{{ route('buygold') }}" class="text-black hover:text-yellow-500">Buy Gold</a>
            <a href="#exchange" class="text-black hover:text-yellow-500">Exchange / Redeem</a>
            <a href="#sell" class="text-black hover:text-yellow-500">Sell Gold</a>
            <a href="#faqs" class="text-black hover:text-yellow-500">FAQs</a>
        </div>
    </div>
</main>

<div class="min-h-screen bg-gray-50">
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Buy Gold Section -->
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold">Buy Gold</h2>
                        <span class="text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                            </svg>
                            Price valid for: 4:06 min
                        </span>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="flex-1">
                            <label for="buy-amount" class="block text-sm font-medium text-gray-700">Buy Gold by Amount</label>
                            <div class="mt-1 relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">₹</span>
                                <input
                                    id="buy-amount"
                                    type="number"
                                    class="pl-8 block w-full border-gray-300 rounded-md focus:ring-purple-500 focus:border-purple-500"
                                    placeholder="Enter amount"
                                />
                            </div>
                        </div>

                        <span class="text-2xl">=</span>

                        <div class="flex-1">
                            <label for="buy-grams" class="block text-sm font-medium text-gray-700">Buy in Grams</label>
                            <input
                                id="buy-grams"
                                type="number"
                                class="mt-1 block w-full border-gray-300 rounded-md focus:ring-purple-500 focus:border-purple-500"
                                placeholder="gms"
                            />
                        </div>
                    </div>

                    <button class="w-full bg-purple-500 text-white py-2 px-4 rounded-md hover:bg-purple-600 transition-colors">
                        Proceed to Buy
                    </button>

                    <div class="flex items-start space-x-2 text-sm text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m2 4v-4m0-2h.01M12 6h.01M12 16h0" />
                        </svg>
                        <p>The minimum buy amount to purchase Digital Gold is ₹10</p>
                    </div>
                </div>

                <!-- Gold Balance Card -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-medium">Gold Balance</h3>
                        <span class="text-sm text-purple-600">24K 99.99% Purity</span>
                    </div>
                    <div class="mt-4">
                        <span class="text-2xl font-bold">0.00 gms</span>
                        <p class="mt-2 text-gray-600">₹7853.75/gram</p>
                        <p class="text-sm text-gray-500">(₹7625 + 3% GST)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-8 space-y-4">
            <h2 class="text-xl font-semibold">Buying Gold FAQs</h2>
            <div class="space-y-2">
                @foreach ([
                    'How do I buy Digital Gold?',
                    'What is the minimum and maximum gold amount I can purchase?',
                    'Where is the Gold stored post buying?',
                    'What is the purity of gold bought?'
                ] as $question)
                    <button class="w-full text-left p-4 bg-white rounded-lg shadow hover:shadow-md transition-shadow flex justify-between items-center">
                        <span>{{ $question }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                @endforeach
            </div>
        </div>
    </main>
</div>

@endsection
