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
        $books = Book::all();   //         $books = Book::where('book_id', 1)->get();
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
    public function edit(Request $request)
    {
        $id = $request->input('id');

        // Do something with the ID ...

        $book = Book::find($id);

        if($book) {
            return response()->json(['message' => 'Data received!', 'book' => $book]);
        } else {
            return response()->json(['message' => 'Item not found!'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'edit_book_name' => 'required|string|max:255',
            'edit_author_name' => 'required|string|max:255',
            'edit_publisher_name' => 'required|string|max:15',
            'edit_genre' => 'required|string|max:255',
            'edit_language' => 'required|string|max:255',
            'edit_country_of_origin' => 'sometimes|string|max:255',
            'edit_publication_date' => 'nullable|date',
        ]);
    
        $book = Book::find($id);
    
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
    
        $book->update([
            'book_name' => $data['edit_book_name'],
            'author_id' => $data['edit_author_name'],
            'publisher_id' => $data['edit_publisher_name'],
            'genre' => $data['edit_genre'],
            'language' => $data['edit_language'],
            'country_of_origin' => $data['edit_country_of_origin'],
            'publication_date' => $data['edit_publication_date'],
        ]);
    
        return response()->json(['message' => 'Book updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);

        if ($book) {
            $book->delete();
            return redirect()->route('booklist')->with('success', 'Book deleted successfully.');
        } else {
            return redirect()->route('booklist')->with('error', 'Book not found.');
        }
    }
}
