<!doctype html>
<html lang="en">

<head>
    <title>Reset Password | {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://zulfame.id/favicon.png" type="image/png" />
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="https://zulfame.id/wp-content/uploads/2023/12/logo-dark.png" width="180"
                                alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">


                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('password.update') }}">
                                            @csrf

                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                            <div class="col-12">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email', $request->email) }}" placeholder="einstein@gmail.com" required>

                                                @error('email')
                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-sm-12">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" placeholder="********" required>

                                                @error('password')
                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-sm-12">
                                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="********" required>

                                                @error('password_confirmation')
                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="bx bx-lock"></i>Reset Password
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="text-center ">
                                                    <p class="mb-0">Already registered? 
                                                        <a href="/login">Sign in here</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
