<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProspectosController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('comercial')->group(function () {
  Route::get('inicio',[LoginController::class,'inicio'])->name('inicio');
  route::get('prospectos',[ProspectosController::class,'prospectos'])->name('prospectos');  
});