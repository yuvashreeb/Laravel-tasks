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
                <p class="login-box-msg"><b>STEP 1</b></p>

                <form action="{{URL::route('registration-step2')}}" method="post">
                    <input type='hidden' name='_token' value='{{csrf_token()}}'/>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Full name" id="FullName" name='FullName'>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <span class="errormsg" id="FullNameError"></span>
                    </div>
                    <div class='form-group has-feedback'>
                        <textarea placeholder="Address" class='form-control' id="Address" name="Address"></textarea>
                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        <span class="errormsg" id="AddressError"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="City" id="City" name="City">
                        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
                    </span><span class="errormsg" id="CityError"></span>
            </div>
            <div class='form-group has-feedback'>
                <select class="form-control" id="state" name="state">
                    <option value="Select">Select State</option>
                    <option value="Telanagana" selected>Telanagana</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                </select>
            </span><span class="errormsg" id="StateError"></span>
    </div>
    <div class="row">
        <div class='col-xs-8'></div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat float" id="next">NEXT</button>
        </div>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>
</div>
</div>
</body>
</html>