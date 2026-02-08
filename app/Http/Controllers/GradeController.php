<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    // public function index()
    // {
    //     $grades = Grade::with(['student', 'subject'])->get(); // teacher removed
    //     return view('grades.index', compact('grades'));
    // }

    public function index()
    {
        $grades = Grade::with(['student', 'subject.teacher'])->get();
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('grades.create', compact('students', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'score' => 'required|numeric|min:0|max:100',
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        Grade::create([
            'score' => $request->score,
            'student_id' => $request->student_id,
            'subject_id' => $request->subject_id,
        ]);

        return redirect()->route('grades.index')->with('success', 'Grade created successfully!');
    }

    public function show(Grade $grade)
    {
        $grade->load(['student', 'subject']); // teacher removed
        return view('grades.show', compact('grade'));
    }

    public function edit(Grade $grade)
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('grades.edit', compact('grade', 'students', 'subjects'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'score' => 'required|numeric|min:0|max:100',
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $grade = Grade::findOrFail($id);

        $grade->update([
            'score' => $request->score,
            'student_id' => $request->student_id,
            'subject_id' => $request->subject_id,
        ]);

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully!');
    }

    public function destroy(string $id)
    {
        Grade::findOrFail($id)->delete();
        return redirect('grades')->with('success', 'The grade has been deleted successfully.');
    }


    public function delete($id) {
        Grade::find($id)->delete();
        return redirect('grades')->with('success', 
            'The Grade has been deleted successfully.');
    }

    public function deletionConfirmation($id) {
        return redirect()
               ->route('grades.index')
               ->with('id', $id);
    }
}