<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "Client Management System";
});

Route::get('/login',['uses'=>'Logincontroller@index']);

Route::get('/home',['uses'=>'Homecontroller@index']);

Route::get('/SignUp',['uses'=>'Logincontroller@SignUpIndex']);

Route::get('/SignUpValidate',['uses'=>'Logincontroller@SignUpValidate']);
Route::post('/SignUpValidate',['uses'=>'Logincontroller@SignUpValidate']);

Route::get('/logout',['uses'=>'LogOutController@index']);


