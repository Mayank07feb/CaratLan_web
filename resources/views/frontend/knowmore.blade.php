@extends('components.main')
@section('content')
<div class="mt-32 w-full h-full">
    <img src="{{asset('asset/videos/Desktop_Landing.jpg')}}" alt="Gold Exchange Program" class="w-full object-cover">
</div>

<div class="intro p-4">
    <div class="main bg-[#E1D097] rounded-3xl shadow-lg max-w-3xl mx-auto ">
        
        <!-- Header Section -->
        <header class="pt-4">
            <div class="header w-full sm:w-1/2 bg-white text-[#E1D097] border p-2 text-base sm:text-lg font-semibold text-center mx-auto rounded-full my-4">
                GOLD EXCHANGE PROGRAM
            </div>
        </header>

        <!-- Description Section -->
        <section class="description px-4 sm:px-12 py-4 text-sm sm:text-sm text-gray-700 text-center">
            <p>Jewellery looks good on you, and not inside your locker! With CaratLane's Gold Exchange Program, you can upgrade your precious gold with stylish new diamond designs, that you'll love wearing every day!</p>
        </section>

        <!-- Call to Action Section -->
        <div class="flex justify-center my-4">
            <button class="bg-[#4F3267] text-white py-2 px-6 rounded-md text-base sm:text-lg hover:bg-[#3b2750] focus:ring focus:ring-[#4F3267] focus:ring-opacity-50 transition-all">
                Calculate
            </button>
        </div>

        <!-- Additional Buttons Section -->
        <div class="buttons flex flex-col sm:flex-row items-center justify-center sm:justify-between p-4 space-y-4 sm:space-y-0 sm:space-x-4">
            <div class="flex items-center justify-center space-x-1">
                <button class="bg-[#4F3267] text-white py-2 px-6 rounded-md text-xs sm:text-sm hover:bg-[#3b2750] transition-all">
                    STORES WITH KARATMETER
                </button>
                <i class="ri-arrow-down-s-line text-xl text-white" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>


<div class="p-4 lg:mx-12">
    <!-- Title Section -->
    <div class="flex flex-col items-center justify-center my-8">
        <h1 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-4 text-center">Calculate by Purity or Karatage</h1>
        <p class="text-gray-500 text-sm sm:text-base text-center max-w-2xl">
            Calculate by Purity or Karatage to help you find the best old gold exchange value in the market
        </p>
    </div>

    <!-- Main Content Section -->
    <div class="max-w-7xl mx-auto mb-8 flex flex-col md:flex-row gap-8">

        <!-- Left Side: Form Section -->
        <div class="flex-1 w-full md:w-2/3">

            <!-- Tabs Section -->
            <div class="mb-6">
                <ul class="flex justify-center border-b">
                    <li class="mr-2">
                        <button id="karatage-tab" class="inline-block py-2 px-4 text-sm text-blue-600 border-b-2 border-blue-600 font-semibold">
                            Karatage
                        </button>
                    </li>
                    <li>
                        <button id="purity-tab" class="inline-block py-2 px-4 text-sm text-gray-600 hover:text-blue-600 hover:border-blue-600 font-semibold">
                            Purity
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Tab Content Section -->
            <div id="karatage-content" class="tab-content">
                <div class="flex gap-8 mb-6 justify-center space-y-2">
                    <!-- Karatage Dropdown -->
                    <div class="w-full">
                        <h2 class="text-gray-600 mb-4 text-sm">Karatage</h2>
                        <select class="w-full p-3 text-sm border rounded-md bg-white text-gray-600">
                            <option>Select Karatage</option>
                            <option>14 Karat</option>
                            <option>18 Karat</option>
                            <option>22 Karat</option>
                            <option>24 Karat</option>
                        </select>
                    </div>
                </div>
            </div>

            <div id="purity-content" class="tab-content hidden">
                <div class="flex gap-8 mb-6 justify-center">
                    <!-- Purity Dropdown -->
                    <div class="w-full">
                        <h2 class="text-gray-600 mb-4 text-sm">Purity</h2>
                        <select class="w-full p-3 border rounded-md bg-white text-gray-600 text-sm">
                            <option>Select Purity</option>
                            <option>75% Purity</option>
                            <option>85% Purity</option>
                            <option>90% Purity</option>
                            <option>99.9% Purity</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Grams Input -->
            <div class="mb-6">
                <input type="number" placeholder="Enter Grams" class="w-full p-3 border rounded-md">
            </div>

            <!-- Calculate Button -->
            <button class="w-full text-xs bg-gradient-to-r from-pink-500 to-purple-500 text-white py-3 mb-2 rounded-md hover:bg-blue-700 transition-colors">
                CALCULATE EXCHANGE VALUE
            </button>
        </div>

        <!-- Right Side: Rates Section -->
        <div class="w-full md:w-1/3">
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <h2 class="text-gray-600 mb-4 text-sm">Standard gold rates for the day</h2>

                <!-- Rate Items -->
                <div class="space-y-4 bg-[#F0ECFF] p-4 rounded-2xl">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-700 text-xs">14 Karat Gold</p>
                            <p class="text-gray-500 text-xs">(1 Gram)</p>
                        </div>
                        <span class="text-gray-700 text-xs">₹ 4714</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-700 text-xs">18 Karat Gold</p>
                            <p class="text-gray-500 text-xs">(1 Gram)</p>
                        </div>
                        <span class="text-gray-700 text-xs">₹ 6064</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-700 text-xs">22 Karat Gold</p>
                            <p class="text-gray-500 text-xs">(1 Gram)</p>
                        </div>
                        <span class="text-gray-700 text-xs">₹ 7414</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-gray-700 text-xs">24 Karat Gold</p>
                            <p class="text-gray-500 text-xs">(1 Gram)</p>
                        </div>
                        <span class="text-gray-700 text-xs">₹ 8085</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Tab Toggling -->
    <script>
        document.getElementById('karatage-tab').addEventListener('click', function() {
            document.getElementById('karatage-content').classList.remove('hidden');
            document.getElementById('purity-content').classList.add('hidden');
            this.classList.add('border-blue-600', 'text-blue-600');
            document.getElementById('purity-tab').classList.remove('border-blue-600', 'text-blue-600');
        });

        document.getElementById('purity-tab').addEventListener('click', function() {
            document.getElementById('purity-content').classList.remove('hidden');
            document.getElementById('karatage-content').classList.add('hidden');
            this.classList.add('border-blue-600', 'text-blue-600');
            document.getElementById('karatage-tab').classList.remove('border-blue-600', 'text-blue-600');
        });
    </script>
</div>

{{-- containers --}}
<div class="max-w-6xl mx-auto px-4">
    <!-- Header -->
    <h1 class="text-3xl text-gray-700 text-center mb-12">How it works?</h1>

    <!-- Steps Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
        <!-- Step 1 -->
        <div class="relative bg-white rounded-2xl overflow-hidden shadow-sm max-w-md mx-auto border">
            <div class="relative">
                <img src="{{asset('asset/img/step1.png')}}" alt="Store interior" class="relative  w-full h-48 object-cover">
                <span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 -mt-4 bg-blue-500 text-white px-4 py-1 rounded-full text-sm">
                    STEP 1
                </span>
            </div>
            <div class="relative z-10 p-6 -mt-12 bg-white mx-6 md:mx-8 rounded-lg shadow-xl text-center">
                <h3 class="text-lg font-medium text-gray-800 mb-2">Visit a store near you</h3>
                <p class="text-gray-600 text-sm">
                    Visit any of our stores with the gold that you'd like to exchange. (Remember to bring your PAN card)
                </p>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="relative bg-white rounded-2xl overflow-hidden shadow-sm max-w-md mx-auto border">
            <div class="relative">
                <img src="{{asset('asset/img/step2.png')}}" alt="Gold checking equipment" class="w-full h-48 object-cover">
                <span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 -mt-4 bg-blue-500 text-white px-4 py-1 rounded-full text-sm">
                    STEP 2
                </span>
            </div>
            <div class="relative z-10 p-6 -mt-12 bg-white mx-6 md:mx-8 rounded-lg shadow-xl text-center">
                <h3 class="text-lg font-medium text-gray-800 mb-2">A quick gold check at the store</h3>
                <p class="text-gray-600 text-sm">
                    We will measure the purity and weight of your gold with our karatmeter.
                </p>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="relative bg-white rounded-2xl overflow-hidden shadow-sm max-w-md mx-auto border">
            <div class="relative">
                <img src="{{asset('asset/img/step3.png')}}" alt="Calculating value" class="w-full h-48 object-cover">
                <span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 -mt-4 bg-blue-500 text-white px-4 py-1 rounded-full text-sm">
                    STEP 3
                </span>
            </div>
            <div class="relative z-10 p-6 -mt-12 bg-white mx-6 md:mx-8 rounded-lg shadow-xl text-center">
                <h3 class="text-lg font-medium text-gray-800 mb-2">We'll calculate the exchange value</h3>
                <p class="text-gray-600 text-sm">
                    Your exchange value will be calculated as per the prevailing gold price.
                </p>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="relative bg-white rounded-2xl overflow-hidden shadow-sm max-w-md mx-auto border">
            <div class="relative">
                <img src="{{asset('asset/img/step4.png')}}" alt="Jewelry designs" class="w-full h-48 object-cover">
                <span class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 -mt-4 bg-blue-500 text-white px-4 py-1 rounded-full text-sm">
                    STEP 4
                </span>
            </div>
            <div class="relative z-10 p-6 -mt-12 bg-white mx-6 md:mx-8 rounded-lg shadow-xl text-center">
                <h3 class="text-lg font-medium text-gray-800 mb-2">Pick your favourite CaratLane design</h3>
                <p class="text-gray-600 text-sm">
                    Once your exchange value is determined, you can place an order for beautiful CaratLane jewellery.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer Text -->
    <h2 class="text-2xl text-gray-700 text-center px-4">
        Watch how easily you can exchange your gold
    </h2>
</div>


{{-- VIDEO SECTION --}}
<div class="max-w-2xl mx-auto p-4 text-center">
    {{-- <h2 class="text-2xl font-semibold mb-4">Watch how easily you can exchange your gold</h2> --}}
    <div class="relative overflow-hidden rounded-3xl shadow-lg">
        <video class="w-full h-80" controls>
            <source src="{{ asset('asset/img/Video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>


{{-- TABLE SECTION --}}
<h1 class="text-2xl font-semibold text-black text-center my-4">Standard deduction</h1>
<div class="flex justify-center items-center p-4 my-4 mb-4">
    <div class="w-full max-w-4xl bg-purple-50 rounded-xl p-6 shadow-lg">
      
        
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="text-purple-800">
                        <th class="p-4 text-left border-b border-purple-200">Standard Deduction</th>
                        <th class="p-4 text-left border-b border-purple-200">Below 18 Karat</th>
                        <th class="p-4 text-left border-b border-purple-200">18 Karat to 22 Karat</th>
                        <th class="p-4 text-left border-b border-purple-200">24 Karat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-purple-700">
                        <td class="p-4 border-b border-purple-200">Handling Charges</td>
                        <td class="p-4 border-b border-purple-200">
                            <span class="text-indigo-500">4%*</span>
                            <span class="ml-2">0%</span>
                        </td>
                        <td class="p-4 border-b border-purple-200">
                            <span class="text-indigo-500">2%*</span>
                            <span class="ml-2">0%</span>
                        </td>
                        <td class="p-4 border-b border-purple-200">
                            <span class="text-indigo-500">0%*</span>
                        </td>
                    </tr>
                    <tr class="text-purple-700">
                        <td class="p-4 border-b border-purple-200">De-alloying Charges</td>
                        <td class="p-4 border-b border-purple-200">-</td>
                        <td class="p-4 border-b border-purple-200">-</td>
                        <td class="p-4 border-b border-purple-200">-</td>
                    </tr>
                    <tr class="text-indigo-500 font-medium">
                        <td class="p-4">Total</td>
                        <td class="p-4">4%* 0%</td>
                        <td class="p-4">2%* 0%</td>
                        <td class="p-4">0%*</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
      
    </div>
</div>
<p class="text-sm text-red-600 my-2 text-center">*Valid only for a limited period</p>

{{-- pincode --}}
<div class="max-w-md mx-auto p-6 bg-white text-center">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our stores near you</h2>
    <p class="text-gray-600 mb-6">Enter your PIN code to find stores near you</p>
    
    <div class="flex flex-col items-center space-y-4">
        <input 
            type="text" 
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" 
            placeholder="Enter Your Pincode" 
            aria-label="Enter your PIN code"
        />
        
        <button 
            class="w-full bg-gradient-to-r from-pink-500 to-purple-500 text-white py-3 rounded-lg hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition-all"
        >
            View Stores
        </button>
    </div>
</div>


{{-- SHOP --}}
<div class="w-full bg-[#231535] py-12 text-center text-white">
    <div class="mb-6 text-xl font-semibold">
        Check out beautiful designs that you can exchange your gold for!
    </div>
    
    <div>
        <button 
            class="w-full max-w-xs mx-auto bg-gradient-to-r from-pink-500 to-purple-500 text-white py-3 rounded-lg hover:from-purple-500 hover:to-pink-500 focus:ring-2 focus:ring-purple-500 focus:outline-none transition-all"
        >
            Shop Now
        </button>
    </div>
</div>


{{-- term and condition --}}
<div class="max-w-4xl mx-auto p-12 py-12">
    <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">Terms & Conditions</h2>
    
    <ul class="space-y-4 text-gray-700 text-xs">
        <li>
             The old gold that you bring for exchange must be in plain gold format (without any gemstones or diamonds). In addition to plain gold jewellery, gold coins, biscuits, or bars are also accepted.
        </li>

        <li>
             The jewellery you exchange for can be any item from CaratLane’s designs, including plain gold jewellery, diamond and gemstone jewellery, and platinum jewellery categories.
        </li>

        <li>
         Old gold can be exchanged for any diamond-studded jewellery (up to 18kt gold). For exchange to 22kt jewellery or loose diamonds, a 4% standard deduction on old gold value will apply. You cannot exchange your old gold for cash or gold coins.
        </li>

        <li>
            Once your exchange value is computed, you can purchase any CaratLane jewellery of similar or higher value by paying the excess amount via cash or card.
        </li>

        <li>
         A declaration form must be signed, stating the weight of the gold being exchanged. This form affirms that you have willingly provided the gold for cutting/melting and that the purity reading generated by the Karatmeter will be acceptable to you. The gold will not be returned.
        </li>

        <li>
            This exchange program does not include the 15-day Money-Back guarantee, unlike regular purchases from CaratLane. However, the Lifetime Exchange Policy will be applicable.
        </li>

        <li>
            The gold jewellery you bring for exchange must have a purity level of 14kt or higher.
        </li>
    </ul>
</div>



@endsection