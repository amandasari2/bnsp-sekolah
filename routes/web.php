<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('front.home');
});

Route::get('/profil', function(){
    return view('front.profil.index');
});

Route::get('/foto', function(){
    return view('front.foto.index');
});

Route::get('/ekskul', function(){
    return view('front.ekskul.index');
});