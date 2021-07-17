<?php

use App\Http\Controllers\Backend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\Auth\PasswordResetLinkController;
use App\Http\Controllers\Backend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/password-rest', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password-reset');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', HomeController::class)
        ->name('home');
});
