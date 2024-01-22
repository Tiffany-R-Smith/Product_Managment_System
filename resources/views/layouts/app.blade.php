<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600 bg-no-repeat text-white">
        <header class="container mx-auto px-4 py-6 flex items-center justify-between">
            <a href="/" class="font-bold text-white text-xl">PIM</a>
            <nav>
                <ul class="flex items-center justify-center font-semibold">
                    <li class="relative group px-3 py-2">
                        <button class="hover:opacity-50 cursor-default">Schedule A</button>
                        <div class="absolute top-0 -left-48 transition group-hover:translate-y-5 translate-y-0 opacity-0 invisible group-hover:opacity-100 
                        group-hover:visible duration-500 ease-in-out group-hover:transform z-50 min-w-[560px] transform">
                        <div class="relative top-6 p-6 bg-white rounded-xl shadow-xl w-full">
                            <div class="w-7 h-5 bg-white transform rotate-45 absolute top-0 z-0 translate-x-0 transition-transform 
                            group-hover:translate-x-[13rem] duration-500 ease-in-out rounded-sm"></div>
                            <div class="realtive z-10">
                                <div class="grid grid-cols-2 gap-6">
                                    <!-- First Column -->
                                    <div>
                                        <ul class="mt-3 text-[15px] text-center">
                                        <li class="mb-2">
                                                <a href="{{ route('athleisureProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Athleisure</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Entertainment</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Generic</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Personalization</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Military</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Second Column -->
                                    <div>
                                        <ul class="mt-3 text-[15px] text-center">
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NCAA</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NBA</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NFL</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">MLB</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NHL</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </li>
                    <li class="relative group px-3 py-2">
                        <button class="hover:opacity-50 cursor-default">Schedule AEE</button>
                        <div class="absolute top-0 -left-40 transition group-hover:translate-y-5 translate-y-0 opacity-0 invisible group-hover:opacity-100 
                        group-hover:visible duration-500 ease-in-out group-hover:transform z-50 min-w-[560px] transform">
                        <div class="relative top-6 p-6 bg-white rounded-xl shadow-xl w-full">
                            <div class="w-7 h-5 bg-white transform rotate-45 absolute top-0 z-0 translate-x-0 transition-transform 
                            group-hover:translate-x-[12rem] duration-500 ease-in-out rounded-sm"></div>
                            <div class="realtive z-10">
                                <div class="grid grid-cols-2 gap-6">
                                    <!-- First Column -->
                                    <div>
                                        <ul class="mt-3 text-[15px] text-center">
                                        <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Athleisure</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Entertainment</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Generic</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Personalization</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Military</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Second Column -->
                                    <div>
                                        <ul class="mt-3 text-[15px] text-center">
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NCAA</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NBA</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NFL</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">MLB</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NHL</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </li>
                    <li class="relative group px-3 py-2">
                        <button class="hover:opacity-50 cursor-default">Description</button>
                        <div class="absolute top-0 left-0 transition"></div>
                    </li>
                    <li class="relative group px-3 py-2">
                        <button class="hover:opacity-50 cursor-default">Freight</button>
                        <div class="absolute top-0 left-0 transition"></div>
                    </li>
                    <li class="relative group px-3 py-2">
                        <button class="hover:opacity-50 cursor-default">Pricing</button>
                        <div class="absolute top-0 left-0 transition"></div>
                    </li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <li>
                        <!-- Log Out Link -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="rounded-full px-3 py-2 font-semibold bg-white bg-opacity-10 flex items-center group"">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </nav>
        </header>
        
    </body>
</html>
