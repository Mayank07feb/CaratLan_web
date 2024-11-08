@extends('components.main')
@section('content')


  <main class="w-full mx-auto px-4 py-8 mt-20">
    <!-- Shipping Information -->
    <div class="mb-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="mx-8">
            <h1 class="text-3xl p-4">Shipping</h1>
            <p class="text-gray-700 mb-6">
                We offer FREE shipping on every order only within India. Your order will be shipped to you fully insured. We urge all customers to inspect the package for any damage or tamper before receiving or signing for receipt.
              </p>
              <h3 class="text-gray-700 mb-4">For our International customers, after your item has been packaged, it will be shipped and delivered via the following carrier:</h3>
              <h3 class="text-gray-700 mb-4">For our Indian customers, after your item has been packaged, it will be shipped and delivered free via one of the following carriers:</h3>
              <p class="text-gray-700 mt-4 text-center">
                The shipping charges for our international customers are charged at the time of order booking.
              </p>
        
         </div>
          <!-- Shipping Carriers -->
          <div class="mb-12">
           
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div class="text-center">
                <img src="{{asset('asset/img/shipping1.webp')}}" alt="Sequel" class="mx-auto mb-2">
                <p class="text-gray-600">Sequel</p>
              </div>
              <div class="text-center">
                <img src="{{asset('asset/img/shipping2.webp')}}" alt="Speed Post" class="mx-auto mb-2">
                <p class="text-gray-600">Speed Post</p>
              </div>
              <div class="text-center">
                <img src="{{asset('asset/img/shipping3.webp')}}" alt="Blue Dart" class="mx-auto mb-2">
                <p class="text-gray-600">Blue Dart</p>
              </div>
               <!-- International Shipping -->
      <div class="mb-12">
      
        <div class="flex justify-center">
          <div class="text-center">
            <img src="{{asset('asset/img/shipping4.webp')}}" alt="UPS" class="mx-auto mb-2">
            <p class="text-gray-600">UPS</p>
          </div>
        </div>
        
      </div>

            </div>
          </div>
    
    </div>
     
      <!-- Gift Packaging -->
      <div class="bg-gray-50 p-8 rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Free Gift Packaging Test</h2>
        <p class="text-gray-700 mb-4">
          In case your purchase is intended as a gift, we offer free gift packing at just $ 1000 charges, along with a gift message of your choice. Your gift will be delivered in distinctive CaratLane gift packing. So whether you order a gift to give to your loved ones personally, or want us to deliver it, the recipient is sure to be impressed.
        </p>
        <p class="text-gray-700">
          To send a free gift message with your gift, look for the Gift message text box in the shopping bag/cart page. Your personal message will be printed on a distinctive card and delivered along with the gift.
        </p>
      </div>
    </div>
  </main>

@endsection