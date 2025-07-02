@extends('layouts.app')

@section('title', 'Lab Tests')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-6 text-gray-800 dark:text-gray-100 animate-fade-in-up">

    <h1 class="text-4xl font-extrabold text-center text-blue-600 dark:text-blue-400 mb-12">Available Lab Tests</h1>

    <div class="grid gap-10 md:grid-cols-3">
        {{-- CBC Test --}}
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
            <h3 class="text-2xl font-semibold text-blue-700 dark:text-blue-300 mb-2">Complete Blood Count (CBC)</h3>
            <p class="text-gray-700 dark:text-gray-300 mb-4">Detects anemia, infections, and many other disorders.</p>
            <a href="{{ route('book.test', ['test' => 'cbc']) }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                Book Test
            </a>
        </div>

        {{-- Liver Function Test --}}
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
            <h3 class="text-2xl font-semibold text-blue-700 dark:text-blue-300 mb-2">Liver Function Test</h3>
            <p class="text-gray-700 dark:text-gray-300 mb-4">Monitors liver enzymes and overall liver health.</p>
            <a href="{{ route('book.test', ['test' => 'liver']) }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                Book Test
            </a>
        </div>

        {{-- COVID-19 PCR --}}
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
            <h3 class="text-2xl font-semibold text-blue-700 dark:text-blue-300 mb-2">COVID-19 PCR</h3>
            <p class="text-gray-700 dark:text-gray-300 mb-4">Get accurate results with our fast PCR testing.</p>
            <a href="{{ route('book.test', ['test' => 'covid']) }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                Book Test
            </a>
        </div>
    </div>

</div>
@endsection
