@extends('templates.app')
@section('title', 'User Profile')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card radius-10">
                        <div class="card-body">

                            <div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Profile Information</h6>
								</div>
							</div>
                            <hr>
                            
                            <form class="row g-3" method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-12">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ Auth::user()->name }}" placeholder="Full Name">

                                    @error('name')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="Email Address">

                                    @error('email')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="name" class="form-label">Member Since</label>
                                    <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('d F Y') }}" readonly>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>

                                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $user->hasVerifiedEmail())
                                    <div class="col-12">
                                        <div class="text-center ">
                                            <p class="mb-0">
                                                {{ __('Your email address is unverified.') }}
                                                <a href="{{ route('verification.notice') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    {{ __('Click here to re-send the verification email.') }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="card radius-10">
                        <div class="card-body">

                            <div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Update Password</h6>
								</div>
							</div>
                            <hr>
                            
                            <form class="row g-3" method="POST" action="{{ route('user-password.update') }}">
                                @csrf
                                @method('PUT')

                                <div class="col-sm-12">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <div class="input-group" id="show_hide_current_password">
                                        <input type="password" class="form-control" name="current_password" id="current_password" value="{{ old('current_password') }}" placeholder="********" required>
                                        <a href="javascript:;" class="input-group-text bg-transparent toggle-password" data-target="current_password"><i class="bx bx-hide"></i></a>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <label for="password" class="form-label">New Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="********" required>
                                        <a href="javascript:;" class="input-group-text bg-transparent toggle-password" data-target="password"><i class="bx bx-hide"></i></a>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <div class="input-group" id="show_hide_password_confirmation">
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="********" required>
                                        <a href="javascript:;" class="input-group-text bg-transparent toggle-password" data-target="password_confirmation"><i class="bx bx-hide"></i></a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('myscript')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePasswordButtons = document.querySelectorAll('.toggle-password');

            togglePasswordButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    const targetId = button.getAttribute('data-target');
                    const targetInput = document.getElementById(targetId);

                    if (targetInput.type === 'password') {
                        targetInput.type = 'text';
                        button.innerHTML = '<i class="bx bx-show"></i>';
                    } else {
                        targetInput.type = 'password';
                        button.innerHTML = '<i class="bx bx-hide"></i>';
                    }
                });
            });
        });
    </script>
@endpush