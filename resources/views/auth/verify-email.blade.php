<!doctype html>
<html lang="en">

<head>
    <title>Verify Email | {{ config('app.name') }}</title>
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
                            <img src="https://zulfame.id/wp-content/uploads/2023/12/logo-dark.png" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">

                                    <div class="form-body">
                                        <div class="mb-4 text-sm">
                                            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                        </div>
                                
                                        @if (session('status') == 'verification-link-sent')
                                            <div class="mb-4 font-medium text-sm text-primary">
                                                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                                            </div>
                                        @endif
                                        
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <form method="POST" action="{{ route('verification.send') }}">
                                                    @csrf
                                    
                                                    <div>
                                                        <x-button type="submit" class="btn btn-primary" style="width: 100%;">
                                                            <i class="bx bx-mail-send"></i>Resend Verification Email
                                                        </x-button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <div class="text-center ">
                                                <form method="POST" action="{{ route('logout') }}">
                                                <p class="mb-0">You cannot log in?
                                                        @csrf
                                                        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Sign Out</a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
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
