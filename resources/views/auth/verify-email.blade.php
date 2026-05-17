@extends('layouts.auth')

@section('title', 'Verify Email')

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
                                <i class="bi bi-envelope-check"></i>
                            </div>

                            <h1 class="h3 fw-bold mb-2">
                                Verify your email
                            </h1>

                            <p class="text-muted mb-0">
                                We sent a verification link to your email address.
                                Please verify your account before continuing.
                            </p>

                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <x-alert type="success" class="border-0">
                                A new verification link has been sent to your email address.
                            </x-alert>
                        @endif

                        <x-alert type="light" class="border mb-4">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-info-circle me-2 mt-1"></i>

                                <div class="small text-muted">
                                    If you don’t see the email, check your spam folder
                                    or request another verification link below.
                                </div>
                            </div>
                        </x-alert>

                        <form method="POST" action="#" class="mb-3">
                            @csrf

                            <x-button type="submit" theme="dark" class="w-100 py-2 fw-semibold auth-submit-btn">
                                <span class="submit-text">
                                    Resend Verification Email
                                </span>

                                <span class="submit-loading d-none">
                                    <span class="spinner-border spinner-border-sm me-2" aria-hidden="true"></span>

                                    Sending verification link...
                                </span>
                            </x-button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-button type="submit" theme="light" class="border w-100 py-2 fw-semibold">
                                Sign Out
                            </x-button>
                        </form>

                    </x-card.body>
                </x-card>

            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const form = document.querySelector('.auth-submit-btn')?.closest('form');
            const submitButton = document.querySelector('.auth-submit-btn');

            if (form && submitButton) {

                form.addEventListener('submit', function () {

                    submitButton.disabled = true;

                    submitButton.querySelector('.submit-text')
                        .classList.add('d-none');

                    submitButton.querySelector('.submit-loading')
                        .classList.remove('d-none');

                });

            }

        });
    </script>
@endpush