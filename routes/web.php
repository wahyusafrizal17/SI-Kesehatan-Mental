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

Route::get('/', function () {
    return view('welcome');
});

Route::get('kesehatan-mental', ['App\Http\Controllers\KesehatanMentalController', 'index'])->name('kesehatan-mental.index');
Route::get('konsultasi', ['App\Http\Controllers\KonsultasiController', 'index'])->name('konsultasi.index');
Route::get('artikel', ['App\Http\Controllers\ArtikelController', 'index'])->name('artikel.index');
