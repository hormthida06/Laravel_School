@extends('layouts.LYDashBoard')

@section('pageTitle')
    Classes Listing
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection
        @section('link')  
            <li><a href="/classes"><ion-icon name="list-circle"></ion-icon><p> Classes Listing </p></a></li>
            <li><a href="/classes/create "><ion-icon name="add-circle"></ion-icon><p>Add New Class </p></a></li>
        @endsection

    @section('main-right') 

        <div id="main-right">
            <div class="header"><h1>Classes Listing</h1></div>
                <div id="body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Class</th>
                                <th>Capacity</th>

                                <th>Edite</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                             @foreach ($classes as $class)
                                <tr>
                                    <td>{{$class->id}}</td>
                                    <td>{{$class->class_name}}</td>
                                    <td>{{$class->capacity}}</td>

                                    <td><a href="{{ url('classes/' . $class->id . '/edit')}}" class="edit">Edit</a></td>
                                    <td><a href="{{ url('classes/' . $class->id . '/delete') }}"
                                            class="delete"
                                            onclick="return confirm('Are you sure you want to delete this class?');">
                                            Delete
                                        </a>
                                    </td>
                                    <!-- <td><a href="{{ url('classes/' . $class->id . '/delete')}}" class="delete">Delete</a></td> -->
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
        </div>
             
    @endsection    


