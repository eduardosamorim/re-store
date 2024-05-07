<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Rota de fallback para voltar para o default
Route::fallback(function () {
    return redirect('/');
});

Route::get('Auth/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('Auth/login', [LoginController::class, 'login']);

Route::get('Auth/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('Auth/register', [RegisterController::class, 'register']);