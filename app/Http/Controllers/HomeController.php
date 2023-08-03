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
    public function addBook()
    {
        return view('books.addBook');
    }
    public function bookstore(Request $request)
        {
            // Validate the form data
             $request->validate([
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
            $book->title = $request->title;
            $book->year = $request->year;
            $book->price = $request->price;
            $author = Author::find($request->author_id);
            $book->author()->associate($author);
            $user = User::find($request->user_id);
            $book->user()->associate($user);
            $language = Language::find($request->language_id);
            $book->language()->associate($language);
            $book->save();
            // Redirect the user back to the page they came from
            return back()->with('success', 'Book added successfully.');
        }


        public function addAuthor(Request $request)
        {
            $author = new Author();
            $author->name = $request->input('name');

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $filename = time() . '.' . $photo->extension();
                $location = public_path('images/authors/' . $filename);
                $photo->move(public_path('images/authors/'), $filename);
                $author->photo = $filename;
            }
            $author->contact_info = $request->input('contact_info');


            $author->save();

            return back()->with('success', 'Author added successfully.');
        }
        public function author()
        {
            return view('author.authors');
        }  




        public function addlanguage(Request $request){
             // Validate the form data
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'remark' => 'nullable|max:255',
        ]);

        // Create a new language with the validated data
        $language = new Language;
        $language->name = $request->name;
        $language->description = $request->description;
        $language->remark = $request->remark;
        $language->save();

        // Redirect the user back to the page they came from
        return back()->with('success', 'Language added successfully.');
        }
        public function language()
        {
            return view('languages.language');
        }  



        public function addcategory(Request $request){
            // Validate the form 
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'description' => 'required',
                'editor' => 'required|max:255',
            ]);
    
            $category = new Category;
            $category->name = $validatedData['name'];
            $category->description = $validatedData['description'];
            $category->editor = $validatedData['editor'];
            $category->save();
    
            return back()->with('success', 'Category added successfully');
        }
       
       public function category()
       {
           return view('categorys.category');
       }  



       public function book_category()
       {
           $books = Book::all();
           $categories = Category::all();
           return view('book_category.create', compact('books', 'categories'));
       }

       public function bookcategorystore(Request $request)
    {
        // validate the input data
        $validatedData = $request->validate([
            'book_id' => 'required|exists:books,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        // create a new book category
        $bookCategory = new Book_Category;
        $bookCategory->book_id = $validatedData['book_id'];
        $bookCategory->category_id = $validatedData['category_id'];
        $bookCategory->save();

        return back()->with('success', 'Book category added successfully');
    }


    public function product()
        {
            $books = Book::all();

            return view('admin.admin', compact('books'));
        }
   

}
