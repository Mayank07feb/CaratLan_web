@include('components.shayaheader')

    <!-- Promotional Banner -->
    <div class="bg-emerald-50 py-4">
        <div class="max-w-7xl flex flex-row mx-auto px-4">
            <div class="bg-transparent rounded-lg p-6 shadow-sm">
                <h2 class="text-2xl font-semibold mb-4">Great to see you here...</h2>
                <p class="text-gray-600 mb-4">
                    If you're looking for unique handcrafted jewelry for the festive season, 
                    you've come to the right place. We've got everything you're looking for.
                </p>
                <div class="space-y-2">
                    <p class="font-medium">Offer 1: <span class="text-emerald-600">Extra 10% Off</span> on purchases above ₹5,000</p>
                    <p class="font-medium">Offer 2: <span class="text-emerald-600">Extra 20% Off</span> on purchases above ₹10,000</p>
                </div>
                <p class="mt-4 text-sm text-gray-500">Applicable only on selected jewelry. T&C Apply.</p>
            </div>
            <div class="flex flex-row">
                <div><img src="{{asset('asset/img/shaya3.jpg')}}" alt=""></div>
                <div><img src="{{asset('asset/img/shaya3.jpg')}}" alt=""></div>
            </div>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="max-w-7xl flex flex-row mx-auto px-4">
            
            <div class="flex flex-row">
                <div><img src="{{asset('asset/img/shaya3.jpg')}}" alt=""></div>
                <div><img src="{{asset('asset/img/shaya3.jpg')}}" alt=""></div>
            </div>
            <div>
                <img src="{{asset('asset/img/shaya-img3.jpg')}}" alt="">
            </div>
        </div>
    </div>

     <!-- Product Grid -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Product Card 1 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Garden of Love Choker" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Garden of Love Choker in Gold Plated 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹9,000</p>
                        <p class="text-sm text-gray-500 line-through">₹10,000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Feeling Sundar Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Feeling Sundar Oxidised Collar Necklace in 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹12,400</p>
                        <p class="text-sm text-gray-500 line-through">₹13,500</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Bridechilla Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Bridechilla Necklace in Gold Plated 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹15,750</p>
                        <p class="text-sm text-gray-500 line-through">₹17,500</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="group relative">
            <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                <img src="{{asset('asset/img/earing.jpg')}}" alt="Athena's Naari Necklace" class="w-full h-full object-cover object-center">
                <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                    <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                </button>
            </div>
            <div class="mt-4">
                <h3 class="text-sm text-gray-700">Athena's Naari Necklace in Oxidised 925 Silver</h3>
                <div class="mt-2 flex justify-between items-center">
                    <div>
                        <p class="text-sm font-medium text-gray-900">₹11,700</p>
                        <p class="text-sm text-gray-500 line-through">₹13,000</p>
                    </div>
                </div>
            </div>
        </div>

  
    </div>
</main>

 <!-- Product Grid -->
 <div class="max-w-7xl mx-auto px-4 py-12">
    <div class="max-w-7xl flex flex-row mx-auto px-4">
        
        <div>
            <img src="{{asset('asset/img/shaya-img3.jpg')}}" alt="">
        </div>
        <div class="flex flex-row">
            <div><img src="{{asset('asset/img/shaya3.jpg')}}" alt=""></div>
            <div><img src="{{asset('asset/img/shaya3.jpg')}}" alt=""></div>
        </div>
        
    </div>
</div>



 <!-- Product Grid -->
 <div class="max-w-7xl mx-auto px-4 py-12">
    <div class="max-w-7xl flex flex-row mx-auto px-4">
        
       
        <div class="flex flex-row">
            <div><img src="{{asset('asset/img/shaya3.jpg')}}" alt=""></div>
            <div><img src="{{asset('asset/img/shaya3.jpg')}}" alt=""></div>
        </div>
        <div>
            <img src="{{asset('asset/img/shaya-img3.jpg')}}" alt="">
        </div>
    </div>
</div>

    <!-- Product Grid -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            <div class="group relative">
                <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                    <img src="{{asset('asset/img/earing.jpg')}}" alt="Garden of Love Choker" class="w-full h-full object-cover object-center">
                    <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                        <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                    </button>
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700">Garden of Love Choker in Gold Plated 925 Silver</h3>
                    <div class="mt-2 flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-900">₹9,000</p>
                            <p class="text-sm text-gray-500 line-through">₹10,000</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Product Card 2 -->
            <div class="group relative">
                <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                    <img src="{{asset('asset/img/earing.jpg')}}" alt="Feeling Sundar Necklace" class="w-full h-full object-cover object-center">
                    <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                        <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                    </button>
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700">Feeling Sundar Oxidised Collar Necklace in 925 Silver</h3>
                    <div class="mt-2 flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-900">₹12,400</p>
                            <p class="text-sm text-gray-500 line-through">₹13,500</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Product Card 3 -->
            <div class="group relative">
                <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                    <img src="{{asset('asset/img/earing.jpg')}}" alt="Bridechilla Necklace" class="w-full h-full object-cover object-center">
                    <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                        <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                    </button>
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700">Bridechilla Necklace in Gold Plated 925 Silver</h3>
                    <div class="mt-2 flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-900">₹15,750</p>
                            <p class="text-sm text-gray-500 line-through">₹17,500</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Product Card 4 -->
            <div class="group relative">
                <div class="aspect-w-3 aspect-h-3 rounded-lg overflow-hidden bg-gray-100 h-64">
                    <img src="{{asset('asset/img/earing.jpg')}}" alt="Athena's Naari Necklace" class="w-full h-full object-cover object-center">
                    <button class="absolute top-4 right-4 p-2 rounded-full bg-white/80 hover:bg-white">
                        <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                    </button>
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700">Athena's Naari Necklace in Oxidised 925 Silver</h3>
                    <div class="mt-2 flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-900">₹11,700</p>
                            <p class="text-sm text-gray-500 line-through">₹13,000</p>
                        </div>
                    </div>
                </div>
            </div>
    
      
        </div>
    </main>
    
@include('components.shayafooter')