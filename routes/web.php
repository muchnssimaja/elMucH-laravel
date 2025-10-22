<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('home/welcome');
    return 'Hallo Laravel';
});

Route::get('about', function () {
    return 'Ini adalah halaman <b>about</b>';
});

Route::get('mahasiswa', function () {
    return 'Ini adalah halaman <b>Mahasiswa</b>';
});

Route::get('profile', function () {
    $nama = 'elMucH';
    return 'Ini adalah halaman <b>profile</b>, nama saya adalah ' . $nama;
});