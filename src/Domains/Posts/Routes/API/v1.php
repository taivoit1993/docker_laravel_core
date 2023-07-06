<?php


use Domains\Posts\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::prefix('api/v1')->as('api:v1:')->group(function(){
    Route::prefix('posts')->as('posts:')->group(function () {
        Route::post('/', [PostController::class,"create"])->name('create');
        Route::get('/', [PostController::class,"getAll"])->name('getAll');
        Route::get('/{id}', [PostController::class,"findById"])->name('findById');
        Route::delete('/{id}', [PostController::class,"delete"])->name('delete');
        Route::put('/{id}',[PostController::class,"update"])->name('update');
    });
});
