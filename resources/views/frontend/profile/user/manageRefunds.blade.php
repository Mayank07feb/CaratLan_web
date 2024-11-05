@extends('frontend.profile.layout')
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
            <div class="space-y-4">
                <!-- Add Bank Account Option -->
                <div
                    class="flex items-center p-4 border border-purple-100 rounded-md bg-secondary cursor-pointer hover:bg-purple-100">
                    <input type="radio" name="refund-option" class="form-radio text-purple-500 h-5 w-5 mr-4">
                    <label class="text-gray-700 font-medium">Add Bank Account</label>
                </div>

                <!-- Add UPI ID Option -->
                <div
                    class="flex items-center p-4 border border-purple-100 rounded-md bg-secondary cursor-pointer hover:bg-purple-100">
                    <input type="radio" name="refund-option" class="form-radio text-purple-500 h-5 w-5 mr-4">
                    <label class="text-gray-700 font-medium">Add UPI ID</label>
                </div>
            </div>
        </div>

    </main>
@endsection
