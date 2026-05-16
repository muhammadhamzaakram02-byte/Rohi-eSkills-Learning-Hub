<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Outh;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', [Homecontroller::class,'home']);

Route::get('/product', [Homecontroller::class,'product']);
Route::get('/about',[Homecontroller::class,'about']);
Route::get('/contact-001',[Homecontroller::class,'contact'])->name('x');
Route::get('cart',[Homecontroller::class,'cart']);

Route::get('/login-01',[Outh::class,'login'])->name('log');
Route::get('/////register-05',[Outh::class,'register'])->name('reg');
Route::get('forgot',[Outh::class,'forgot']);
