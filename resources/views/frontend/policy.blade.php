@extends('components.main')
@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-semibold text-gray-800 mb-4">Return Policy</h1>
    <p class="text-gray-600 mb-8">Go ahead and shop with complete peace of mind!</p>

    <!-- Info Cards Section -->
    <div class="grid md:grid-cols-3 gap-8 mb-12">
        <!-- 15 Day Money Back -->
        <div class="bg-white p-6 ">
            <h2 class="text-lg font-semibold mb-4">15 DAY MONEY-BACK</h2>
            <p class="text-sm text-gray-600 mb-4">Valid return or change within 15 days. No questions asked.</p>
            <div class="text-sm text-gray-500">
                <p class="mb-2">*up to Rs.500 for standard deliveries in India</p>
                <p class="mb-2">*up to $15.00 for special deliveries in USA and Canada</p>
            </div>
        </div>

        <!-- Lifetime Exchange -->
        <div class="bg-white p-6 ">
            <h2 class="text-lg font-semibold mb-4">LIFETIME EXCHANGE</h2>
            <div class="text-sm text-gray-600">
                <p class="mb-2">Gold/Platinum: 100% value at prevailing market rate</p>
                <p class="mb-2">Diamond: 90% of the prevailing diamond value</p>
                <p class="mb-2">Gemstone: 90% of the prevailing gemstone value</p>
            </div>
        </div>

        <!-- Lifetime Buyback -->
        <div class="bg-white p-6 ">
            <h2 class="text-lg font-semibold mb-4">LIFETIME BUYBACK</h2>
            <div class="text-sm text-gray-600">
                <p class="mb-2">Diamond Jewellery: Additional 10% will be deducted from the LTV value</p>
                <p class="mb-2">Plain Gold/Platinum/Gemstone Jewellery: Additional 5% will be deducted from the LTV value</p>
            </div>
        </div>
    </div>

    <!-- Contact Buttons -->
    <div class="flex gap-4 justify-center mt-8">
        <button class="px-6 py-2 bg-gray-100 text-gray-800 rounded hover:bg-gray-200 transition-all">Call Us</button>
        <button class="px-6 py-2 bg-gray-100 text-gray-800 rounded hover:bg-gray-200 transition-all">Chat Now</button>
    </div>
</div>

    <style>
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .accordion-button[aria-expanded="true"] .chevron {
            transform: rotate(180deg);
        }
        
        .chevron {
            transition: transform 0.3s ease;
        }
    </style>

    <div class="max-w-2xl mx-auto space-y-2">
        <!-- Money-Back Section -->
        <div class="border border-gray-200 rounded-lg bg-white">
            <button 
                class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" 
                aria-expanded="false"
                onclick="toggleAccordion(this)"
            >
                <span class="text-lg text-gray-700">Money-Back, Buyback & Exchanges:</span>
                <svg class="chevron w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="accordion-content px-6 pb-4">
                <p class="text-gray-600">
                    Our money-back guarantee ensures your satisfaction. We offer hassle-free returns and exchanges within 30 days of purchase.
                </p>
            </div>
        </div>

        <!-- Resizing Section -->
        <div class="border border-gray-200 rounded-lg bg-white">
            <button 
                class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" 
                aria-expanded="false"
                onclick="toggleAccordion(this)"
            >
                <span class="text-lg text-gray-700">Resizing & Repairs:</span>
                <svg class="chevron w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="accordion-content px-6 pb-4">
                <p class="text-gray-600">
                    We provide professional resizing and repair services to ensure your items maintain their perfect fit and condition.
                </p>
            </div>
        </div>

        <!-- Warranty Section -->
        <div class="border border-gray-200 rounded-lg bg-white">
            <button 
                class="accordion-button w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none" 
                aria-expanded="false"
                onclick="toggleAccordion(this)"
            >
                <span class="text-lg text-gray-700">1 Year Replacement Warranty*</span>
                <svg class="chevron w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="accordion-content px-6 pb-4">
                <p class="text-gray-600">
                    Our products come with a 1-year replacement warranty covering manufacturing defects and material issues.
                </p>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            
            // Close all other sections
            document.querySelectorAll('.accordion-button').forEach(btn => {
                if (btn !== button) {
                    btn.setAttribute('aria-expanded', 'false');
                    btn.nextElementSibling.style.maxHeight = '0px';
                }
            });

            // Toggle current section
            button.setAttribute('aria-expanded', !isExpanded);
            if (!isExpanded) {
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                content.style.maxHeight = '0px';
            }
        }
    </script>

@endsection
