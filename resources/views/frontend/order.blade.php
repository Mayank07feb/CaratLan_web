@extends('components.main')
@section('content')

<div class="w-full bg-purple-50">
    <h1>Complete your profile</h1>
    <img src="{{asset('asset/img/cart-order.png')}}" alt="" class="h-20 w-20">
</div>
    
<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
    <img src="{{ asset('asset/img/print.png') }}" alt="CaratLane Logo" class="w-20 h-20 mb-4 object-center">
    <h1 class="text-2xl font-semibold text-center mb-2">Login to CaratLane</h1>
    <p class="text-center mb-4">Login to unlock best prices and become an insider for our exclusive launches & offers.</p>
    
    <input type="text" placeholder="Enter your Email or Number" class="w-full p-2 border border-gray-300 rounded mb-4">
    
    <button class="w-full bg-gradient-to-r from-purple-900 to-pink-400 text-white p-2 rounded hover:bg-gradient-to-l">
        Continue to Login
    </button>
    
    <div class="flex justify-center space-x-4 my-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48" class="cursor-pointer">
            <path fill="#4285F4" d="M23.499 12.753c0-.875-.056-1.76-.163-2.638H12v5.444h6.169c-.244 1.307-1.372 2.28-2.655 2.28-1.577 0-2.855-1.233-2.855-2.703 0-1.51 1.297-2.703 2.855-2.703 1.593 0 2.889 1.12 2.889 2.637zm2.485 12.38c-1.095 1.095-2.605 1.684-4.31 1.684-2.793 0-5.035-2.237-5.035-5.037 0-2.8 2.24-5.037 5.035-5.037 1.703 0 3.213.589 4.31 1.684v-1.884c-1.225-.737-2.747-1.149-4.31-1.149-4.418 0-8 3.577-8 8 0 4.423 3.582 8 8 8 1.563 0 3.086-.412 4.31-1.149v-1.884zm-2.828-10.114h-2.017c-.69 0-1.26-.563-1.26-1.25 0-.688.57-1.25 1.26-1.25h2.017v2.5zM24 0H0v48h48V24L24 0z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="cursor-pointer">
            <path fill="#1877F2" d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h21.351C23.407 24 24 23.407 24 22.675V1.325C24 .593 23.407 0 22.675 0z"/>
            <path fill="#FFFFFF" d="M12 2.047c-5.477 0-9.872 4.401-9.872 9.875 0 4.416 2.881 8.165 6.693 9.486v-6.705h-2.006v-2.781h2.006v-2.082c0-1.978 1.186-3.063 2.973-3.063.865 0 1.798.154 1.798.154v1.982h-1.012c-.997 0-1.308.618-1.308 1.253v1.461h2.333l-.373 2.781h-1.96v6.705c3.812-1.32 6.693-5.07 6.693-9.486 0-5.474-4.395-9.875-9.872-9.875z"/>
        </svg>
    </div>

    <h4 class="text-center text-lg font-semibold mb-2">New to CaratLane? Create an Account</h4>
    <p class="text-center text-sm">By continuing you agree to CaratLane's</p>
    <p class="text-center text-sm">terms and conditions & privacy policy</p>
</div>


@endsection