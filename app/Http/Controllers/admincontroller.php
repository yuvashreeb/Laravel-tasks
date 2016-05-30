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
Use Illuminate\Support\Facades\Hash;
use DateTime;
use Mail;
use Illuminate\Http\Request;
use App\Uploads;
use App\Logs;
use Illuminate\Support\Facades\Crypt;
use DateTimeZone;
use App\TimeZone;
use Maatwebsite\Excel\Facades\Excel;
USE Barryvdh\DomPDF\PDF;

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
            //echo "<br />" . $Password . "<br />Hashed";


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

    public function loginverify(Request $request) {
        session()->regenerate();
        $Email = Input::get('Email');
        session(['Email' => $Email]);
        $Password = Input::get('Password');
        $HashPassword = md5($Password);
//        echo $HashPassword;
        $DbPassword = AddUser::select('Password', 'Id')->where('Email', $Email)->first();
        $DbPassword = json_decode(json_encode($DbPassword), true);
        session(['Id' => $DbPassword['Id']]);
//        echo Session::get('Id');
        if ($HashPassword == $DbPassword['Password']) {
            $ipAddress = $_SERVER['REMOTE_ADDR'];
            if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
                $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
            }

            $user['useragent'] = $request->server('HTTP_USER_AGENT');
            $input['ip'] = $request->ip();
            // print_r($user);
            //print_r($input);
            $u_agent = $_SERVER['HTTP_USER_AGENT'];
            $bname = 'Unknown';
            $platform = 'Unknown';
            $version = "";
            //First get the platform?
            if (preg_match('/linux/i', $u_agent)) {
                $platform = 'linux';
            } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
                $platform = 'mac';
            } elseif (preg_match('/windows|win32/i', $u_agent)) {
                $platform = 'windows';
            }

            // Next get the name of the useragent yes seperately and for good reason
            if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
                $bname = 'Internet Explorer';
                $ub = "MSIE";
            } elseif (preg_match('/Firefox/i', $u_agent)) {
                $bname = 'Mozilla Firefox';
                $ub = "Firefox";
            } elseif (preg_match('/Chrome/i', $u_agent)) {
                $bname = 'Google Chrome';
                $ub = "Chrome";
            } elseif (preg_match('/Safari/i', $u_agent)) {
                $bname = 'Apple Safari';
                $ub = "Safari";
            } elseif (preg_match('/Opera/i', $u_agent)) {
                $bname = 'Opera';
                $ub = "Opera";
            } elseif (preg_match('/Netscape/i', $u_agent)) {
                $bname = 'Netscape';
                $ub = "Netscape";
            }

            // finally get the correct version number
            $known = array('Version', $ub, 'other');
            $pattern = '#(?<browser>' . join('|', $known) .
                    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            if (!preg_match_all($pattern, $u_agent, $matches)) {
                // we have no matching number just continue
            }

            // see how many we have
            $i = count($matches['browser']);
            if ($i != 1) {
                //we will have two since we are not using 'other' argument yet
                //see if version is before or after the name
                if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                    $version = $matches['version'][0];
                } else {
                    $version = $matches['version'][1];
                }
            } else {
                $version = $matches['version'][0];
            }

            // check if we have a number
            if ($version == null || $version == "") {
                $version = "?";
            }

            $u = array(
                'userAgent' => $u_agent,
                'name' => $bname,
                'version' => $version,
                'platform' => $platform,
                'pattern' => $pattern
            );
            $yourbrowser = ['userAgent' => $u_agent, 'name' => $bname, 'version' => $version, 'platform' => $platform, 'pattern' => $pattern];
            $jsonDetails = json_encode($yourbrowser);

            Logs::create(['UserAgent' => $jsonDetails,
                'IpAddress' => $input['ip'],
                'BrowserName' => $yourbrowser['name'],
                'Version' => $yourbrowser['version'],
                'Platform' => $yourbrowser['platform'],
                'Email' => Session::get('Email'),
            ]);
            $browserDetails = Logs::select('UserAgent', 'IpAddress', 'BrowserName', 'Version', 'Platform', 'updated_at')->where('Email', Session::get('Email'))->orderBy('updated_at', 'desc')->take(5)->get();

//($browserDetails);

            return view('login.logdetails', ['logs' => $browserDetails]);

            //return Redirect::route('adminlte');
        } else {
            $error = "invalid credentials";
            return view('layouts.login', ['error' => $error]);
        }
    }

    public function UpdateProfile() {
        session()->regenerate();
        $value = null;
        $browserDetails = AddUser::select('FullName', 'Address', 'City', 'State', 'Email', 'PhoneNumber', 'CreditCard')->where('Email', Session::get('Email'))->first();
        $value = $browserDetails['CreditCard'];

        //$card = Crypt::decrypt($value);
        //echo $card;
//, 'credit' => $card
        return view('login.update', ['info' => $browserDetails]);
    }

    public function onupdate() {
        session()->regenerate();
        echo Session::get('Id');
        $Full_name = Input::get('Full_name');
        echo $Full_name;
        $Address = Input::get('Address');
        $City = Input::get('City');
        $state = Input::get('state');
        $Email = Input::get('Email');
        $Mobile = Input::get('Mobile');
        $card = Input::get('credit');
        //$card = Crypt::encrypt($card);

        $update = AddUser::where('Id', Session::get('Id'))->update([
            'FullName' => $Full_name,
            'Address' => $Address,
            'City' => $City,
            'State' => $state,
            'Email' => $Email,
            'PhoneNumber' => $Mobile,
            'CreditCard' => $card
        ]);
        if ($update) {
            return Redirect::route('UpdateProfile')
                            ->with('update', 'Successfully Updated');
        } else {
            return Redirect::route('UpdateProfile')
                            ->with('update', 'Problem in updating');
        }
    }

    public function ChangePassword() {
        session()->regenerate();
        $password = AddUser::select('Password')->where('Id', Session::get('Id'))->first();
        $password = json_decode(json_encode($password), TRUE);
        return view('login.changepassword', ['password' => $password]);
    }

    public function password() {
        session()->regenerate();
        $password = Input::get('Password');
        $password = md5($password);
        $update = AddUser::where('Id', Session::get('Id'))->update([
            'Password' => $password,
        ]);
        if ($update) {
            return Redirect::route('ChangePassword')
                            ->with('password', 'Successfully Updated');
        } else {
            return Redirect::route('ChangePassword')
                            ->with('password', 'Problem in updating.Try again later!');
        }
    }

    public function logout() {
        session()->regenerate();
        session(['Id' => null, 'Email' => null]);
        return Redirect::route('login')
                        ->with('logout', 'sucessfully logged out');
    }

    public function FileUpload() {
        return view('FileUpload.fileupload');
    }

    public function maps() {
        return view('layouts.location');
    }

    public function upload() {
        $input = Input::file('file');

        $file_name = $input->getClientOriginalName();
        $file_size = $input->getClientSize();
        $file_type = $input->getClientMimeType();
        $input->move("images", $input->getClientOriginalName());

        Uploads::create(['File' => $file_name, 'Type' => $file_type, 'Size' => $file_size, 'Email' => Session::get('Email')]);
    }

    public function json() {
        $output_array = [];
        session()->regenerate();
        $get_file = Uploads::select('Id', 'File', 'Type', 'Size')
                        ->where('Email', Session::get('Email'))->get();
        // $get_file = json_decode(json_encode($get_file), TRUE);

        $data = $get_file;
        //$get_file= json_encode($get_file);
        return view('FileUpload.uploadfiles', ['data' => $data]);
    }

    public function Forgot() {
        return view('login.Forgot');
    }

    public function ForgotPassword() {
        session()->regenerate();

        $Email = Input::get('Email');
        session(['Email' => $Email]);
        $dbpwd = AddUser::select('Id', 'FullName', 'Address', 'City', 'State')->where('Email', $Email)->first();
        if ($dbpwd) {
            $name = $dbpwd['FullName'];
            $Address = $dbpwd['Address'];
            $City = $dbpwd['City'];
            $State = $dbpwd['State'];
            $object = new admincontroller();
            $message = $object->generatePassword($name, $City, $State);
            echo $message;
            if ($message) {
                $password = md5($message);
                AddUser::where('Email', $Email)->update(['Password' => $password]);
                return Redirect::route('login')
                                ->with('password', 'Successfully Updated.Mail send to your respective Email ID');
            } else {
                return Redirect::route('login')
                                ->with('password', 'Problem in updating.Try again later!');
            }
        }
    }

    function generatePassword($Full_name, $City, $state) {
        $info = null;
        $message = null;
        $ldate = new DateTime;
        $hours = $ldate->format('H:i');

        $hours = explode(":", $hours);
        $hours = implode("", $hours);

        $spcl_char = '!@#$%&*()_=+]}[{;:,<.>?|';
        $spcl_char = str_shuffle($spcl_char);
        $spcl_char = substr($spcl_char, 0, 5);


        $Full_name = strtolower($Full_name);
        $City = strtolower($City);
        $state = strtolower($state);
        $string = $City . $state;
        $com = $string . $Full_name;
        $com = str_split($com);
        $alphabets = str_split("abcdefghijklmnopqrstvuwxyz");
        $string = str_split($string);
        $name = str_split($Full_name);
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


        $message = substr($str, 0, 4) . $rand . substr($str, 4, 5);
        $Email = Input::get('Email');

        $val = Mail::raw($message, function ($message)use($Email) {

                    $message->from('yuvashree.b@karmanya.co.in', 'yuva');
                    $message->to($Email)->subject("Generated Password");
                });
        return $message;
    }

    public function timezone() {

        function timezone_list() {
            static $timezones = null;

            if ($timezones === null) {
                $timezones = [];
                $offsets = [];
                $now = new DateTime();

                foreach (DateTimeZone::listIdentifiers() as $timezone) {
                    $now->setTimezone(new DateTimeZone($timezone));
                    $offsets[] = $offset = $now->getOffset();
                    TimeZone::create(['Name' => format_timezone_name($timezone), 'Offset' => format_GMT_offset($offset)]);
                    $timezones[$timezone] = '(' . format_GMT_offset($offset) . ') ' . format_timezone_name($timezone);
                }
            }

            return $timezones;
        }

        function format_GMT_offset($offset) {
            $hours = intval($offset / 3600);
            $minutes = abs(intval($offset % 3600 / 60));
            return 'GMT' . ($offset ? sprintf('%+03d:%02d', $hours, $minutes) : '');
        }

        function format_timezone_name($name) {
            $name = str_replace('/', ', ', $name);
            $name = str_replace('_', ' ', $name);
            $name = str_replace('St ', 'St. ', $name);
            return $name;
        }

// Uso
        $timezone = timezone_list();
//echo '<pre>';
//    print_r($timezone);
//echo '</pre>';
        $data = TimeZone::select(['Id', 'Name', 'Offset'])->get();
//        echo $data;
        return view('layouts.TimeZone', ['data' => $data]);
    }

    public function excelreg() {
        $users = AddUser::select('*')->get();
        Excel::create('registeredUser', function($excel) use($users) {
            $excel->sheet('Sheet 1', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');
    }

    public function logexcel() {
        $users = Logs::select('*')->get();
        Excel::create('logdetails', function($excel) use($users) {
            $excel->sheet('Sheet 1', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');
    }

    public function fileuploadexcel() {
        $users = Uploads::select('*')->get();
        Excel::create('fileuploadexcel', function($excel) use($users) {
            $excel->sheet('Sheet 1', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');
    }

    public function timezoneexcel() {
        $users = TimeZone::select('*')->get();
        Excel::create('timezoneexcel', function($excel) use($users) {
            $excel->sheet('Sheet 1', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');
    }

    public function regpdf() {
        $data = AddUser::get()->toArray();
        return Excel::create('ReguserPdf', function($excel) use ($data) {
                    $excel->sheet('mySheet', function($sheet) use ($data) {
                        $sheet->fromArray($data);
                        $sheet->setPaperSize('a4')->setOrientation('landscape');
                    });
                })->download("pdf");
    }

    public function logpdf() {
        $data = Logs::get()->toArray();
        return Excel::create('LogsDetailPdf', function($excel) use ($data) {
                    $excel->sheet('mySheet', function($sheet) use ($data) {
                        $sheet->fromArray($data);
                    });
                })->download("pdf");
    }

    public function fileuploadpdf() {
        $data = Uploads::get()->toArray();
        return Excel::create('FileuploadPdf', function($excel) use ($data) {
                    $excel->sheet('mySheet', function($sheet) use ($data) {
                        $sheet->fromArray($data);
                    });
                })->download("pdf");
    }

    public function timezonepdf() {
        $data = TimeZone::get()->toArray();
        return Excel::create('TimezonePdf', function($excel) use ($data) {
                    $excel->sheet('mySheet', function($sheet) use ($data) {
                        $sheet->fromArray($data);
                    });
                })->download("pdf");
    }

}
