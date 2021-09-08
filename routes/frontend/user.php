<?php

use App\Http\Controllers\Frontend\Auth\RegisteredUserController;
use App\Http\Controllers\Frontend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\Memo\MemoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // login
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/', [AuthenticatedSessionController::class, 'store']);
    // register
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    //logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/top', HomeController::class)
        ->name('top');
    Route::post('/top', [MemoController::class, 'store'])->name('memo.store');
});
