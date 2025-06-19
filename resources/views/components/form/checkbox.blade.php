@props([
    'label' => null,
    'name',
    'id' => null,
    'value' => '1',
    'checked' => false,
    'required' => false
])

@php
    $id = $id ?? $name;
    $hasError = $errors->has($name);
    $isChecked = old($name, $checked);
@endphp

<div class="mb-4">
    <div class="flex items-center">
        <input
            type="checkbox"
            name="{{ $name }}"
            id="{{ $id }}"
            value="{{ $value }}"
            {{ $isChecked ? 'checked' : '' }}
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded']) }}
        >
        
        @if($label)
            <label for="{{ $id }}" class="ml-2 block text-sm text-gray-700">
                {{ $label }}
                @if($required)
                    <span class="text-red-500 ml-1">*</span>
                @endif
            </label>
        @endif
    </div>
    
    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>