@extends('frontend.user.layout')
@section('profileContent')
    <!-- Main Content -->
    <main class="flex-1 bg-white flex flex-col items-center p-6">
        <!-- Profile Completion Banner -->
        <div class="w-full bg-purple-200 p-4 md:p-6 rounded-lg flex items-center justify-between mb-6 shadow-sm">
            <div class="flex items-center">
                <div class="bg-purple-200 p-3 rounded-full">
                    <!-- Icon (Replace with any SVG icon as needed) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
                <h2 class="text-purple-700 font-semibold ml-3 text-lg md:ml-4">Complete your profile</h2>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="w-full bg-white rounded-lg border border-gray-200">
            <div class="flex flex-col md:flex-row justify-between bg-secondary p-4 md:p-6 items-center pb-4 border-b border-gray-200 mb-4">
                <h3 class="text-gray-700 text-lg">Your Profile - <span class="text-purple-600">30% Complete</span></h3>
                <button class="mt-4 md:mt-0 px-4 py-1 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-lg shadow hover:from-purple-600 hover:to-pink-600 transition ease-in-out duration-150">Edit Profile</button>
            </div>
            <div class="mt-4 p-4 md:p-6">
                <table class="w-full text-sm text-left text-gray-600">
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 text-gray-800">Name</td>
                            <td class="py-3">-</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 text-gray-800">Email</td>
                            <td class="py-3">makedy07feb@gmail.com</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 text-gray-800">Mobile No.</td>
                            <td class="py-3">7905111789</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 text-gray-800">Pincode</td>
                            <td class="py-3">-</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 text-gray-800">Birthday</td>
                            <td class="py-3">-</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 text-gray-800">Anniversary</td>
                            <td class="py-3">-</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 text-gray-800">Occupation</td>
                            <td class="py-3">-</td>
                        </tr>
                        <tr>
                            <td class="py-3 text-gray-800">Spouse Birthday</td>
                            <td class="py-3">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-col md:flex-row gap-4 justify-end p-4 md:p-6">
                <button class="w-full md:w-auto px-4 py-1 border border-purple-500 text-purple-600 bg-white rounded-lg shadow-sm hover:bg-purple-50 transition ease-in-out duration-150">Change Password</button>
                <button class="w-full md:w-auto px-4 py-1 text-red-600 bg-white border border-red-500 rounded-lg shadow-sm hover:bg-red-50 transition ease-in-out duration-150">Delete My Account</button>
            </div>
        </div>
    </main>
@endsection
