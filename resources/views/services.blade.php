@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<div class="py-16 max-w-5xl mx-auto text-center">
    <h1 class="text-4xl font-bold text-blue-700 mb-8">Our Services</h1>

    <div class="grid md:grid-cols-3 gap-8 text-left">
        <a href="{{ route('services.orders') }}" class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-xl font-semibold text-blue-600">Orders</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-2">Manage your lab test orders and appointment details.</p>
        </a>

        <a href="{{ route('services.lab-tests') }}" class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-xl font-semibold text-blue-600">Lab Tests</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-2">Explore a wide range of health lab tests available to you.</p>
        </a>

        <a href="{{ route('services.medical-checkup') }}" class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition">
            <h2 class="text-xl font-semibold text-blue-600">Medical CheckUp</h2>
            <p class="text-gray-600 dark:text-gray-300 mt-2">Learn more about our processes, accuracy, and data security.</p>
        </a>
    </div>
</div>
@endsection
