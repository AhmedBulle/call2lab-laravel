@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="max-w-4xl mx-auto">

    <!-- Welcome Message -->
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 mb-8">
      <div class="flex items-center space-x-4">
        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0D8ABC&color=fff"
             alt="User Avatar"
             class="w-12 h-12 rounded-full">
        <div>
          <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Welcome, {{ Auth::user()->name }}</h2>
          <p class="text-gray-500 dark:text-gray-400">Your personalized lab dashboard</p>
        </div>
      </div>
    </div>

    <!-- Upload Form -->
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 mb-10">
      <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Upload a Lab Result (PDF)</h3>
      <form method="POST" action="{{ route('results.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <input type="file" name="result" accept=".pdf"
               class="block w-full text-sm text-gray-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-full file:border-0
                      file:text-sm file:font-semibold
                      file:bg-blue-50 file:text-blue-700
                      hover:file:bg-blue-100" required>
        <button type="submit"
                class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">
          Upload Result
        </button>
      </form>
    </div>

    <!-- Uploaded Results -->
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
      <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Your Uploaded Results</h3>

      @if ($results->isEmpty())
        <p class="text-gray-500 dark:text-gray-400">You haven’t uploaded any lab results yet.</p>
      @else
        <ul class="space-y-3">
          @foreach ($results as $result)
            <li class="flex items-center justify-between bg-gray-50 dark:bg-gray-700 px-4 py-2 rounded">
              <span class="text-sm text-gray-800 dark:text-gray-200">
                {{ $result->filename }}
              </span>
              <a href="{{ asset('storage/results/' . $result->filename) }}" target="_blank"
                 class="text-sm text-blue-600 dark:text-blue-400 hover:underline">
                View PDF
              </a>
            </li>
          @endforeach
        </ul>
      @endif
    </div>
  </div>
@endsection
