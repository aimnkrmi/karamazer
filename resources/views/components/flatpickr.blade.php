@props(['name', 'config' => [], 'placeholder' => null, 'label' => null, 'helperText' => null, 'required' => false, 'value' => null])

@once
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/css/extensions/flatpickr.min.css') }}">
    @endpush
@endonce

<x-form.input label="{{ $label }}" :helperText="$helperText" name="{{ $name }}" placeholder="{{ $placeholder }}"
    readonly value="{{ $value }}" :required="$required" />

@once
    @push('js')
        <script src="{{ asset('assets/js/extensions/flatpickr.min.js') }}"></script>
    @endpush
@endonce
@push('js')
    <script>
        flatpickr('#{{ $name }}', {!! json_encode($config) !!});
    </script>
@endpush