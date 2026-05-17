@props([
    'type' => 'primary', 
    'icon' => null, 
    'dismissible' => false
])

<div {{ $attributes->merge(['class' => "alert alert-$type" . ($dismissible ? ' alert-dismissible show fade' : '')]) }} role="alert">
    @if($icon)
        <i class="bi bi-{{ $icon }} me-2"></i>
    @endif
    
    {{ $slot }}

    @if($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
