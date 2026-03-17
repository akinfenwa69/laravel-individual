@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center p-2 rounded border-r-2! border-blue-400! text-sm font-medium leading-5 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center p-2 rounded border-r-2! border-transparent text-sm font-medium leading-5 hover:border-gray-300 focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
