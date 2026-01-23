<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/sobre', function (){
    return view('sobre');
})->name('sobre');
Route::view('/contacta', 'contacta');
Route::view('/noticias', 'noticias');

