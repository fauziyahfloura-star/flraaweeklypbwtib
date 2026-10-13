<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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
        "title" => "Berita",
        "beritas" => Berita::ambilberita(),
    ]);
});

Route::get('/berita/{slug}', function ($slug) {

    return view ('beritatunggal', [
        "title" => Berita:: gettitle($slug),
        "berita" => Berita::getBerita($slug),
    ]);
});

    
Route::get('/contact', function () {
    return view ('contact', [
        "title" => "Contact"
    ]);
});