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
Route::get('/dashboard',array(
    'as'=>'dashboard',
   'uses'=>'admincontroller@index' 
));
        
Route::get('/registration',array(
    'as'=>'registration',
    'uses'=>'admincontroller@register'
));
Route::get('/login',array(
    'as'=>'login',
    'uses'=>'admincontroller@login'
));
Route::post('/registration-step2',array(
   'as'=>'registration-step2',
    'uses'=>'admincontroller@registerstep'
));
Route::get('/registration-step2',array(
   'as'=>'registration-step2',
    'uses'=>'admincontroller@registerstep'
));
Route::post('/finalregistration',array(
   'as'=>'finalregistration',
    'uses'=>'admincontroller@registerfinal'
));
Route::post('/success',array(
   'as'=>'success',
    'uses'=>'admincontroller@confirm'
));
Route::post('/loginverify',array(
   'as'=>'loginverify',
    'uses'=>'admincontroller@loginverify'
));