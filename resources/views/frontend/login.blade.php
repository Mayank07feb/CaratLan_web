@extends('components.main')

@section('content')
    <main class="mt-40 sm:mt-40 md:mt-12">
        <div class="flex justify-center items-center min-h-screen bg-white p-4">
            <div class="w-full max-w-xs space-y-6"> <!-- Adjusted spacing between sections -->
                <!-- Fingerprint Icon -->
                <div class="flex justify-center mb-6">
                    <span class="material-icons text-purple-600" style="font-size: 40px;">fingerprint</span>
                    <!-- Larger icon size -->
                </div>

                <!-- Title Section -->
                <div class="text-center">
                    <h1 class="text-lg font-bold">Login to CaratLane</h1> <!-- Increased title font size -->
                    <p class="text-gray-500 text-xs mt-4">Login to unlock best prices and become an insider for our exclusive
                        launches & offers.</p>
                </div>

                <!-- Form Section -->
                <form class="space-y-6 mt-8"> <!-- More spacing between form elements -->
                    <!-- Mobile Number or Email Input -->
                    <input type="text" placeholder="Enter Mobile Number or Email"
                        class="w-full bg-white border border-purple-500 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500" />

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-[14px] py-4 font-medium text-sm hover:opacity-90">
                        CONTINUE TO LOGIN
                    </button>
                    <!-- Social Login Buttons -->
                    <div class="flex justify-center space-x-6 mt-6"> <!-- Increased gap between buttons -->
                        <!-- Google Icon with Font Awesome -->
                        <button
                            class="flex items-center justify-center w-14 h-14 rounded-full border hover:bg-gray-100 transition duration-200 ease-in-out">
                            <i class="fab fa-google text-[#4285F4] text-3xl"></i>
                            <!-- Font Awesome Google Icon with specific blue color -->
                        </button>

                        <!-- Facebook Icon -->
                        <button
                            class="flex items-center justify-center w-14 h-14 rounded-full border hover:bg-gray-100 transition duration-200 ease-in-out">
                            <span class="material-icons text-blue-600 text-3xl">facebook</span> <!-- Adjusted icon size -->
                        </button>
                    </div>

                    <!-- New Account Link -->
                    <div class="text-center mt-4">
                        <span class="text-gray-500 text-sm">New to CaratLane?</span>
                        <a href="{{ route('signup') }}" class="text-purple-600 text-sm ">Create an Account</a>
                    </div>

                    <!-- Terms and Privacy -->
                    <p class="text-center text-xs text-gray-500 mt-4">
                        By continuing you agree to CaratLane's
                        <a href="#" class="text-purple-600">terms and conditions</a> &
                        <a href="#" class="text-purple-600">privacy policy</a>
                    </p>
                </form>
            </div>
        </div>
    </main>
@endsection
