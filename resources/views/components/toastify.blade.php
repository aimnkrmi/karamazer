@props(['id' => '', 'config' => []])

@once
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/css/extensions/toastify.css') }}">
    @endpush
@endonce

@push('js')
    <script>
        @if (isset($id))
            document.getElementById('{{ $id }}').addEventListener('click', function () {
                Toastify({!! json_encode($config) !!}).showToast();
            });
        @else
            Toastify({!! json_encode($config) !!}).showToast();
        @endif
    </script>
@endpush

@once
    @push('js')
        <script src="{{ asset('assets/js/extensions/toastify.js') }}"></script>
    @endpush
@endonce