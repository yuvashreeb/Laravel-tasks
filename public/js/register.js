$(document).ready(function () {

    $("#FullName").keyup(function () {
        var Name = $("#FullName").val();
        if (Name === "")
        {
            $("#FullNameError").html("enter name");
        } else if ($.isNumeric(Name))
        {
            $("#FullNameError").html("enter only characters");
        } else if (Name.length < 5)
        {
            $('#FullNameError').html("Minimum 5 characters required");
        } else
        {
            $("#FullNameError").html("");
        }

    });
    $('#Email').keyup(function () {
        var MailId = $("#Email").val();
        var AtPos = MailId.indexOf("@");
        var DotPos = MailId.lastIndexOf(".");
        if (MailId == "")
        {
            $("#EmailError").html("enter email address");
        } else if (AtPos < 1 || AtPos < 5 || DotPos < 1 || AtPos + 3 > DotPos || AtPos > DotPos || DotPos + 3 > MailId.length)
        {
            $("#EmailError").html("enter valid email of form abcde@gmail.com");
            return false;
        } else
        {
            $("#EmailError").html("");
        }
    });
    $("#Password").keyup(function () {

        var ValidatePassword = $("#Password").val();
        if (ValidatePassword.length < 8)
        {
            $("#PasswordError").html("Password should be atleast 8 characters and one captial letter");
        } else {
            $("#PasswordError").html("");
        }

    });
    $("#ConfirmPassword").keyup(function ()
    {
        var ValidateconfirmPassword = $("#ConfirmPassword").val();
        if (ValidateconfirmPassword != $("#Password").val())
        {
            $("#ConfirmPasswordError").html("Confirm Password Should be same as above Password")
        } else {
            $("#ConfirmPasswordError").html("");
        }
    });
    $("#City").keyup(function () {
        var City = $("#City").val();
        if (City === "")
        {
            $("#CityError").html("enter ur city");
        } else if (($.isNumeric(City)))
        {
            $("#CityError").html("enter only characters");
        } else {
            $("#CityError").html("");
        }
    });
    $("#Address").keyup(function () {
        var Address = $("#Address").val();
        if (Address === "")
        {
            $("#AddressError").html("Enter Address");
        } else {
            $("#AddressError").html("");
        }
    });
    $("#state").keyup(function () {
        var State = $("#state").val();
        if (State === "")
        {
            $("#StateError").html("enter ur country");
        } else {
            $("#StateError").html("");
        }
    });
    $("#MobileNumber").keyup(function () {
        var Number = $("#MobileNumber").val();
        if (Number === "")
        {
            $("#MobileNumberError").html("enter mobile number");
        } else if (!$.isNumeric(Number))
        {
            $("#MobileNumberError").html("enter only numbers");
        } else if (Number.length < 10)
        {
            $("#MobileNumberError").html("enter 10 digits");
        } else
        {
            $("#MobileNumberError").html("");
        }

    });
    $("#next").click(function (event) {
        var FullName = validateFullName();
        var address = validateAddress();
        var City = validateCity();
        var state = validateState();
        if (FullName == false || address == false || City == false || state == false) {
            event.preventDefault();
        }
    });
    $("#Next").click(function (event) {
        var phone = validateNumber();
        var Email = validateEmail();
        if (phone==false||Email==false){
            event.preventDefault();
        }
    });
   $("#success").click(function(event){
      var FullName = validateFullName();
        var address = validateAddress();
        var City = validateCity();
        var state = validateState(); 
        var phone = validateNumber();
        var Email = validateEmail();
        if (FullName == false || address == false || City == false || state == false || phone==false||Email==false) {
            event.preventDefault();
        }
   });

});
function validateFullName() {
    var Name = $("#FullName").val();
    if (Name === "")
    {
        $("#FullNameError").html("Enter full name");
        return false;
    } else if ($.isNumeric(Name))
    {
        $("#FullNameError").html("Enter only characters");
        return false;
    } else if (Name.length < 5)
    {
        $('#FullNameError').html("Minimum 5 characters required");
        return false;
    } else
    {
        $("#FullNameError").html("");
        return true;
    }
}
function validateCity() {
    var City = $("#City").val();
    if (City === "")
    {
        $("#CityError").html("Enter ur city");
        return false;
    } else if (($.isNumeric(City)))
    {
        $("#CityError").html("Enter only characters");
        return false;
    } else {
        $("#CityError").html("");
        return true;
    }
}
function validateAddress() {
    var Address = $("#Address").val();
    if (Address === "")
    {
        $("#AddressError").html("Enter Address");
        return false;
    } else {
        $("#AddressError").html("");
        return true;

    }
}
function validateState() {
    var State = $("#state").val();
    if (State === "")
    {
        $("#StateError").html("enter ur state");
        return false;
    } else {
        $("#StateError").html("");
        return true;
    }
}
function validateNumber() {
    var Number = $("#MobileNumber").val();
    if (Number === "")
    {
        $("#MobileNumberError").html("enter mobile number");
        return false;
    } else if (!$.isNumeric(Number))
    {
        $("#MobileNumberError").html("enter only numbers");
        return false;
    } else if (Number.length < 10)
    {
        $("#MobileNumberError").html("enter 10 digits");
        return false;
    } else
    {
        $("#MobileNumberError").html("");
        return true;
    }
}
function validateEmail() {
    var MailId = $("#Email").val();
    var AtPos = MailId.indexOf("@");
    var DotPos = MailId.lastIndexOf(".");
    if (MailId == "")
    {
        $("#EmailError").html("enter email address");
        return false;
    } else if (AtPos < 1 || AtPos < 5 || DotPos < 1 || AtPos + 3 > DotPos || AtPos > DotPos || DotPos + 3 > MailId.length)
    {
        $("#EmailError").html("enter valid email of form abcde@gmail.com");
        return false;
    } else
    {
        $("#EmailError").html("");
        return true;
    }
}