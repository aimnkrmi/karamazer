@props(['label' => null, 'description' => null, 'name' => null, 'required' => false])

<div class="form-group mb-3">
    @if($label)<x-form.label :for="$name" :required="$required">{{ $label }}</x-form.label>@endif
    @if($description)<small class="text-muted d-block mb-2">{{ $description }}</small>@endif
    <select id="{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'form-select form-control ' . ($errors->has($name) ? 'is-invalid' : '')]) }}>
        {{ $slot }}
    </select>
    <x-form.error :name="$name" />
</div>