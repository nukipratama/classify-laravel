<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title', 'Jetty')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>

<body class="font-sans antialiased">
    <div id="app">
        <!-- Navigation -->
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo/Brand -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('jetty') }}"
                            class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition-colors">
                            {{ config('app.name') }}
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex space-x-8">
                        <a href="{{ route('jetty') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('jetty') ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                            Jetty
                        </a>
                        <a href="{{ route('open-yard.index') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('open-yard.*') ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                            Open Yard
                        </a>
                        <a href="{{ route('gear.index') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('gear.*') ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                            Inventory Asset
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button"
                            class="mobile-menu-button p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <span class="sr-only">Open menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="mobile-menu hidden md:hidden border-t border-gray-200 pt-2 pb-3">
                    <a href="{{ route('jetty') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium transition-colors {{ request()->routeIs('jetty') ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                        Jetty
                    </a>
                    <a href="{{ route('open-yard.index') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium transition-colors {{ request()->routeIs('open-yard.*') ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                        Open Yard
                    </a>
                    <a href="{{ route('gear.index') }}"
                        class="block px-3 py-2 rounded-md text-base font-medium transition-colors {{ request()->routeIs('gear.*') ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-100' }}">
                        Inventory Asset
                    </a>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        @hasSection('header')
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @yield('header')
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer>
            @yield('footer')
        </footer>
    </div>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @stack('scripts')

    <!-- Mobile menu toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>

</html>
