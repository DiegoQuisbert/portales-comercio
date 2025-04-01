<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/quienes-somos', [\App\Http\Controllers\HomeController::class, 'about' ])
    ->name('about');

Route::get('/peliculas/listado', [\App\Http\Controllers\MovieController::class, 'index'])
    ->name('movies.index');
