<?php

use App\Http\Controllers\EbookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Books;
use App\Http\Controllers\Authors;
use App\Http\Controllers\Languages;
use App\Http\Controllers\Categories;
use App\Http\Controllers\WelcomeController;


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

Route::post('/books/addBook', [App\Http\Controllers\Books::class, 'bookstore'])->name('bookstore');
Route::put("/books/addBook", [App\Http\Controllers\HomeController::class, "bookPage"])->name("bookPage");
Route::put("/books/lists", [App\Http\Controllers\Books::class, "listforbook"])->name("listforbook");

Route::get("deletebook/{id}", "App\Http\Controllers\Books@delete" );
Route::get("/books/addBook", [App\Http\Controllers\Books:: class, "inputsforaddbook"]);
Route::get("/books/lists", [App\Http\Controllers\HomeController::class, 'tolistbook']);
Route::resource('books', Books::class);
Route::get('/books/{book}/edit', [Books::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [Books::class, 'update'])->name('books.update');

Route::get('/author/authors', [App\Http\Controllers\Authors::class, 'author'])->name('author');
Route::post('/author/authors', [App\Http\Controllers\Authors::class, 'addAuthor'])->name('addAuthor');
Route::put('/author/display', [App\Http\Controllers\Authors::class, 'displayauthor'])->name('displayauthor');
Route::get('/author/display', [App\Http\Controllers\HomeController::class, 'tolistauthor']);
Route::get('/authors/{author}/edit',  [App\Http\Controllers\Authors::class, 'edit'])->name('authors.edit');
Route::post('/authors/{author}/update', [App\Http\Controllers\Authors::class, 'update'])->name('authors.update');

Route::get("deleteauthor/{id}", [App\Http\Controllers\Authors::class, 'destroyauthor']);


Route::get('/languages/language', [App\Http\Controllers\Languages::class, 'language'])->name('language');
Route::post('/languages/language', [App\Http\Controllers\Languages::class, 'addlanguage'])->name('addlanguage');
Route::put('/languages/lists', [App\Http\Controllers\Languages::class, 'listlanguage'])->name('listlanguage');
Route::get('/languages/lists', [App\Http\Controllers\HomeController::class, 'tolistlanguage']);

Route::get('/languages/{language}/edit',  [App\Http\Controllers\Languages::class, 'edit'])->name('languages.edit');
Route::post('/languages/{language}/update', [App\Http\Controllers\Languages::class, 'update'])->name('languages.update');
Route::get("deletelanguage/{id}", "App\Http\Controllers\Languages@delete" );





Route::get('/categorys/category', [App\Http\Controllers\Categories::class, 'category'])->name('category');
Route::post('/categorys/category', [App\Http\Controllers\Categories::class, 'addcategory'])->name('addcategory');
Route::post('/categorys/list', [App\Http\Controllers\Categories::class, 'listscategory'])->name('listscategory');
Route::get('/categorys/list', [App\Http\Controllers\HomeController::class, 'tolistcategory']);

Route::get('/categories/{category}/edit',  [App\Http\Controllers\Categories::class, 'edit'])->name('categories.edit');
Route::post('/categories/{category}/update', [App\Http\Controllers\Categories::class, 'update'])->name('categories.update');
Route::get("deletecategory/{id}", "App\Http\Controllers\Categories@delete" );




Route::get('/user/home', 'Books@search');
Route::get('/user/home', [App\Http\Controllers\HomeController::class, "sidebar"]);

Route::get('/', [WelcomeController::class, 'home']);
Route::get('/about', [WelcomeController::class, 'about']);
Route::get('/contact', [WelcomeController::class, 'contact']);


Route::get('/user/sidebar', [App\Http\Controllers\Categories::class, 'sidebaruser'])->name('categories.sidebar');

Route::get('category/{category}', 'App\Http\Controllers\HomeController@showBooks')->name('user.category.books');

Route::get('user/{book}/book', 'App\Http\Controllers\HomeController@readBook')->name('books.read');

