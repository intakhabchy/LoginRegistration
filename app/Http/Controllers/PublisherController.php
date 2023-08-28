<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage.publisher_list');
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
            'publisher_name' => 'required|string|max:255',
            'publisher_address' => 'required|string|max:255',
            'publisher_contact_number' => 'required|string|max:15',
            'publisher_email' => 'required|email|max:255',
            // 'publisher_website' => 'sometimes|nullable|url|max:255',
            'publisher_contact_person' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        $data['address'] = $data['publisher_address'];
        $data['contact_number'] = $data['publisher_contact_number'];
        $data['email'] = $data['publisher_email'];
        $data['contact_person'] = $data['publisher_contact_person'];
        $data['isactive'] = $data['is_active'];

        // $data['establish_date'] = "2023-08-29";

        unset($data['publisher_address']);
        unset($data['publisher_contact_number']);
        unset($data['publisher_email']);
        unset($data['publisher_contact_person']);
        unset($data['is_active']);

        $publisher = Publisher::create($data);
    
        if ($publisher) { // If the publisher was successfully created
            return response()->json([
                'status' => 'success',
                'message' => 'Publisher details saved successfully.'
            ], 201); // HTTP status code 201 means "Created"
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to save publisher details.'
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
