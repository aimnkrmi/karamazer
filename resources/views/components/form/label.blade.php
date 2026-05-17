@props([
    'for' => null,
    'required' => false,
    'classLabel' => null
])
<label
        @if($for) for="{{ $for }}" @endif
    {{ $attributes->merge(['class' => 'form-label' . ($classLabel ? ' ' . $classLabel : '')]) }}
>
{{ $slot }}

    @if($required)
        <span class="text-danger">*</span>
    @endif
</label>