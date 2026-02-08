<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = SchoolClass::all();
        return view("classes.index", compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'class_name.required' => 'The class name is required.',
            'class_name.string' => 'The class name must be a valid string.',
            'class_name.max' => 'The class name cannot exceed 50 characters.',
            'class_name.unique' => 'This class name is already taken.',
            'capacity.required' => 'The capacity is required.',
            'capacity.integer' => 'The capacity must be a whole number.',
            'capacity.min' => 'The capacity must be at least 1.'
        ];

        $validator = Validator::make($request->all(), [
            'class_name' => 'required|string|max:50|unique:classes,class_name',
            'capacity' => 'required|integer|min:1',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Create a new SchoolClass record
            SchoolClass::create([
                'class_name' => $request->class_name,
                'capacity' => $request->capacity,
            ]);

            // Redirect with success message
            return redirect()->route('classes.index')
                ->with('success', 'Class created successfully.');
        } catch (QueryException $e) {
            // Handle database-related errors
            return redirect()->back()
                ->with('error', 'An error occurred while saving the class. Please try again.')
                ->withInput();
        
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolClass $subject)
    {
        return view('classes.show', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolClass $subject)
    {
        return view('classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        SchoolClass::find($id)->update($request->all());
        return redirect()->route('classes.index')->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SchoolClass::find($id)->delete();
        return redirect('classes')->with('success', 
            'The Class has been deleted successfully.');
    }

    public function delete($id) {
        SchoolClass::find($id)->delete();
        return redirect('classes')->with('success', 
            'The Class has been deleted successfully.');
    }

    public function deletionConfirmation($id) {
        return redirect()
               ->route('classes.index')
               ->with('id', $id);
    }
}
