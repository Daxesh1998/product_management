
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('frontend/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h2 class="h1">Forgot Password</h2>
            </div>
            <div class="card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                <form action="{{ route('password.email') }}" method="post">

                    @csrf

                    @if (session('status'))
                    <div class="alert alert-ssuccess">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email" >
                        <span class="text-dange">@error('email'){{ $message }} @enderror</span>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="login">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('frontend/dist/js/adminlte.min.js') }}"></script>
</body>

</html>