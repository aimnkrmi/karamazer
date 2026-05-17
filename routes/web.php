<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/view', function () {
        return view('dashboard.index');
    })->name('participants.index');

    Route::get('/profile', function () {
        return view('profile.index');
    })->name('profile');

    Route::get('/settings/security', function () {
        return view('profile.settings.security');
    })->name('settings.security');
});
