@include('components.shayaheader')
{{-- BANNER --}}
<main class="flex flex-col md:flex-row h-auto overflow-hidden">
    <!-- First Section: Image on the Left (Mobile: Full Width, Desktop: Half Width) -->
    <section class="w-full md:w-1/2 mx-4 py-4">
        <img src="{{ asset('asset/img/shaya.jpg') }}" alt="Model wearing jewelry" class="object-cover rounded-lg shadow-md" />
    </section>

    <!-- Second Section: Image on the Right (Mobile: Full Width, Desktop: Half Width) -->
    <section class="w-full md:w-1/2 flex items-center justify-center bg-white p-4 md:p-8">
        <img src="{{ asset('asset/img/shaya-banner.jpg') }}" alt="Jewelry display" class="rounded-lg shadow-md" />
    </section>
</main>

{{-- VIDEO --}}
<main class="flex flex-col md:flex-row h-auto overflow-hidden mt-12">
    <!-- Left Section: Image 1 -->
    <section class="w-full md:w-1/2 flex items-center justify-center bg-white p-4 sm:p-8">
        <img src="{{ asset('asset/img/shaya-video.gif') }}" 
             alt="Jewelry display" 
             class="w-full h-auto object-contain" />
    </section>
    
    <!-- Right Section: Image 2 -->
    <section class="w-full md:w-1/2 flex items-center justify-center bg-white p-4 sm:p-8">
        <img src="{{ asset('asset/img/shaya-v-text.jpg') }}" 
             alt="Jewelry display" 
             class="w-full h-auto object-contain" />
    </section>
</main>

<main class="flex flex-col md:flex-row h-auto overflow-hidden mt-12">
    <!-- Left Section: Image 1 (Model wearing jewelry) -->
    <section class="w-full md:w-1/2 px-4 sm:px-8 py-4">
       <a href="{{route('shayadetail')}}"> <img src="{{ asset('asset/img/shaya-img3.jpg') }}"</a> 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-lg" />
    </section>

    <!-- Right Section: Image 2 (Jewelry display gif) -->
    <section class="w-full md:w-1/2 flex items-center justify-center bg-white p-4 sm:p-8">
        <img src="{{ asset('asset/img/shaya gif.gif') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto object-contain rounded-lg shadow-lg" />
    </section>
</main>

{{--  --}}
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Everyday Queen Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[400px]">
                <img src="{{asset('asset/img/shaya1.jpg')}}" 
                     alt="A stylish model showcasing the Everyday Queen Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">To the Everyday Queen</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm text-gray-700">Celebrate your everyday elegance with our unique styles.</p>
            </div>
        </div>

        <!-- Shaadi Squad Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[400px]">
                <img src="{{asset('asset/img/shaya2.jpg')}}" 
                     alt="A vibrant display of the Shaadi Squad Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">Shaadi Squad</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm text-gray-700">Join the celebration with vibrant outfits perfect for every occasion.</p>
            </div>
        </div>
    </div>
</section>


{{-- 
 --}}
 <main class="flex flex-col md:flex-row h-auto overflow-hidden mt-12">
    <!-- Left Section: Model wearing jewelry -->
    <section class="w-full md:w-1/2 mx-4 sm:mx-8 py-4">
        <img src="{{ asset('asset/img/shaya3.jpg') }}" 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-lg"/>
    </section>

    <!-- Right Section: Jewelry Display with Heading -->
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-6 sm:p-8">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-800 text-center -mb-4 sm:mb-6">
            Rani Udaymati
        </h1>
        <img src="{{ asset('asset/img/shaya4.jpg') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto object-contain rounded-lg shadow-lg" />
    </section>
</main>

{{--  --}}
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Everyday Queen Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[400px]">
                <img src="{{asset('asset/img/shaya5.jpg')}}" 
                     alt="A stylish model showcasing the Everyday Queen Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800">To the Everyday Queen</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Celebrate your everyday elegance with our unique styles.</p>
            </div>
        </div>

        <!-- Shaadi Squad Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[400px]">
                <img src="{{asset('asset/img/shaya6.jpg')}}" 
                     alt="A vibrant display of the Shaadi Squad Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800">Shaadi Squad</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Join the celebration with vibrant outfits perfect for every occasion.</p>
            </div>
        </div>
    </div>
</section>

<main class="flex flex-col md:flex-row h-auto overflow-hidden mt-12">
    <section class="w-full md:w-1/2 mx-4 sm:mx-8 py-4">
        <img src="{{ asset('asset/img/shaya7.jpg') }}" 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-lg"/>
    </section>
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-6 sm:p-8">
        <h1 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 -mb-4 sm:mb-6">
            KOLKATA
        </h1>
        <img src="{{ asset('asset/img/shaya8.jpg') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto object-contain rounded-lg shadow-lg"/>
    </section>
</main>

{{-- ugy --}}
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Everyday Queen Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[400px]">
                <img src="{{asset('asset/img/shaya5.jpg')}}" 
                     alt="A stylish model showcasing the Everyday Queen Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800">To the Everyday Queen</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Celebrate your everyday elegance with our unique styles.</p>
            </div>
        </div>

        <!-- Shaadi Squad Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[400px]">
                <img src="{{asset('asset/img/shaya6.jpg')}}" 
                     alt="A vibrant display of the Shaadi Squad Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800">Shaadi Squad</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Join the celebration with vibrant outfits perfect for every occasion.</p>
            </div>
        </div>
    </div>
</section>

<main class="flex flex-col md:flex-row h-auto overflow-hidden mt-12">
    <section class="w-full md:w-1/2 mx-4 sm:mx-8 py-4">
        <img src="{{ asset('asset/img/shaya7.jpg') }}" 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-lg"/>
    </section>
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-6 sm:p-8">
        <h1 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 -mb-4 sm:mb-6">
            KOLKATA
        </h1>
        <img src="{{ asset('asset/img/shaya8.jpg') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto object-contain rounded-lg shadow-lg"/>
    </section>
</main>

{{--  --}}
<main class="flex flex-col md:flex-row h-auto overflow-hidden mt-12">
    <!-- Left Section with Image -->
    <section class="w-full md:w-1/2 mx-4 sm:mx-8 py-4">
        <img src="{{ asset('asset/img/shaya11.jpg') }}" 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-lg"/>
    </section>

    <!-- Right Section with Text and Image -->
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-6 sm:p-8">
        <!-- Text Section -->
        <p class="text-md text-gray-700 text-center font-medium mb-2">Own your</p>
        <h1 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 -mb-4 sm:mb-6">plumes</h1>

        <!-- Image Section -->
        <img src="{{ asset('asset/img/shaya12.jpg') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto object-contain rounded-lg shadow-lg"/>
    </section>
</main>

{{--  --}}
<main class="flex flex-col md:flex-row h-auto overflow-hidden mt-12">
    <!-- Left Section with Image -->
    <section class="w-full md:w-1/2 mx-4 sm:mx-8 py-4">
        <img src="{{ asset('asset/img/shaya11.jpg') }}" 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-lg"/>
    </section>

    <!-- Right Section with Text and Image -->
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-6 sm:p-8">
        <!-- Text Section -->
        <p class="text-md text-gray-700 text-center font-medium mb-2">Own your</p>
        <h1 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 -mb-4 sm:mb-6">plumes</h1>

        <!-- Image Section -->
        <img src="{{ asset('asset/img/shaya12.jpg') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto object-contain rounded-lg shadow-lg"/>
    </section>
</main>

{{--  --}}
<main class="flex flex-col md:flex-row h-auto overflow-hidden mt-12">
    <!-- Left Section with Image -->
    <section class="w-full md:w-1/2 mx-4 sm:mx-8 py-4">
        <img src="{{ asset('asset/img/shaya11.jpg') }}" 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-lg"/>
    </section>

    <!-- Right Section with Text and Image -->
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-6 sm:p-8">
        <!-- Text Section -->
        <p class="text-md text-gray-700 text-center font-medium mb-2">Own your</p>
        <h1 class="text-3xl sm:text-4xl font-bold text-center text-gray-800 -mb-4 sm:mb-6">plumes</h1>

        <!-- Image Section -->
        <img src="{{ asset('asset/img/shaya12.jpg') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto object-contain rounded-lg shadow-lg"/>
    </section>
</main>


{{--  --}}
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Everyday Queen Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[300px] sm:h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya5.jpg')}}" 
                     alt="A stylish model showcasing the Everyday Queen Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-4 text-center">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">To the Everyday Queen</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Celebrate your everyday elegance with our unique styles.</p>
            </div>
        </div>

        <!-- Shaadi Squad Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[300px] sm:h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya6.jpg')}}" 
                     alt="A vibrant display of the Shaadi Squad Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-4 text-center">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">Shaadi Squad</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Join the celebration with vibrant outfits perfect for every occasion.</p>
            </div>
        </div>
    </div>
</section>


{{--  --}}
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Everyday Queen Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[300px] sm:h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya5.jpg')}}" alt="A stylish model showcasing the Everyday Queen Collection" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">To the Everyday Queen</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Celebrate your everyday elegance with our unique styles.</p>
            </div>
        </div>

        <!-- Shaadi Squad Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[300px] sm:h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya6.jpg')}}" alt="A vibrant display of the Shaadi Squad Collection" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">Shaadi Squad</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Join the celebration with vibrant outfits perfect for every occasion.</p>
            </div>
        </div>
    </div>
</section>


{{--  --}}
<main class="flex flex-col md:flex-row h-full overflow-hidden mt-12">
    <!-- Left Section with Image -->
    <section class="w-full md:w-1/2 mx-8 py-2">
        <img src="{{ asset('asset/img/shaya11.jpg') }}" alt="Model wearing jewelry" class="w-full h-full object-cover rounded-lg shadow-lg"/>
    </section>

    <!-- Right Section with Text and Image -->
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-8">
        <p class="text-lg sm:text-xl text-gray-600">Own your</p>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-800 mt-2 text-center -pl-8 sm:pl-0">
            plumes
        </h1>
        <img src="{{ asset('asset/img/shaya12.jpg') }}" alt="Jewelry display" class="max-w-full h-auto mt-6"/>
    </section>
</main>

{{--  --}}
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Everyday Queen Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya5.jpg')}}" 
                     alt="A stylish model showcasing the Everyday Queen Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">To the Everyday Queen</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Celebrate your everyday elegance with our unique styles.</p>
            </div>
        </div>

        <!-- Shaadi Squad Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya6.jpg')}}" 
                     alt="A vibrant display of the Shaadi Squad Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">Shaadi Squad</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Join the celebration with vibrant outfits perfect for every occasion.</p>
            </div>
        </div>
    </div>
</section>

{{--  --}}
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Everyday Queen Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya5.jpg')}}" alt="A stylish model showcasing the Everyday Queen Collection" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">To the Everyday Queen</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Celebrate your everyday elegance with our unique styles.</p>
            </div>
        </div>

        <!-- Shaadi Squad Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya6.jpg')}}" alt="A vibrant display of the Shaadi Squad Collection" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-medium text-gray-800">Shaadi Squad</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Join the celebration with vibrant outfits perfect for every occasion.</p>
            </div>
        </div>
    </div>
</section>

{{--  --}}
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Everyday Queen Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya5.jpg')}}" 
                     alt="A stylish model showcasing the Everyday Queen Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">To the Everyday Queen</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Celebrate your everyday elegance with our unique styles.</p>
            </div>
        </div>

        <!-- Shaadi Squad Collection -->
        <div class="relative group cursor-pointer flex flex-col items-center">
            <div class="overflow-hidden rounded-lg w-full h-[350px] md:h-[400px]">
                <img src="{{asset('asset/img/shaya6.jpg')}}" 
                     alt="A vibrant display of the Shaadi Squad Collection" 
                     class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105"/>
                <div class="absolute inset-0 border-4 border-teal-200 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="mt-6 text-center px-4">
                <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">Shaadi Squad</h2>
                <div class="mt-2 w-24 h-0.5 bg-teal-200 mx-auto"></div>
                <p class="mt-2 text-sm sm:text-base text-gray-700">Join the celebration with vibrant outfits perfect for every occasion.</p>
            </div>
        </div>
    </div>
</section>

{{--  --}}
<main class="flex flex-col md:flex-row h-full overflow-hidden mt-12">
    <!-- Left Section: Image -->
    <section class="w-full md:w-1/2 mx-4 md:mx-8 py-2">
        <img src="{{ asset('asset/img/shaya11.jpg') }}" 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-md"/>
    </section>

    <!-- Right Section: Text and Image -->
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-6 md:p-8">
        <p class="text-normal text-md text-gray-600">Own your</p>
        <h1 class="text-4xl sm:text-5xl font-bold text-center text-gray-800 mt-2">
            plumes
        </h1>
        <img src="{{ asset('asset/img/shaya12.jpg') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto mt-4 md:mt-8 rounded-lg shadow-md"/>
    </section>
</main>

{{--  --}}
<main class="flex flex-col md:flex-row h-full overflow-hidden mt-12">
    <!-- Left Section: Image -->
    <section class="w-full md:w-1/2 mx-4 md:mx-8 py-2">
        <img src="{{ asset('asset/img/shaya11.jpg') }}" 
             alt="Model wearing jewelry" 
             class="w-full h-full object-cover rounded-lg shadow-lg"/>
    </section>

    <!-- Right Section: Text and Image -->
    <section class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white p-6 md:p-8">
        <p class="text-normal text-md text-gray-600">Own your</p>
        <h1 class="text-4xl sm:text-5xl font-bold text-center text-gray-800 mt-2">
            plumes
        </h1>
        <img src="{{ asset('asset/img/shaya12.jpg') }}" 
             alt="Jewelry display" 
             class="max-w-full h-auto mt-4 md:mt-8 rounded-lg shadow-lg"/>
    </section>
</main>












<!-- Categories Carousel -->
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="relative">
        <div class="flex space-x-4 overflow-hidden">
            <div class="slider flex transition-transform duration-300" id="slider">
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Coins" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Coins And Articles</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Earrings" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Earrings</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Necklaces" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Necklaces</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Bracelets" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Bracelets</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Rings" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Rings</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Bracelets" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Bracelets</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Rings" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Rings</p>
                    </div>
                </div><div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Bracelets" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Bracelets</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Rings" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Rings</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="More Jewellery" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">More Jewellery</p>
                    </div>
                </div>
                <div class="flex-none w-40">
                    <div class="relative">
                        <img src="{{asset('asset/img/ss1.png')}}" alt="Our Stores" class="w-40 h-40 rounded-full object-cover"/>
                        <p class="text-center mt-2">Our Stores</p>
                    </div>
                </div>
            </div>
        </div>
        <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-2 rounded-full focus:outline-none">‹</button>
        <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-2 rounded-full focus:outline-none">›</button>
    </div>
</div>
<script>
    const slider = document.getElementById('slider');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');
    let slideIndex = 0;
    const slidesToShow = 3; // Number of slides to show at a time
    const totalSlides = slider.children.length;

    function updateSliderPosition() {
        const slideWidth = slider.children[0].clientWidth;
        slider.style.transform = `translateX(${-slideIndex * slideWidth}px)`;
    }

    nextButton.addEventListener('click', () => {
        if (slideIndex < totalSlides - slidesToShow) {
            slideIndex++;
            updateSliderPosition();
        }
    });

    prevButton.addEventListener('click', () => {
        if (slideIndex > 0) {
            slideIndex--;
            updateSliderPosition();
        }
    });

    window.addEventListener('resize', updateSliderPosition);
</script>


<!-- Features Section -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div>
                <i class="fas fa-undo text-3xl mb-4"></i>
                <h3 class="font-medium">15-Day Return & Exchange</h3>
                <p class="text-gray-500 text-sm">(No questions asked)</p>
            </div>
            <div>
                <i class="fas fa-medal text-3xl mb-4"></i>
                <h3 class="font-medium">925 Sterling Silver</h3>
                <p class="text-gray-500 text-sm">(Tested and Stamped, yep!)</p>
            </div>
            <div>
                <i class="fas fa-shield-alt text-3xl mb-4"></i>
                <h3 class="font-medium">Always Cadmium Free</h3>
                <p class="text-gray-500 text-sm">(Cuz safety over everything)</p>
            </div>
            <div>
                <i class="fas fa-truck text-3xl mb-4"></i>
                <h3 class="font-medium">Free & Insured Shipping</h3>
                <p class="text-gray-500 text-sm">(Free - atleast for now ;)</p>
            </div>
        </div>
    </div>
</div>

<!-- Social Media Banner -->
<div class="bg-black text-white py-8">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
        <h2 class="text-3xl font-bold text-teal-400">#SoShaya</h2>
        <div class="space-x-4">
            <a href="#" class="text-white hover:text-teal-400"><i class="fab fa-facebook-f text-2xl"></i></a>
            <a href="#" class="text-white hover:text-teal-400"><i class="fab fa-instagram text-2xl"></i></a>
        </div>
    </div>
</div>


@include('components.shayafooter')