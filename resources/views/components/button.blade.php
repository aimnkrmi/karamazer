@props([
    'type' => 'button',
    'theme' => 'primary',
    'icon' => null,
])

<button type="{{ $type }}" {{ $attributes->merge(['class' => "btn btn-{$theme}"]) }}>
    @if($icon) <i class="{{ $icon }}"></i> @endif
    {{ $slot }}
</button>