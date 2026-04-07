<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/form', [FormController::class, 'index']);

Route::post('/form-submit', [FormController::class, 'store'])->name('form.submit');

