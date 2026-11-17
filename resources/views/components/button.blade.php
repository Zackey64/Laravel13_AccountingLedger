@props([
    'type' => 'submit',
    'color' => 'primary',
])

@php
    $colors = [
        'primary' => 'bg-cyan-600 text-white hover:bg-cyan-500',
        'secondary' => 'border border-gray-300 text-gray-600 hover:bg-gray-100',
    ];
@endphp

<button
    type="{{ $type }}"
    class="w-full px-3 py-1 rounded-lg text-sm font-bold {{ $colors[$color] }}"
>
    {{ $slot }}
</button>