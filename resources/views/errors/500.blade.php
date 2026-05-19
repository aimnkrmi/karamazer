@extends('layouts.guest')

@section('title', '500 - System Error')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/error.css') }}">
@endpush

@section('content')
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="{{ asset('assets/compiled/svg/error-500.svg') }}" alt="System Error">
                    <h1 class="error-title">System Error</h1>
                    <p class="fs-5 text-gray-600">The website is currently unavailable. Try again later or contact the
                        developer.</p>
                    <a href="{{ url('/') }}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection