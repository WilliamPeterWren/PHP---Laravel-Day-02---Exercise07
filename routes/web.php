<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [PostController::class,'displayContact'])->name('displayContact');
Route::get('/post/{id}/{password}/{name}', [PostController::class,'displayPost'])->name('displayPost');