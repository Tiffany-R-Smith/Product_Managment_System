@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block py-2.5 px-4 rounded bg-blue-600 transition duration-150 ease-in-out'
            : 'block py-2.5 px-4 rounded hover:bg-blue-700 transition duration-150 ease-in-out'

<a {{ $attributes }} class="block py-2.5 px-4 rounded hover:bg-blue-700 transition duration-150 ease-in-out">
    {{ $slot }}
</a>