<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',  function () {
    $nama = 'Ahmad Junaidi';
    return view('about', ['data' => $nama]);
});

Route::get('/contact',  function () {
    return view('contact');
});

Route::get('/siswa',  function () {
    $data = Siswa::orderBy('nilai','desc', 'asc')->get();
    return view('siswa.index', ['data' => $data ]);
});

Route::get('/siswa/{id}',  function ($id) {
    $siswa = Siswa::findOrFail($id);
    return view('siswa.show', ['siswa'=> $siswa ]);
    
});