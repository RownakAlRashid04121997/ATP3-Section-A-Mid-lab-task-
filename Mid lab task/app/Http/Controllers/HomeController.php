<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $id="12345";
        $name="abcde";
        $password="45therd";
        return view(('home.homeindex'),compact('id','name','password'));
          
    }
}
