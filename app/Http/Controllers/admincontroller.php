<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Redirect;

use File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Translation\FileLoader;
use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\AddUser;
use Illuminate\Support\Facades\Hash;
use DateTime;
use Illuminate\Support\Facades\Mail;

class admincontroller extends BaseController {

    public function index() {
        return View('layouts/admin');
    }

    public function register() {
        return view('layouts/registration');
    }

    public function login() {
        return view('layouts/login');
    }

    public function registerstep() {
        session()->regenerate();
        $FullName = Input::get('FullName');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $State = Input::get('state');
        session(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State]);
        return view('layouts/step2');
    }

    public function registerfinal() {
        session()->regenerate();
        $PhoneNumber = Input::get('PhoneNumber');
        $Email = Input::get('Email');
        session(['PhoneNumber' => $PhoneNumber, 'Email' => $Email]);
        $Data['FullName'] = session::get('FullName');
        $Data['Address'] = session::get('Address');
        $Data['City'] = session::get('City');
        $Data['State'] = session::get('State');
        $Data['PhoneNumber'] = session::get('PhoneNumber');
        $Data['Email'] = session::get('Email');
        return view('layouts/finalregister', ['value' => $Data]);
    }

    public function confirm() {
        session()->regenerate();
        $FullName = Input::get('FullName');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $State = Input::get('state');
        $ldate = new DateTime;
        $hours = $ldate->format('H:i');
        $hours = explode(":", $hours);
        $hours = implode("", $hours);
        $spcl_char = '!@#$%&*()_=+]}[{;:,<.>?|';
        $spcl_char = str_shuffle($spcl_char);
        $spcl_char = substr($spcl_char, 0, 5);
        $Full_name = strtolower($FullName);
        $City = strtolower($City);
        $state = strtolower($State);
        $string = $City . $state;
        $com = $string . $FullName;
        $com = str_split($com);
        $alphabets = str_split("abcdefghijklmnopqrstvuwxyz");
        $string = str_split($string);
        $name = str_split($FullName);
        $arr = null;
        $ex = null;
        $count = 0;
        for ($x = 0; $x < count($string); $x++) {
            $count = 0;
            for ($y = 0; $y < count($name); $y++) {
                if ($string[$x] == $name[$y]) {
                    $count = 1;
                }
            }
            if ($count == 0) {
                $arr.= $string[$x];
            }
        }
        if (strlen($arr) < 11) {
            $length = strlen($arr);
            for ($x = 0; $x < count($alphabets); $x++) {
                $count = 0;
                for ($y = 0; $y < count($com); $y++) {
                    if ($alphabets[$x] == $com[$y]) {
                        $count = 1;
                    }
                }
                if ($count == 0) {
                    $ex.= $alphabets[$x];
                }
                if (strlen($ex) + $length == 11) {
                    $x = count($alphabets);
                }
            }
        }

        $string = $arr . $ex;

        $upper = strtoupper(substr($string, 0, 2));
        $rand = str_shuffle($spcl_char . $hours . $upper);
        $str = str_shuffle(substr($string, 2, 9));

        $password = substr($str, 0, 4) . $rand . substr($str, 4, 5);
        $validator = Validator::make(Input::all(), array(
                    'Email' => 'required|max:50|email',
                    'FullName' => 'required|max:20|min:3',
                    'City' => 'required|min:4',
                    'PhoneNumber' => 'required|Integer',
                    'Address' => 'required'
        ));
        if ($validator->fails()) {
            return Redirect::route('registration')
                            ->withErrors($validator)
                            ->withInput();
        } else {
            $FullName = Input::get('FullName');
            $Address = Input::get('Address');
            $City = Input::get('City');
            $State = Input::get('State');
            $PhoneNumber = Input::get('PhoneNumber');
            $Email = Input::get('Email');
            $Password = md5($password);
            echo "<br />".$Password."<br />Hashed";
            
            
            $User = AddUser::create(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $State, 'PhoneNumber' => $PhoneNumber, 'Email' => $Email, 'Password' => $Password]);
            if ($User) {
                $success = "Successfully registered";
            } else {
                $success = "Registration failed please try again";
            }
            Mail::send('layouts/password', array('password' => $password), function ($message)use($Email) {
                $message->from('yuvashree.b@karmanya.co.in', 'Laravel password');

                $message->to($Email, 'yuva shree')->subject('password mail');
            });
        }
        return view('layouts/registration', ['success' => $success]);
    }

    public function loginverify() {       
        $Email = Input::get('Email');
        $Password = Input::get('Password');
        $HashPassword = md5($Password);
//        echo $HashPassword;
        $DbPassword=  AddUser::select('Password')->where('Email',$Email)->first();
        $DbPassword=  json_decode(json_encode($DbPassword),true);
        if($HashPassword==$DbPassword['Password']){
            return Redirect::route('dashboard');
        }
    }

}
