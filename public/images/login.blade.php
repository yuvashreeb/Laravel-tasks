<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{asset('/plugins/iCheck/square/blue.css')}}">
        <script type="text/javascript" src="{{asset('js/jquery-2.2.2.min.js')}}"></script>
        <script src="{{asset('js/register.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{URL::route('dashboard')}}"><b>Admin</b>LTE</a>
            </div>
            @if ( session()->has('password') )
            <div class="alert alert-info">{{ session()->get('password') }}</div>
            @endif
            @if ( session()->has('logout') )
            <div class="alert alert-info">{{ session()->get('logout') }}</div>
            @endif

            <!-- /.login-logo -->
            @if(isset($error))
            <div class="alert alert-danger">{{$error}}</div>
            @endif
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{URL::route('loginverify')}}" method="post">
                    <input type='hidden' name='_token' value='{{csrf_token()}}'/>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" id="Email" name="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </span><span class="errormsg" id="EmailError"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" id="Password" name="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </span><span class="errormsg" id="PasswordError"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
            </div>
        </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" id="submit">Sign In</button>
        </div>
    </div>
</form>
<a href="{{URL::route('registration')}}" class="text-center">Register a new membership</a>

</div>
</div>
<script src="{{asset('/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/plugins/iCheck/icheck.min.js')}}"></script>

<script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
</script>
</body>
</html>