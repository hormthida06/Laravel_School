@extends('layouts.UserAfter')

@section('pageTitle')
    About Us
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/about_us.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection

@section('container') 
    <div id="body">
        <div id="title">
            <h1>About US</h1>
        </div>
        
        <div id="text">
            <h6>1. What</h6>
            <p>
                The School Management System (SMS) is a web-based application 
                designed to automate and simplify daily school operations. It
                manages student data, teacher information, classes, subjects,
                attendance, exams, grades, and fees in one integrated system.
            </p>
            <h6>2. Why</h6>
            <ul>
                <li>To reduce paperwork and human errors.</li>
                <li>To improve communication between teachers, students, and parents.</li>
                <li>To provide administrators with quick reports and decision-making tools.</li>
                <li>To save time for staff and teachers by automating repetitive tasks.</li>
                <li>To enhance transparency and accountability in school management.</li>
            </ul>
            <h6>3. When</h6>
            <p>The system will be used throughout the academic year, covering all daily and periodic school activities, such as:</p>
            <ul>
                <li>Daily: Attendance, timetable, communication.</li>
                <li>Weekly/Monthly: Assignments, reports, fee collection.</li>
                <li>Annually: Exams, grade reports, admissions, promotions.</li>
            </ul>
            <h6>4. Who</h6>
            <ul>
                <li>Administrators → Manage users, school structure, reports.</li>
                <li>Teachers → Record attendance, manage grades, share materials.</li>
                <li>Students → Access timetable, grades, assignments.</li>
                <li>Parents → Track student performance, fee payments.</li>
                <li>Accountants/Staff → Manage fees, payroll, and inventory.</li>
            </ul>
            <h6>5. Where</h6>
            <ul>
                <li>Accessible from school computers, teacher devices, and students/parents at home through a web browser (and possibly mobile app).</li>
                <li>Can be deployed on school’s local server or cloud hosting for remote access.</li>
            </ul>
            <h6>6. How</h6>
        </div>

    </div>
@endsection