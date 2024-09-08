<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $books = Book::highestRated()->limit(10)->get();
    dd($books);

    return view('welcome');
});

Route::resource('books', BookController::class);
