<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', function () {
    return view('about');
});

Route::get('/manajemen', function () {
    return view('manajemen');
});

Route::get('/tabungan', function () {
    return view('product/tabungan');
});

Route::get('/deposito', function () {
    return view('product/deposito');
});

Route::get('/kredit', function () {
    return view('product/kredit');
});

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');
