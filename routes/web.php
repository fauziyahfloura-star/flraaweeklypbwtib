<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/Profile', function () {
    return view ('profile', [
        "title" => "Profile",
        "name" => "Floura Fauziyah Husen",
        "nim" => "13242520045",
        "prodi" => "Teknologi Informasi",
        "gambar" => "floura.jpeg",
    ]);
});

Route::get('/berita', function () {
    return view ('berita', [
        "title" => "Berita"
    ]);
});

Route::get('/contact', function () {
    return view ('contact', [
        "title" => "Contact"
    ]);
});