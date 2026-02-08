@extends('layouts.LYDashBoard')

@section('pageTitle')
    Create New Grade
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection

        @section('link')  
            <li><a href="/grades"><ion-icon name="list-circle"></ion-icon><p> Grades Listing </p></a></li>
            <li><a href="/grades/create "><ion-icon name="add-circle"></ion-icon><p>Add New Grade </p></a></li>
        @endsection


@section('main-right') 

<div id="main-right">

    <div class="Main-Title"><h1>Create New Grade</h1></div>
    
    @if(session('success'))
        <div class="success" id="successMessage">
            {{ session('success') }}
            <ion-icon name="close-outline" onclick="closeSuccess()" style="font-size:24px; cursor:pointer; float:right;"></ion-icon>
        </div>
    @endif

    <form action="{{ route('grades.store') }}" method="POST">
        @csrf 

        <div class="data">
            <label for="score">Score:</label>
            <input type="text" id="score" name="score" required>
        </div>

        <div class="data">
            <label for="student_id">Student:</label><br>
            <select name="student_id" id="student_id" required>
                <option value="">-- Select Student --</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="data">
            <label for="subject_id">Subject:</label><br>
            <select name="subject_id" id="subject_id" required>
                <option value="">-- Select Subject --</option>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="button">
            <input type="submit" value="SUBMIT" name="buttonSubmit" id="buttonSubmit">
            <input type="reset" value="RESET" name="buttonReset" id="buttonReset">
        </div>

    </form>
    
</div>
             
@endsection
