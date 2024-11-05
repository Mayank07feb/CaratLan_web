@extends('frontend.profile.layout')
@section('profileContent')
    <!-- Main Content -->
    <main class="flex-1 flex flex-col p-6 bg-white">

        <!-- Curated Offers for You Section -->
        <section class="mb-8">
            <h2 class="text-lg font-semibold text-gray-600 mb-4">Curated Offers for You</h2>
            <div class="bg-white border border-gray-200 shadow-lg flex items-center justify-between">
                <div class="flex items-center space-x-6">
                    <!-- Offer Badge -->
                    <div class="bg-purple-100 p-6">
                        <div class="flex items-center justify-center w-20 h-20 text-purple-600 text-3xl font-extrabold">
                            20% OFF
                        </div>
                    </div>

                    <!-- Offer Details -->
                    <div>
                        <p class="text-gray-500 font-semibold text-sm">Get Extra 20% OFF on Shaya - Silver Jewellery
                            above ₹10,000</p>
                        <p class="text-sm text-gray-600 mt-1">
                            Code: <span class="text-purple-600 font-semibold">SHAYAFEST20</span>
                            <button class="text-sm text-purple-600 underline ml-2 hover:text-purple-800"
                                onclick="copyCode()">Copy Code</button>
                        </p>
                        <p class="text-xs text-gray-500 mt-2">Expires on November 05, 2024</p>
                    </div>
                </div>
                <!-- Taxes Disclaimer -->
                <p class="text-xs text-gray-400 italic mr-6">*Taxes Extra</p>
            </div>
        </section>

        <!-- All Offers Section -->
        <section>
            <h2 class="text-lg font-semibold text-gray-600 mb-4">All Offers</h2>

            <!-- Offer Cards -->
            <div class="space-y-4">
                <!-- Offer Card 1 -->
                <div class="bg-white border border-gray-200 shadow-lg flex items-center justify-between">
                    <div class="flex items-center space-x-6">
                        <!-- Offer Badge -->
                        <div class="bg-purple-100 p-6">
                            <div class="flex items-center justify-center w-20 h-20 text-purple-600 text-3xl font-extrabold">
                                20% OFF
                            </div>
                        </div>

                        <!-- Offer Details -->
                        <div>
                            <p class="text-gray-500 font-semibold text-sm">Get Extra 20% OFF on Shaya - Silver Jewellery
                                above ₹10,000</p>
                            <p class="text-sm text-gray-600 mt-1">
                                Code: <span class="text-purple-600 font-semibold">SHAYAFEST20</span>
                                <button class="text-sm text-purple-600 underline ml-2 hover:text-purple-800"
                                    onclick="copyCode()">Copy Code</button>
                            </p>
                            <p class="text-xs text-gray-500 mt-2">Expires on November 05, 2024</p>
                        </div>
                    </div>
                    <!-- Taxes Disclaimer -->
                    <p class="text-xs text-gray-400 italic mr-6">*Taxes Extra</p>
                </div>


                <!-- Offer Card 2 -->
                <div class="bg-white border border-gray-200 shadow-lg flex items-center justify-between">
                    <div class="flex items-center space-x-6">
                        <!-- Offer Badge -->
                        <div class="bg-purple-100 p-6">
                            <div class="flex items-center justify-center w-20 h-20 text-purple-600 text-3xl font-extrabold">
                                20% OFF
                            </div>
                        </div>

                        <!-- Offer Details -->
                        <div>
                            <p class="text-gray-500 font-semibold text-sm">Get Extra 20% OFF on Shaya - Silver Jewellery
                                above ₹10,000</p>
                            <p class="text-sm text-gray-600 mt-1">
                                Code: <span class="text-purple-600 font-semibold">SHAYAFEST20</span>
                                <button class="text-sm text-purple-600 underline ml-2 hover:text-purple-800"
                                    onclick="copyCode()">Copy Code</button>
                            </p>
                            <p class="text-xs text-gray-500 mt-2">Expires on November 05, 2024</p>
                        </div>
                    </div>
                    <!-- Taxes Disclaimer -->
                    <p class="text-xs text-gray-400 italic mr-6">*Taxes Extra</p>
                </div>
            </div>
        </section>

    </main>
@endsection
