@extends('layouts.auth')

@section('title', 'Register')

@section('content')

    <div class="container-fluid">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-4">

                <div class="auth-brand mt-1 text-center">
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
                                Create your account
                            </h1>

                            <p class="text-muted mb-0">
                                Join us and start managing your workspace today.
                            </p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <x-form.input type="text" name="name" label="Full Name" placeholder="Enter your full name"
                                required autofocus autocomplete="name" />

                            <x-form.input type="email" name="email" label="Email Address" placeholder="Enter your email"
                                required autocomplete="email" />

                            <x-form.input type="password" name="password" label="Password" placeholder="Create a password"
                                required autocomplete="new-password" />

                            <x-form.input type="password" name="password_confirmation" label="Confirm Password"
                                placeholder="Confirm your password" required autocomplete="new-password" />

                            <x-button type="submit" theme="dark" class="w-100 py-2 fw-semibold auth-submit-btn">
                                <span class="submit-text">Create Account</span>

                                <span class="submit-loading d-none">
                                    <span class="spinner-border spinner-border-sm me-2" aria-hidden="true"></span>
                                    Creating account...
                                </span>
                            </x-button>

                        </form>

                        <div class="text-center mt-4">
                            <p class="text-muted mb-0">
                                Already have an account?
                                <a href="{{ route('login') }}" class="fw-semibold text-decoration-none">
                                    Sign in
                                </a>
                            </p>
                        </div>

                    </x-card.body>
                </x-card>

            </div>
        </div>
    </div>

@endsection