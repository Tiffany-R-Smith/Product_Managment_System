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
                    <a href="{{ route('scheduleA') }}" class="hover:opacity-50 cursor-default">Schedule A</a>
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
                                                <a href="{{ route('entertainmentProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Entertainment</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="{{ route('genericProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Generic</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="{{ route('personalizationProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Personalization</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="{{ route('militaryProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">Military</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Second Column -->
                                    <div>
                                        <ul class="mt-3 text-[15px] text-center">
                                            </li>
                                            <li class="mb-2">
                                                <a href="{{ route('collegeProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NCAA</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="{{ route('nbaProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NBA</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="{{ route('nflProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NFL</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="{{ route('mlbProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">MLB</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="{{ route('nhlProducts') }}" class="block p-2 -mx-2 rounded-lg bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600">NHL</a>
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
        <div x-data="{ isAllChecked: false }" class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-slate-800">
        <div>
            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                <span class="sr-only">Action button</span>
                Action
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <!-- Dropdown content here -->
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                </div>
            </div>
        </div>

        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
        </div>
    </div>
    
    <table class="w-full text-md text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xl font-extrabold dark:text-white">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" x-model="isAllChecked" @click="toggleCheckboxes" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 pl-40 ">
                    Product
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    SKU
                </th>
                <th scope="col" class="px-6 py-3">
                    UPC
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr class="bg-gray-400 border-b hover:bg-gray-50">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-{{ $loop->index + 1 }}" type="checkbox" x-model="isAllChecked" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-{{ $loop->index + 1 }}" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="h-auto max-w-xs" src="{{ asset('images/Artdisk/1YLS019000001RET.jpg') }}" alt="Image">
                <div class="ps-3">
                    <div class="font-semibold text-gray-900">{{ $product->setup_name}}</div>
                    <div class="font-normal text-gray-900">Design: {{ $product->style_description }}</div>
                    <div class="font-normal text-gray-900">@if (isset($product->license) && $product->license !== '')
                        License: {{ $product->license }}
                        @endif
                    </div>
                    <div class="font-normal text-gray-900">Country: {{ $product->country }}</div>
                </div>
            </th>
            <td class="px-6 py-4 h-40 text-gray-900">
                {{ $product->description }}
            </td>
            <td class="px-6 py-4 text-gray-900">
                <div class="flex items-center">
                    <div class="whitespace-nowrap">{{ $product->sku }}</div>
                </div>
            </td>
            <td class="px-6 py-4 text-gray-900">
                <div class="flex items-center">
                    <div class="whitespace-nowrap">{{ $product->upc }}</div>
                </div>
            </td>
            <td class="px-6 py-4">
                <!-- Modal toggle -->
                <a href="#" type="button" data-modal-show="editUserModal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
            </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <!-- Edit user modal -->
    <div id="editUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit user
                    </h3>
                   <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editUserModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                            <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                            <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Green" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@company.com" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                            <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. +(12)3456 789" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                            <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Development" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                            <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123456" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                            <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                            <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save all</button>
                </div>
            </form>
        </div>
    </div>
</div>

    </div>
    </body>
</html>
