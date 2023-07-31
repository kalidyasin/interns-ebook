<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

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
    public function addBook()
    {
        return view('books.addBook');
    }
    public function bookstore(Request $request)
        {
            // Validate the form data
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'author' => 'required|max:255',
                'year' => 'required',
                'price' => 'required',
                'author_id' => 'required',
                'user_id' => 'required',
                'language_id' => 'required',
            ]);

            // Create a new book with the validated data
            $book = new Book;
            $book->title = $validatedData['title'];
            $book->year = $validatedData['year'];
            $book->price = $validatedData['year'];           
            $book->author = $validatedData['authoe_id'];
            $book->user = $validatedData['user_id'];
            $book->language = $validatedData['language-id'];
            $book->save();

            // Redirect the user back to the page they came from
            return back()->with('success', 'Book added successfully.');
        }
}
