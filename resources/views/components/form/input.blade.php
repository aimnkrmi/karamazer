@props([
    'name',
    'type' => 'text',
    'value' => null,
    'label' => null,
    'classLabel' => null,
    'helperText' => null,
    'required' => false,
])

<div class="form-group mb-3">
    @if($label)<x-form.label :for="$name" :required="$required" :classLabel="$classLabel">{{ $label }}</x-form.label>@endif
    
    <div class="position-relative">
        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $name }}"
            value="{{ old($name, $value) }}" 
            {{ $required ? 'required' : '' }}
            {{-- Merge classes, append is-invalid if error exists, and allow external attributes --}}
            {{ $attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '')]) }} 
        />
        @if ($type == 'password')
            <x-button type="button" class="toggle-password-btn btn btn-sm position-absolute top-50 end-0 translate-middle-y me-2 border-0 bg-transparent p-0" data-target="{{ $name }}" aria-label="Toggle password visibility">
                <i class="bi bi-eye fs-5 text-muted"></i>
            </x-button>
        @endif
    </div>

    @if($helperText)
        <small class="text-muted">{{ $helperText }}</small>
    @endif
    
    <x-form.error :name="$name" />
</div>

@if ($type == 'password')
    @once
        @push('js')
            <script>
                document.querySelectorAll('.toggle-password-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const targetId = this.getAttribute('data-target');
                        const passwordInput = document.getElementById(targetId);
                        const toggleIcon = this.querySelector('i');

                        const isPassword = passwordInput.getAttribute('type') === 'password';

                        passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

                        toggleIcon.classList.toggle('bi-eye');
                        toggleIcon.classList.toggle('bi-eye-slash');
                    });
                });
            </script>
        @endpush
    @endonce
@endif