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
            <!-- Log Out Link -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="rounded-full px-3 py-2 font-semibold bg-white bg-opacity-10 flex items-center group"">
                    {{ __('Log Out') }}
                </a>
            </form>
        </nav>
    </header>
    <div class="relative bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto max-w-7xl h-screen sm:rounded-lg sm:px-10">
    <div class="mx-auto max-w-md flex justify-end">
        <button class="bg-gradient-to-br from-slate-400 to-zinc-600 via-slate-600 bg-no-repeat text-white font-bold py-2 px-6 rounded-full">
            <a href="{{ route('previous') }}">Back to Products</a>
        </button>
    </div>
    <div class="flex justify-center">
        <div class="w-2/5 ml-auto bg-white h-12">
            <img class="h-auto max-w-xs" src="{{ asset('images/Artdisk/1YLS019000001RET.jpg') }}" alt="Image">
        </div>
        <div class="w-3/6 mr-auto bg-gray-400 h-12">
            <div class=" pb-1 font-semibold text-gray-900">Setup Name</div>
            <div class=" pb-3 font-normal text-gray-900">{{ $product->setup_name}}</div>
            <div class=" pb-1 font-semibold text-gray-900">Description</div>
            <div class=" pb-3 font-normal text-gray-900">{{ $product->description}}
                <ul class="list-disc pl-10 space-y-2">
                    <li class="mt-4">{{ $product->detail_1}}</li>
                    <li>{{ $product->detail_2}}</li>
                    <li>{{ $product->care_instructions}}</li>
                    <li>{{ $product->contents}}</li>
                    <li>{{ $product->size}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
