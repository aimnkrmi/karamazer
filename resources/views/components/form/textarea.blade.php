@props(['label' => null, 'rows' => 3, 'name', 'placeholder' => null, 'float' => null, 'classLabel' => null, 'required' => false])

<div class="form-group mb-3 {{ $float ? 'form-floating' : '' }}">
    @if (!$float)
        <x-form.label :for="$name" :required="$required" :classLabel="$classLabel">{{ $label }}</x-form.label>
    @endif
    <textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }} {{ $attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '')]) }}>{{ old($name, $slot) }}</textarea>
    @if ($float)
        <label for="{{ $name }}" class="{{ $classLabel }}">{{ $label }}</label>
    @endif
</div>