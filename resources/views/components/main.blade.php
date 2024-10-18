<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giritra Jewellers</title>
    {{-- icons Arrow --}}
    <link rel="stylesheet" href="path/to/vamtam-icons.css">

    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Drift CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/drift-zoom@1.0.0/dist/drift-basic.min.css">

    <!-- If using Vite, include the Vite directive -->
    @vite('resources/css/app.css')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Glide.js JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Glide.js CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css" rel="stylesheet">
    {{-- icon  --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- jQuery (Owl Carousel requires jQuery) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.6/dist/tailwind.min.css" rel="stylesheet">
</head>

<body style="font-family: InterMedium, 'Helvetica Neue', Helvetica, Arial, sans-serif;">

    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 flex items-center justify-center bg-white bg-opacity-70 z-50">
        <div
            class="animate-spin rounded-full h-24 w-24 border-t-4 border-b-4 border-transparent flex items-center justify-center">
            <img src="{{ asset('asset/img/loader.png') }}" alt="Logo" class="h-16 w-16">
        </div>
    </div>


    <!-- Include the header -->
    @include('components.header')

    <!-- Content Section -->
    @yield('content')

    <!-- Include the footer -->
    @include('components.footer')

    <!-- Include JS files -->
    <script src="{{ asset('js/app.js') }}"></script>

    <div class="fixed bottom-5 right-5 flex flex-col items-center z-50">
        <!-- Hamburger button -->
        <button id="menu-toggle"
            class="bg-purple-500 text-white w-12 h-12 rounded-full shadow-lg hover:bg-purple-600 transition-all flex items-center justify-center relative"
            aria-expanded="false" aria-label="Open menu">
            <span id="icon" class="material-icons">phone</span>
            <!-- Close button -->
            <span id="x-icon"
                class="material-icons bg-white text-black w-12 h-12 rounded-full shadow-lg hover:bg-gray-200 transition-all flex items-center justify-center border border-gray-300 hidden">
                close
            </span>
        </button>

        <!-- Menu -->
        <div id="menu"
            class="hidden flex-col space-y-4 mt-4 mb-16 w-[200px] transform translate-x-full transition-transform duration-500 ease-in-out origin-bottom-right absolute bottom-0 right-0">
            <!-- Talk to our Experts Button -->
            <button
                class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg bg-white text-pink-500 border border-gray-200 shadow-md transition-shadow hover:bg-gray-50 hover:shadow-lg w-full">
                <i class="fas fa-phone text-pink-500"></i>
                <span class="text-sm font-medium">Talk to our Experts</span>
            </button>

            <!-- Live Video Call Button -->
            <button
                class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg bg-white text-purple-900 border border-gray-200 shadow-md transition-shadow hover:bg-gray-50 hover:shadow-lg w-full">
                <i class="fas fa-video text-purple-900"></i>
                <span class="text-sm font-medium">Live Video Call</span>
            </button>

            <!-- Book a Store Visit Button -->
            <button
                class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg bg-white text-orange-600 border border-gray-200 shadow-md transition-shadow hover:bg-gray-50 hover:shadow-lg w-full">
                <i class="fas fa-store text-orange-600"></i>
                <span class="text-sm font-medium">Book a Store Visit</span>
            </button>

            <!-- Book Try At Home Button -->
            <button
                class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg bg-white text-blue-600 border border-gray-200 shadow-md transition-shadow hover:bg-gray-50 hover:shadow-lg w-full">
                <i class="fas fa-home text-blue-600"></i>
                <span class="text-sm font-medium">Book Try At Home</span>
            </button>

            <!-- Chat on Whatsapp Button -->
            <button
                class="flex items-center justify-center space-x-2 px-4 py-3 rounded-lg bg-white text-green-600 border border-gray-200 shadow-md transition-shadow hover:bg-gray-50 hover:shadow-lg w-full">
                <i class="fab fa-whatsapp text-green-600"></i>
                <span class="text-sm font-medium">Chat on Whatsapp</span>
            </button>
        </div>
    </div>

    <!-- Overlay background -->
    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div>

    <script>
        window.addEventListener('load', function () {
            const preloader = document.getElementById('preloader');
            preloader.style.display = 'none';

            // Ensure menu is hidden on load
            const menu = document.getElementById('menu');
            const icon = document.getElementById('icon');
            const xIcon = document.getElementById('x-icon');
            const toggleButton = document.getElementById('menu-toggle');

            menu.classList.add('hidden', 'translate-x-full'); // Make sure it's hidden initially
            icon.classList.remove('hidden');
            xIcon.classList.add('hidden');
            toggleButton.setAttribute('aria-expanded', 'false'); // Set correct initial aria state
        });

        const toggleButton = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');
        const overlay = document.getElementById('overlay');
        const icon = document.getElementById('icon');
        const xIcon = document.getElementById('x-icon');

        const toggleMenu = () => {
            const expanded = toggleButton.getAttribute('aria-expanded') === 'true';

            if (!expanded) {
                menu.classList.remove('hidden');
                // Short delay to ensure smooth sliding effect
                setTimeout(() => menu.classList.remove('translate-x-full'), 10);
            } else {
                menu.classList.add('translate-x-full');
                // Match duration with transition time before hiding
                setTimeout(() => menu.classList.add('hidden'), 500);
            }

            // Toggle overlay visibility and icon
            overlay.classList.toggle('hidden', expanded);
            icon.classList.toggle('hidden', !expanded);
            xIcon.classList.toggle('hidden', expanded);
            toggleButton.setAttribute('aria-expanded', !expanded);
        };

        toggleButton.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);
    </script>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Drift JS -->
    <script src="https://cdn.jsdelivr.net/npm/drift-zoom@1.0.0/dist/drift.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
