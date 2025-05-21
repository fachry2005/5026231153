<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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


Route::get('/', function () {
    return view('frontend');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/Index ETS', function () {
    return view('Index ETS');
});

Route::get('/Index', function () {
    return view('Index');
});

Route::get('/JS1', function () {
    return view('JS1');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/Pertemuan 4', function () {
    return view('Pertemuan 4');
});

Route::get('/Template1', function () {
    return view('Template1');
});

Route::get('/Tugas Linktree', function () {
    return view('Tugas Linktree');
});

Route::get('/Validasi1', function () {
    return view('Validasi1');
});



