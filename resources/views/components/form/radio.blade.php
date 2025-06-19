@props([
    'label' => null,
    'name',
    'id' => null,
    'value',
    'checked' => false,
    'required' => false
])

@php
    $id = $id ?? $name . '_' . $value;
    $isChecked = old($name) == $value || $checked;
@endphp

<div class="flex items-center mb-2">
    <input
        type="radio"
        name="{{ $name }}"
        id="{{ $id }}"
        value="{{ $value }}"
        {{ $isChecked ? 'checked' : '' }}
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300']) }}
    >
    
    @if($label)
        <label for="{{ $id }}" class="ml-2 block text-sm text-gray-700">
            {{ $label }}
        </label>
    @endif
</div>