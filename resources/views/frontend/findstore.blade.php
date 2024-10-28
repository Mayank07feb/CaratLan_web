@extends('components.main')
@section('content')


    <!-- Location Search -->
    <div class="relative h-48 bg-gray-200 flex items-center justify-center">
        <div class="w-full max-w-md">
            <input type="text" placeholder="Enter Pincode or City" class="w-full p-3 rounded-lg shadow">
            <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-purple-600">Locate Me</button>
        </div>
    </div>

    <!-- City Selection -->
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 22s-8-4.5-8-11.8A8 8 0 0112 2a8 8 0 018 8.2c0 7.3-8 11.8-8 11.8z"/>
                    </svg>
                </div>
                <span class="mt-2">Mumbai</span>
                <span class="text-sm text-gray-500">23 STORES</span>
            </div>
            <!-- More cities would go here -->
        </div>
    </div>

    <!-- Services Section -->
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-semibold text-center mb-8">Special In-Store Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="/api/placeholder/400/300" alt="Gold Exchange" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold mb-2">Old Gold Exchange</h3>
                    <p class="text-gray-600">It can be any gold jewellery</p>
                    <button class="mt-4 bg-purple-600 text-white px-6 py-2 rounded">Find Store</button>
                </div>
            </div>
            <!-- More service cards would go here -->
        </div>
    </div>

    <!-- New Store Section -->
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-semibold text-center mb-8">New Store Launch</h2>
        <div class="bg-gray-100 rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <img src="/api/placeholder/600/400" alt="New Store" class="rounded-lg">
                <div class="flex flex-col justify-center">
                    <h3 class="text-xl font-semibold mb-4">Sapna Sangeeta Road</h3>
                    <p class="text-gray-600 mb-4">Store Hours: 10:00 A.M - 9:00 P.M</p>
                    <div class="flex space-x-4">
                        <button class="bg-purple-100 text-purple-600 px-6 py-2 rounded">BOOK A VISIT</button>
                        <button class="bg-purple-600 text-white px-6 py-2 rounded">VIEW ALL DESIGNS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-semibold mb-8">Have some Questions?</h2>
        <div class="space-y-4">
            <div class="border-b border-gray-200 pb-4">
                <button class="flex justify-between items-center w-full">
                    <span>Is there any difference in the prices online and in store?</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </div>
            <!-- More FAQ items would go here -->
        </div>
    </div>

  
@endsection