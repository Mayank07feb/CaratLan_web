@extends('frontend.profile.layout')
@section('profileContent')
    <!-- Main Content -->
    <main class="flex-1 flex flex-col">

        <div class="flex items-center border border-gray-300 shadow-lg p-4 bg-white mb-6">
            <span class="material-symbols-outlined mr-2 text-gray-600">
                arrow_back
            </span>
            <h1 class="text-lg font-semibold text-primary">My Profile</h1>
        </div>

        <div class="flex justify-center bg-white items-center p-8">
            <div class="w-full p-8 rounded-lg shadow-lg">
                <div
                    class="flex justify-between items-center text-lg font-semibold text-gray-700 mb-6 border-b-2 p-4 bg-secondary border-purple-100">
                    <span class="text-primary">Personal Details</span>
                    <span
                        class="material-icons p-2 border border-gray-300 bg-white rounded-full text-gray-600 hover:bg-gray-100 cursor-pointer">add</span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Name Fields -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600">Let's start with your name*</label>
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            <input type="text" placeholder="First Name"
                                class="border border-purple-100 rounded-[12px] p-3 text-xs bg-secondary">
                            <input type="text" placeholder="Last Name"
                                class="border border-purple-100 rounded-[12px] p-3 text-xs bg-secondary">
                        </div>
                    </div>

                    <!-- Gender Selection -->
                    <div class="mb-10">
                        <label class="block text-sm font-medium text-gray-600">Select your Gender*</label>
                        <div class="flex gap-2 mt-4">
                            <button
                                class="w-full p-2 border rounded-md text-center text-gray-600 border-purple-300 hover:bg-purple-100 focus:outline-none focus:ring focus:ring-purple-200">Male</button>
                            <button
                                class="w-full p-2 border rounded-md text-center text-gray-600 border-purple-300 hover:bg-purple-100 focus:outline-none focus:ring focus:ring-purple-200">Female</button>
                            <button
                                class="w-full p-2 border rounded-md text-center text-gray-600 border-purple-300 hover:bg-purple-100 focus:outline-none focus:ring focus:ring-purple-200">Other</button>
                        </div>
                    </div>

                    <!-- Mobile Number -->
                    <div class="flex items-center mb-6">
                        <div class="w-16">
                            <input type="text" value="+91" readonly
                                class="w-full px-4 py-3 bg-secondary border border-transparent rounded-l-lg text-sm text-center focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                        </div>
                        <div class="flex-1 relative">
                            <input type="tel" placeholder="Mobile Number"
                                class="w-full px-4 py-3 bg-secondary border border-transparent rounded-r-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                            <button type="button"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-600">
                                <span class="text-secondary text-xs">Edit</span>
                            </button>
                        </div>
                    </div>

                    <!-- Pincode -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600">Share your pincode*</label>
                        <label class="block text-xs font-medium text-gray-600">This helps us find your product in
                            store*</label>
                        <div class="flex mt-4">
                            <div class="flex-1 relative">
                                <input type="text" placeholder="Enter Pincode"
                                    class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                                <div
                                    class="absolute right-3 top-[25px] transform -translate-y-1/2 flex items-center justify-center w-20 h-6">
                                    <a href="" class="text-secondary text-xs">Locate Me</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Birthday -->
                    <div>
                        <label class="block text-sm font-semibold text-primary">Tell us your birth date*</label>
                        <label class="block text-xs font-medium text-primary">Psst, don’t miss out on the special
                            discounts</label>
                        <input type="date" placeholder="Birthday*"
                            class="mt-2 border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col mt-4 mb-6">
                        <label class="block text-sm font-semibold text-primary mb-1">Email address*</label>
                        <div class="flex-1 relative mt-2">
                            <input type="email" placeholder="Email ID*"
                                class="w-full px-4 py-3 bg-secondary border border-transparent rounded-lg text-sm focus:outline-none focus:border-purple-600 focus:ring-1 focus:ring-purple-600" />
                            <div
                                class="absolute right-3 top-[25px] transform -translate-y-1/2 flex items-center justify-center w-6 h-6 bg-green-500 rounded-full text-white">
                                <span class="material-icons text-xs">check</span>
                            </div>
                        </div>
                    </div>

                    <!-- Occupation -->
                    <div>
                        <label class="block text-sm font-semibold text-primary">Are you a professional?</label>
                        <label class="block text-xs font-medium text-primary">Tell us more</label>
                        <div>
                            <select class="mt-2 border border-purple-100 rounded-[12px] p-3 w-full text-xs bg-secondary">
                                <option value="" disabled selected>Select your occupation</option>
                                <option value="student">Student</option>
                                <option value="employed">Employed</option>
                                <option value="unemployed">Unemployed</option>
                                <option value="self-employed">Self-Employed</option>
                                <option value="retired">Retired</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- SAVE BUTTON -->
                    <div class="w-full mt-6">
                        <button
                            class="bg-primary text-white rounded-lg w-full px-4 py-3 font-semibold hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary-light">
                            SAVE
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
