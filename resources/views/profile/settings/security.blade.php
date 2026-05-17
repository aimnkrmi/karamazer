@extends('layouts.app')

@section('title', 'Security | ' . config('app.name', 'Laravel'))

@section('page_title', 'Security')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Change Password</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="get">
                            <div class="form-group my-2">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" name="current_password" id="current_password" class="form-control"
                                    placeholder="Enter your current password" value="1L0V3Indonesia">
                            </div>
                            <div class="form-group my-2">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter new password" value="">
                            </div>
                            <div class="form-group my-2">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                                    placeholder="Enter confirm password" value="">
                            </div>

                            <div class="form-group my-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Two Factor Authentication</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="get">
                            <div class="form-group my-2">
                                <label for="email" class="form-label">Current Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter your current email" value="john.doe@example.net">
                            </div>

                            <div class="form-group my-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Delete Account</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="get">
                            <p>Your account will be permanently deleted and cannot be restored, click "Touch me!" to
                                continue</p>
                            <div class="form-check">
                                <div class="checkbox">
                                    <input type="checkbox" id="iaggree" class="form-check-input">
                                    <label for="iaggree">Touch me! If you agree to delete permanently</label>
                                </div>
                            </div>
                            <div class="form-group my-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger" id="btn-delete-account"
                                    disabled="">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection