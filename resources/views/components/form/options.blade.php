@props(['name', 'options' => [], 'disabled' => [], 'selected' => [], 'emptyOption' => null,])

@if ($emptyOption)
<option value="">{{ $emptyOption }}</option> @endif

@foreach ($options as $key => $value)
    <option value="{{ $key }}" {{ in_array($key, $selected) ? 'selected' : '' }} {{ in_array($key, $disabled) ? 'disabled' : '' }}>{{ $value }}</option>
@endforeach