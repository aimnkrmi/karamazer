<div {{ $attributes->merge(['class' => 'card-body']) }}>
    @isset($title)<h4 class="card-title">{{ $title }}</h4>@endisset
    @isset($subtitle)<h6 class="card-subtitle">{{ $subtitle }}</h6>@endisset
    {{ $slot }}
</div>