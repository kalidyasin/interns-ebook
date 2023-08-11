<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Models\Language;
use App\Models\User;


class Books extends Controller
{

    
    public function bookstore(Request $request)
        {
            // Validate the form data
            $validatedData = $request->validate([
                'title' => 'required',
                'year' => 'required',
                'price' => 'required',
                'path' => 'required',
                'user_id' => 'required',
                'author_id' => 'required',
                'language_id' => 'required',
            ]);
    
            // Create a new book instance
            $book = new Book();
            $book->title = $validatedData['title'];
            $book->year = $validatedData['year'];
            $book->price = $validatedData['price'];
            $book->path = $validatedData['path'];
            $book->user_id = $validatedData['user_id'];
            $book->author_id = $validatedData['author_id'];
            $book->language_id = $validatedData['language_id'];
    
            $book->save();
    
            return redirect()->back()->with('success', 'Book added successfully.');
        }

        public function inputsforaddbook(){
            $users = User::all();
            $authors = Author::all();
            $languages = Language::all();
    
            return view('books.addBook', compact('users', 'authors', 'languages', ));
    
        }
        public function destroybook(Book $book, $id)
        {
            $books = Book::find($id);
            $books->delete();
            return view("books.lists")->with('status', 'Book deleted successfully.');
        } 

        

       
        public function listforbook(){
            return view("books.lists");
        }

}
