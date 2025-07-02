@extends('layouts.app')

@section('title', 'Profile Settings')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">

  <!-- Profile Header -->
  <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Edit Profile</h2>

    <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
      @csrf
      @method('PATCH')

      <!-- Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required autofocus
          class="mt-1 block w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" />
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required
          class="mt-1 block w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100" />
      </div>

      <!-- Save Button -->
      <div class="flex justify-end">
        <button type="submit"
          class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
          Save Changes
        </button>
      </div>
    </form>
  </div>

  <!-- Delete Account -->
  <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
    <h3 class="text-lg font-medium text-red-600 dark:text-red-400 mb-4">Danger Zone</h3>
    <form method="POST" action="{{ route('profile.destroy') }}">
      @csrf
      @method('DELETE')

      <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Once your account is deleted, all of its resources and data will be permanently deleted. Please be certain.</p>

      <button type="submit"
        onclick="return confirm('Are you sure you want to delete your account?')"
        class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">
        Delete Account
      </button>
    </form>
  </div>

</div>
@endsection
