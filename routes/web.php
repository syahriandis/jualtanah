<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TanahController;

Route::get('/tanah', [TanahController::class, 'tampilkan']);

Route::get('/product/{id}', [ProductController::class, 'show']);



Route::get('/pages', function () {
    return view('pages.home');
});


