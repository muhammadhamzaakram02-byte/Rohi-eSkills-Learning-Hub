<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Outh extends Controller
{
     public function login(){
        return view('outh.login');
    }
    public function register(){
        return view('outh.register');
    }
    public function forgot(){
        return view('outh.forgot');
    }
}
