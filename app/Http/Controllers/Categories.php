<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class Categories extends Controller
{
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
    public function listscategory()
    {
        return view('categorys.list');
    } 

    public function update(Request $request, Category $category)
    {
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->editor = $request->input('editor');

            $category->save();
    
            return redirect()->route('listscategory');
    
    }
        public function edit(Category $category)
    {
        return view('categorys.edit', compact('category'));
    }
    public function delete($id){
        $language = Category::find($id);
        $language->delete();
        return redirect()->route("listlanguage")->with("status", "Deleted successfully");
    }



    public function sidebaruser()
        {
              $categories = Category::all();
            
              return view('user.sidebar', compact('categories'));
            }
    
   
}
