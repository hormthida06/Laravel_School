<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\SchoolClass;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $students = Student::all();
        $classes = SchoolClass::select('id', 'class_name')->orderBy('class_name')->get();
        return view("students.index", compact('students', 'classes'));
    }


    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        $classes = SchoolClass::select('id', 'class_name')->orderBy('class_name')->get();
        return view('students.create', compact('classes'));
    }

    /**
     * Store a newly created student.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|string|max:100',
            'gender'    => 'required|in:F,M',
            'dob'       => 'required|date',
            'email'     => 'required|email|max:50|unique:students',
            'phone'     => 'required|string|max:20',
            'address'   => 'nullable|string|max:100',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'class_id'  => 'nullable|exists:classes,id', // fix table name
        ]);

        try {
            // Handle photo upload
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/students'), $filename);
                $validatedData['photo'] = 'uploads/students/' . $filename;
            }

            // Auto-assign class if none chosen
            if (empty($validatedData['class_id'])) {
                $class = SchoolClass::withCount('students')
                    ->having('students_count', '<', 20)
                    ->inRandomOrder()
                    ->first();

                if ($class) {
                    $validatedData['class_id'] = $class->id;
                }
            }

            Student::create($validatedData);

            return redirect()->route('students.create')
                ->with('success', 'Student has been inserted successfully.');

        } catch (\Exception $e) {
            return redirect()->route('students.create')
                ->with('error', 'Failed to insert student: ' . $e->getMessage());
        }
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $validatedData = $request->validate([
            'name'      => 'required|string|max:100',
            'gender'    => 'required|in:F,M',
            'dob'       => 'required|date',
            'email'     => 'required|email|max:50|unique:students,email,' . $id,
            'phone'     => 'required|string|max:20',
            'address'   => 'nullable|string|max:100',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'class_id'  => 'nullable|exists:classes,id',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/students'), $filename);
            $validatedData['photo'] = 'uploads/students/' . $filename;
        }

        $student->update($validatedData);

        return redirect()->route('students.index')
            ->with('success', 'Student has been updated successfully.');
    }


    /**
     * Show the form for editing a student.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        $classes = SchoolClass::select('id', 'class_name')->orderBy('class_name')->get();
        return view('students.edit', compact('student', 'classes'));
    }

    /**
     * Delete a student.
     */
    public function destroy(string $id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->route('students.index')->with('success', 'The student has been deleted successfully.');
    }

}
