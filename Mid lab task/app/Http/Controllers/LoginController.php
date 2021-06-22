<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
       return view('login.loginindex');
    }


    public function SignUpindex(){
      return view('SignUpPage');
   }


   public function SignUpValidate(Request $req){

     return  $req->validate([

               'fullName'=>'required',
 

         ]);
     
   }



}
