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


