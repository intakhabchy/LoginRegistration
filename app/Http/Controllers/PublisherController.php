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
        $publishers = Publisher::all();
        return view('homepage.publisher_list',['publishers'=>$publishers]);
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
    public function edit(Request $request)
    {
        $id = $request->input('id');

        // Do something with the ID ...

        $publisher = Publisher::find($id);

        if($publisher) {
            return response()->json(['message' => 'Data received!', 'publisher' => $publisher]);
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
            'edit_publisher_name' => 'required|string|max:255',
            'edit_publisher_address' => 'required|string|max:255',
            'edit_publisher_contact_number' => 'required|string|max:15',
            'edit_publisher_email' => 'required|email|max:255',
            'edit_publisher_website' => 'nullable|string|max:255',
            'edit_publisher_contact_person' => 'sometimes|string|max:255',
            'edit_is_active' => 'required|boolean',
        ]);
    
        $publisher = Publisher::find($id);
    
        if (!$publisher) {
            return response()->json(['message' => 'Publisher not found'], 404);
        }
    
        $publisher->update([
            'publisher_name' => $data['edit_publisher_name'],
            'address' => $data['edit_publisher_address'],
            'contact_number' => $data['edit_publisher_contact_number'],
            'email' => $data['edit_publisher_email'],
            'website' => $data['edit_publisher_website'],
            'contact_person' => $data['edit_publisher_contact_person'],
            'is_active' => $data['edit_is_active'],
        ]);
    
        return response()->json(['message' => 'Publisher updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publisher = Publisher::find($id);

        if ($publisher) {
            $publisher->delete();
            return redirect()->route('publisherlist')->with('success', 'Publisher deleted successfully.');
        } else {
            return redirect()->route('publisherlist')->with('error', 'Publisher not found.');
        }
    }
}
