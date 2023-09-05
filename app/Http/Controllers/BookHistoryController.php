<?php

namespace App\Http\Controllers;

use App\Models\BookHistory;
use Illuminate\Http\Request;

class BookHistoryController extends Controller
{
    public function index()
    {
        $bookHistories = BookHistory::all();
        
        return view('book_history.index', compact('bookHistories'));
    }

    public function create()
    {
        // Render the form to create a new book history entry
        return view('book_history.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'book_id' => 'required',
            'user_id' => 'required',
        ]);

        // Create a new book history entry
        BookHistory::create($validatedData);

        // Redirect to the index page or wherever appropriate
        return redirect()->route('book_history.index');
    }
}