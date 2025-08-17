<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// About
Route::get('/about', function () {
    $nama = 'Ahmad Junaidi';
    return view('about', ['data' => $nama]);
})->name('about');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Siswa (pakai controller)
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');