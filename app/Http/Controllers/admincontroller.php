<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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
//        DB::table('Registration')->insert([
//            'FullName' => $FullName,
//            'Address' => $Address,
//            'City' => $City,
//            'State' => $State
//        ]);
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




//        DB::table('Registration')->where('FullName', session('name'))->update([
//            'Email' => $Email,
//            'PhoneNumber' => $PhoneNumber
//        ]);
//        $temparary = DB::table('Registration')->select('FullName', 'Address', 'City', 'State', 'Email', 'PhoneNumber')->where('FullName', session('name'))->get();
//        $temparary = json_decode(json_encode($temparary), TRUE);
//        DB::table('Registration')->truncate();
        return view('layouts/finalregister', ['value' => $Data]);
    }

    public function confirm() {
        $validator = Validator::make(Input::all(), array(
            'Email' => 'required|max:50|email',
            'FullName' => 'required|max:20|min:3',
            'City' => 'required|min:6',
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
            $State = Input::get('state');
            $PhoneNumber = Input::get('PhoneNumber');
            $Email = Input::get('Email');
            DB::table('Registration')->insert([
                'FullName' => $FullName,
                'Address' => $Address,
                'City' => $City,
                'State' => $State,
                'PhoneNumber' => $PhoneNumber,
                'Email' => $Email
            ]);
            echo "success";
        }
    }

}
