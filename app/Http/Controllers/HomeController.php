<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    public function afterLogin()
    {
        $students = Student::with('schoolClass')->get();
        return view('AfterLogin.home', compact('students'));
    }

    public function AdminafterLogin()
    {
        $students = Student::with('schoolClass')->get();
        return view('info.home', compact('students'));
    }
}


