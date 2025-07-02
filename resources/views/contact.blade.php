@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10 animate-fade-in">
    <h1 class="text-3xl sm:text-4xl font-bold text-center text-green-600 dark:text-blue-400 mb-6">Get in Touch</h1>

    <p class="text-center text-gray-800 dark:text-gray-300 mb-8">
        Have questions or need help? Our support team is here for you.
    </p>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="mb-6 text-green-600 text-center font-semibold transition-opacity duration-500">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}" class="space-y-6 animate-fade-in-up">
        @csrf

        <div>
            <label class="block text-sm text-gray-700 dark:text-gray-300 mb-1">Name</label>
            <input 
                type="text" 
                name="name"
                value="{{ old('name') }}"
                class="w-full px-4 py-2 rounded-md bg-white dark:bg-gray-700 text-black dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring focus:ring-blue-300 transition"
                required>
        </div>

        <div>
            <label class="block text-sm text-gray-700 dark:text-gray-300 mb-1">Email</label>
            <input 
                type="email" 
                name="email"
                value="{{ old('email') }}"
                class="w-full px-4 py-2 rounded-md bg-white dark:bg-gray-700 text-black dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring focus:ring-blue-300 transition"
                required>
        </div>

        <div>
            <label class="block text-sm text-gray-700 dark:text-gray-300 mb-1">Message</label>
            <textarea 
                name="message" 
                rows="4"
                class="w-full px-4 py-2 rounded-md bg-white dark:bg-gray-700 text-black dark:text-white border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring focus:ring-blue-300 transition"
                required>{{ old('message') }}</textarea>
        </div>

        <button 
            type="submit" 
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded shadow transition duration-300 ease-in-out transform hover:scale-105">
            Send Message
        </button>
    </form>
</div>
@endsection
