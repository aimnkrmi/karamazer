@props([
    'name', 
    'type' => 'text', 
    'value' => null, 
    'label' => null, 
    'classLabel' => null, 
    'helperText' => null,
    'required' => false,
])

<div class="form-group mb-3">
    @if($label)<x-form.label :for="$name" :required="$required" :classLabel="$classLabel">{{ $label }}</x-form.label>@endif
    
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}"
        value="{{ old($name, $value) }}" 
        {{ $required ? 'required' : '' }}
        {{-- Merge classes, append is-invalid if error exists, and allow external attributes --}}
        {{ $attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '')]) }} 
    />
    
    @if($helperText)
        <small class="text-muted">{{ $helperText }}</small>
    @endif
    
    <x-form.error :name="$name" />
</div>