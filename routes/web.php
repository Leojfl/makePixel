<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    return view('welcome1');
})->name('home2');

Route::get('/contacto', [ContactController::class, 'showForm'])->name('contacto.form');
Route::post('/contacto', [ContactController::class, 'submitForm'])->name('contacto.enviar');