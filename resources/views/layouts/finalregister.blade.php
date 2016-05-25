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
    <body class="hold-transition register-page"><div class="register-box">
            <div class="register-logo">
                <a href="{{URL::route('dashboard')}}"><b>Admin</b>LTE</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg"><b>STEP 3</b></p>
                <form action="{{URL::route('success')}}" method="post">
                    <input type='hidden' name='_token' value='{{csrf_token()}}'/>

                    <div class="form-group has-feedback">
                        <label>FULL NAME: </label><input type="hidden" value="{{$value['FullName']}}" name="FullName"/>{{$value['FullName']}}
                        <span class="errormsg" id="FullNameError"></span>
                    </div>
                    <div class='form-group has-feedback'>
                        <label>ADDRESS: </label><input type="hidden" value="{{$value['Address']}}" name="Address"/>{{$value['Address']}}
                        <span class="errormsg" id="AddressError"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label>CITY: </label><input type="hidden" name="City" value="{{$value['City']}}"/>{{$value['City']}}
                    </span><span class="errormsg" id="CityError"></span>
            </div>
            <div class='form-group has-feedback'>
                <label>STATE: </label><input type="hidden" name="State" value="{{$value['State']}}"/>{{$value['State']}}
            </div>
            <div class="form-group has-feedback">
                <label>PHONE NUMBER: </label><input type="hidden" name="PhoneNumber" value="{{$value['PhoneNumber']}}"/>{{$value['PhoneNumber']}}
                <span class="errormsg" id="MobileNumberError"></span>
            </div>
            <div class='form-group has-feedback'>
                <label>EMAIL: </label><input type="hidden" name="Email" value="{{$value['Email']}}"/>{{$value['Email']}}
                <span class="errormsg" id="EmailError"></span>
            </div>

            <div class="row">
                <div class="col-xs-4">
                    <a href="{{URL::route('registration-step2')}}"><input type="button" value='BACK' class="btn btn-primary btn-block btn-flat"></a>
                </div>

                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat float" id="success">SUBMIT</button>
                    <!--           <button type="submit" class="btn btn-primary btn-block btn-flat float" id="confirm">SUBMIT</button>-->
                </div>
            </div>
        </form>
    </div>
</div>
<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
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