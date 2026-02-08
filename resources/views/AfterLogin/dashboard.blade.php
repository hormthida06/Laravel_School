@extends('layouts.UserAfter')

@section('pageTitle')
    Dashboard
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection

    @section('main-right') 

        <div id="main-right">
            <div id="body">
                <h2>DashBoard </h2>
                
                <div id="head_top">
                    <div class="card">
                        <div class="icon"><img src="{{ asset('img/icon/book.png') }}" alt=""></div>
                        <h3>Subject</h3>
                        <p>40</p>
                    </div>
                    <div class="card">
                        <div class="icon"><img src="{{ asset('img/icon/graduation.png') }}" alt=""></div>
                        <h3>Students</h3>
                        <p>2000</p>
                    </div>
                    <div class="card">
                        <div class="icon"><img src="{{ asset('img/icon/school.png') }}" alt=""></div>
                        <h3>Teacher</h3>
                        <p>1259</p>
                    </div>
                    <div class="card">
                        <div class="icon"><img src="{{ asset('img/icon/network.png') }}" alt=""></div>
                        <h3>Group</h3>
                        <p>40</p>
                    </div>
                </div>

                <div id="main-box">
                    <a href="/students">
                        <div class="mainbox">
                            <div class="subBox"><img src="{{ asset('img/student.jpg') }}" alt="Student Listing Icon"></div>
                            <div class="title"><a href="stor.html">Student Listing</a></div>
                        </div>
                    </a>  
                    <a href="teachers">
                        <div class="mainbox">
                            <div class="subBox"><img src="{{ asset('img/a.jpg') }}" alt="Teacher Listing Icon"></div>
                            <div class="title"><a href="#">Teacher Listing</a></div>
                        </div>
                    </a>    
                    <a href="/subjects">
                        <div class="mainbox">
                            <div class="subBox"><img src="{{ asset('img/subject.jpg') }}" alt="Subject Listing Icon"></div>
                            <div class="title"><a href="#">Subject Listing</a></div>
                        </div>
                    </a>
                    <a href="/grade">   
                        <div class="mainbox">
                            <div class="subBox"><img src="{{ asset('img/grade.jpg') }}" alt="Grade Listing Icon"></div>
                            <div class="title"><a href="#">Grade Listing</a></div>
                        </div>
                    </a>     

                </div>
                
                <div id="main-box">
                    <a href="/users">
                        <div class="mainbox">
                            <div class="subBox"><img src="{{ asset('img/user.jpg') }}" alt="User Listing Icon"></div>
                            <div class="title"><a href="#">User Listing</a></div>
                        </div>
                    </a>    
                    <a href="/classes">
                        <div class="mainbox">
                            <div class="subBox"><img src="{{ asset('img/class.jpg') }}" alt="Class Listing Icon"></div>
                            <div class="title"><a href="#">Class Listing</a></div>
                        </div>
                    </a>    
                    <a href="/roles">
                        <div class="mainbox">
                            <div class="subBox"><img src="{{ asset('img/a.jpg') }}" alt="Role Listing Icon"></div>
                            <div class="title"><a href="#">Role Listing</a></div>
                        </div>
                    </a>    
                    
                </div>
            </div>
        </div>
             
    @endsection    


    
