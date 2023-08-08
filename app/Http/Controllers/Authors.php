<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class Authors extends Controller
{
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
    public function displayauthor()
    {
        return view('author.display');
    }  
    public function destroyauthor(Author $author, $id)
        {
            $author = Author::find($id);
            $author->delete();
            return view("display")->with('status', 'Author deleted successfully.');
        } 
}
