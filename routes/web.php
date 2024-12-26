<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('leanding_page.home');
});

Route::get('/login', function () {
    return view('login_register.login');
});
