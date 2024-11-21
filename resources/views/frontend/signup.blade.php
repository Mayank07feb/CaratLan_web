@extends('components.main')

@section('content')
    <main class="mt-12 mb-6">
        <div class="flex justify-center items-center min-h-screen bg-white px-4 sm:px-8 lg:px-12 pt-20">
            <div class="w-full max-w-[800px]">
                <!-- Title Section -->
                <div class="text-center mb-8">
                    <i class="fas fa-fingerprint text-4xl text-primary mb-4"></i>
                    <h1 class="text-2xl font-bold text-primary">Signup with CaratLane</h1>
                    <p class="text-gray-500 mt-2 text-sm sm:text-base">
                        Unlock best prices and become an insider for exclusive launches & offers.
                    </p>
                </div>

                <!-- Social Login Buttons -->
                <div class="flex justify-center gap-4 mb-8">
                    <button
                        class="flex items-center justify-center w-14 h-14 rounded-full border border-gray-300 bg-white hover:bg-gray-50 shadow-md transition duration-200 focus:outline-none">
                        <i class="fab fa-google text-3xl text-gray-600"></i>
                    </button>
                    <button
                        class="flex items-center justify-center w-14 h-14 rounded-full border border-gray-300 bg-white hover:bg-gray-50 shadow-md transition duration-200 focus:outline-none">
                        <i class="fab fa-facebook-f text-3xl text-gray-600"></i>
                    </button>
                </div>

                <!-- Or Continue With -->
                <div class="flex items-center mb-8">
                    <div class="border-t border-gray-300 flex-grow"></div>
                    <span class="px-4 text-gray-500 text-sm sm:text-base">Or continue with</span>
                    <div class="border-t border-gray-300 flex-grow"></div>
                </div>

                <!-- Form Section -->
                <form class="space-y-6">
                    <!-- Mobile & Email -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex">
                            <select
                                class="bg-gray-50 border border-gray-300 rounded-l-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                                <option>IN +91</option>
                            </select>
                            <input type="tel" placeholder="Mobile Number"
                                class="flex-1 bg-gray-50 border border-gray-300 border-l-0 rounded-r-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500" />
                        </div>
                        <input type="email" placeholder="Enter Email"
                            class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500" />
                    </div>

                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <input type="text" placeholder="First Name"
                            class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500" />
                        <input type="text" placeholder="Last Name"
                            class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500" />
                    </div>

                    <!-- Gender Selection -->
                    <div class="flex justify-start gap-6">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender"
                                class="form-radio text-purple-600 focus:ring focus:ring-purple-500" />
                            <span class="text-sm">Male</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender"
                                class="form-radio text-purple-600 focus:ring focus:ring-purple-500" />
                            <span class="text-sm">Female</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender"
                                class="form-radio text-purple-600 focus:ring focus:ring-purple-500" />
                            <span class="text-sm">Other</span>
                        </label>
                    </div>

                    <!-- WhatsApp Support -->
                    <div class="bg-green-50 p-4 rounded-lg shadow-sm flex items-start gap-4">
                        <input type="checkbox" class="form-checkbox text-green-600 focus:ring focus:ring-green-300" />
                        <div class="flex-grow">
                            <span class="font-medium text-sm">Opt for WhatsApp Support</span>
                            <p class="text-xs text-gray-600 mt-1">
                                We will share delivery & order-related updates and provide interactive WhatsApp support.
                            </p>
                        </div>
                        <div
                            class="flex items-center justify-center bg-white rounded-full p-2 shadow-md w-10 h-10 border border-gray-200">
                            <i class="fab fa-whatsapp text-2xl text-green-600"></i>
                        </div>
                    </div>

                    <!-- Terms & Privacy -->
                    <p class="text-center text-xs text-gray-600">
                        By continuing, you agree to CaratLane's
                        <a href="#" class="text-purple-600 hover:underline">terms and conditions</a> &
                        <a href="#" class="text-purple-600 hover:underline">privacy policy</a>.
                    </p>

                    <!-- Signup Button -->
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-lg py-3 font-medium hover:opacity-90 shadow-md transition duration-200 focus:outline-none focus:ring focus:ring-purple-300">
                        SIGN ME UP
                    </button>

                    <!-- Login Redirect -->
                    <p class="text-center mt-4 text-gray-500 text-xs">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-purple-600 font-semibold hover:underline">LOG IN</a>
                    </p>
                </form>
            </div>
        </div>
    </main>
@endsection
