<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('Index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('Mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('Profile', function () {
    return view('Profile');
});

Route::get('array', function () {
    //infinity Loop
    $nilai_awal = 1;
    while ($nilai_awal <= 10) {
        echo 'hello guys<br>'. $nilai_awal. 'x';
        $nilai_awal++;
    }
});

Route::get('array', function () {
    for ($i=0; $i < ; $i++) {
        echo 'hello world' . $i . 'x<br>'
    }
});


Route::get('Nama', function () {
    $nama = 'rayhan';
    return 'ini adalah <b>Bebas</b>, nama saya adalah '. $nama;
});

