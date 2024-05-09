<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{

        public function index()
        {
            $foods = Food::all();
            return view('admin.foods.index', compact('foods'));
        }

        public function create()
        {
            return view('admin.foods.create');
        }

        public function store(Request $request)
        {

            // Validate the request data
            $validatedData = $request->validate([
                'tencombo' => 'required',
                'chitiet' => 'nullable',
                'gia' => 'required',
            ]);

            // Create a new combo
            Food::create($validatedData);

            // Redirect back with success message
            return redirect()->route('admin.foods.index')->with('success', 'Food created successfully');
        }

        public function edit($id)
        {
            $food = Food::findOrFail($id);
            return view('admin.foods.edit', compact('food'));
        }

        public function update(Request $request, $id)
        {
            // Find the combo by ID
            $combo = Food::findOrFail($id);

            // Validate the request data
            $validatedData = $request->validate([
                'tencombo' => 'required|string|max:255',
                'chitiet' => 'nullable|string',
                'gia' => 'required|integer',
            ]);

            // Update the combo
            $combo->update($validatedData);

            // Redirect back with success message
            return redirect()->route('admin.foods.index')->with('success', 'Food updated successfully');
        }

        public function destroy($id)
        {
            // Find the combo by ID
            $combo = Food::findOrFail($id);

            // Delete the combo
            $combo->delete();

            // Redirect back with success message
            return redirect()->route('admin.foods.index')->with('success', 'Food deleted successfully');
        }
    }
