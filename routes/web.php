<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/member', function () {
    return view('loginmember');
});

Route::get('/admin', function () {
    return view('loginadmin');
});

Route::get('/registadmin', function () {
    return view('registadmin');
});


Route::get('/registmember', function () {
    return view('registmember');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/riwayatform', function () {
    return view('riwayatform');
});

Route::get('/riwayatpengembalian', function () {
    return view('riwayatpengembalian');
});

Route::get('/sumbangan', function () {
    return view('sumbangan');
});