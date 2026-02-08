@extends('layouts.LYDashBoard')

@section('pageTitle')
    Create New Teacher
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection

     @section('link')  
            <li><a href="/teachers"><ion-icon name="list-circle"></ion-icon><p>Teachers Listing </p></a></li>
            <li><a href="/teachers/create "><ion-icon name="add-circle"></ion-icon><p>Add New Teacher </p></a></li>
        @endsection

    @section('main-right') 

        <div id="main-right">
            <div class="header"><h1>Teachers Listing</h1></div>
                <div id="body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Subject</th>
                                <th>Edite</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{$teacher->id}}</td>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->gender}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->phone}}</td>
                                    <td>{{$teacher->address}}</td>
                                    <td>{{ $teacher->subject->subject_name ?? 'Unassigned' }}</td>
                                    <td><a href="{{ url('teachers/' . $teacher->id . '/edit')}}" class="edit">Edit</a></td>
                                    <td><a href="{{ url('teachers/' . $teacher->id . '/delete') }}"
                                            class="delete"
                                            onclick="return confirm('Are you sure you want to delete this teacher?');">
                                            Delete
                                        </a>
                                    </td>
    
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
        </div>
             
    @endsection    
