@extends('layouts.app')

@section('title', 'Book Test')

@section('content')
<div class="max-w-3xl mx-auto py-16 px-6 text-gray-800 dark:text-gray-100">
    <h2 class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-6">
        Book Test: {{ ucfirst($test) }}
    </h2>

    <form method="POST" action="{{ route('book.store') }}">
        @csrf

        {{-- This input stores the actual test name being booked --}}
        <input type="hidden" name="test_name" value="{{ $test }}">

        <div class="mb-4">
            <label for="full_name" class="block font-medium mb-1">Full Name</label>
            <input type="text" id="full_name" name="full_name"
                   class="w-full p-3 rounded bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white"
                   required>
        </div>

        <div class="mb-4">
            <label for="preferred_date" class="block font-medium mb-1">Preferred Date</label>
            <input type="date" id="preferred_date" name="preferred_date"
                   class="w-full p-3 rounded bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white"
                   required>
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded transition">
            Submit Booking
        </button>
    </form>
</div>
@endsection
