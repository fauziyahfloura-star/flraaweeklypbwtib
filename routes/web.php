<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home');
});

Route::get('/Profile', function () {
    return view ('profile');
});

Route::get('/berita', function () {
    return view ('berita');
});

Route::get('/contact', function () {
    return view ('contact');
});