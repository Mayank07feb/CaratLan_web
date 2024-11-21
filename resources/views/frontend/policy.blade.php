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



<!-- component -->
<div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
    
    <div class="lg:w-8/12 w-full mx-auto">
        <!-- Question 1 -->
        <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 md:leading-4 text-gray-800"><span class="lg:mr-6 mr-4 dark:text-white lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span> How do i know if a product is available in boutiques?</p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
            </div>
        </div>

        <!-- Question 2 -->

        <hr class="w-full lg:mt-10 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q2.</span> How can i find the prices or get other information about chanel products?</p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
            </div>
        </div>

        <!-- Question 3 -->

        <hr class="w-full lg:mt-10 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q3.</span>How many collections come out every year?</p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
            </div>
        </div>

        <!-- Question 4 -->

        <hr class="w-full lg:mt-10 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q4.</span>Are all of the fashion collections features on the website?</p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
            </div>
        </div>

        <!-- Question 5 -->

        <hr class="w-full lg:mt-10 my-8" />

        <div class="w-full md:px-6">
            <div id="mainHeading" class="flex justify-between items-center w-full">
                <div class="">
                    <p class="flex justify-center items-center dark:text-white font-medium text-base leading-6 lg:leading-4 text-gray-800"><span class="lg:mr-6 dark:text-white mr-4 lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q5.</span>Where do i find products that i have seen in magazines or Social Media?</p>
                </div>
                <button aria-label="toggler" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" data-menu>
                    <img class="transform dark:hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                    <img class="transform dark:block hidden " src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg" alt="toggler">
                </button>
            </div>
            <div id="menu" class="hidden mt-6 w-full">
                <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">Remember you can query the status of your orders any time in My orders in the My account section. if you are not resigered at Mango.com, you can access dierectly in the Orders section. In this cause, you will have enter your e-mail address and order number.</p>
            </div>
        </div>

        <hr class="w-full lg:mt-10 my-8" />
    </div>
</div>

<script>
let elements = document.querySelectorAll("[data-menu]");
for (let i = 0; i < elements.length; i++) {
let main = elements[i];

main.addEventListener("click", function () {
let element = main.parentElement.parentElement;
let indicators = main.querySelectorAll("img");
let child = element.querySelector("#menu");
let h = element.querySelector("#mainHeading>div>p");

h.classList.toggle("font-semibold");
child.classList.toggle("hidden");
// console.log(indicators[0]);
indicators[0].classList.toggle("rotate-180");
});
}
</script>

@endsection
