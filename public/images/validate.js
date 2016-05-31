/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validatefname() {
    var str = document.getElementById('first').value;
    var error = 0;
    /* var x=str.trim();
     alert(x);*/
    if (!str.length) {
        error = 1;
        document.getElementById('fid').innerHTML = "please enter firstname";
    }
    for (var i = 0; i < str.length; i++) {
        if (!isNaN(str.charAt(i)) && str.charAt(i) != " ") {

            error = 1;
            document.getElementById('fid').innerHTML = "please enter valid firstname";
        }
    }
    if (error == 0)
    {

        document.getElementById('fid').innerHTML = "";
    }


}
function validatelname() {
    var str = document.getElementById('last').value;
    var error = 0;
    /* var x=str.trim();
     alert(x);*/
    if (!str.length) {
        error = 1;
        document.getElementById('lid').innerHTML = "please enter lastname";
    }
    for (var i = 0; i < str.length; i++) {
        if (!isNaN(str.charAt(i)) && str.charAt(i) != " ") {

            error = 1;
            document.getElementById('lid').innerHTML = "please enter valid lastname";
        }
    }
    if (error == 0)
    {

        document.getElementById('lid').innerHTML = "";
    }


}
function validateemail() {
    var email1 = document.getElementById('emailid').value;
    var at = email1.indexOf("@");
    var dot = email1.lastIndexOf(".");
    if (email1.lenght == 0 || at < 5 || dot < at + 2 || dot + 3 >= email1.length) {
        document.getElementById('eid').innerHTML = "It should not be empty and please enter a valid email address";
    } else
        document.getElementById('eid').innerHTML = "";
}
function myshow() {
    document.getElementById('pop').style.visibility = "visible";
}
function myhide() {
    document.getElementById('pop').style.visibility = "hidden";
    document.getElementById('pop').value = "";
}

function phonevalidate(id) {

    var str = document.getElementById(id).value;
    error = 0;
    if (!str.length) {
        error = 1;
        document.getElementById('pid').innerHTML = "enter  number";
    }
    var notanumber = ((str.substring(1, 4)).concat(str.substring(5, 8)).concat(str.substring(9, 13)));
    if (isNaN(notanumber)) {
        document.getElementById('pid').innerHTML = "enter only numbers";
    }

    if (str.length === 3) {
        error = 1;
        var p = str.substring(0, 3);
        document.getElementById(id).value = '(' + p + ')';

    }
    if (str.length === 8) {
        error = 1;
        var p = str.substring(0, 8);
        document.getElementById(id).value = p + '-';

    }

    if (error == 0) {
        document.getElementById('pid').innerHTML = "";
    }

}
/*
 function mvalidate() {
 var str = document.getElementById('mob').value;
 var error = 0;
 if (str.length != 13) {
 document.getElementById('mid').innerHTML = "It must not be empty and enter numbers in format(xxx)xxx-xxxx ";
 error = 1;
 }else if(!isNaN(str.value)){
 document.getElementById('mid').innerHTML = "enter only numbers";
 str.focus();
 }
 else if (str.charAt(0) != '(') {
 document.getElementById('mid').innerHTML = "must be in the format(xxx)xxx-xxxx, ( is missing";
 error = 1;
 } else if (str.charAt(4) != ')') {
 document.getElementById('mid').innerHTML = "must be in the format(xxx)xxx-xxxx, ) is missing";
 error = 1;
 } else if (str.charAt(8) != '-') {
 document.getElementById('mid').innerHTML = "must be in the format(xxx)xxx-xxxx, - is missing";
 error = 1;
 }
 
 if (error == 0) {
 document.getElementById('mid').innerHTML = "";
 }
 }*/

function mobilevalidate()
{
    var phonestring = document.getElementById('mob').value;
    var openbracket = phonestring.indexOf("(");
    var closebracket = phonestring.indexOf(")");
    var hyphen = phonestring.indexOf("-");
    var lengths = phonestring.length;
    var error = 0;
    if (lengths >= 1) {
        if (openbracket != 0) {
            error = 1;
            document.getElementById('mid').innerHTML = "Please Enter In this format '(xxx)xxx-xxxx'";

        }

        if (closebracket != 4) {
            error = 1;
            document.getElementById('mid').innerHTML = "Please Enter In this format '(xxx)xxx-xxxx'";

        }
        if (hyphen != 8) {
            error = 1;
            document.getElementById('mid').innerHTML = "Please Enter In this format '(xxx)xxx-xxxx'";

        }

    }
    if (lengths < 13) {
        error = 1;
        document.getElementById('mid').innerHTML = "Please Enter complete phone number";

    }
    if (error == 0) {
        document.getElementById('mid').innerHTML = "";


    }

}
function number()
{

    var stringnamephone123 = document.getElementById('mob').value;
    var boole1 = charvalidforphone(stringnamephone123);

    if (!boole1)
    {

        document.getElementById('mid').innerHTML = "Please Enter numbers";

    }

    if (boole1 > 0) {
        document.getElementById('mid').innerHTML = "";


    }

}
function charvalidforphone(stringnamephone) {
    var j;
    var number123;
    var lengthofphone = stringnamephone.length;

    for (j = 0; j < lengthofphone; j++) {
        number123 = Number(stringnamephone.charAt(j));

        if (!number123) {

            if (stringnamephone.charAt(j) == "0" || stringnamephone.charAt(j) == "(" || stringnamephone.charAt(j) == ")" || stringnamephone.charAt(j) == "-")
            {


            } else {
                return false;
            }
        }
    }
    return true;
}

function count(text, content, maxlimit)
{
    document.getElementById('para').innerHTML = "";
    document.getElementById('limit').style.border = "1px solid grey";
    var str = document.getElementById(content);
    if (text.value.length > maxlimit)
        text.value = text.value.substring(0, maxlimit);
    else
        str.value = maxlimit - text.value.length;

}
function minlimit(text, content, minlimit) {
    var minlimit = 50;
    if (text.value.length < minlimit) {
        document.getElementById('para').innerHTML = "please enter minimum 50 characters";
        document.getElementById('limit').style.border = "1px solid red";
    }
}
function show_input() {
    var firstnames = document.getElementById('first').value;
    var lastnames = document.getElementById('last').value;
    var emailaddress = document.getElementById('emailid').value;
    var phone = document.getElementById('num').value;
    var mobile = document.getElementById('mob').value;
    var states = document.getElementById('fs').value;
    var messege = document.getElementById('limit').value;

    if (firstnames == null || firstnames == "") {
        document.getElementById('fid').innerHTML = "please enter first name";
    } else {
        document.getElementById('fid').innerHTML = "";
    }
    if (lastnames == null || lastnames == "") {
        document.getElementById('lid').innerHTML = "please enter last name";
    } else {
        document.getElementById('lid').innerHTML = "";
    }
    if (emailaddress == null || emailaddress == "") {
        document.getElementById('eid').innerHTML = "please enter email address";
    } else {
        document.getElementById('eid').innerHTML = "";
    }
    if (phone == null || phone == "") {
        document.getElementById('pid').innerHTML = "please enter phone number";
    } else {
        document.getElementById('pid').innerHTML = "";
    }
    if (mobile == null || mobile == "") {
        document.getElementById('mid').innerHTML = "please enter mobile number";
    } else {
        document.getElementById('mid').innerHTML = "";
    }
    if (messege == null || messege == "") {
        document.getElementById('para').innerHTML = "please enter messege";
    } else if (messege.legnth < 50) {
        document.getElementById('para').innerHTML = "please minimum 50 charcters in messege";
    }


    var you = document.getElementById('regform');
    var demo = "";
    var test = "";
    for (var i = 0; i < you.length; i++) {
        if (you.elements[i].checked) {
            demo = demo + you.elements[i].value + "<br>";
        }
    }
    if (you.elements['lango'].checked) {
        test = test + document.getElementById('pop').value + "<br>";
    }


    var x = "firstname= " + firstnames + "<br>" + "lastname =" + lastnames + "<br>" + "emailid= " + emailaddress + "<br>" + "phonenum= " + phone + "<br>" + "mobilenum=" + mobile + "<br>" + "state=" + states + "<br>" + "game=" + demo + "<br>" + test + "<br>" + "messege=" + messege + "<br>";
    document.getElementById('data_display').innerHTML = x;


}
