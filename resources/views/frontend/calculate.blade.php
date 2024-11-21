@extends('components.main')
@section('content')

<nav class="border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <div class="flex items-center">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMSIgaGVpZ2h0PSIxIj48L3N2Zz4=" alt="Gold by CaratLane" class="h-8">
                    <span class="text-yellow-500 font-bold text-2xl">Gold</span>
                    <span class="text-gray-500 text-sm ml-1">by CARATLANE</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-gray-700 hover:text-yellow-500 px-3 py-2 font-medium">
                    BUY GOLD
                </a>
                <a href="#" class="text-gray-700 hover:text-yellow-500 px-3 py-2 font-medium">
                    EXCHANGE / REDEEM
                </a>
                <a href="#" class="text-gray-700 hover:text-yellow-500 px-3 py-2 font-medium">
                    SELL GOLD
                </a>
                <a href="#" class="text-gray-700 hover:text-yellow-500 px-3 py-2 font-medium">
                    FAQ
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state -->
    <div class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-yellow-500">
                BUY GOLD
            </a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-yellow-500">
                EXCHANGE / REDEEM
            </a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-yellow-500">
                SELL GOLD
            </a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-yellow-500">
                FAQ
            </a>
        </div>
    </div>
</nav>

<div class="max-w-4xl mx-auto">
    <h1 class="text-4xl font-bold text-purple-900 mb-8">Sell Gold</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Main Sell Form -->
        <div class="col-span-2 bg-white rounded-lg shadow-sm p-6">
            <div class="flex flex-col space-y-4">
                <div class="flex items-center space-x-4">
                    <div class="flex-1">
                        <label class="text-gray-600 mb-2 block">Sell Gold by Amount</label>
                        <div class="relative">
                            <span class="absolute left-3 top-2.5 text-gray-500">₹</span>
                            <input type="text" class="w-full pl-8 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
                        </div>
                    </div>
                    
                    <span class="text-2xl font-bold text-gray-400 mt-8">=</span>
                    
                    <div class="flex-1">
                        <label class="text-gray-600 mb-2 block">Sell in Grams</label>
                        <div class="relative">
                            <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none">
                            <span class="absolute right-3 top-2.5 text-gray-500">gms</span>
                        </div>
                    </div>
                </div>
                
                <button class="bg-purple-500 hover:bg-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 w-full md:w-auto md:self-end">
                    Proceed to Sell
                </button>
            </div>
        </div>
        
        <!-- Right Side Information -->
        <div class="space-y-6">
            <!-- Sell Rate Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Sell Rate</h2>
                <button class="w-full bg-white border border-purple-500 text-purple-500 hover:bg-purple-50 font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Refresh Gold Rate
                </button>
                <p class="text-sm text-gray-500 mt-4">Price is only valid for 5 mins</p>
            </div>
            
            <!-- Gold Balance Card -->
            <div class="bg-white rounded-lg shadow-sm p-6 text-center">
                <div class="bg-gray-100 w-16 h-16 rounded-lg mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="text-lg font-semibold text-gray-800">Gold Balance</h2>
                <p class="text-2xl font-bold text-gray-900 mt-2">0.00 gms</p>
            </div>
        </div>
    </div>
    
    <!-- Bottom Links -->
    <div class="flex justify-between mt-6 text-purple-500">
        <a href="#" class="flex items-center hover:text-purple-600 transition duration-200">
            Check Sell History
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
        <a href="#" class="flex items-center hover:text-purple-600 transition duration-200">
            Redeem Gold
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</div>


<div id="accordion-collapse" data-accordion="collapse" class="mx-24">
    <h2 id="accordion-collapse-heading-1">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
        <span>What is Flowbite?</span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
      <div class="p-5 border border-b-0 border-white dark:border-white dark:bg-gray-900">
        <p class="mb-2 text-white dark:text-white">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
        <p class="text-white dark:text-white">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
      </div>
    </div>
    
    <h2 id="accordion-collapse-heading-2">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
        <span>Is there a Figma file available?</span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
        <p class="mb-2 text-white dark:text-white">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
        <p class="text-white dark:text-white">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
      </div>
    </div>
  
    <h2 id="accordion-collapse-heading-3">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-white border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
        <span>What are the differences between Flowbite and Tailwind UI?</span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
      <div class="p-5 border border-t-0 border-black dark:border-gray-700">
        <p class="mb-2 text-black">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
        <p class="mb-2 text-black">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
        <p class="mb-2 text-black">Learn more about these technologies:</p>
        <ul class="ps-5 text-black list-disc dark:text-black">
          <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
          <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
        </ul>
      </div>
    </div>
  </div>
  


</div>

<script>
    document.querySelectorAll('[data-accordion-target]').forEach(button => {
      button.addEventListener('click', () => {
        const targetId = button.getAttribute('data-accordion-target');
        const targetContent = document.querySelector(targetId);
        const isExpanded = button.getAttribute('aria-expanded') === 'true';
  
        button.setAttribute('aria-expanded', !isExpanded);
        targetContent.classList.toggle('hidden', isExpanded);
      });
    });
  </script>
  
@endsection