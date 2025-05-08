<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">

        <!-- Navbar -->
        <nav class="sticky top-0 z-50 bg-white dark:bg-gray-800 shadow-sm">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center space-x-2">
                        <div class="flex-shrink-0">
                            <a href="{{ route('home') }}" class="font-bold text-2xl bg-gradient-to-r from-primary-500 to-secondary-500 text-transparent bg-clip-text">OtakuTek</a>
                        </div>
                        <div class="hidden md:flex space-x-6 ml-8">
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">Beranda</a>
                            <a href="{{ route('tech') }}" wire:navigate class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">Teknologi</a>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">Anime</a>
                        <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">Manhwa</a>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 font-medium">Tentang</a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative hidden md:block">
                            <input type="text" placeholder="Cari artikel..." class="py-2 pl-10 pr-4 w-40 md:w-64 rounded-lg bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-2.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <!-- Auth Buttons -->
                        <div class="hidden md:flex items-center space-x-3">
                            <!-- link login -->
                            <a href="{{ route('login') }}" class="btn bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300">Masuk</a>

                            <!-- link register -->
                            <a href="{{ route('register') }}" class="btn bg-primary-500 hover:bg-primary-600 text-white">Daftar</a>
                        </div>

                        <!-- button light & dark -->
                        <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" aria-label="Toggle dark mode" />

                        <button class="md:hidden p-2 rounded-lg bg-gray-100 dark:bg-gray-700" id="mobileMenuButton">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="md:hidden hidden py-3 px-2 space-y-3" id="mobileMenu">
                    <div class="relative mb-3">
                        <input type="text" placeholder="Cari artikel..." class="w-full py-2 pl-10 pr-4 rounded-lg bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-2.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <a href="#" class="block py-2 px-4 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Beranda</a>
                    <a href="#" class="block py-2 px-4 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Teknologi</a>
                    <a href="#" class="block py-2 px-4 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Anime</a>
                    <a href="#" class="block py-2 px-4 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Manhwa</a>
                    <a href="#" class="block py-2 px-4 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Tentang</a>

                    <!-- Mobile Auth Buttons -->
                    <div class="flex space-x-3 mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <a href="#" class="flex-1 btn bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 text-center">Masuk</a>
                        <a href="#" class="flex-1 btn bg-primary-500 hover:bg-primary-600 text-white text-center">Daftar</a>
                    </div>
                </div>
            </div>
        </nav>

        {{ $slot }}

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-900">
            <div class="container flex flex-col items-center justify-between px-6 py-8 mx-auto lg:flex-row">
                <a href="{{ route('home') }}" class="font-bold text-2xl bg-gradient-to-r from-primary-500 to-secondary-500 text-transparent bg-clip-text mb-4">OtakuTek</a>

                <div class="flex flex-wrap items-center justify-center gap-4 mt-6 lg:gap-6 lg:mt-0">
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400">
                        Beranda
                    </a>

                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400">
                        teknologi
                    </a>

                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400">
                        Anime
                    </a>
                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400">
                        Manhwa
                    </a>

                    <a href="#" class="text-gray-600 transition-colors duration-300 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400">
                        Tentang
                    </a>
                </div>

                <p class="mt-6 text-gray-500 lg:mt-0 dark:text-gray-400">© Copyright {{ date('Y') }} OtakuTek. </p>
            </div>
        </footer>

        @fluxScripts

        <script src="/js/header.js"></script>
    </body>
</html>
