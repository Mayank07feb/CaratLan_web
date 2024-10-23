@extends('components.main')

@section('content')
<main class="mt-12">
    <div class="flex justify-center items-center min-h-screen bg-white p-4 pt-20">
        <div class="w-full max-w-[800px]">
            <!-- Title Section -->
            <div class="text-center mb-6">
                <i class="fas fa-fingerprint text-3xl text-primary mb-2"></i>
                <h1 class="text-xl font-bold text-primary">Signup with CaratLane</h1> <!-- Reduced to text-xl -->
                <p class="text-gray-500 mt-1 text-sm">Unlock best prices and become an insider for exclusive launches & offers.</p> <!-- Reduced to text-sm -->
            </div>

            <!-- Social Login Buttons -->
            <div class="flex justify-center space-x-4 mb-8">
                <button class="flex items-center justify-center w-14 h-14 rounded-full border hover:bg-gray-50 shadow-sm transition duration-200 ease-in-out focus:outline-none">
                    <i class="fab fa-google text-3xl text-gray-800"></i> <!-- Google Icon -->
                </button>
                <button class="flex items-center justify-center w-14 h-14 rounded-full border hover:bg-gray-50 shadow-sm transition duration-200 ease-in-out focus:outline-none">
                    <i class="fab fa-facebook-f text-3xl text-gray-800"></i> <!-- Facebook Icon -->
                </button>
            </div>

            <!-- Or Continue With -->
            <div class="flex items-center justify-center mb-8">
                <div class="border-t border-gray-300 flex-grow"></div>
                <span class="px-4 text-gray-500 text-xs">Or continue with</span> <!-- Reduced to text-xs -->
                <div class="border-t border-gray-300 flex-grow"></div>
            </div>

            <!-- Form Section -->
            <form class="space-y-6">
                <!-- Mobile Number Input -->
                <div class="flex space-x-4">
                    <!-- Mobile Number Input -->
                    <div class="flex w-1/2">
                        <select class="bg-gray-50 border border-gray-300 rounded-l-lg px-3 py-2 focus:outline-none focus:border-gray-300">
                            <option>IN +91</option>
                        </select>
                        <input type="tel" placeholder="Mobile Number"
                            class="flex-1 bg-gray-50 border border-l-0 border-gray-300 rounded-r-lg px-4 py-2 focus:outline-none focus:border-gray-300" />
                    </div>

                    <!-- Email Input -->
                    <input type="email" placeholder="Enter Email"
                        class="w-1/2 bg-gray-50 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-gray-300" />
                </div>

                <!-- Name Fields -->
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="First Name"
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-gray-300" />
                    <input type="text" placeholder="Last Name"
                        class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-gray-300" />
                </div>

                <!-- Gender Selection -->
                <div class="flex justify-left space-x-6">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="gender" class="form-radio text-purple-600 focus:outline-none" />
                        <span class="text-sm">Male</span> <!-- Reduced to text-sm -->
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="gender" class="form-radio text-purple-600 focus:outline-none" />
                        <span class="text-sm">Female</span> <!-- Reduced to text-sm -->
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="gender" class="form-radio text-purple-600 focus:outline-none" />
                        <span class="text-sm">Others</span> <!-- Reduced to text-sm -->
                    </label>
                </div>

                <!-- WhatsApp Support Option -->
                <div class="bg-green-100 p-4 rounded-[16px] shadow-sm">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox text-green-600 focus:outline-none" />
                        <div class="flex-grow">
                            <span class="font-medium text-sm">Opt for Whatsapp Support</span>
                            <p class="text-xs text-gray-600">
                                We will share Delivery & precious order-related communication and provide interactive WhatsApp support.
                            </p>
                        </div>
                        <div class="flex items-center justify-center bg-white rounded-lg p-2 shadow-md w-10 h-10">
                            <i class="fab fa-whatsapp text-2xl text-green-600"></i>
                        </div>
                    </label>
                </div>

                <!-- Terms and Privacy -->
                <p class="text-center text-xs text-gray-600"> <!-- Reduced to text-xs -->
                    By continuing, you agree to CaratLane's
                    <a href="#" class="text-purple-600 hover:underline">terms and conditions</a> &
                    <a href="#" class="text-purple-600 hover:underline">privacy policy</a>
                </p>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-lg py-3 font-medium hover:opacity-90 shadow-md transition duration-200 focus:outline-none">
                    SIGN ME UP
                </button>

                <!-- Login Option -->
                <p class="text-center mt-4 text-gray-500 text-xs"> <!-- Reduced to text-xs -->
                    Already have an account?
                    <a href="#" class="text-purple-600 font-semibold hover:underline">LOG IN</a>
                </p>
            </form>
        </div>
    </div>
</main>
@endsection
