<?php

use App\Http\Controllers\EbookController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::middleware("admin")->group(function(){
    Route::get("/admin", [EbookController::class, "admim"] )->name("admin");
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware("is_admin");

Route::get('/users/{id}', 'App\Http\Controllers\HomeController@show')->name('users.show_user');

Route::get('/books/addBook', [App\Http\Controllers\HomeController::class, 'addBook'])->name('addBook');
Route::post('/books', [App\Http\Controllers\HomeController::class, 'addBook'])->name('books.bookstore');
