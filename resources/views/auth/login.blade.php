<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>Custom Admin Template - Login</title>

    <!-- Common CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body class="authentication">
    <!-- Container start -->
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-screen">
                        <div class="login-box">
                            <a href="#" class="login-logo">
                                <img src="{{ asset('img/logo-dark.png') }}" alt="Custom Admin Dashboard" />
                            </a>
                            <h5>Welcome back,<br />Please Login to your Account.</h5>

                            <!-- Validation Errors -->
                            <x-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus />
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required />
                            </div>

                            <div class="actions mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                                    <label class="custom-control-label" for="remember_me">Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                            <div class="forgot-pwd">
                                @if (Route::has('password.request'))
                                    <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                            </div>

                            <hr>

                            <div class="actions align-left">
                                <span class="additional-link">New here?</span>
                                <a href="{{ route('register') }}" class="btn btn-dark">Create an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Container end -->
</body>
</html>
