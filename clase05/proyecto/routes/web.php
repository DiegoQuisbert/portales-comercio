<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/quienes-somos', [\App\Http\Controllers\HomeController::class, 'about' ])
    ->name('about');

Route::get('/peliculas/listado', [\App\Http\Controllers\MovieController::class, 'index'])
    ->name('movies.index');

Route::get('peliculas/{id}', [\App\Http\Controllers\MovieController::class, 'view'])
    ->name('movies.view')
    ->whereNumber('id');

Route::get('peliculas/publicar', [\App\Http\Controllers\MovieController::class, 'create'])
    ->name('movies.create');

Route::post('peliculas/create', [\App\Http\Controllers\MovieController::class, 'store'])
    ->name('movies.store');
