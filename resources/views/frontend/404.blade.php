@extends('components.main')
@section('content')
    <div class="bg-[#f8f5fa] flex items-center justify-center w-full h-screen m-0 p-0">
        <div class="flex items-center justify-center w-full max-w-5xl space-x-8">
            <!-- 60% Width Illustration Section -->
            <div class="w-3/5 flex items-center justify-center">
                <img src="{{ asset('asset/img/404.png') }}" alt="404 Illustration" class="w-full h-[80%] object-contain">
            </div>

            <!-- 40% Width Text Section -->
            <div class="w-2/5 text-left space-y-4">
                <h1 class="text-xl font-bold text-primary">404 <span class="text-blue-600">NOT FOUND!</span> </h1>
                <p class="text-4xl font-semibold">Looks like you got lost!</p>
                <a href="/"
                    class="inline-block font-semibold px-6 py-3 text-primary rounded-lg transition duration-300 border border-purple-700">
                    Take Me Home
                </a>
            </div>
        </div>
    </div>
@endsection
