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

Route::get('/uts/produk', function () {
    $produk = [
        ['kode' => 'BRG001', 'nama' => 'Pena',  'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'Buku',  'jenis' => 'Alat tulis', 'harga' => 15000],
    ];
    return view('uts.produk', compact('produk'));
})->name('uts.produk');

Route::get('/uts/form-produk', function () {
    $jenisProduk = ['Alat tulis', 'Elektronik', 'Sembako'];
    return view('uts.form-produk', compact('jenisProduk'));
})->name('uts.form');

