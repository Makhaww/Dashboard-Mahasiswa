@props(['status'])

@php
    $key = strtolower(str_replace(' ', '', $status));
    $styles = [
        'aktif'    => 'bg-green-100 text-green-700',
        'cuti'     => 'bg-yellow-100 text-yellow-700',
        'nonaktif' => 'bg-red-100 text-red-700',
    ];
@endphp

<span {{ $attributes->merge(['class' => 'inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold ' . ($styles[$key] ?? 'bg-gray-100 text-gray-700')]) }}>
    {{ $status }}
</span>