<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/tincad_favicon.png')}}">
    <title>Reset Password - {{ config('app.name') }}</title>
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/libs/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container-fluid min-vh-100 d-flex flex-column">
        <div class="row flex-grow-1">
            <!--LEFT SIDE-->
            <div class="col-md-6 d-none d-md-block" style="background-image: url('{{ asset('admin/assets/images/background/forgot_password_background.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
                <div class="mt-5 ms-5">
                    <a href="{{ route('login') }}">

                        <!--<img src="{{ asset('admin/assets/images/tincad_logo.png')}}" width="180" alt="" class="img-fluid">-->
                    </a>
                </div>
            </div>

            <!--RIGHT SIDE-->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div>
                    <div class="mb-3 d-flex justify-content-center">
                        <a href="{{ route('login') }}">
                            <!--<img src="{{ asset('admin/assets/images/tincad_logo.png')}}" width="180" alt="" class="img-fluid">-->
                            <h3>FULAFIA STAFF</h3>
                        </a>
                    </div>

                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        <small>{{ session('error') }}</small>
                    </div>
                    @endif
                    <div class="">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <button type="submit" class="btn btn-primary py-2 w-100 mt-3 mb-4 rounded-2">
                            {{ __('Send Password Reset Link') }}
                        </button>

                    </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>

</html>
