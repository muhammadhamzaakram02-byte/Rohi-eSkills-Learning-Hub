<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function home()
    {
        return view('pages.home');
    }
    public function product(){
        return view('pages.product');
    }
    public function about(){
        return view('pages.about'); 
    }
    public function contact(){
        return view('pages.contact');
    }
   public function cart(){
    return view('pages.cart');
   }
}
