<?php

use App\Http\Controllers\BelanjaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GentengController;
use App\Http\Controllers\KaryawanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('pertama', function () {
    return view('pertama');
});

Route::get('heperlog', function () {
    return view('heperlog');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('halo', function () {
    return "<h2> Halo, Selamat datang di Laravel! www.malasngoding.com</h2>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', [LinkController::class, 'blog'])->name('helloworld');

Route::get('dosen', [Link::class,'index']);
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);



// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);


//Genteng CRUD
Route::get('/genteng', [GentengController::class, 'index']);
Route::get('/genteng/tambah', [GentengController::class, 'tambah']);
Route::post('/genteng/store', [GentengController::class, 'store']);
Route::get('/genteng/edit/{id}', [GentengController::class, 'edit']);
Route::post('/genteng/update', [GentengController::class, 'update']);
Route::get('/genteng/hapus/{id}', [GentengController::class, 'hapus']);
Route::get('/genteng/cari', [GentengController::class, 'cari']);


//Keranjang Belanja CRUD
Route::get('/keranjangbelanja', [BelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [BelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [BelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [BelanjaController::class, 'hapus']);


//Karyawan CRUD
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
