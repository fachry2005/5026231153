<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\RAMController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\NewKaryawanController;
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


Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

Route::resource('ram', RAMController::class);

Route::resource('karyawan', KaryawanController::class);

Route::get('/latihan1', [PageCounterController::class, 'index']);

Route::prefix('eas')->group(function () {
    Route::get('/', [NewKaryawanController::class, 'index'])->name('newkaryawan.index');
    Route::get('/create', [NewKaryawanController::class, 'create'])->name('newkaryawan.create');
    Route::post('/store', [NewKaryawanController::class, 'store'])->name('newkaryawan.store');
    Route::get('/delete/{nip}', [NewKaryawanController::class, 'destroy'])->name('newkaryawan.destroy');
    Route::get('/eas/edit/{nip}', [NewKaryawanController::class, 'edit'])->name('newkaryawan.edit');
Route::put('/eas/update/{nip}', [NewKaryawanController::class, 'update'])->name('newkaryawan.update');

});

