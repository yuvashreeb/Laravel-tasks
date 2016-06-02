<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Registration Page</title>
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
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{URL::route('dashboard')}}"><b>Admin</b>LTE</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg"><b>STEP 2</b></p>

                <form action="{{URL::route('finalregistration')}}" method="post">
                    <input type='hidden' name='_token' value='{{csrf_token()}}'/>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Phone Number" id="MobileNumber" name="PhoneNumber" size="10">
                        <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                        <span class="errormsg" id="MobileNumberError"></span>
                    </div>
                    <div class='form-group has-feedback'>
                        <input type="email" class="form-control" placeholder="Email" id="Email" name="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <span class="errormsg" id="EmailError"></span>
                    </div>
                    <div class="row">
                        <div class='col-xs-4'>
                            <a href="{{URL::route('registration')}}"><input type="button" value='BACK' class="btn btn-primary btn-block btn-flat"></a>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat float" id="Next">NEXT</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>