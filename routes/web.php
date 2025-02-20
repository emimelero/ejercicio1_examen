<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibreriaController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('libreria', LibreriaController::class);
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout',[LoginController::class,'logout'])->name('logout');