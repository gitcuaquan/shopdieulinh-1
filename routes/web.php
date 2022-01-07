<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth/login');
});

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',function(){
        return view('client/index');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
