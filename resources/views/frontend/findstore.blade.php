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

    <!-- City Selection -->
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4">
            <div class="flex flex-col items-center border border-violet-700 p-2 rounded-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <img src="{{asset('asset/img/p1.svg')}}" alt="" class="h-44">
                </div>
                <span class="mt-2">Mumbai</span>
                <span class="text-sm text-gray-500">23 STORES</span>
            </div>
            <div class="flex flex-col items-center border border-violet-700 p-2 rounded-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <img src="{{asset('asset/img/p2.svg')}}" alt="" class="h-44">
                </div>
                <span class="mt-2">Mumbai</span>
                <span class="text-sm text-gray-500">23 STORES</span>
            </div>
            <div class="flex flex-col items-center border border-violet-700 p-2 rounded-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <img src="{{asset('asset/img/p3.svg')}}" alt="" class="h-44">
                </div>
                <span class="mt-2">Mumbai</span>
                <span class="text-sm text-gray-500">23 STORES</span>
            </div>
            <div class="flex flex-col items-center border border-violet-700 p-2 rounded-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <img src="{{asset('asset/img/p4.svg')}}" alt="" class="h-44">
                </div>
                <span class="mt-2">Mumbai</span>
                <span class="text-sm text-gray-500">23 STORES</span>
            </div>
            <div class="flex flex-col items-center border border-violet-700 p-2 rounded-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <img src="{{asset('asset/img/p5.svg')}}" alt="" class="h-44">
                </div>
                <span class="mt-2">Mumbai</span>
                <span class="text-sm text-gray-500">23 STORES</span>
            </div>
            <div class="flex flex-col items-center border border-violet-700 p-2 rounded-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <img src="{{asset('asset/img/p6.svg')}}" alt="" class="h-44">
                </div>
                <span class="mt-2">Mumbai</span>
                <span class="text-sm text-gray-500">23 STORES</span>
            </div>
            <div class="flex flex-col items-center border border-violet-700 p-2 rounded-lg">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <img src="{{asset('asset/img/p7.svg')}}" alt="" class="h-44">
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
                <img src="{{asset('asset/img/OLDGOLD_Desktop.png')}}" alt="Gold Exchange" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold mb-2">Old Gold Exchange</h3>
                    <p class="text-gray-600">It can be any gold jewellery</p>
                    <button class="mt-4 bg-purple-600 text-white px-6 py-2 rounded-full justify-center">Find Store</button>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{asset('asset/img/BUYONLINE_Desktop.png')}}" alt="Gold Exchange" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold mb-2">Old Gold Exchange</h3>
                    <p class="text-gray-600">It can be any gold jewellery</p>
                    <button class="mt-4 bg-purple-600 text-white px-6 py-2 rounded-full justify-center">Find Store</button>
                </div>
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{asset('asset/img/INSTORE_Desktop.png')}}" alt="Gold Exchange" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold mb-2">Old Gold Exchange</h3>
                    <p class="text-gray-600">It can be any gold jewellery</p>
                    <button class="mt-4 bg-purple-600 text-white px-6 py-2 rounded-full justify-center">Find Store</button>
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
                <img src="{{asset('asset/img/sapna1.png')}}" alt="New Store" class="rounded-lg">
                <div class="flex flex-col justify-center p-4 ">
                    <h3 class="text-xl font-semibold mb-2">Sapna Sangeeta Road</h3>
                    <p class="text-gray-600 mb-2">Store Hours: 10:00 A.M - 9:00 P.M</p>
                    <p class="text-gray-600 mb-2">276 Google Reviews</p>
                    <p class="text-gray-600 mb-2">View Store Details</p>
                    <p class="text-gray-600 mb-2">G-2, Plot No. 22, K.S. Heights, Scheme No. 31, Root No. 6-7 Sneh Nagar,<br>
                    Sapna-Sangeeta Main Road, Indore, 452001</p>
                    <p class="text-gray-600 mb-2">Phone: 022 69198758</p>
                    <p class="text-gray-600 mb-4">STORE HOURS: 11:00 A.M. - 9:00 P.M.</p>
                
                    <div class="flex space-x-4">
                        <button class="bg-purple-100 text-purple-600 px-6 py-2 rounded">BOOK A VISIT</button>
                        <button class="bg-purple-600 text-white px-6 py-2 rounded">VIEW ALL DESIGNS</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
{{-- Question --}}
<div class="flex flex-row gap-8 p-4 max-w-7xl mx-auto">
    <div class="max-w-3xl">
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
    <div class="space-y-4" x-data="{ selected: null } p-4">
        <!-- Question 1 -->
        <div class="border-b border-gray-200">
            <button 
                class="w-full flex justify-between items-center py-4 text-left focus:outline-none"
                @click="selected !== 1 ? selected = 1 : selected = null"
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