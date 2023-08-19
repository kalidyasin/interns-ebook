<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
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
            $book->categories()->sync($request->categories);

            return redirect()->back()->with('success', 'Book added successfully.');
        }

        public function inputsforaddbook(){
            $users = User::all();
            $authors = Author::all();
            $languages = Language::all();
            $categories = Category::all();

            return view('books.addBook', compact('users', 'authors', 'languages', ));
    
        }

        public function listforbook(){
            return view("books.lists");
        }
       public function update(Request $request, Book $book)
{
    $request->validate([
        'title' => 'required|string',
        'year' => 'required|integer',
        'price' => 'required|numeric',
        'path' => 'required|string',
        'author_id' => 'nullable|exists:authors,id',
        'user_id' => 'required|exists:users,id', 
        'language_id' => 'required|exists:languages,id'
      ]);
    
      $book->load('categories');
    
      $book->update($request->only([
        'title',
        'year',
        'price',
        'path', 
        'author_id',
        'user_id',
        'language_id'
      ]));
    
            $book->load('categories');

            $existingCategories = $book->categories->pluck('id');

            $changes = array_diff($request->categories, $existingCategories);

            $book->categories()->sync($changes);
            $book->categories()->syncWithoutDetaching($changes);
            return redirect()->route("listforbook")->with('success', 'Book updated successfully.');
        }


        public function edit(Book $book)
            {
                $authors = Author::all();
                $users = User::all();
                $languages = Language::all();
                $categories = Category::all();
                return view('books.edit', compact('book', 'authors', 'users', 'languages', 'categories'));
            }

            public function delete($id){
                $book = Book::find($id);
                $book->categories()->detach();
                $book->delete();
                return redirect()->route("listforbook")->with("status", "Deleted successfully");
            }
            public function search(Request $request)
                {
                    $query = $request->get('query');
                    $books = Book::where('title', 'LIKE', "%$query%")->get();

                    return view('search-results', compact('books'));
                }


}
