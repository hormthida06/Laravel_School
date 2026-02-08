
@extends('layouts.LYDashBoard')

@section('pageTitle')
    Create New Class
@endsection

@section('headerBlock')
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

            <div class="Main-Title"><h1>Create New Class</h1></div>
            
            @if(session('success'))
                <div class="success" id="successMessage">
                    {{ session('success') }}
                    <ion-icon name="close-outline" onclick="closeSuccess()" style="font-size:24px; cursor:pointer; float:right;"></ion-icon>
                </div>
            @endif
             <form action="{{route('classes.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="class_name">Class Name:</label>
                    <input type="text" id="class_name" name="class_name" value="{{ old('class_name') }}" maxlength="50">
                    @error('class_name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="capacity">Capacity:</label>
                    <input type="number" id="capacity" name="capacity" value="{{ old('capacity', 20) }}" min="1">
                    @error('capacity')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="button">
                    <input type="submit" value="SUBMIT" name="buttonSubmit" id="buttonSubmit">
                    <input type="reset" value="RESET" name="buttonReset" id="buttonReset">
                </div>
            </form>
            
        </div>
             
    @endsection    

