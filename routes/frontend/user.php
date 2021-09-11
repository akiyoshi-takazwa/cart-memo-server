<?php

use App\Http\Controllers\Frontend\Auth\RegisteredUserController;
use App\Http\Controllers\Frontend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\Log\LogController;
use App\Http\Controllers\Frontend\Memo\MemoController;
use App\Http\Controllers\Frontend\Rate\RateController;
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
    //logout
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // memos
    Route::get('/top', HomeController::class)
        ->name('top');
    Route::post('/top', [MemoController::class, 'store'])->name('memo.store');

    // rate
    Route::get('/rates', [RateController::class, 'index'])->name('rate');
    Route::post('/rates', [RateController::class, 'store']);

    // log
    Route::get('/logs', [LogController::class, 'index'])->name('log');
});
