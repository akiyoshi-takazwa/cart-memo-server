<?php

use App\Http\Controllers\Frontend\Auth\RegisteredUserController;
use App\Http\Controllers\Frontend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // login
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/', [AuthenticatedSessionController::class, 'store']);
    // register
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', HomeController::class)
        ->name('home');
});
