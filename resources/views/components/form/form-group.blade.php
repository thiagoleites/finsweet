@props([
    'title' => null,
    'description' => null
])

<div class="mb-8">
    @if($title)
        <h3 class="text-lg font-medium text-gray-900 mb-2">{{ $title }}</h3>
    @endif
    
    @if($description)
        <p class="text-sm text-gray-500 mb-4">{{ $description }}</p>
    @endif
    
    <div class="space-y-4">
        {{ $slot }}
    </div>
</div>