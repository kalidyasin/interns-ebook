<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\language;
use Doctrine\Inflector\Language as InflectorLanguage;

class Languages extends Controller
{
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
            
        public function listlanguage()
            {
                return view("languages.lists");
            }

     public function edit(Language $id)
        {
            $languages = Language::find($id);
            return view('languages.edit', compact("languages"));
        } 
        public function update(Request $request, $id)
        {
            $language = Language::find($id);
        
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'remark' => 'required',
            ]);
        
            $language->update($validatedData);
        
            return redirect("languages.lists")->with('success', 'Language updated successfully.');
        }
                
        public function destroy(Language $language, $id)
            {
                $language = Language::find($id);
                $language->delete();
            
                return redirect("/languages/lists")->with('status', 'Language deleted successfully.');
            }     
        }
