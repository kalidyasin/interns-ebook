<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Author;
use App\Models\language;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }
    public function admin(){
        return view("admin.admin");
    }
    

    public function show_user($id){
        $user = User::find($id);

        return view('users.show', ['user' => $user]);
    }

    public function bookPage(){
        return view("books.addBook");
    }
   
    public function tolistbook(){
        $books = Book::all();
        return view('books.lists', compact('books' ));

    }
    public function tolistauthor(){
        $authors = Author::all();
        return view('author.display', compact('authors' ));

    }
    public function tolistlanguage(){
        $languages = Language::all();
        return view('languages.lists', compact('languages' ));

    }
    public function tolistcategory(){
        $categories = Category::all();
        return view('categorys.list', compact('categories' ));

    }


}
