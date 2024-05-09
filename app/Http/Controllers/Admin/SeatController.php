<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all seats with their associated room information
        $seats = Seat::with('room')->get();

        // Return the view with the seats data
        return view('admin.seats.index', compact('seats'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::all();
        return view('admin.seats.create', compact('rooms'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'id_phong' => 'required',
            'sohang' => 'required',
            'soghe' => 'required',
        ]);

        try {
            // Create a new seat instance
            $seat = new Seat();

            // Assign values from the request to the seat instance
            $seat->id_phong = $request->id_phong;
            $seat->sohang = $request->sohang;
            $seat->soghe = $request->soghe;
            // Save the seat to the database
            $seat->save();

            // Redirect back to the page with a success message
            return redirect()->route('admin.seats.index')->with('success', 'Seat created successfully.');
        } catch (\Exception $e) {
            // Redirect back with an error message if something went wrong
            return redirect()->back()->with('error', 'Failed to create seat. Please try again.');
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
        $seat = Seat::findOrFail($id); // Retrieve the seat by its ID

        // You may need to pass additional data to the view if required
        // For example, you might want to pass a list of rooms
        $rooms = Room::all();

        return view('admin.seats.edit', compact('seat', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'id_phong' => 'required ', // Assuming the table name is 'tbghe' and primary key column is 'id_ghe'
        'sohang' => 'required',
        'soghe' => 'required',
    ]);

    // Find the seat by ID
    $seat = Seat::findOrFail($id);

    // Update the seat with validated data
    $seat->update($validatedData);

    // Redirect back with success message or any other action
    return redirect('./seats');

}

public function destroy(string $id)
{
    // Find the seat by ID
    $seat = Seat::findOrFail($id);

    // Delete the seat
    $seat->delete();

    // Redirect back with success message or any other action
    return redirect()->back()->with('success', 'Seat deleted successfully');
}
}
