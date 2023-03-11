<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Group Prefix General Settings
Route::prefix('books')->name('book.')->group(function () {
    Route::get('/list', [BooksController::class, 'indexBooks'])->name('list');
    Route::get('/author', [BooksController::class, 'indexAuthor'])->name('listAuthor');
    Route::get('/rating', [BooksController::class, 'indexRating'])->name('listRating');
    Route::get('/searchbooks', [BooksController::class, 'filterBooks'])->name('listBooks');
});
