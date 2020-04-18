<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">
    <form method="POST" action="{{ route('userregisterpost') }}">
        @csrf

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row" style="margin-left: 28%;">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account and book your stay!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input name="username" type="text" class="form-control form-control-user" id="exampleusername" placeholder="Username">
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('name') }}" id="exampleFirstName" placeholder="Name">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <input name="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"  value="{{ old('surname') }}" id="exampleSurname" placeholder="Surname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  value="{{ old('email') }}" id="exampleInputEmail" placeholder="Email Address">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  id="exampleInputPassword" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Repeat Password">
                                    </div>
                                </div>

                                @if(config('settings.reCaptchStatus'))
                                    <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-4">
                                            <div class="g-recaptcha" data-sitekey="{{ config('settings.reCaptchSite') }}"></div>
                                        </div>
                                    </div>
                                @endif


                                {{--                                this shouldnt be on LOGIN, it should be on REGISTER--}}
{{--                                <a href="userregister" class="btn btn-primary btn-user btn-block">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </a>--}}
<input type="submit" class="btn btn-primary btn-user btn-block" value="Register" />
                                <hr>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="userlogin">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
