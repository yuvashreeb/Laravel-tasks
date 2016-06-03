<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', array(
    'as' => 'dashboard',
    'uses' => 'admincontroller@index'
));

Route::get('/registration', array(
    'as' => 'registration',
    'uses' => 'admincontroller@register'
));
Route::get('/login', array(
    'as' => 'login',
    'uses' => 'admincontroller@login'
));
Route::post('/registration-step2', array(
    'as' => 'registration-step2',
    'uses' => 'admincontroller@registerstep'
));
Route::get('/registration-step2', array(
    'as' => 'registration-step2',
    'uses' => 'admincontroller@registerstep'
));
Route::post('/finalregistration', array(
    'as' => 'finalregistration',
    'uses' => 'admincontroller@registerfinal'
));
Route::post('/success', array(
    'as' => 'success',
    'uses' => 'admincontroller@confirm'
));
Route::post('/loginverify', array(
    'as' => 'loginverify',
    'uses' => 'admincontroller@loginverify'
));
Route::get('UpdateProfile', array(
    'as' => 'UpdateProfile',
    'uses' => 'admincontroller@UpdateProfile'
));
Route::get('ChangePassword', array(
    'as' => 'ChangePassword',
    'uses' => 'admincontroller@ChangePassword'
));
Route::post('Update', array(
    'as' => 'onupdate',
    'uses' => 'admincontroller@onupdate'
));
Route::get('Viewprofile', array(
    'as' => 'Viewprofile',
    'uses' => 'admincontroller@viewProfile'
));
Route::post('ChangePassword', array(
    'as' => 'password',
    'uses' => 'admincontroller@password'
));
Route::get('logout', array(
    'as' => 'logout',
    'uses' => 'admincontroller@logout'
));
Route::get('FileUpload', array(
    'as' => 'FileUpload',
    'uses' => 'admincontroller@FileUpload'
));
Route::get('maps', array(
    'as' => 'maps',
    'uses' => 'admincontroller@maps'
));
Route::post('upload', array(
    'as' => 'upload',
    'uses' => 'admincontroller@upload'
));
Route::get('json', array(
    'as' => 'json',
    'uses' => 'admincontroller@json'
));
Route::get('Forgot', array(
    'as' => 'Forgot',
    'uses' => 'admincontroller@Forgot'
));

Route::post('ForgotPassword', array(
    'as' => 'ForgotPassword',
    'uses' => 'admincontroller@ForgotPassword'
));
Route::get('timezone', array(
    'as' => 'timezone',
    'uses' => 'admincontroller@timezone'
));
Route::get('excelreg', array(
    'as' => 'excelreg',
    'uses' => 'admincontroller@excelreg'
));
Route::get('logexcel', array(
    'as' => 'logexcel',
    'uses' => 'admincontroller@logexcel'
));
Route::get('fileuploadexcel', array(
    'as' => 'fileuploadexcel',
    'uses' => 'admincontroller@fileuploadexcel'
));
Route::get('timezoneexcel', array(
    'as' => 'timezoneexcel',
    'uses' => 'admincontroller@timezoneexcel'
));
Route::get('regpdf', array(
    'as' => 'regpdf',
    'uses' => 'admincontroller@regpdf'
));
Route::get('logpdf', array(
    'as' => 'logpdf',
    'uses' => 'admincontroller@logpdf'
));
Route::get('fileuploadpdf', array(
    'as' => 'fileuploadpdf',
    'uses' => 'admincontroller@fileuploadpdf'
));
Route::get('timezonepdf', array(
    'as' => 'timezonepdf',
    'uses' => 'admincontroller@timezonepdf'
));
Route::get('/edit/{data}', array(
    'as' => '/edit/',
    'uses' => 'admincontroller@edit'
));
Route::get('/delete/{data}', array(
    'as' => '/delete/',
    'uses' => 'admincontroller@delete'
));
Route::get('/view/{data}', array(
    'as' => '/view/',
    'uses' => 'admincontroller@view'
));
Route::get('facebook', array(
    'as' => 'facebook',
    'uses' => 'admincontroller@redirectToProvider'
));
Route::get('facebook/callback', array(
    'as' => 'facebook/callback',
    'uses' => 'admincontroller@handleProviderCallback'
));
Route::get('/DashBoard', array(
    'as' => 'DashBoard',
    'uses' => 'admincontroller@DashBoard'
));
Route::get('google', array(
    'as' => 'google',
    'uses' => 'admincontroller@redirectToProvidergoogle'
));
Route::get('google/callback', array(
    'as' => 'google/callback',
    'uses' => 'admincontroller@onSignIn'
));
Route::get('linkedin', array(
    'as' => 'linkedin',
    'uses' => 'admincontroller@redirectToProviderlinkedin'
));
Route::get('linkedin/callback', array(
    'as' => 'linkedin/callback',
    'uses' => 'admincontroller@handleProviderCallbacklinkedin'
));
Route::get('Relation', array(
    'as' => 'Relation',
    'uses' => 'Relationship@example'));
