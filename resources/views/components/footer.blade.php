{{-- #Web Footer --}}

<footer class="bg-[#f6eff6] text-gray-600 py-8 font-sans hidden md:block">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-2">
            <div class="col-span-2">
                <div class="flex flex-col md:flex-row md:space-x-8">
                    <div class="w-full">
                        <h3 class="font-semibold mb-4">Know Your Jewellery</h3>
                        <ul class="space-y-2 text-sm">


                            <li><a href="{{ route('daimondguide,') }}" class="hover:text-caratlane-purple">Diamond
                                    guide</a></li>
                            <li><a href="{{ route('jewelleryguide') }}" class="hover:text-caratlane-purple">Jewellery
                                    guide</a></li>
                            <li><a href="#" class="hover:text-caratlane-purple">Gemstones guide</a></li>
                            <li><a href="#" class="hover:text-caratlane-purple">Gold rate</a></li>
                            <li><a href="#" class="hover:text-caratlane-purple">Egold</a></li>

                            <li><a href="#" class="hover:text-caratlane-purple">Ear piercing</a></li>
                            <li><a href="{{route('glosarry')}}" class="hover:text-caratlane-purple">Glossary</a></li>
                        </ul>
                    </div>
                    <div class="w-full">
                        <h3 class="font-semibold mb-4">CaratLane Advantage</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{route('policy')}}" class="hover:text-caratlane-purple">15-day returns</a></li>
                            <li><a href="{{route('shipping')}}" class="hover:text-caratlane-purple">Free shipping</a></li>
                            <li><a href="{{route('postcard')}}" class="hover:text-caratlane-purple">Postcards</a></li>
                            <li><a href="{{route('goldrate')}}" class="hover:text-caratlane-purple">Gold exchange</a></li>
                            <li><a href="{{route('wearyourwins')}}" class="hover:text-caratlane-purple">#Wearyourwins</a></li>
                        </ul>
                    </div>
                </div>
                <div class="max-w-[350px] mt-20">
                    <div class="bg-gradient-to-r from-[#f6eff6] via-[#f0caf0] to-[#ecb7ec] p-4 rounded-lg shadow-lg">
                        <h3 class="text-lg font-bold text-gray-800 text-left">Download the CaratLane App</h3>
                        <p class="text-xs text-gray-600 mt-1 text-left">Shop & Save more on app by redeeming xCLusive
                            points</p>
                        <div class="flex space-x-2 mt-4">
                            <a href="#" class="block">
                                <img src="https://via.placeholder.com/120x35/000000/FFFFFF/?text=App+Store"
                                    alt="App Store" class="h-10 rounded-lg" />
                            </a>
                            <a href="#" class="block">
                                <img src="https://via.placeholder.com/135x40/000000/FFFFFF/?text=Google+Play"
                                    alt="Google Play" class="h-10 rounded-lg" />
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <h3 class="font-semibold mb-4">Customer Service</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{route('policy')}}" class="hover:text-caratlane-purple">Return policy</a></li>
                    <li><a href="{{route('order')}}" class="hover:text-caratlane-purple">Order status</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-4">About Us</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{route('ourstory')}}" class="hover:text-caratlane-purple">Our story</a></li>
                    <li><a href="{{route('press')}}" class="hover:text-caratlane-purple">Press</a></li>
                    <li><a href="{{ route('blogs') }}" class="hover:text-caratlane-purple">Blog</a></li>
                    <li><a href="#" class="hover:text-caratlane-purple">Careers</a></li>
                </ul>
            </div>
            <div class="">
                <h3 class="font-semibold mb-4">Contact Us</h3>
                <p class="mb-4 text-sm">CaratLane Trading Pvt Ltd</p>
                <p class="mb-4 text-sm">No:727, 1st Floor, TIL Park Anna Salai,<br />Pathari Road, Thousand
                    Lights,<br />Chennai,<br />Tamil Nadu 600006.</p>
                <h4 class="font-semibold mt-6 mb-2 text-sm">24X7 ENQUIRY SUPPORT ( ALL DAYS )</h4>
                <ul class="space-y-2 text-sm">
                    <li>General: <a href="mailto:contactus@caratlane.com"
                            class="text-[#de57e5]">contactus@caratlane.com</a></li>
                    <li>Corporate: <a href="mailto:b2b@caratlane.com" class="text-[#de57e5]">b2b@caratlane.com</a></li>
                    <li>HR: <a href="mailto:careers@caratlane.com" class="text-[#de57e5]">careers@caratlane.com</a></li>
                    <li>Grievance: <a href="#" class="text-[#de57e5]">click here</a></li>
                </ul>
                <div class="max-w-md mt-8">
                    <div class="flex justify-around mb-6">
                        <a href="#" class="flex flex-col items-center text-center">
                            <div class="bg-purple-50 p-2 rounded-lg">
                                <i class="fas fa-phone-alt text-[#2e0a46] text-xl"></i>
                            </div>
                            <span class="mt-2 text-sm text-[#2e0a46]">Call Us</span>
                        </a>
                        <a href="#" class="flex flex-col items-center text-center">
                            <div class="bg-purple-50 p-2 rounded-lg">
                                <i class="fas fa-comments text-[#2e0a46] text-xl"></i>
                            </div>
                            <span class="mt-2 text-sm text-[#2e0a46]">Chat</span>
                        </a>
                        <a href="#" class="flex flex-col items-center text-center">
                            <div class="bg-purple-50 p-2 rounded-lg">
                                <i class="fab fa-whatsapp text-[#2e0a46] text-xl"></i>
                            </div>
                            <span class="mt-2 text-sm text-[#2e0a46]">WhatsApp</span>
                        </a>
                        <a href="#" class="flex flex-col items-center text-center">
                            <div class="bg-purple-50 p-2 rounded-lg">
                                <i class="fas fa-envelope text-[#2e0a46] text-xl"></i>
                            </div>
                            <span class="mt-2 text-sm text-[#2e0a46]">Email</span>
                        </a>
                    </div>

                    <div class="flex justify-start">
                        <a href="{{route('findstore')}}"
                            class="border border-[#de57e5] text-[#2e0a46] rounded-[10px] px-6 py-2 hover:bg-purple-50 hover:text-purple-700">
                            <i class="fas fa-store mr-2"></i> FIND A STORE
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="flex justify-between pt-2 px-10">
        <div class="left w-1/2">
            <h3 class="font-semibold mb-4 text-left">Find Us On</h3>
            <div class="flex space-x-3">
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-1 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10 transition duration-200 ease-in-out">
                    <!-- Reduced width and height -->
                    <i class="fab fa-instagram text-white text-lg"></i>
                </a>
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-1 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10 transition duration-200 ease-in-out">
                    <i class="fab fa-facebook-f text-white text-lg"></i>
                </a>
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-1 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10 transition duration-200 ease-in-out">
                    <i class="fab fa-linkedin-in text-white text-lg"></i>
                </a>
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-1 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10 transition duration-200 ease-in-out">
                    <i class="fas fa-map-marker-alt text-white text-lg"></i>
                </a>
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-1 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10 transition duration-200 ease-in-out">
                    <i class="fab fa-twitter text-white text-lg"></i>
                </a>
            </div>

        </div>
        <div class="right">
            <div class="max-w-lg mt-4">
                <div class="flex justify-between items-center space-x-8">
                    <div class="flex flex-col items-center">
                        <span class="material-icons text-gray-700 text-3xl">credit_card</span>
                        <span class="text-xs mt-1">Visa</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="material-icons text-gray-700 text-3xl">payment</span>
                        <span class="text-xs mt-1">MasterCard</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="material-icons text-gray-700 text-3xl">account_balance_wallet</span>
                        <span class="text-xs mt-1">PayPal</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="material-icons text-gray-700 text-3xl">card_membership</span>
                        <span class="text-xs mt-1">AmEx</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="material-icons text-gray-700 text-3xl">shopping_cart</span>
                        <span class="text-xs mt-1">Amazon</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="material-icons text-gray-700 text-3xl">star_rate</span>
                        <span class="text-xs mt-1">Bizrate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


{{-- #Mobile Footer  --}}

<footer class="bg-[#f6eff6] text-gray-600 py-8 font-sans block md:hidden">
    <div class="container mx-auto px-4">
        <div class="space-y-2">
            <!-- Accordion items -->
            <div class="border-b border-gray-200">
                <button class="w-full py-2 px-4 text-left font-semibold flex justify-between items-center"
                    onclick="toggleAccordion('jewellery')">
                    Know Your Jewellery
                    <span class="material-icons">add</span>
                </button>
                <div id="jewellery" class="hidden p-4 space-y-2 flex flex-col">
                    <a href="#" class="text-black hover:underline no-underline">DIAMOND GUIDE</a>
                    <a href="#" class="text-black hover:underline no-underline">JEWELLERY GUIDE</a>
                    <a href="#" class="text-black hover:underline no-underline">GEMSTONES GUIDE</a>
                    <a href="#" class="text-black hover:underline no-underline">Gold Rate</a>
                    <a href="#" class="text-black hover:underline no-underline">eGold</a>
                    <a href="#" class="text-black hover:underline no-underline">Ear Piercing</a>
                    <a href="#" class="text-black hover:underline no-underline">Glossary</a>
                </div>
            </div>



            <div class="border-b border-gray-200">
                <button class="w-full py-2 px-4 text-left font-semibold flex justify-between items-center"
                    onclick="toggleAccordion('advantage')">
                    CaratLane Advantage
                    <span class="material-icons">add</span>
                </button>
                <div id="advantage" class="hidden p-4 space-y-2 flex flex-col">
                    <a href="#" class="text-black hover:underline decoration-none">15-DAY RETURNS</a>
                    <a href="#" class="text-black hover:underline decoration-none">FREE SHIPPING</a>
                    <a href="#" class="text-black hover:underline decoration-none">POSTCARDS</a>
                    <a href="#" class="text-black hover:underline decoration-none">Gold Exchange</a>
                    <a href="#" class="text-black hover:underline decoration-none">#WearYourWins</a>
                </div>
            </div>


            <div class="border-b border-gray-200">
                <button class="w-full py-2 px-4 text-left font-semibold flex justify-between items-center"
                    onclick="toggleAccordion('customer-service')">
                    Customer Service
                    <span class="material-icons">add</span>
                </button>
                <div id="customer-service" class="hidden p-4 space-y-2 flex flex-col">
                    <a href="#" class="text-black hover:underline decoration-none">RETURN POLICY</a>
                    <a href="#" class="text-black hover:underline decoration-none">ORDER STATUS</a>
                </div>
            </div>

            <div class="border-b border-gray-200">
                <button class="w-full py-2 px-4 text-left font-semibold flex justify-between items-center"
                    onclick="toggleAccordion('about-us')">
                    About Us
                    <span class="material-icons">add</span>
                </button>
                <div id="about-us" class="hidden p-4 space-y-2 flex flex-col">
                    <a href="#" class="text-black hover:underline decoration-none">OUR STORY</a>
                    <a href="#" class="text-black hover:underline decoration-none">PRESS</a>
                    <a href="{{ route('blogs') }}" class="text-black hover:underline decoration-none">BLOG</a>
                    <a href="#" class="text-black hover:underline decoration-none">CAREERS</a>
                </div>
            </div>


            <div class="border-b border-gray-200">
                <button class="w-full py-2 px-4 text-left font-semibold flex justify-between items-center"
                    onclick="toggleAccordion('contact-us')">
                    Contact Us
                    <span class="material-icons">add</span>
                </button>
                <div id="contact-us" class="hidden p-4 space-y-2">
                    <div>
                        <p class="mb-4 text-sm">CaratLane Trading Pvt Ltd</p>
                        <p class="mb-4 text-sm">No:727, 1st Floor, TIL Park Anna Salai,<br />Pathari Road, Thousand
                            Lights,<br />Chennai,<br />Tamil Nadu 600006.</p>
                        <h4 class="font-semibold mt-6 mb-2 text-sm">24X7 ENQUIRY SUPPORT ( ALL DAYS )</h4>
                        <ul class="space-y-2 text-sm">
                            <li>General: <a href="mailto:contactus@caratlane.com"
                                    class="text-[#de57e5] hover:underline decoration-none">contactus@caratlane.com</a>
                            </li>
                            <li>Corporate: <a href="mailto:b2b@caratlane.com"
                                    class="text-[#de57e5] hover:underline decoration-none">b2b@caratlane.com</a></li>
                            <li>HR: <a href="mailto:careers@caratlane.com"
                                    class="text-[#de57e5] hover:underline decoration-none">careers@caratlane.com</a>
                            </li>
                            <li>Grievance: <a href="#"
                                    class="text-[#de57e5] hover:underline decoration-none">click here</a></li>
                        </ul>
                        <div class="max-w-md mt-4">
                            <div class="flex justify-start mb-4">
                                <a href="#" class="flex flex-col items-center text-left">
                                    <div class="bg-purple-50 p-1 rounded-lg">
                                        <i class="fas fa-phone-alt text-[#2e0a46] text-xl"></i>
                                    </div>
                                    <span class="mt-1 text-sm text-[#2e0a46]">Call Us</span>
                                </a>
                                <a href="#" class="flex flex-col items-center text-left ml-4">
                                    <div class="bg-purple-50 p-1 rounded-lg">
                                        <i class="fas fa-comments text-[#2e0a46] text-xl"></i>
                                    </div>
                                    <span class="mt-1 text-sm text-[#2e0a46]">Chat</span>
                                </a>
                                <a href="#" class="flex flex-col items-center text-left ml-4">
                                    <div class="bg-purple-50 p-1 rounded-lg">
                                        <i class="fab fa-whatsapp text-[#2e0a46] text-xl"></i>
                                    </div>
                                    <span class="mt-1 text-sm text-[#2e0a46]">WhatsApp</span>
                                </a>
                                <a href="#" class="flex flex-col items-center text-left ml-4">
                                    <div class="bg-purple-50 p-1 rounded-lg">
                                        <i class="fas fa-envelope text-[#2e0a46] text-xl"></i>
                                    </div>
                                    <span class="mt-1 text-sm text-[#2e0a46]">Email</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Find a Store button -->
        <div class="mt-6 flex justify-center">
            <a href="#"
                class="border border-[#de57e5] text-[#2e0a46] rounded-[10px] w-full px-6 py-2 flex items-center space-x-2 justify-center">
                <i class="fas fa-store"></i>
                <span>FIND A STORE</span>
            </a>
        </div>

        <!-- Download App Section -->
        <div class="mt-8 bg-gradient-to-r from-[#f6eff6] via-[#f0caf0] to-[#ecb7ec] p-4 rounded-lg shadow-lg">
            <h3 class="text-lg font-bold text-gray-800 text-center">Download the CaratLane App</h3>
            <p class="text-xs text-gray-600 mt-1 text-center">Shop & Save more on app by redeeming xCLusive points</p>
            <div class="flex justify-center space-x-2 mt-6">
                <a href="#" class="block">
                    <img src="https://via.placeholder.com/120x35/000000/FFFFFF/?text=App+Store" alt="App Store"
                        class="h-10 rounded-lg" />
                </a>
                <a href="#" class="block">
                    <img src="https://via.placeholder.com/135x40/000000/FFFFFF/?text=Google+Play" alt="Google Play"
                        class="h-10 rounded-lg" />
                </a>
            </div>
        </div>


        <!-- Social Media Icons -->
        <div class="mt-12">
            <h3 class="font-semibold mb-4 text-center">Find Us On</h3>
            <div class="flex justify-center space-x-8">
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-2 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10">
                    <i class="fab fa-instagram text-white text-lg"></i>
                </a>
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-2 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10">
                    <i class="fab fa-facebook-f text-white text-lg"></i>
                </a>
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-2 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10">
                    <i class="fab fa-linkedin-in text-white text-lg"></i>
                </a>
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-2 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10">
                    <i class="fas fa-map-marker-alt text-white text-lg"></i>
                </a>
                <a href="#"
                    class="bg-[#2e0a46] rounded-full p-2 hover:bg-[#de57e5] flex items-center justify-center w-10 h-10">
                    <i class="fab fa-twitter text-white text-lg"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<script>
    function toggleAccordion(id) {
        const content = document.getElementById(id);
        const button = content.previousElementSibling;
        const icon = button.querySelector('.material-icons');

        content.classList.toggle('hidden');
        icon.textContent = content.classList.contains('hidden') ? 'add' : 'remove';
    }
</script>



{{-- Extra Footer --}}

<div class="bg-white p-6">
    <div class="p-6 px-4 sm:px-6 md:px-10">
        <h1 class="text-lg mb-4">Popular Searches</h1>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">CaratLane Exclusives</h2>
            <p class="text-gray-600 text-xs leading-tight">
                New Arrivals | Self Gifting | Postcards | Digital Gold | Ear Piercing | Store Locator
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Jewellery</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Gold | Diamond | Solitaire | Gemstone | 22kt Jewellery | Platinum | Charms | Watch Charms | Chains |
                Silver Jewellery | Rose Gold Jewellery | White Gold Jewellery
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Earrings</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Gold Earrings | Diamond Earrings | Solitaire Earrings | Platinum Earrings | Kids Earrings | Jhumka
                Earrings | Hoop Earrings | Stud Earrings | Pearl Earrings | Sui Dhaga Earrings | Chandbali Earrings |
                Daily Wear Earrings | Round Earrings
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Rings</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Diamond Rings | Gold Rings | Platinum Rings | Solitaire Rings | Gemstone Rings | Men's Rings |
                Engagement Ring | Couple Ring | Wedding Ring | Vanki Ring | Ruby Ring | Emerald Ring | Name Ring |
                Cocktail Ring | Love Ring | Butterfly Ring | Infinity Rings | Pearl Rings | Promise Rings | 3 Gram Gold
                Rings | 2 Gram Gold Rings | 1 Gram Gold Rings
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Necklace</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Gold Necklace | Diamond Necklace | Kids Necklace | Gemstone Necklace | Ruby Necklace | Choker Necklace |
                Pearl Necklace | Evil Eye Necklace | Necklaces For Women | Long Necklace | Name Necklace | Stone
                Necklace | Butterfly Necklace | Bridal Necklace | Fancy Necklace | Emerald Necklace | 22kt Gold Chains
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Bracelets</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Gold Bracelets | Diamond Bracelets | Kids Bracelets | Pearl Bracelets | Evil Eye Bracelets | Tennis
                Bracelets | Chain Bracelets | Name Bracelets | Stone Bracelets | Cuff Bracelets
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Bangles</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Gold Bangles | Diamond Bangles | Kids Bangles | Daily Wear Bangles | Bridal Bangles | Stone Bangles |
                Baby Bangles | Traditional Bangles
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Nose Pins</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Nose Rings | Gold Nose Pins | Diamond Nose Pins | Nose Studs | Pressing Nose Rings | Stone Nose Rings
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Pendants</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Gold Pendants | Diamond Pendants | Solitaire Pendants | Evil Eye Pendants | Chain Pendants | Om Pendants
                | Butterfly Pendants | Heart Pendants
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Mangalsutra</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Gold Mangalsutra | Diamond Mangalsutra | Modern Mangalsutra | South Indian Mangalsutra | Fancy
                Mangalsutra | Black Beads Mangalsutra | Gold Mangalsutra Under 20000 | Traditional Mangalsutra
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">For Men</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Rings for Men | Earrings for Men | Bracelet for Men | Men's Kada
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">For Women</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Rings for Women | Earrings for Women | Bracelet for Women | Bangles For Women | Pendants For Women |
                Necklaces For Women
            </p>
        </div>

        <div class="mb-8 pb-4 border-b border-gray-300">
            <h2 class="text-sm text-[#8863FB] font-semibold mb-2">Gold Rate in Major Cities</h2>
            <p class="text-gray-600 text-xs leading-tight">
                Gold rate today in Chennai | Gold rate today in Hyderabad | Gold rate today in Bangalore | Gold rate
                today in Mumbai | Gold rate today in Delhi | Gold rate today in Kerala | Gold rate today in Pune | Gold
                rate today in Vijayawada | Gold rate today in Kolkata | Gold rate today in Ahmedabad
            </p>
        </div>

        <div class="mt-12">
            <h2 class="text-sm text-[#8863FB] font-semibold">
                COPYRIGHT CARATLANE © 2023
            </h2>
            <p class="text-gray-600 text-xs leading-tight">
                SITE MAP | PRIVACY POLICY | TERMS & CONDITIONS | CORPORATE | FREQUENTLY ASKED QUESTIONS
            </p>
        </div>
    </div>
</div>
