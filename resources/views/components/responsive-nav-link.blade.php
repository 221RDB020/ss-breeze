@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-accent text-left text-base font-clash-med text-accent bg-background focus:outline-none focus:text-accent focus:bg-background focus:border-accent transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-clash-med text-text hover:text-black hover:bg-background hover:border-background focus:outline-none focus:text-black focus:bg-background focus:border-background transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
