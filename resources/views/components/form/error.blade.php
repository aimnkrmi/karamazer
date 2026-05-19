@props([
    'name',
    'errorBag' => ''
])
@error($name, $errorBag)
    <div {{ $attributes->merge(['class' => 'invalid-feedback d-block']) }}> 
                {{ $message }}
            </div>
@enderror