<?php

// routes/web.php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('forum');
})->name('forum');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/login-perusahaan', function () {
    return view('auth.login-perusahaan');
})->name('login.perusahaan');

Route::get('/pelatihan', function (){
    return view('pelatihan');
})->name('pelatihan');
