<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
//    return view('welcome');
});
