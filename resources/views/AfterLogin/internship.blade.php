@extends('layouts.UserAfter')

@section('pageTitle')
    Internship
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/Internship.css')}}">
@endsection

@section('container') 
    <div id="body">
        <div id="title">
            <h1>Internship</h1>
        </div>
        
        <div id="text">
            <p>
                During the last semester of the 4th Year, Students will
                be exposed to the working environment where they are expected 
                to undertake various activities in the organizations that they 
                are attached to. The Student Internship program (SIP) is an integral 
                part of our curriculum. The 16-week immersion in a working environment 
                will not only enhance the students' understanding of the application of 
                the relevant IT discipline in an organization, but will also provide an 
                opportunity for them to grow into responsible working adults.
            </p>
            <p>
                The SIP provides students with an opportunity to apply and integrate the 
                knowledge and skills acquired during their study. Students will be assigned 
                work which requires them to demonstrate independence, initiative, creativity 
                and strong conceptual thinking and proficiency.
            </p>
        </div>

        <div id="image">
            <img src="https://www.setecu.com/images/Intern/Student_internship.jpg" alt="">
        </div>
    </div>    
@endsection
