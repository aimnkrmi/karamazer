@extends('layouts.app')

@section('title', 'Profile | ' . config('app.name', 'Laravel'))

@section('page_title', 'Profile')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <div class="avatar avatar-2xl">
                                <img src="./assets/compiled/jpg/2.jpg" alt="Avatar">
                            </div>

                            <h3 class="mt-3">{{ Auth::user()->name }}</h3>
                            <p class="text-small"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf
                            @method('PUT')
                            <x-form.input name="name" label="Name" value="{{ Auth::user()->name }}" autocomplete="off" />
                            <x-form.input type="email" name="email" label="Email" value="{{ Auth::user()->email }}" />
                            <x-form.input type="text" name="phone" label="Phone" value="60123456789" />

                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone"
                                    value="083xxxxxxxxx">
                            </div>
                            <x-flatpickr :config="['enableTime' => true, 'dateFormat' => 'Y-m-d']" name="birthday"
                                label="Birthday" placeholder="Your Birthday" value="2003-01-01" />

                            <x-form.select name="gender" label="Gender">
                                <x-form.options :options="[
            'male' => 'Male',
            'female' => 'Female',
        ]"                        emptyOption="Select gender" />
                            </x-form.select>

                            <x-button type="submit">Save Changes</x-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection