<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/aboutus','APP\HTTP\Controllers\controller@indextaboutus');

