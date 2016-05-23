<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class admincontroller extends BaseController {
    public function index(){
        return View('layouts/admin');
    }
    public function register(){
        return view('layouts/registration');
    }
    public function login(){
        return view('layouts/login');
    }
   

}