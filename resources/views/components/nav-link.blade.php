@props(['active' => false])

@php
    $classes = $active
        ? 'text-teal-500 font-bold'
        : 'text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
