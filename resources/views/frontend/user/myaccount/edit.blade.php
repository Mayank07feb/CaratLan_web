@extends('frontend.user.layout')
@section('profileContent')
    <!-- Main Content -->
    <main class="flex-1 flex flex-col">

        <div class="flex items-center border border-gray-300 shadow-lg p-4 bg-white mb-6">
            <button class="material-symbols-outlined mr-2 text-gray-600">
                arrow_back
            </button>
            <h1 class="text-lg font-semibold text-primary">My Profile</h1>
        </div>

        <!-- Personal Details Section -->
        <div class="flex justify-center bg-white items-center p-4 sm:p-8">
            <div class="w-full max-w-full md:max-w-4xl rounded-lg shadow-lg border border-gray-100">
                <div
                    class="flex shadow-md justify-between items-center text-lg font-semibold text-gray-700 mb-6 border-b-2 p-4 bg-secondary border-purple-100">
                    <span class="text-primary">Personal Details</span>
                    <button id="personal-details"
                        class="material-icons p-2 border border-gray-300 bg-white rounded-full text-gray-600 hover:bg-gray-100 cursor-pointer">add</button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-4 sm:p-8">
                    <!-- Name Fields -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600">Let's start with your name*</label>
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            <input type="text" placeholder="First Name"
                                class="border border-purple-100 rounded-[12px] p-3 text-xs bg-secondary w-full">
                            <input type="text" placeholder="Last Name"
                                class="border border-purple-100 rounded-[12px] p-3 text-xs bg-secondary w-full">
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

        <!-- Occasion Details Section -->
        <div class="flex justify-center bg-white items-center p-4 sm:p-8">
            <div class="w-full max-w-full md:max-w-4xl rounded-lg shadow-lg border border-gray-100">
                <div
                    class="flex shadow-md justify-between items-center text-lg font-semibold text-gray-700 mb-6 border-b-2 p-4 bg-secondary border-purple-100">
                    <span class="text-primary">Occasion Details</span>
                    <button id="personal-details"
                        class="material-icons p-2 border border-gray-300 bg-white rounded-full text-gray-600 hover:bg-gray-100 cursor-pointer">
                        add
                    </button>
                </div>

                <!-- Personalized Offers Banner -->
                <div class="p-4">
                    <div
                        class="bg-gradient-to-r from-pink-500 to-orange-400 text-white font-semibold p-4 rounded-lg flex justify-between items-center mb-6">
                        <span>Personalized offers for your occasions!<br>Receive offers 21 days before every occasion you
                            add, without disturbing your celebration!</span>
                        <span class="material-icons text-yellow-300">card_giftcard</span>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="w-full max-w-md p-6">

                    <!-- Gifting Preferences -->
                    <div>
                        <p class="font-semibold text-sm text-primary">Who are you most likely to gift?</p>
                        <p class="text-sm text-primary mb-4">Your gifting preferences help us suggest better options.</p>

                        <!-- Gifting Options Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-self" class="hidden"> Self
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-wife" class="hidden"> Wife
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-mother" class="hidden"> Mother
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-sister" class="hidden"> Sister
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-friend" class="hidden"> Friend
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-girlfriend" class="hidden"> Girlfriend
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-daughter" class="hidden"> Daughter
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-husband" class="hidden"> Husband
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-father" class="hidden"> Father
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-son" class="hidden"> Son
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-niece-nephew" class="hidden">
                                Niece/Nephew
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50">
                                <input type="radio" name="gift-option" id="gift-grandparent" class="hidden">
                                Grandparent
                            </label>
                        </div>
                    </div>

                    <!-- Important Dates Section -->
                    <div class="mt-6">
                        <p class="font-semibold text-sm text-primary">Tell us which dates are important for you?</p>
                        <p class="text-sm text-primary mb-4">We’ll make them extra special.</p>
                        <input type="date" id="occasion-date" placeholder="Date of Occasion"
                            class="w-full p-2 border bg-secondary border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>


                    <!-- Occasion Types Section -->
                    <div class="mt-6">
                        <p class="font-semibold text-sm text-primary">Are you celebrating an occasion?</p>
                        <p class="text-sm text-primary mb-4">Don’t worry we’ll keep it private too!</p>
                        <div class="flex space-x-4">
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50 h-16">
                                <input type="radio" name="occasion-type" id="occasion-anniversary" class="hidden">
                                Anniversary
                            </label>
                            <label
                                class="flex items-center justify-center border border-gray-300 rounded-lg p-4 text-center text-gray-700 cursor-pointer hover:bg-purple-50 h-16">
                                <input type="radio" name="occasion-type" id="occasion-birthday" class="hidden">
                                Birthday
                            </label>
                        </div>
                        <button class="text-white bg-gray-400 p-2 rounded-lg w-full mt-6">SAVE OCCASION DETAILS</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Govt. ID Details Section -->
        <div class="flex justify-center bg-white items-center p-4 md:p-8">
            <div class="w-full max-w-4xl rounded-lg shadow-lg border border-gray-100">

                <!-- Header Section -->
                <div
                    class="flex shadow-md justify-between items-center text-lg font-semibold text-gray-700 mb-6 border-b-2 p-4 bg-purple-100">
                    <span class="text-primary">Govt. ID</span>
                    <button id="Govt-ID-details"
                        class="material-icons p-2 border border-gray-300 bg-white rounded-full text-gray-600 hover:bg-gray-100 cursor-pointer">
                        expand_less
                    </button>
                </div>

                <!-- Content Section -->
                <div class="p-6 w-full md:w-[800px]">
                    <!-- PAN Card Number Input -->
                    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                        <input type="text" placeholder="PAN Card Number"
                            class="w-full md:w-1/2 p-3 mb-3 md:mb-0 bg-secondary rounded-md border border-gray-300 text-sm placeholder-gray-500 text-primary" />

                        <!-- File upload styled as a button -->
                        <label for="pan-card-upload"
                            class="w-full md:w-1/3 p-3 bg-secondary text-primary font-semibold rounded-md hover:bg-purple-300 text-sm text-center cursor-pointer">
                            + UPLOAD PAN CARD
                        </label>
                        <input type="file" id="pan-card-upload" name="pan-card-upload" class="hidden" />
                    </div>

                    <!-- Note Section -->
                    <p class="text-xs text-purple-500 mb-6">
                        This field is mandatory in case order value exceeds Rs. 2 lacs
                    </p>

                    <!-- Save Button -->
                    <button class="w-full md:w-1/3 p-3 bg-gray-500 text-white font-semibold rounded-md hover:bg-gray-500">
                        SAVE DETAILS
                    </button>
                </div>
            </div>
        </div>

    </main>
@endsection
