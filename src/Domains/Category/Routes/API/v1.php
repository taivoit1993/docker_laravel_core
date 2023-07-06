<?php
use Domains\Category\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::prefix('api/v1')->as('api:v1:')->group(function () {
    Route::prefix('category')->as('category:')->group(function () {
        Route::post('/', [CategoryController::class, "create"])->name('create');
        Route::get('/', [CategoryController::class, "getAll"])->name('getAll');
        Route::get('/{id}', [CategoryController::class, "findById"])->name('findById');
        Route::delete('/{id}', [CategoryController::class, "delete"])->name('delete');
        Route::put('/{id}', [CategoryController::class, "update"])->name('update');
    });
});
