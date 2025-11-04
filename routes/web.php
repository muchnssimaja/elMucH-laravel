<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('profile', function () {
    $nama = 'elMucH';
    return view('profile', compact('nama'));
});

// UTS
Route::get('/uts', function () {
    return view('uts.home');
})->name('uts.home');
