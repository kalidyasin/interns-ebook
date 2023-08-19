<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Author;
use App\Models\Book_history;
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
    public function toeditpage(Book $book)
    {
        return view('books.edit', compact('book'));
    }
    public function inputsforedit(){
        $users = User::all();
        $authors = Author::all();
        $languages = Language::all();
        $categories = Category::all();

        return view('books.addBook', compact('users', 'authors', 'languages', ));

    }
    public function toUpdate()
        {
            $categories = Category::all();

            $usersupdates = User::all();
            $authorupdates = Author::all();
            $languageupdate = Language::all();
            return view('books.edit', ["users"=>$usersupdates, "authorupdates"=>$authorupdates, "languageupdate"=>$languageupdate]);
        }

        
        
        public function showBooks(Category $category)
            {
                $books = $category->books;
                $books = $category->books()->with('author')->get();
                return view('user.home', compact('category', 'books'));

            }
            public function readBook(Book $book)
                {
                    $user = auth()->user();

                    Book_history::create([
                        'user_id' => $user->id,
                        'book_id' => $book->id,
                    ]);
                    return view('user.book', compact('book'));
                }
                

}
