@extends('layouts.LYDashBoard')

@section('pageTitle')
    Grade Listing
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">
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
            <div class="header"><h1>Grades Listing</h1></div>
                <div id="body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Score</th>
                                <th>Student</th>
                                <th>Teacher</th>
                                <th>Subject</th>
                                <th>Edite</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($grades as $grade)
                                <tr>
                                    <td>{{$grade->id}}</td>
                                    <td>{{$grade->score}}</td>
                                    <td>{{$grade->student->name ?? 'Unassigned' }}</td>
                                    <td>{{ $grade->subject->teacher->name ?? 'Unassigned' }}</td>
                                    <td>{{$grade->subject->subject_name ?? 'Unassigned' }}</td>
                                    <td><a href="{{ url('grades/' . $grade->id . '/edit')}}" class="edit">Edit</a></td>
                                    <td><a href="{{ url('grades/' . $grade->id . '/delete') }}"
                                            class="delete"
                                            onclick="return confirm('Are you sure you want to delete this grade?');">
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

