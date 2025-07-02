@extends('layouts.app')

@section('title', 'Welcome to Call2Lab')

@section('content')
<div class="bg-white dark:bg-gray-900 text-gray-800 dark:text-white animate-fade-in transition duration-1000 ease-in-out">

    {{-- Hero Section --}}
    <section class="relative h-[90vh] flex items-center justify-center bg-cover bg-center bg-no-repeat animate-slide-up"
             style="background-image: url('{{ asset('images/lap.png') }}');">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white px-4 max-w-3xl animate-fade-in-up">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 leading-tight transition-opacity duration-1000 delay-200">
                Your Trusted Medical Lab Testing Partner
            </h1>
            <p class="text-lg sm:text-xl mb-6 transition-all duration-1000 delay-300">
                Get fast, accurate, and secure lab results — all from the comfort of your home.
            </p>
            <a href="{{ route('login') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded shadow transition duration-300 transform hover:scale-105">
                Get Started
            </a>
        </div>
    </section>

  {{-- How It Works --}}
<section class="py-20 px-6 bg-gray-50 dark:bg-gray-800 animate-fade-in-up">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-10 transition-all duration-700">How It Works</h2>
        <div class="grid md:grid-cols-3 gap-10 text-left">

            <a href="{{ route('howitworks.book') }}" class="block transition-transform duration-700 hover:scale-105">
                <h3 class="text-xl font-semibold mb-2">1. Book a Test</h3>
                <p class="text-gray-600 dark:text-gray-300">Choose your preferred test and book online — anytime, anywhere.</p>
            </a>

            <a href="{{ route('howitworks.sample') }}" class="block transition-transform duration-700 hover:scale-105">
                <h3 class="text-xl font-semibold mb-2">2. Sample Collection</h3>
                <p class="text-gray-600 dark:text-gray-300">Visit our lab or request a home collection at your convenience.</p>
            </a>

            <a href="{{ route('howitworks.results') }}" class="block transition-transform duration-700 hover:scale-105">
                <h3 class="text-xl font-semibold mb-2">3. Get Results</h3>
                <p class="text-gray-600 dark:text-gray-300">Access your reports securely via your dashboard within 24–48 hours.</p>
            </a>

        </div>
    </div>
</section>


  <!-- Popular Lab Tests -->
<section class="py-20 px-6 bg-white dark:bg-gray-900 animate-fade-in">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-10">Popular Lab Tests</h2>
        <div class="grid md:grid-cols-3 gap-8">

            <a href="{{ route('tests.cbc') }}" class="block bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-all duration-500 transform hover:scale-105">
                <h3 class="text-xl font-semibold">Complete Blood Count (CBC)</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">Detect a wide range of disorders, including anemia and infection.</p>
            </a>

            <a href="{{ route('tests.liver') }}" class="block bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-all duration-500 transform hover:scale-105">
                <h3 class="text-xl font-semibold">Liver Function Test</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">Evaluate the health of your liver with accurate diagnostics.</p>
            </a>

            <a href="{{ route('tests.covid') }}" class="block bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-all duration-500 transform hover:scale-105">
                <h3 class="text-xl font-semibold">COVID-19 PCR</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">Fast and reliable COVID-19 detection with certified results.</p>
            </a>

        </div>
    </div>
</section>

    {{-- About Us Preview --}}
    <section class="py-20 px-6 bg-gray-50 dark:bg-gray-800 animate-fade-in-up">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-6">About Us</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                Call2Lab is committed to transforming healthcare diagnostics by offering fast, accurate, and affordable lab testing.
                Our professional team works around the clock to ensure you receive the highest quality services in a seamless digital experience.
            </p>
            <a href="{{ route('about') }}" class="inline-block text-blue-600 dark:text-blue-400 hover:underline transition duration-300">
                Learn more →
            </a>
        </div>
    </section>

    {{-- Final Call-to-Action --}}
    <section class="py-20 text-center bg-blue-600 dark:bg-blue-700 text-white animate-fade-in">
        <h2 class="text-3xl font-bold mb-4">Ready to Take Control of Your Health?</h2>
        <p class="mb-6">Create your free account and book a lab test in just a few clicks.</p>
        <a href="{{ route('register') }}" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded shadow hover:bg-gray-100 transition transform hover:scale-105">
            Register Now
        </a>
    </section>

</div>
@endsection
