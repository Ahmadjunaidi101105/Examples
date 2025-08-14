<?php

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
    $data = [
        ['nama' => 'Juna' , 'nilai' => 80, 'id'=> 001 ],
         ['nama' => 'Ajis' , 'nilai' => 81, 'id'=> 002],
          ['nama' => 'dimas' , 'nilai' => 82, 'id'=> 003 ],
           ['nama' => 'Dina' , 'nilai' => 83, 'id'=> 004 ],
            ['nama' => 'Husna' , 'nilai' => 84, 'id'=> 005 ]
    ];
    return view('siswa.index', ['data' => $data ]);
});

Route::get('/siswa/{id}',  function ($id) {
    return view('siswa.show', ['id'=> $id ]);
});