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
    <title>Custom Admin Template - Signup</title>

    <!-- Common CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body class="authentication">
    <!-- Container start -->
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                    <div class="login-screen">
                        <div class="login-box">
                            <a href="#" class="login-logo">
                                <img src="{{ asset('img/logo-dark.png') }}" alt="Custom Admin Dashboard" />
                            </a>
                            <h5>Welcome,<br />Create your Admin Account.</h5>

                            <!-- Validation Errors -->
                            <x-validation-errors class="mb-4" />

                            <div class="form-group">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus />
                            </div>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
                            </div>

                            <div class="form-group">
                                <input id="phone" type="number" class="form-control" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required />
                            </div>

                            <div class="form-group">
                                <input id="address" type="text" class="form-control" name="address" placeholder="Address" value="{{ old('address') }}" required />
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autocomplete="new-password" />
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                </div>
                                <small id="passwordHelpInline" class="text-muted">
                                    Password must be 8-20 characters long.
                                </small>
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input id="terms" type="checkbox" class="custom-control-input" name="terms" required>
                                        <label class="custom-control-label" for="terms">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </label>
                                    </div>
                                </div>
                            @endif

                            <div class="actions mb-4">
                                <button type="submit" class="btn btn-primary">Signup</button>
                            </div>

                            <hr>

                            <div class="m-0">
                                <span class="additional-link">Have an account? <a href="{{ route('login') }}" class="btn btn-dark">Login</a></span>
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
