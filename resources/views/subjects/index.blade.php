@extends('layouts.LYDashBoard')

@section('pageTitle')
    Create New Subjects
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection

        @section('link')  
            <li><a href="/subjects"><ion-icon name="list-circle"></ion-icon><p> Subjects Listing </p></a></li>
            <li><a href="/subjects/create "><ion-icon name="add-circle"></ion-icon><p>Add New Subject </p></a></li>
        @endsection

    @section('main-right') 

       <div id="main-right">
            <div class="header"><h1>Subjects Listing</h1></div>
                <div id="body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject Name</th>
                                <th>Edite</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{$subject->id}}</td>
                                    <td>{{$subject->subject_name}}</td>
                                    <td><a href="{{ url('subjects/' . $subject->id . '/edit')}}" class="edit">Edit</a></td>
                                    <td><a href="{{ url('subjects/' . $subject->id . '/delete') }}"
                                            class="delete"
                                            onclick="return confirm('Are you sure you want to delete this subject?');">
                                            Delete
                                        </a>
                                    </td>
                                    <!-- <td><a href="{{ url('subjects/' . $subject->id . '/delete')}}" class="delete">Delete</a></td> -->
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
        </div>
             
    @endsection    
