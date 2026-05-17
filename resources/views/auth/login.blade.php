@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="container-fluid">
        <div class="row min-vh-100 align-items-center justify-content-center">

            <div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-4">

                <div class="auth-brand my-2 text-center">
                    <a href="/" class="d-inline-flex align-items-center text-decoration-none">
                        <span class="ms-2 fw-bold fs-4 text-dark">
                            {{ config('app.name') }}
                        </span>
                    </a>
                </div>

                <x-card class="auth-card border-0 shadow-lg">

                    <x-card.body class="p-4 p-lg-5">

                        <div class="text-center mb-4">

                            <div class="auth-icon mb-3">
                                <img src="{{ asset('assets/compiled/svg/favicon.svg') }}" alt="Logo" height="36">
                            </div>

                            <h1 class="h3 fw-bold mb-2">
                                Sign in with email
                            </h1>

                            <p class="text-muted mb-0">
                                Welcome back. Please enter your credentials.
                            </p>

                        </div>

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <x-alert type="danger">
                                <ul class="mb-0 small">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </x-alert>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <x-form.input type="email" name="email" label="Email Address" placeholder="Enter your email"
                                required />

                            <x-form.input type="password" name="password" label="Password" placeholder="Enter your password"
                                required autocomplete="current-password" />

                            <div class="d-flex justify-content-between align-items-center mb-4">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                        Remember me
                                    </label>
                                </div>

                                <a href="{{ route('password.request') }}" class="small text-decoration-none">
                                    Forgot password?
                                </a>

                            </div>

                            <x-button type="submit" theme="dark" class="w-100 py-2 fw-semibold auth-submit-btn">
                                <span class="submit-text">Sign In</span>

                                <span class="submit-loading d-none">
                                    <span class="spinner-border spinner-border-sm me-2" aria-hidden="true"></span>
                                    Signing in...
                                </span>
                            </x-button>

                        </form>

                        {{-- <div class="auth-divider my-4">
                            <span>Or continue with</span>
                        </div>

                        <div class="row g-2">

                            <div class="col">
                                <x-button theme="light" class="border w-100">
                                    <i class="bi bi-google"></i>
                                </x-button>
                            </div>

                        </div> --}}

                    </x-card.body>
                </x-card>

            </div>
        </div>
    </div>
@endsection