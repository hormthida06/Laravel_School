<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
       
    //      $teachers = Teacher::with('subject')->get();
    //     return view("teachers.index", compact('teachers'));
    // }

    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        return view("teachers.index", compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = \App\Models\Subject::all();

        return view('teachers.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:F,M',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'subject_id' => 'required|integer|exists:subjects,id',
        ]);

        Teacher::create($validated);

        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:F,M',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'subject_id' => 'required|integer|exists:subjects,id',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $teacher->update($validated);

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        Teacher::findOrFail($id)->delete();
        return redirect()->route('teachers.index')->with('success', 'The Teacher has been deleted successfully.');
    }

    public function delete($id) {
        Teacher::find($id)->delete();
        return redirect('teachers')->with('success', 
            'The Teacher has been deleted successfully.');
    }

    public function deletionConfirmation($id) {
        return redirect()
               ->route('teachers.index')
               ->with('id', $id);
    }
}
