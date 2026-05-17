@props(['name', 'options' => [], 'disabled' => [], 'checked' => [], 'required' => false, 'classLabel' => null, 'label' => null])
<x-form.label :required="$required" :classLabel="$classLabel">{{ $label }}</x-form.label><br>
@foreach ($options as $key => $value)
    <div class="d-inline-block me-2 mb-1">
        <div class="form-check">
            <div class="checkbox">
                <input type="checkbox" name="{{ $name }}[]" value="{{ $key }}" id="{{ $name }}{{ $loop->iteration }}" {{ $attributes->merge(['class' => 'form-check-input']) }} {{ $required && !$checked && $loop->iteration == 1 ? 'checked' : '' }} {{ in_array($key, $checked) || in_array($key, old($name, $checked)) ? 'checked' : '' }}{{ in_array($key, $disabled) ? 'disabled' : '' }}>
                <label for="{{ $name }}{{ $loop->iteration }}">{{ $value }}</label>
            </div>
        </div>
    </div>
@endforeach