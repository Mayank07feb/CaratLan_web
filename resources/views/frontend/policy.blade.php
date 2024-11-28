@extends('components.main')
@section('content')
<div class="max-w-4xl mx-auto px-4 py-12 mt-32 ">
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



<!-- FAQ Component -->
<div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
    <div class="lg:w-8/12 w-full mx-auto">
        
        <!-- Question 1 -->
        <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />
        <div class="w-full md:px-6">
            <div id="mainHeading1" class="flex justify-between items-center w-full">
                <div class="flex items-center space-x-4">
                    <span class="lg:text-2xl md:text-xl text-lg font-semibold text-gray-800 dark:text-white">Q1.</span>
                    <p class="font-medium text-base leading-6 lg:leading-4 text-gray-800 dark:text-white">
                        How do I know if a product is available in boutiques?
                    </p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu1" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal px-4">
                    You can check the status of your orders anytime in the "My Orders" section of your account.
                </p>
            </div>
        </div>

        <!-- Question 2 -->
        <hr class="w-full lg:mt-10 my-8" />
        <div class="w-full md:px-6">
            <div id="mainHeading2" class="flex justify-between items-center w-full">
                <div class="flex items-center space-x-4">
                    <span class="lg:text-2xl md:text-xl text-lg font-semibold text-gray-800 dark:text-white">Q2.</span>
                    <p class="font-medium text-base leading-6 lg:leading-4 text-gray-800 dark:text-white">
                        How can I find the prices or get other information about Chanel products?
                    </p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu2" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">
                    You can query product prices or get more details directly from the product page on our website.
                </p>
            </div>
        </div>

        <!-- Question 3 -->
        <hr class="w-full lg:mt-10 my-8" />
        <div class="w-full md:px-6">
            <div id="mainHeading3" class="flex justify-between items-center w-full">
                <div class="flex items-center space-x-4">
                    <span class="lg:text-2xl md:text-xl text-lg font-semibold text-gray-800 dark:text-white">Q3.</span>
                    <p class="font-medium text-base leading-6 lg:leading-4 text-gray-800 dark:text-white">
                        How many collections come out every year?
                    </p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu3" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">
                    Typically, Chanel releases two major collections every year. Additional capsule collections may also be released.
                </p>
            </div>
        </div>

        <!-- Question 4 -->
        <hr class="w-full lg:mt-10 my-8" />
        <div class="w-full md:px-6">
            <div id="mainHeading4" class="flex justify-between items-center w-full">
                <div class="flex items-center space-x-4">
                    <span class="lg:text-2xl md:text-xl text-lg font-semibold text-gray-800 dark:text-white">Q4.</span>
                    <p class="font-medium text-base leading-6 lg:leading-4 text-gray-800 dark:text-white">
                        Are all of the fashion collections featured on the website?
                    </p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu4" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">
                    Yes, the majority of collections are featured online, but there may be exclusive or seasonal items only available in stores.
                </p>
            </div>
        </div>

        <!-- Question 5 -->
        <hr class="w-full lg:mt-10 my-8" />
        <div class="w-full md:px-6">
            <div id="mainHeading5" class="flex justify-between items-center w-full">
                <div class="flex items-center space-x-4">
                    <span class="lg:text-2xl md:text-xl text-lg font-semibold text-gray-800 dark:text-white">Q5.</span>
                    <p class="font-medium text-base leading-6 lg:leading-4 text-gray-800 dark:text-white">
                        Where do I find products that I have seen in magazines or Social Media?
                    </p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu5" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">
                    Products featured in magazines or on social media can be found through our product search page or by directly visiting the product links.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Script for Accordion -->
<script>
    let elements = document.querySelectorAll("[data-menu]");
    elements.forEach((element, index) => {
        element.addEventListener("click", function () {
            let menu = document.getElementById(`menu${index + 1}`);
            let icon = element.querySelectorAll("img");
            let heading = element.closest('.flex').querySelector('p');

            heading.classList.toggle("font-semibold");
            menu.classList.toggle("hidden");
            icon[0].classList.toggle("rotate-180"); // Rotate the arrow
        });
    });
</script>


@endsection
