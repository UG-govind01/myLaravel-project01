<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/form', [FormController::class, 'index']);
Route::post('/form-submit', [FormController::class, 'store']);






 