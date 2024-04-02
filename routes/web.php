<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
 return view ('index');
 }) ;

 Route::get('/iniciar', [App\Http\Controllers\controllerQuiz::class ,'index'])->name('iniciar');
 Route::post('/dadosPagina1 ', [App\Http\Controllers\controllerQuiz::class ,'dadosPagina1'])->name('dadosPagina1');
 