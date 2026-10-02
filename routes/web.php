<?php

use App\Http\Controllers\BookController1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books', function () {
    return 'Daftar Buku';
});
Route::get('/books', [BookController::class, 'index']);
Route::resource('books', BookController1::class);