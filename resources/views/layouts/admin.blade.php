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
    <body class="font-sans antialiased">
        <div class="relative min-h-screen md:flex" x-data="{ open: true }">
            <!-- Sidebar -->
            <aside :class="{ '-translate-x-full': !open }" class="z-10 bg-gray-800 text-gray-100 w-64 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:translate-x-0
                overflow-y-auto transition ease-in-out duration-200 shadow-lg">
                <!-- Logo -->
                <div class="flex items-center justify-between px-2">
                    <div class="flex items-center space-x-2">
                        <a href="">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                        width="100%" viewBox="0 0 110 69" enable-background="new 0 0 110 69" xml:space="preserve">
                                <path fill="#F9F9F9" opacity="1.000000" stroke="none" d="M77.000000,70.000000 C51.333340,70.000000 26.166676,70.000000 1.000010,70.000000 C1.000007,47.000008 1.000007,24.000017 1.000003,1.000019 C37.666653,1.000013 74.333305,1.000013 110.999969,1.000006 C110.999977,23.999979 110.999977,46.999958 110.999985,69.999969 C99.833336,70.000000 88.666664,70.000000 77.000000,70.000000 M55.500000,63.991322 C71.914833,63.991322 88.329666,63.991322 104.712349,63.991322 C104.712349,44.674168 104.712349,26.072422 104.712349,7.375181 C77.459381,7.375181 50.426640,7.375181 23.512417,7.375181 C23.512417,9.504203 23.512417,11.249901 23.512417,13.465185 C48.560257,13.465185 73.307541,13.465185 98.154053,13.465185 C98.154053,28.370737 98.154053,42.793133 98.154053,57.452438 C69.970825,57.452438 42.052258,57.452438 13.463114,57.452438 C13.463114,45.892990 13.463114,34.536617 13.463114,23.218044 C11.012696,23.218044 9.240951,23.218044 7.340465,23.218044 C7.340465,36.838463 7.340465,50.238842 7.340465,63.991322 C23.239662,63.991322 38.869831,63.991322 55.500000,63.991322 M62.124660,38.725525 
	                                C60.898685,33.585396 59.672714,28.445271 58.420116,23.193501 C56.160698,23.193501 54.219833,23.193501 51.871838,23.193501 C54.384396,31.621656 56.819664,39.790558 59.184868,47.724419 C61.822174,47.724419 63.909954,47.724419 66.065857,47.724419 C67.826363,41.865063 69.516678,36.239326 71.453728,29.792404 C73.424019,36.396954 75.124123,42.095798 76.831245,47.818192 C79.232391,47.818192 81.351372,47.818192 83.686508,47.818192 C86.130081,39.638351 88.540596,31.569174 91.008713,23.307156 C88.682083,23.307156 86.620026,23.307156 84.510719,23.307156 C83.145966,28.728796 81.851448,33.871399 80.556938,39.014000 C80.281952,39.014584 80.006973,39.015167 79.731987,39.015751 C78.154442,33.706902 76.576897,28.398056 75.058800,23.289261 C72.367424,23.289261 70.113503,23.289261 68.081680,23.289261 C66.118530,28.876652 64.271576,34.133358 62.124660,38.725525 M23.199055,39.430687 C23.199055,42.207264 23.199055,44.983837 23.199055,47.730396 C25.728405,47.730396 27.647570,47.730396 29.911598,47.730396 C29.911598,43.664509 29.873686,39.863525 29.920649,36.063587 C29.987913,30.621073 31.912560,28.056538 35.921383,27.942911 C39.892185,27.830360 41.464863,30.061476 41.546932,36.084579 C41.600174,39.992062 41.556953,43.900856 41.556953,47.838417 C44.066502,47.838417 45.847542,47.838417 48.076694,47.838417 C48.076694,43.561939 48.028873,39.436817 48.089397,35.313286 C48.157436,30.677937 47.898502,26.058184 43.210064,23.607403 
	                                C38.407238,21.096830 33.914051,22.290226 31.183352,24.868273 C28.161428,23.925386 26.017372,23.256407 23.199057,22.377048 C23.199057,28.512604 23.199057,33.481178 23.199055,39.430687 z"/>
                                <path fill="#0C0C0C" opacity="1.000000" stroke="none" d="M55.000000,63.991322 C38.869831,63.991322 23.239662,63.991322 7.340465,63.991322 C7.340465,50.238842 7.340465,36.838463 7.340465,23.218044 C9.240951,23.218044 11.012696,23.218044 13.463114,23.218044 C13.463114,34.536617 13.463114,45.892990 13.463114,57.452438 C42.052258,57.452438 69.970825,57.452438 98.154053,57.452438 C98.154053,42.793133 98.154053,28.370737 98.154053,13.465185 C73.307541,13.465185 48.560257,13.465185 23.512417,13.465185 C23.512417,11.249901 23.512417,9.504203 23.512417,7.375181 C50.426640,7.375181 77.459381,7.375181 104.712349,7.375181 C104.712349,26.072422 104.712349,44.674168 104.712349,63.991322 C88.329666,63.991322 71.914833,63.991322 55.000000,63.991322 z"/>
                                <path fill="#0D0D0D" opacity="1.000000" stroke="none" d="M62.274635,39.057793 C64.271576,34.133358 66.118530,28.876652 68.081680,23.289261 C70.113503,23.289261 72.367424,23.289261 75.058800,23.289261 C76.576897,28.398056 78.154442,33.706902 79.731987,39.015751 C80.006973,39.015167 80.281952,39.014584 80.556938,39.014000 C81.851448,33.871399 83.145966,28.728796 84.510719,23.307156 C86.620026,23.307156 88.682083,23.307156 91.008713,23.307156 C88.540596,31.569174 86.130081,39.638351 83.686508,47.818192 C81.351372,47.818192 79.232391,47.818192 76.831245,47.818192 C75.124123,42.095798 73.424019,36.396954 71.453728,29.792404 C69.516678,36.239326 67.826363,41.865063 66.065857,47.724419 C63.909954,47.724419 61.822174,47.724419 59.184868,47.724419 C56.819664,39.790558 54.384396,31.621656 51.871838,23.193501 C54.219833,23.193501 56.160698,23.193501 58.420116,23.193501 C59.672714,28.445271 60.898685,33.585396 62.274635,39.057793 z"/>
                                <path fill="#0E0E0E" opacity="1.000000" stroke="none" d="M23.199055,38.940224 C23.199057,33.481178 23.199057,28.512604 23.199057,22.377048 C26.017372,23.256407 28.161428,23.925386 31.183352,24.868273 C33.914051,22.290226 38.407238,21.096830 43.210064,23.607403 C47.898502,26.058184 48.157436,30.677937 48.089397,35.313286 C48.028873,39.436817 48.076694,43.561939 48.076694,47.838417 C45.847542,47.838417 44.066502,47.838417 41.556953,47.838417 C41.556953,43.900856 41.600174,39.992062 41.546932,36.084579 C41.464863,30.061476 39.892185,27.830360 35.921383,27.942911 C31.912560,28.056538 29.987913,30.621073 29.920649,36.063587 C29.873686,39.863525 29.911598,43.664509 29.911598,47.730396 C27.647570,47.730396 25.728405,47.730396 23.199055,47.730396 C23.199055,44.983837 23.199055,42.207264 23.199055,38.940224 z"/>
                        </svg>
                        </a>
                        <span class="text-2xl font-extrabold">Admin Dashboard</span>
                    </div>
                    <button type="button" @click="open = !open" class="md:hidden inline-flex p-2 items-center justify-center text-gray-100 hover:bg-gray-700
                    focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
                <!-- Nav Links -->
                <nav class="flex flex-col">
                    <div class="my-5">
                        Welcome back {{ Auth::user()->name }}!
                    </div>

                    <!--Place nav links here -->
                    
                    <a href="{{ route('scheduleA') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700"
                        x-data="{ open: false }" @click.away="open = false" @click="open = !open" x-bind:class="{ 'bg-gray-700': open }">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                    </svg>
                        <span class="flex-grow">Schedule A</span>
                    </a>
                        <ul class="ml-6" x-show="open" x-cloak>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Athleisure</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">College</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Entertainment</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Military</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">MLB</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NBA</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NFL</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NHL</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Generic</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Personalization</a>
                            </li>

                                <!-- Add more sub-links as needed -->
                        </ul>
                        
        
                    <a href="/" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                    </svg>
                        <span class="flex-grow">Schedule AEE</span>
                    </a>
                    <ul class="ml-6" x-show="open" x-cloak>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Athleisure</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">College</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Entertainment</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Military</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">MLB</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NBA</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NFL</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NHL</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Generic</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Personalization</a>
                            </li>

                                <!-- Add more sub-links as needed -->
                        </ul>

                    <a href="/" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                        <span class="flex-grow">Description/Care Instructions</span>
                        
                    </a>
                    <ul class="ml-6" x-show="open" x-cloak>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Athleisure</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">College</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Entertainment</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Military</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">MLB</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NBA</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NFL</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">NHL</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Generic</a>
                            </li>
                            <li>
                                <a href="/" class="text-gray-300 hover:bg-gray-700">Personalization</a>
                            </li>

                                <!-- Add more sub-links as needed -->
                        </ul>

                    <a href="/" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                        <span class="flex-grow">Pricing</span>
                    </a>

                    <a href="/" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                    </svg>
                        <span class="flex-grow">Freight</span>
                    </a>

                    <div class="my-4 border-gray-400"></div>

                    <div class="">
                        <!-- Profile Link -->
                        <a href="{{ route('profile.edit') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                            {{ __('Profile') }}
                        </a>
                    
                        <!-- Log Out Link -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>
                </nav>
            </aside>

            
            
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
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
