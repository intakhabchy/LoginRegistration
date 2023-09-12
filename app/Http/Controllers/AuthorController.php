<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('homepage.author_list',['authors'=>$authors]);
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
            'author_name' => 'required|string|max:255',
            'author_country' => 'required|string|max:255',
            'author_website' => 'required|string|max:255',
            'author_dob' => 'required|date',
            'author_dod' => 'nullable|date',
        ]);

        $data['country'] = $data['author_country'];
        $data['website'] = $data['author_website'];
        $data['date_of_birth'] = $data['author_dob'];
        $data['date_of_death'] = $data['author_dod'];

        unset($data['author_country']);
        unset($data['author_website']);
        unset($data['author_dob']);
        unset($data['author_dod']);

        $author = Author::create($data);
    
        if ($author) { // If the publisher was successfully created
            return response()->json([
                'status' => 'success',
                'message' => 'Author details saved successfully.'
            ], 201); // HTTP status code 201 means "Created"
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to save author details.'
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

        $author = Author::find($id);

        if($author) {
            return response()->json(['message' => 'Data received!', 'author' => $author]);
        } else {
            return response()->json(['message' => 'Item not found!'], 404);
        }
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
        $author = Author::find($id);

        if ($author) {
            $author->delete();
            return redirect()->route('authorlist')->with('success', 'Author deleted successfully.');
        } else {
            return redirect()->route('authorlist')->with('error', 'Author not found.');
        }
    }
}
