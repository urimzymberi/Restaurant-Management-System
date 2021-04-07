{{--@extends('layouts.layout')--}}

{{--@section('content')--}}
{{--<div class="customer_login">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center pt-5">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="wrapper-log">--}}
{{--                    <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="tab-content" id="myTabContent">--}}
{{--                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">--}}
{{--                            <div class="account_form">--}}
{{--                                <h4>Login</h4>--}}
{{--                                <form action="#">--}}
{{--                                    <p>--}}
{{--                                        <label>Username or email <span>*</span></label>--}}
{{--                                        <input type="text" class="form-control">--}}
{{--                                    </p>--}}
{{--                                    <p>--}}
{{--                                        <label>Passwords <span>*</span></label>--}}
{{--                                        <input type="password" class="form-control">--}}
{{--                                    </p>--}}
{{--                                    <div class="login_submit">--}}
{{--                                        <a href="#">Lost your password?</a>--}}
{{--                                        <label for="remember">--}}
{{--                                            <input id="remember" type="checkbox">--}}
{{--                                            Remember me--}}
{{--                                        </label>--}}
{{--                                        <button type="submit">login</button>--}}

{{--                                    </div>--}}

{{--                                </form>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">--}}
{{--                            <div class="account_form register">--}}
{{--                                <h4>Register</h4>--}}
{{--                                <form action="#">--}}
{{--                                    <p>--}}
{{--                                        <label>Username <span>*</span></label>--}}
{{--                                        <input type="text" class="form-control">--}}
{{--                                    </p>--}}

{{--                                    <p>--}}
{{--                                        <label>Email address  <span>*</span></label>--}}
{{--                                        <input type="text" class="form-control">--}}
{{--                                    </p>--}}
{{--                                    <p>--}}
{{--                                        <label>Passwords <span>*</span></label>--}}
{{--                                        <input type="password" class="form-control">--}}
{{--                                    </p>--}}
{{--                                    <p>--}}
{{--                                        <label>Confirm Passwords <span>*</span></label>--}}
{{--                                        <input type="password" class="form-control">--}}
{{--                                    </p>--}}
{{--                                    <div class="login_submit">--}}
{{--                                        <button type="submit">Register</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- jQuery plugins-->--}}
{{--<script src="assets/js/plugins/plugins.js"></script>--}}
{{--<script src="assets/js/template-custom.js" type="text/javascript"></script>--}}
{{--<script src="assets/js/isotope.pkgd.min.js"></script>--}}
{{--<script src="assets/js/bootstrap-clockpicker.min.js"></script>--}}
{{--<!-- <script src="assets/js/bootstrap-datepicker.min.js"></script> -->--}}
{{--<script src="assets/js/jquery.validate.min.js"></script>--}}
{{--<script src="assets/js/reservation-custom.js"></script>--}}

{{--@endsection--}}




    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soopcy - A Responsive restaurant HTML template</title>
    <!-- Bootstrap -->
    <link href="../assets/css/plugins/plugins.css" rel="stylesheet">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!--slider revolution-->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css"> -->
    <!--main css file-->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/assets/css/plugins/plugins.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<div class="customer_login">
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-md-6">
                <div class="wrapper-log">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hyni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Regjistrohu</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="account_form">
                                <h4>Login</h4>
                                {{--                                <form action="{{ route('login') }}">--}}
                                {{--                                    @csrf--}}
                                {{--                                    <p>--}}
                                {{--                                        <label style="color: #ffffff">Username or email <span>*</span></label>--}}
                                {{--                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
                                {{--                                    </p>--}}
                                {{--                                    <p>--}}
                                {{--                                        <label style="color: #ffffff">Passwords <span>*</span></label>--}}
                                {{--                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}
                                {{--                                    </p>--}}
                                {{--                                    <div class="login_submit">--}}
                                {{--                                        <a href="#">Lost your password?</a>--}}
                                {{--                                        <label for="remember">--}}
                                {{--                                            <input id="remember" type="checkbox">--}}
                                {{--                                            Remember me--}}
                                {{--                                        </label>--}}
                                {{--                                        <button type="submit">login</button>--}}

                                {{--                                    </div>--}}

                                {{--                                </form>--}}


                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">E-Mail Adresa</label>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label for="password">Fjalekalimi</label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">Mbaje mend</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4 text-right">
                                            <button type="submit" class="btn btn-primary">Hyni</button>

{{--                                            @if (Route::has('password.request'))--}}
{{--                                                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                                    {{ __('Forgot Your Password?') }}--}}
{{--                                                </a>--}}
{{--                                            @endif--}}
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="account_form register">
                                <h4>Register</h4>
                                {{--                                <form action="#">--}}
                                {{--                                    <p>--}}
                                {{--                                        <label style="color: #ffffff">Name <span>*</span></label>--}}
                                {{--                                        <input type="text" class="form-control">--}}
                                {{--                                    </p>--}}

                                {{--                                    <p>--}}
                                {{--                                        <label style="color: #ffffff">Email address  <span>*</span></label>--}}
                                {{--                                        <input type="text" class="form-control">--}}
                                {{--                                    </p>--}}
                                {{--                                    <p>--}}
                                {{--                                        <label style="color: #ffffff">Passwords <span>*</span></label>--}}
                                {{--                                        <input type="password" class="form-control">--}}
                                {{--                                    </p>--}}
                                {{--                                    <p>--}}
                                {{--                                        <label style="color: #ffffff">Confirm Passwords <span>*</span></label>--}}
                                {{--                                        <input type="password" class="form-control">--}}
                                {{--                                    </p>--}}

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Emri dhe Mbiemri</label>

                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email"> E-Mail Adresa</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror

                                        <div class="form-group">
                                            <label for="phone_number">Numri i Telefonit</label>
                                            <input id="phone_numberl" type="phone_number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                            @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Fjalekalimi</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm">Konfirmimi i Fjalekalimit</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                        {{--                                        <div class="form-group row mb-0">--}}
                                        {{--                                            <div class="col-md-6 offset-md-4">--}}
                                        {{--                                                <button type="submit" class="btn btn-primary">--}}
                                        {{--                                                    {{ __('Register') }}--}}
                                        {{--                                                </button>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}


                                        <div class="login_submit">
                                            <button type="submit">Regjistrohu</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- jQuery plugins-->
<script src="assets/js/plugins/plugins.js"></script>
<script src="assets/js/template-custom.js" type="text/javascript"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/bootstrap-clockpicker.min.js"></script>
<!-- <script src="assets/js/bootstrap-datepicker.min.js"></script> -->
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/reservation-custom.js"></script>
</body>
</html>

