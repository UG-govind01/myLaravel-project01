<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');  // Ye welcome.blade.php kholega
})->name('home');           // Iska naam 'home' rakha


Route::get('/form', [FormController::class, 'index']);
Route::post('/form-submit', [FormController::class, 'store']);






 