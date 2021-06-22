<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class LoginController extends Controller
{
    public function index(){
       return view('login.loginindex');
    }


    public function SignUpindex(){
      return view('SignUpPage');
   }


   public function SignUpValidate(Request $req){

      $req->validate([
                 'fullName'=> 'required|min:3|max:30',
                 'SignUppassword'=> 'required|min:8|max:20',
                 'email'=> 'required|min:10|max:50',
                 'City'=> 'required|min:3|max:20',
                 'Country'=> 'required|min:3|max:20'
          ])->validate();
     
   }



}
