@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')

    <div class="container-fluid">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-4">

                <div class="auth-brand mb-4 text-center text-lg-start">
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
                                <i class="bi bi-shield-lock"></i>
                            </div>

                            <h1 class="h3 fw-bold mb-2">
                                {{ __('Reset your password') }}
                            </h1>
                        </div>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ request()->route('token') }}">

                            <x-form.input type="email" name="email" label="{{ __('Email Address') }}"
                                placeholder="{{ __('Enter your email') }}" :value="request()->email" required autofocus
                                autocomplete="email" />

                            <x-form.input type="password" name="password" label="{{ __('New Password') }}"
                                placeholder="{{ __('Create a new password') }}" required autocomplete="new-password" />

                            <x-form.input type="password" name="password_confirmation"
                                label="{{ __('Confirm New Password') }}" placeholder="{{ __('Confirm your new password') }}"
                                required autocomplete="new-password" />

                            <x-button type="submit" theme="dark" class="w-100 py-2 fw-semibold auth-submit-btn">
                                <span class="submit-text">{{ __('Reset Password') }}</span>

                                <span class="submit-loading d-none">
                                    <span class="spinner-border spinner-border-sm me-2" aria-hidden="true"></span>
                                    {{ __('Resetting password...') }}
                                </span>
                            </x-button>
                        </form>

                        <div class="text-center mt-4">
                            <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">
                                <i class="bi bi-arrow-left me-1"></i>
                                {{ __('Back to sign in') }}
                            </a>
                        </div>

                    </x-card.body>
                </x-card>

            </div>
        </div>
    </div>

@endsection