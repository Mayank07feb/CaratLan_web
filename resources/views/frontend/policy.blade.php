@extends('components.main')
@section('content')

    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Return Policy</h1>
        <p class="text-gray-600 mb-8">Go ahead and shop with complete peace of mind!</p>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- 15 Day Money Back -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold mb-4">15 DAY MONEY-BACK</h2>
                <p class="text-sm text-gray-600 mb-4">Valid return or change within 15 days. No questions asked.</p>
                <div class="text-sm text-gray-500">
                    <p class="mb-2">*upto Rs.500 for standard deliveries in India</p>
                    <p class="mb-2">*upto $15.00 for special deliveries in USA and Canada</p>
                </div>
            </div>

            <!-- Lifetime Exchange -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold mb-4">LIFETIME EXCHANGE</h2>
                <div class="text-sm text-gray-600">
                    <p class="mb-2">Gold/Platinum: 100% value at prevailing market rate</p>
                    <p class="mb-2">Diamond: 90% of the prevailing diamond value</p>
                    <p class="mb-2">Gemstone: 90% of the prevailing gemstone value</p>
                </div>
            </div>

            <!-- Lifetime Buyback -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold mb-4">LIFETIME BUYBACK</h2>
                <div class="text-sm text-gray-600">
                    <p class="mb-2">Diamond Jewellery: Additional 10% will be deducted from the LTV value</p>
                    <p class="mb-2">Plain Gold/Platinum/Gemstone Jewellery: Additional 5% will be deducted from the LTV value</p>
                </div>
            </div>
        </div>

        <!-- Contact Buttons -->
        <div class="flex gap-4 justify-center mt-8">
            <button class="px-6 py-2 bg-gray-100 text-gray-800 rounded hover:bg-gray-200">Call Us</button>
            <button class="px-6 py-2 bg-gray-100 text-gray-800 rounded hover:bg-gray-200">Chat Now</button>
        </div>
    </div>


@endsection