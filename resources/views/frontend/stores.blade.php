@extends('components.main')
@section('content')
    <!-- Location Search -->
<div class="relative h-56 flex items-center justify-center bg-cover bg-center bg-black bg-opacity-50" style="background-image: url('{{asset('asset/img/maps.jpeg')}}');">
    <div class="relative w-full max-w-md p-4">
        <input type="text" placeholder="Enter Pincode or City" class="w-full p-3 rounded-lg shadow bg-white text-gray-700 placeholder-gray-400 pr-16">        
        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-xs px-4 text-purple-600 font-semibold">Locate Me</button>
    </div>
    
    <div class="absolute bottom-4 text-black text-center w-full">
        <h3 class="text-lg font-bold">Find a Store Near You</h3>
        <p class="text-sm">Discover a CaratLane store in your locality; the CaratLane family is growing every day.</p>
    </div>
</div>

<main class="mx-4 sm:mx-12">
    {{-- STORES --}}
    <div class="bg-white p-4 sm:p-6 ">
      <h2 class="text-xl sm:text-2xl font-bold mb-4">Showing 23 Stores in <span class="text-pink-500 underline">Mumbai</span></h2>
      
      <!-- Store Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        
        <!-- Store Card 1 -->
        <div class="bg-gray-50 p-4 rounded-md">
          <h3 class="text-lg sm:text-xl font-bold mb-2">Viviana Mall</h3>
          <p class="mb-2 text-pink-400">View Store Details</p>
          <p class="mb-2">1st Floor, Viviana Mall, Thane,Mumbai, 400606,<br>Phone-08069249019</p>
          <p class="mb-2 text-purple-600">STORE HOURS - 11:00 A.M. - 9:00 P.M.</p>
          <div class="flex flex-col sm:flex-row justify-between space-y-2 sm:space-y-0 sm:space-x-4">
            <button class="bg-purple-200 text-purple-700 px-4 py-2 rounded-md w-full sm:w-auto">BOOK A VISIT</button>
            <button class="bg-purple-400 text-white px-4 py-2 rounded-md w-full sm:w-auto">VIEW ALL DESIGNS</button>
          </div>
        </div>
  
        <!-- Store Card 2 -->
        <div class="bg-gray-50 p-4 rounded-md">
          <h3 class="text-lg sm:text-xl font-bold mb-2">Nexus Mall</h3>
          <p class="mb-2 text-pink-400">View Store Details</p>
          <p class="mb-2">Upper Ground Floor, Nexus Seawoods Mall,<br>Seawoods,Mumbai, 400706,<br>Phone-08069200812</p>
          <p class="mb-2 text-purple-600">STORE HOURS - 11:00 A.M. - 9:00 P.M.</p>
          <div class="flex flex-col sm:flex-row justify-between space-y-2 sm:space-y-0 sm:space-x-4">
            <button class="bg-purple-200 text-purple-700 px-4 py-2 rounded-md w-full sm:w-auto">BOOK A VISIT</button>
            <button class="bg-purple-400 text-white px-4 py-2 rounded-md w-full sm:w-auto">VIEW ALL DESIGNS</button>
          </div>
        </div>
  
        <!-- Store Card 3 -->
        <div class="bg-gray-50 p-4 rounded-md">
          <h3 class="text-lg sm:text-xl font-bold mb-2">Infiniti Mall</h3>
          <p class="mb-2 text-pink-400">View Store Details</p>
          <p class="mb-2">Ground Floor, Infiniti Mall, New Link Road,<br>Malad,Mumbai, 400064,<br>Phone-02269198764</p>
          <p class="mb-2 text-purple-600">STORE HOURS - 11:00 A.M. - 9:00 P.M.</p>
          <div class="flex flex-col sm:flex-row justify-between space-y-2 sm:space-y-0 sm:space-x-4">
            <button class="bg-purple-200 text-purple-700 px-4 py-2 rounded-md w-full sm:w-auto">BOOK A VISIT</button>
            <button class="bg-purple-400 text-white px-4 py-2 rounded-md w-full sm:w-auto">VIEW ALL DESIGNS</button>
          </div>
        </div>
  
      </div>
    </div>
  
    <!-- Repeat the same structure for other store sections -->
    <!-- Just copy and paste the grid section, and update the store names and details. -->
    <div class="bg-white p-4 sm:p-6 ">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Store Card 4 -->
        <div class="bg-gray-50 p-4 rounded-md">
          <h3 class="text-lg sm:text-xl font-bold mb-2">Viviana Mall</h3>
          <p class="mb-2 text-pink-400">View Store Details</p>
          <p class="mb-2">1st Floor, Viviana Mall, Thane,Mumbai, 400606,<br>Phone-08069249019</p>
          <p class="mb-2 text-purple-600">STORE HOURS - 11:00 A.M. - 9:00 P.M.</p>
          <div class="flex flex-col sm:flex-row justify-between space-y-2 sm:space-y-0 sm:space-x-4">
            <button class="bg-purple-200 text-purple-700 px-4 py-2 rounded-md w-full sm:w-auto">BOOK A VISIT</button>
            <button class="bg-purple-400 text-white px-4 py-2 rounded-md w-full sm:w-auto">VIEW ALL DESIGNS</button>
          </div>
        </div>
  
        <!-- Store Card 5 -->
        <div class="bg-gray-50 p-4 rounded-md">
          <h3 class="text-lg sm:text-xl font-bold mb-2">Nexus Mall</h3>
          <p class="mb-2 text-pink-400">View Store Details</p>
          <p class="mb-2">Upper Ground Floor, Nexus Seawoods Mall,<br>Seawoods,Mumbai, 400706,<br>Phone-08069200812</p>
          <p class="mb-2 text-purple-600">STORE HOURS - 11:00 A.M. - 9:00 P.M.</p>
          <div class="flex flex-col sm:flex-row justify-between space-y-2 sm:space-y-0 sm:space-x-4">
            <button class="bg-purple-200 text-purple-700 px-4 py-2 rounded-md w-full sm:w-auto">BOOK A VISIT</button>
            <button class="bg-purple-400 text-white px-4 py-2 rounded-md w-full sm:w-auto">VIEW ALL DESIGNS</button>
          </div>
        </div>
  
        <!-- Store Card 6 -->
        <div class="bg-gray-50 p-4 rounded-md">
          <h3 class="text-lg sm:text-xl font-bold mb-2">Infiniti Mall</h3>
          <p class="mb-2 text-pink-400">View Store Details</p>
          <p class="mb-2">Ground Floor, Infiniti Mall, New Link Road,<br>Malad,Mumbai, 400064,<br>Phone-02269198764</p>
          <p class="mb-2 text-purple-600">STORE HOURS - 11:00 A.M. - 9:00 P.M.</p>
          <div class="flex flex-col sm:flex-row justify-between space-y-2 sm:space-y-0 sm:space-x-4">
            <button class="bg-purple-200 text-purple-700 px-4 py-2 rounded-md w-full sm:w-auto">BOOK A VISIT</button>
            <button class="bg-purple-400 text-white px-4 py-2 rounded-md w-full sm:w-auto">VIEW ALL DESIGNS</button>
          </div>
        </div>
      </div>
    </div>
  
  </main>
  


<div class="flex flex-col md:flex-row gap-8 p-4 max-w-7xl mx-auto">
    <!-- Contact Card Section -->
    <div class="max-w-3xl flex-1">
        <h1 class="text-5xl font-bold mb-8 p-4">Have some Questions?</h1>
        
        <!-- Contact Card -->
        <div class="bg-gray-100 p-6 rounded-lg mb-8 inline-block">
            <div class="flex items-center gap-4">
                <div class="bg-purple-100 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <div>
                    <p class="font-medium">Just give us a call at</p>
                    <p class="text-purple-600 font-medium">+91-44-66075200</p>
                </div>
            </div>
        </div>
    </div>    

    <!-- FAQ Section -->
    <div class="space-y-4 flex-1" x-data="{ selected: null }">
        <!-- Question 1 -->
        <div class="border-b border-gray-200">
            <button 
                class="w-full flex justify-between items-center py-4 text-left focus:outline-none"
                @click="selected !== 1 ? selected = 1 : selected = null"
                aria-expanded="selected === 1 ? 'true' : 'false'"
                aria-controls="faq1"
            >
                <span class="font-medium">Is there any difference in the prices online and in store?</span>
                <svg 
                    class="h-6 w-6 text-purple-600 transform transition-transform duration-200"
                    :class="{'rotate-45': selected === 1}"
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke="currentColor"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>
            <div 
                id="faq1"
                class="pb-4"
                x-show="selected === 1"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <p class="text-gray-600">Our prices remain consistent across all channels - both online and in our stores.</p>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="border-b border-gray-200">
            <button 
                class="w-full flex justify-between items-center py-4 text-left focus:outline-none"
                @click="selected !== 2 ? selected = 2 : selected = null"
                aria-expanded="selected === 2 ? 'true' : 'false'"
                aria-controls="faq2"
            >
                <span class="font-medium">How will I know if the designs I like are available in a store near me?</span>
                <svg 
                    class="h-6 w-6 text-purple-600 transform transition-transform duration-200"
                    :class="{'rotate-45': selected === 2}"
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke="currentColor"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>
            <div 
                id="faq2"
                class="pb-4"
                x-show="selected === 2"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <p class="text-gray-600">You can check product availability at your nearest store through our website or by calling our customer service.</p>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="border-b border-gray-200">
            <button 
                class="w-full flex justify-between items-center py-4 text-left focus:outline-none"
                @click="selected !== 3 ? selected = 3 : selected = null"
                aria-expanded="selected === 3 ? 'true' : 'false'"
                aria-controls="faq3"
            >
                <span class="font-medium">Can I exchange my gold jewellery at any CaratLane store?</span>
                <svg 
                    class="h-6 w-6 text-purple-600 transform transition-transform duration-200"
                    :class="{'rotate-45': selected === 3}"
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke="currentColor"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>
            <div 
                id="faq3"
                class="pb-4"
                x-show="selected === 3"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <p class="text-gray-600">Yes, you can exchange your gold jewellery at any of our stores. Please contact us for more details about the exchange process.</p>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="border-b border-gray-200">
            <button 
                class="w-full flex justify-between items-center py-4 text-left focus:outline-none"
                @click="selected !== 4 ? selected = 4 : selected = null"
                aria-expanded="selected === 4 ? 'true' : 'false'"
                aria-controls="faq4"
            >
                <span class="font-medium">Is CaratLane jewellery made of real gold and diamonds?</span>
                <svg 
                    class="h-6 w-6 text-purple-600 transform transition-transform duration-200"
                    :class="{'rotate-45': selected === 4}"
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke="currentColor"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>
            <div 
                id="faq4"
                class="pb-4"
                x-show="selected === 4"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
            >
                <p class="text-gray-600">Yes, all our jewellery is made with genuine materials. We use BIS hallmarked gold and natural diamonds certified by international laboratories.</p>
            </div>
        </div>
    </div>
</div>
@endsection