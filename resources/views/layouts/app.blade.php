<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Call2Lab')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 font-sans antialiased">

    {{-- Full-Width Navbar --}}
    <div class="w-full shadow z-50">
        @include('components.navbar')
    </div>

    {{-- Page Content Area --}}
    <main class="min-h-[calc(100vh-160px)] px-4 py-10 animate-fade-in bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto">
            @yield('content')
        </div>
    </main>

    {{-- Full-Width Footer --}}
    <footer class="w-full bg-gray-200 dark:bg-gray-800 text-center py-6 text-sm text-gray-600 dark:text-gray-300 shadow-inner">
        @include('components.footer')
    </footer>

</body>
</html>
