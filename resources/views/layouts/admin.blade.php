<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.meta')
    </head>
    <body class="font-sans antialiased">
        <div class="relative min-h-screen md:flex" x-data="{ open: true }">
            @include('partials.sidebar')
            <!-- Main Content -->
            <main class="flex-1">
                <nav class="bg-gray-800 shadow-lg">
                    <div class="mx-auto px-2 sm:px-6 lg:px-8">
                        <div class="relative flex items-center justify-between md:justify-end h-16">
                            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                                <!-- Mobile Button -->
                                <button type="button" @click="open = !open" @click.away="open = false" class="inline-flex items-center justify-center
                                    p-2 text-gray-100 hover:bg-gray-700 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>
                </nav>
                <div>
                    @yield('content')
                </div>
            </main>
        </div>
    </body>
</html>
