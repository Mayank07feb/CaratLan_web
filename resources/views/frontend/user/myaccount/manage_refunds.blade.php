@extends('frontend.user.layout')
@section('profileContent')
    <!-- Main Content -->
    <main class="flex-1 flex flex-col">

        <div class="w-full h-screen p-8 bg-white">
            <!-- Title Section -->
            <h2 class="text-center text-xl font-semibold text-primary mb-2">Manage Refunds</h2>
            <p class="text-center text-sm text-gray-500 mb-8">
                Sharing bank account/UPI details is mandatory to complete PoP installment/Refund flow as per guidelines.
            </p>

            <!-- Options Section -->
            <div>
                <!-- Add Bank Account Option -->
                <div class="flex items-center p-4 border border-purple-100 rounded-md bg-secondary cursor-pointer">
                    <input id="bank-account-option" type="radio" name="refund-option"
                        class="form-radio text-primary h-5 w-5 mr-4 focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                        onclick="showForm('bankForm')">
                    <label for="bank-account-option" class="text-primary font-medium">Add Bank Account</label>
                </div>

                <!-- Bank Account Form -->
                <div id="bankForm" class=" hidden">
                    <div class="p-6 border-l border-r border-b border-purple-200 rounded-b-md bg-white">
                        <div class="space-y-4">
                            <!-- Full Name Field -->
                            <div class="flex items-center p-3">
                                <input type="text" name="full_name" placeholder="Full Name"
                                    class="w-full bg-secondary text-sm text-gray-700 outline-none border border-gray-300 rounded-md p-2">
                            </div>

                            <!-- Bank Name and Account Number Fields -->
                            <div class="flex space-x-4">
                                <div class="flex items-center p-3 flex-1">
                                    <select name="bank_name"
                                        class="w-full bg-secondary text-sm text-primary outline-none border border-gray-300 rounded-md p-2">
                                        <option value="" disabled selected>Select Bank Name</option>
                                        <!-- Add options here for different banks -->
                                    </select>
                                </div>
                                <div class="flex items-center p-3 flex-1">
                                    <input type="text" name="account_number" placeholder="Account Number"
                                        class="w-full bg-secondary text-sm text-primary outline-none border border-gray-300 rounded-md p-2">
                                </div>
                            </div>

                            <!-- Re-enter Account Number and IFSC Code Fields -->
                            <div class="flex space-x-4">
                                <div class="flex items-center p-3 flex-1">
                                    <input type="text" name="re_account_number" placeholder="Re-enter Account Number"
                                        class="w-full bg-secondary text-sm text-primary outline-none border border-gray-300 rounded-md p-2">
                                </div>
                                <div class="flex items-center p-3 flex-1">
                                    <input type="text" name="ifsc_code" placeholder="IFSC Code"
                                        class="w-full bg-secondary text-sm text-primary outline-none border border-gray-300 rounded-md p-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="mt-4 w-full py-3 rounded-md text-white font-medium bg-gradient-to-r from-pink-500 to-purple-500">
                        Verify and Save Back Details
                    </button>
                </div>

                <!-- Add UPI ID Option -->
                <div class="flex items-center p-4 border border-purple-100 rounded-md bg-secondary cursor-pointer mt-4">
                    <input id="upi-id-option" type="radio" name="refund-option"
                        class="form-radio text-primary h-5 w-5 mr-4 focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                        onclick="showForm('upiForm')">
                    <label for="upi-id-option" class="text-primary font-medium">Add UPI ID</label>
                </div>

                <!-- UPI ID Form -->
                <div id="upiForm" class="hidden">
                    <div class="p-6 border-l border-r border-b border-purple-200 rounded-b-md bg-white">
                        <!-- Beneficiary UPI ID Field -->
                        <div class="flex items-center rounded-md p-3">
                            <input type="text" name="upi_id" placeholder="Beneficiary UPI ID"
                                class="w-full bg-secondary text-sm text-primary outline-none border border-gray-300 rounded-md p-2">
                        </div>
                    </div>
                    <!-- Verify UPI Details Button -->
                    <button
                        class="mt-4 w-full py-3 rounded-md text-white font-medium bg-gradient-to-r from-pink-500 to-purple-500">
                        Verify UPI Details
                    </button>
                </div>
            </div>
        </div>

    </main>

    <!-- JavaScript to toggle forms -->
    <script>
        function showForm(formId) {
            // Hide both forms initially
            document.getElementById('bankForm').classList.add('hidden');
            document.getElementById('upiForm').classList.add('hidden');

            // Show the selected form
            document.getElementById(formId).classList.remove('hidden');
        }
    </script>
@endsection
