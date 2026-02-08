<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\LoginChecker;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('info.index');
})->name('info.index');

Route::get('/bcontact_us', function () {
    return view('beforLogin.contact');
})->name('beforLogin.contact');

Route::get('/babout_us', function () {
    return view('beforLogin.aboutUs');
})->name('beforLogin.aboutUs');

Route::get('/binternship', function () {
    return view('beforLogin.internship');
})->name('beforLogin.internship');

//Route::get('students/{id}/delete', [StudentController::class, 'delete'])->name('students.delete');

// Route::get('/login-form', [UserController::class, 'showLoginForm'])->name('showLoginForm');
// Route::post('/process-login', [UserController::class, 'processLogin'])->name('process.login');
// Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [UserController::class, 'processLogin'])->name('process.login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware([LoginChecker::class])->group( function(){

    // Route::get('/home', function () {
    //     return view('info.home');
    // })->name('home');
    Route::get('/home', [HomeController::class, 'AdminafterLogin'])->name('home');

    // Route::get('/SThome', function () {
    //     return view('AfterLogin.home');
    // })->name('SThome');

    Route::get('/SThome', [HomeController::class, 'afterLogin'])->name('SThome');

    Route::get('/stCourse', function () {
        return view('info.DS_for_ST');
    })->name('info.DS_for_ST');

    Route::get('/video', function () {
        return view('info.Video');
    })->name('info.Video');

    Route::get('/contact_us', function () {
        return view('info.contact');
    })->name('info.contact');

    Route::get('/about_us', function () {
        return view('info.aboutUs');
    })->name('info.aboutUs');

    Route::get('/internship', function () {
        return view('info.internship');
    })->name('info.internship');


    Route::get('/AfstCourse', function () {
        return view('AfterLogin.DS_for_ST');
    })->name('AfterLogin.DS_for_ST');

    Route::get('/Afstvideo', function () {
        return view('AfterLogin.Video');
    })->name('AfterLogin.Video');

    Route::get('/Afstcontact_us', function () {
        return view('AfterLogin.contact');
    })->name('AfterLogin.contact');

    Route::get('/Afstabout_us', function () {
        return view('AfterLogin.aboutUs');
    })->name('AfterLogin.aboutUs');

    Route::get('/Afstinternship', function () {
        return view('AfterLogin.internship');
    })->name('AfterLogin.internship');



    Route::get('/dashboard', function () {
        return view('info.dashboard');
    })->name('info.dashboard');

    Route::resource('students', StudentController::class);
    Route::get('students/{id}/delete',[StudentController::class,'delete']);

    Route::resource('classes', SchoolClassController::class);
    Route::get('classes/{id}/delete',[SchoolClassController::class,'delete']);

    Route::resource('teachers', TeacherController::class);
    Route::get('teachers/{id}/delete',[TeacherController::class,'delete']);

    Route::resource('subjects', SubjectController::class);
    Route::get('subjects/{id}/delete',[SubjectController::class,'delete']);

    Route::resource('grades', GradeController::class);
    Route::get('grades/{id}/delete',[GradeController::class,'delete']);

    Route::get('students/deletion-confirmation/{id}', [StudentController::class, 'deletionConfirmation'])->name('students.deletionConfirmation');
    Route::get('teachers/deletion-confirmation/{id}', [TeacherController::class, 'deletionConfirmation'])->name('teachers.deletionConfirmation');
    Route::get('classes/deletion-confirmation/{id}', [SchoolClassController::class, 'deletionConfirmation'])->name('classes.deletionConfirmation');
    Route::get('subjects/deletion-confirmation/{id}', [SubjectController::class, 'deletionConfirmation'])->name('subjects.deletionConfirmation');
    Route::get('grades/deletion-confirmation/{id}', [GradeController::class, 'deletionConfirmation'])->name('grades.deletionConfirmation');

});
