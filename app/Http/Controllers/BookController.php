<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books', ['allBooks' => $books]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
    $data = $request->validate([
        'title' => 'required|string',
        'author' => 'required|string',
    ]);

    Book::create($data);

    return redirect('/books'); 
    }

    public function destroy() {
        
    }
}
