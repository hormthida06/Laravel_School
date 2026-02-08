@extends('layouts.LYDashBoard')

@section('pageTitle')
    Students Listing
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection

       @section('link')  
            <li><a href="/students"><ion-icon name="list-circle"></ion-icon><p> Students Listing </p></a></li>
            <li><a href="/students/create "><ion-icon name="add-circle"></ion-icon><p>Add New Student </p></a></li>
        @endsection

    @section('main-right') 

        <div id="main-right">
            <div class="header"><h1>Students Listing</h1></div>
                <div id="body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Class</th>
                                <th>Edite</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td><div class="photo"><img src="{{$student->photo}}" alt=""></div></td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->dob}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{ $student->schoolClass->class_name ?? 'Unassigned' }}</td>
                                    <td><a href="{{ url('students/' . $student->id . '/edit')}}" class="edit">Edit</a></td>
                                    <td><a href="{{ url('students/' . $student->id . '/delete') }}"
                                            class="delete"
                                            onclick="return confirm('Are you sure you want to delete this student?');">
                                            Delete
                                        </a>
                                    </td>
                                    <!-- <td><a href="{{ url('students/' . $student->id . '/delete')}}" class="delete">Delete</a></td> -->
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
        </div>
             
    @endsection    
