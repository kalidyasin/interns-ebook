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
    public function destroycategory(Category $category, $id)
        {
            $category = Category::find($id);
            $category->delete();
        
            return redirect("/categorys/list")->with('status', 'Category deleted successfully.');
        } 

}
