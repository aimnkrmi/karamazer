@extends('layouts.guest')

@section('title', '403 - Forbidden')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/error-403.css') }}">
@endpush

@section('content')
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="{{ asset('assets/compiled/svg/error-403.svg') }}" alt="Forbidden">
                    <h1 class="error-title">Forbidden</h1>
                    <p class="fs-5 text-gray-600">You are unauthorized to see this page.</p>
                    <a href="{{ url('/') }}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection