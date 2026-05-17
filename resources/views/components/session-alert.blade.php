@props([
    'type' => 'success',
])
@if (session('success'))
    <div {{ $attributes->merge(['class' => 'alert alert-success']) }} role="alert">
            {{ session('success') }}
        </div>
@endif
@if (session('error'))
    <div {{ $attributes->merge(['class' => 'alert alert-danger']) }} role="alert">
            {{ session('error') }}
        </div>
@endif
@if (session('warning'))
    <div {{ $attributes->merge(['class' => 'alert alert-warning']) }} role="alert">
            {{ session('warning') }}
        </div>
@endif
@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'alert alert-danger']) }} role="alert">
    <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
@endif