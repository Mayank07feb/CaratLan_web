@extends('components.main')
@section('content')

<div class="w-full bg-purple-50 lg:py-12 md:mt-28 pt-24">
    <h1 class="text-xl text-center font-semibold mb-4">Complete your profile</h1>
    <div class="flex justify-center lg:mb-8">
        <img src="{{ asset('asset/img/cart-order.png') }}" alt="Cart Order Icon" class="md:h-20 md:w-20 h-10 w-10">
    </div>
</div>
    
<div class="max-w-lg mx-auto p-6 bg-white">
    <div class="text-center mb-6">
        <img src="{{ asset('asset/img/print.png') }}" alt="CaratLane Logo" class="w-20 h-20 mb-4 mx-auto object-center">
        <h1 class="text-xl font-semibold mb-2">Login to CaratLane</h1>
        <p class="text-gray-600 text-sm md:text-base">Login to unlock the best prices and become an insider for our exclusive launches & offers.</p>
    </div>
    
    <!-- Email or Phone Input -->
    <form action="#" method="POST" class="space-y-4">
        <input type="text" name="email_or_phone" placeholder="Enter your Email or Number" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-gradient-to-r from-purple-900 to-pink-400 text-white p-3 rounded-md hover:bg-gradient-to-l transition duration-300">
            Continue to Login
        </button>
    </form>

    <!-- Social Login Icons -->
    <div class="flex justify-center space-x-4 my-4">
        <button aria-label="Login with Google" class="flex items-center justify-center bg-white rounded-full shadow-md p-2 hover:bg-gray-100 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48" class="text-blue-600">
                <path fill="#4285F4" d="M23.499 12.753c0-.875-.056-1.76-.163-2.638H12v5.444h6.169c-.244 1.307-1.372 2.28-2.655 2.28-1.577 0-2.855-1.233-2.855-2.703 0-1.51 1.297-2.703 2.855-2.703 1.593 0 2.889 1.12 2.889 2.637zm2.485 12.38c-1.095 1.095-2.605 1.684-4.31 1.684-2.793 0-5.035-2.237-5.035-5.037 0-2.8 2.24-5.037 5.035-5.037 1.703 0 3.213.589 4.31 1.684v-1.884c-1.225-.737-2.747-1.149-4.31-1.149-4.418 0-8 3.577-8 8 0 4.423 3.582 8 8 8 1.563 0 3.086-.412 4.31-1.149v-1.884zm-2.828-10.114h-2.017c-.69 0-1.26-.563-1.26-1.25 0-.688.57-1.25 1.26-1.25h2.017v2.5zM24 0H0v48h48V24L24 0z"/>
            </svg>
        </button>
        
        <button aria-label="Login with Facebook" class="flex items-center justify-center bg-white rounded-full shadow-md p-2 hover:bg-gray-100 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="text-blue-600">
                <path fill="#1877F2" d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h21.351C23.407 24 24 23.407 24 22.675V1.325C24 .593 23.407 0 22.675 0z"/>
                <path fill="#FFFFFF" d="M12 2.047c-5.477 0-9.872 4.401-9.872 9.875 0 4.416 2.881 8.165 6.693 9.486v-6.705h-2.006v-2.781h2.006v-2.082c0-1.978 1.186-3.063 2.973-3.063.865 0 1.798.154 1.798.154v1.982h-1.012c-.997 0-1.308.618-1.308 1.253v1.461h2.333l-.373 2.781h-1.96v6.705c3.812-1.32 6.693-5.07 6.693-9.486 0-5.474-4.395-9.875-9.872-9.875z"/>
            </svg>
        </button>
    </div>

    <!-- Account Creation Link -->
    <div class="text-center mt-6">
        <h4 class="text-lg font-semibold">New to CaratLane? <a href="#" class="text-purple-600 hover:underline">Create an Account</a></h4>
        <p class="text-sm text-gray-600 mt-2">By continuing you agree to CaratLane's <a href="#" class="text-purple-600 hover:underline">terms and conditions</a> & <a href="#" class="text-purple-600 hover:underline">privacy policy</a></p>
    </div>
</div>

@endsection
