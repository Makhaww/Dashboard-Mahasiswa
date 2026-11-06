@props(['variant' => 'primary'])

@php
    $styles = [
        'primary'   => 'bg-blue-600 text-white hover:bg-blue-700',
        'secondary' => 'bg-gray-200 text-gray-800 hover:bg-gray-300',
    ];
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => 'px-4 py-2 rounded-lg text-sm font-medium transition ' . ($styles[$variant] ?? $styles['primary'])]) }}>
    {{ $slot }}
</button>