@props(['name', 'options' => [], 'disabled' => [], 'label' => null, 'classLabel' => null, 'required' => false, 'selected' => null])

@if($label)
    <x-form.label :required="$required" :classLabel="$classLabel">{{ $label }}</x-form.label>
@endif

@foreach ($options as $key => $value)
    <div class="form-check">
        <input type="radio" name="{{ $name }}" id="{{ $name }}{{ $loop->iteration }}" {{ $attributes->merge(['class' => 'form-check-input']) }} value="{{ $key }}" {{$required && $loop->iteration == 1 ? 'checked' : '' }} {{ in_array($key, $disabled) ? 'disabled' : '' }} {{ $key == $selected ? 'checked' : '' }}>
        <x-form.label :for="$name . $loop->iteration">{{ $value }}</x-form.label>
    </div>
@endforeach