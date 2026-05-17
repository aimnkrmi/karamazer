@extends('layouts.guest')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/auth-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/auth.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/js/auth.js') }}"></script>
@endpush

@section('content')
    <div class="auth-page">

        <div class="auth-background"></div>

        <main class="auth-wrapper">
            @yield('content')
        </main>

    </div>
@endsection