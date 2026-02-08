@extends('layouts.UserAfter')

@section('pageTitle')
    About Us
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/Ds_for_ST.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection

@section('container')
<div id="body">
    <div class="greeting">Hi, student! 👋<br>Course overview</div>
    <div class="controls">
        <div>
            <button>Search</button>
            <select>
                <option>Sort by last accessed</option>
            </select>
            <select>
                <option>Card</option>
            </select>
        </div>
        <button>Go to bottom</button>
    </div>
    <div class="course-grid">
        <div class="course-card">
            <h3>English</h3>
            <p>Internship Rules and Regulations</p>
            <p>Internship</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card" onclick="window.location.href='/video'">
            <h3>C#</h3>
            <p>C# Programming</p>
            <p>SU44</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>GDI</h3>
            <p>Graphic Design</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>SA</h3>
            <p>System Analysis</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>WEB II</h3>
            <p>Web Based Development II</p>
            <p>SU44</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>Database Modeling</h3>
            <p>Database Modeling</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>WEB I</h3>
            <p>Web Development I </p>
            <p>SU44</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>DSA</h3>
            <p>Database Server Applications</p>
            <p>Internship</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>DNS</h3>
            <p>Graphic Design</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>Linux I</h3>
            <p>Linux System Administration I</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>C++</h3>
            <p>C++ Programming</p>
            <p>SU44</p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>ACC II</h3>
            <p>Database System & MS Access II </p>
            <p class="progress">0% complete</p>
        </div>
        <div class="course-card">
            <h3>DSM</h3>
            <p>Drawing Skills For Multimedia</p>
            <p>SU44</p>
            <p class="progress">0% complete</p>
        </div>
    </div>
</div>     
@endsection