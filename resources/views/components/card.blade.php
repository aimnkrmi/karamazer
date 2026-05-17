<div {{ $attributes->merge(['class' => 'card']) }}>

    @isset($header)
        <div class="card-header">
            {{ $header }}
        </div>
    @endisset

    {{ $slot }}

    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endisset

</div>