@props([
    'type' => 'button',
    'variant' => 'primary',
    'disabled' => false,
    'fullWidth' => false
])

@php
    $baseClasses = 'px-4 py-2 rounded-md font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors';
    
    $variantClasses = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white focus:ring-blue-500',
        'secondary' => 'bg-gray-600 hover:bg-gray-700 text-white focus:ring-gray-500',
        'outline' => 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 focus:ring-blue-500',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white focus:ring-red-500',
    ];
    
    $widthClass = $fullWidth ? 'w-full' : '';
    $disabledClass = $disabled ? 'opacity-50 cursor-not-allowed' : '';
    
    $classes = $baseClasses . ' ' . $variantClasses[$variant] . ' ' . $widthClass . ' ' . $disabledClass;
@endphp

<button
    type="{{ $type }}"
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</button>