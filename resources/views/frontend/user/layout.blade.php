@extends('components.main')

@section('content')
    <main class="mt-24 sm:mt-0 md:mt-12">
        <div class="flex min-h-screen bg-gray-50">
            <!-- Sidebar -->
            <aside class="w-96 p-6 bg-secondary border-r flex-shrink-0 hidden lg:block"> 
                <div class="px-20">
                    <!-- User Info -->
                    <p class="text-gray-400 text-xs mb-3 leading-6">makedy07feb@gmail.com</p>
                    <a href="{{ route('myaccount.edit') }}"
                        class="text-secondary text-xs mb-6 block leading-6 hover:text-purple-600 transition duration-200">Edit
                        Profile</a>

                    <!-- Navigation Links -->
                    <nav class="space-y-6">
                        <!-- Orders Section -->
                        <div>
                            <h4 class="text-xs text-gray-600 font-semibold mb-2 tracking-wide underline leading-6">ORDERS
                            </h4>
                            <a href="{{ route('myaccount.orders') }}"
                                class="text-purple-600 text-xs font-semibold block mb-1 leading-6 hover:text-purple-800 transition duration-200">ORDERS
                                AND RETURNS</a>
                            <a href="{{ route('myaccount.payment') }}"
                                class="text-gray-800 text-xs block mb-1 leading-6 hover:text-gray-600 transition duration-200">PAYMENT</a>
                            <a href="{{ route('myaccount.manage_refunds') }}"
                                class="text-gray-800 text-xs block leading-6 hover:text-gray-600 transition duration-200">MANAGE
                                REFUNDS</a>
                        </div>

                        <!-- Appointments Section -->
                        <div>
                            <h4 class="text-xs text-gray-600 font-semibold mb-2 underline tracking-wide leading-6">
                                APPOINTMENTS</h4>
                            <a href="{{ route('myaccount.tah') }}"
                                class="text-gray-800 text-xs block leading-6 hover:text-gray-600 transition duration-200">TRY
                                AT HOME</a>
                        </div>

                        <!-- Offers Section -->
                        <div>
                            <h4 class="text-xs text-gray-600 font-semibold mb-2 underline tracking-wide leading-6">OFFERS
                            </h4>
                            <a href="{{ route('myaccount.coupons') }}"
                                class="text-gray-800 text-xs block leading-6 hover:text-gray-600 transition duration-200">COUPONS</a>
                        </div>

                        <!-- Accounts Section -->
                        <div>
                            <h4 class="text-xs text-gray-600 font-semibold mb-2 underline tracking-wide leading-6">ACCOUNTS
                            </h4>
                            <a href="{{ route('myaccount.profile') }}"
                                class="text-gray-800 text-xs block leading-6 hover:text-gray-600 transition duration-200">PROFILE</a>
                        </div>

                        <!-- Credits Section -->
                        <div>
                            <h4 class="text-xs text-gray-600 font-semibold mb-2 tracking-wide underline leading-6">CREDITS
                            </h4>
                            <a href="#"
                                class="text-gray-800 text-xs block mb-1 leading-6 hover:text-gray-600 transition duration-200">CARATLANE
                                eGold</a>
                            <a href="{{ route('myaccount.plan-of-purchase') }}"
                                class="text-gray-800 text-xs block leading-6 hover:text-gray-600 transition duration-200">Caratlane
                                PoP!</a>
                        </div>
                    </nav>
                </div>
            </aside>

            @yield('profileContent')
        </div>
    </main>
@endsection
