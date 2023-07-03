<?php

use Domains\Authentication\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->as('api:v1:')->group(function () {

    Route::prefix('auth')->as('auth:')->group(function () {
        Route::get('/', [AuthController::class,"index"])->name('index');
    });

});
