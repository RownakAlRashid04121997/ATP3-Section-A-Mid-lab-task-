<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
       return view('login.loginindex');
    }


    public function verify(Request $req){
     
        if($req->uname==$req->password){
           // echo "Username-   ".$req->uname.", password-   ".$req->password."=  Is a valid user" ; for printing user info
            return redirect('/home');
        }else{echo "invalid user";}
        
     }


}
