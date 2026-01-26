<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['usuarios' => ['juan', 'manuel']]);
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/socios', function (){
    return view('socios');
})->name('socios');

Route::get('/contacta', function(){
    return view ('contacta');
})-> name ('contacta');

Route::get('/noticias', function(){
    return view ('noticias');
})-> name ('noticias');

