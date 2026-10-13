<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

    private static $data_berita = [
    [
        "judul" => "Mahasiswa TI berprestasi",
        "slug" => "mahasiswa-ti-berprestasi",
        "penulis" => "Admin",
        "isi" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ],
    [
        "judul" => "Mahasiswa TI",
        "slug" => "mahasiswa-ti",
        "penulis" => "Floura Fauziyah Husen",
        "isi" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ]
];
 
    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
    {
       $beritas = self::$data_berita;

       $berita = [];
        foreach ($beritas as $b) 
        {
            if ($b['slug'] === $slug)
         {
                $berita = $b;
         }
        }
        return $berita;
    }

    public static function gettitle($slug)
    {
        $berita = self::getBerita($slug);

        return $berita["judul"];
    }
}