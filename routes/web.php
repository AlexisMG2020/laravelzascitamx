<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProspectosController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('inicio',[LoginController::class,'inicio'])->name('inicio');

Route::prefix('comercial')->group(function () {
  route::get('prospectos',[ProspectosController::class,'prospectos'])->name('prospectos');
});