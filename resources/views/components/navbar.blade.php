<nav class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        <a href="{{ route('home') }}" class="text-xl font-bold text-blue-600 dark:text-blue-400">Call2Lab</a>

        <div class="space-x-4 text-sm">
            <a href="{{ route('home') }}" class="hover:underline text-gray-700 dark:text-gray-200">Home</a>
            <a href="{{ route('about') }}" class="hover:underline text-gray-700 dark:text-gray-200">About</a>
            <a href="{{ route('services') }}" class="hover:underline text-gray-700 dark:text-gray-200">Services</a>
            <a href="{{ route('contact') }}" class="hover:underline text-gray-700 dark:text-gray-200">Contact</a>

            @auth
                <a href="{{ route('dashboard') }}" class="text-blue-600 dark:text-blue-400 hover:underline">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 dark:text-red-400 hover:underline">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow transition">
                    Sign in
                </a>
            @endauth
        </div>
    </div>
</nav>
