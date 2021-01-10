<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PortofolioController;

Route::Resource('/',       PageController::class);
Route::get('/article',    [PageController::class, 'article']);
Route::get('/portofolio', [PageController::class, 'portofolio']);

Route::prefix('restricted')->group(function () {
    Route::resources([
        '/'           => AdminController::class,
        '/article'    => ArticleController::class,
        '/portofolio' => PortofolioController::class,
    ]);
});

