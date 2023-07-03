<?php

use Domains\Authentication\Controllers\AuthController;
use Domains\Authentication\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->as('api:v1:')->group(function () {
    Route::prefix('auth')->as('auth:')->group(function () {
        Route::get('/', [AuthController::class,"index"])->name('index');
    });
});

Route::prefix('api/v1')->as('api:v1:')->group(function(){
    Route::prefix('users')->as('users:')->group(function () {
        Route::post('/login', [UserController::class,"userLogin"])->name('login');
        Route::post('/register',[UserController::class,"userRegister"])->name('register');
    });
});
