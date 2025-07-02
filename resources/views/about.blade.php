@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="relative h-[90vh] w-full bg-cover bg-center bg-no-repeat" style="background-image: url('/lap.png')">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <!-- Animated Text Content -->
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-6">
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white animate-fade-in-down">
            About Call2Lab
        </h1>
        <p class="mt-4 max-w-2xl text-lg sm:text-xl text-gray-200 animate-fade-in-up">
            We are your trusted partner for secure, accurate, and fast medical lab testing. Our mission is to make health diagnostics accessible to all.
        </p>
    </div>
</section>
@endsection
