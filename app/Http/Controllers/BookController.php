<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $authors = Author::all();
        $publishers = Publisher::all();
        return view('homepage.book_list',['books'=>$books,'authors'=>$authors,'publishers'=>$publishers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'book_name' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'publisher_name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'country_of_origin' => 'required|string|max:255',
            'publication_date' => 'nullable|date',
        ]);

        $data['author_id'] = $data['author_name'];
        $data['publisher_id'] = $data['publisher_name'];

        unset($data['author_name']);
        unset($data['publisher_name']);

        $book = Book::create($data);
    
        if ($book) { // If the publisher was successfully created
            return response()->json([
                'status' => 'success',
                'message' => 'Book details saved successfully.'
            ], 201); // HTTP status code 201 means "Created"
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to save book details.'
            ], 500); // HTTP status code 500 means "Internal Server Error"
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
