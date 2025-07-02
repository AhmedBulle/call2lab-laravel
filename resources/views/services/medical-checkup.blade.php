@extends('layouts.app')

@section('title', 'Medical Check-up')

@section('content')
<div class="max-w-3xl mx-auto py-10">
  <h2 class="text-2xl font-bold mb-6 text-blue-700">Schedule a Medical Check-up</h2>

  <form action="{{ route('checkup.book') }}" method="POST" class="space-y-4 bg-white dark:bg-gray-800 p-6 rounded shadow">
    @csrf
    <div>
      <label for="fullname" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Full Name</label>
      <input type="text" id="fullname" name="fullname" class="w-full mt-1 px-4 py-2 border rounded" required>
    </div>

    <div>
      <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
      <input type="email" id="email" name="email" class="w-full mt-1 px-4 py-2 border rounded" required>
    </div>

    <div>
      <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Phone Number</label>
      <input type="text" id="phone" name="phone" class="w-full mt-1 px-4 py-2 border rounded" required>
    </div>

    <div>
      <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Preferred Date</label>
      <input type="date" id="date" name="date" class="w-full mt-1 px-4 py-2 border rounded" required>
    </div>

    <div>
      <label for="notes" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Additional Notes (Optional)</label>
      <textarea id="notes" name="notes" rows="4" class="w-full mt-1 px-4 py-2 border rounded"></textarea>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
      Book Check-up
    </button>
  </form>
</div>
@endsection
