<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\language;

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
            public function update(Request $request, Language $language)
                {
                        $language->name = $request->input('name');
                        $language->description = $request->input('description');
                        $language->remark = $request->input('remark');
                        $language->save();

                        return redirect()->route('listlanguage');
                }
        public function edit(Language $language)
            {
                return view(' languages.edit', compact('language'));
            }
            public function delete($id){
                $language = Language::find($id);
                $language->delete();
                return redirect()->route("listlanguage")->with("status", "Deleted successfully");
            }

    }
