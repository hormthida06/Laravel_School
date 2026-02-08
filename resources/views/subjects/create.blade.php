
@extends('layouts.LYDashBoard')

@section('pageTitle')
    Create New Subjects
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection
         @section('link')  
            <li><a href="/subjects"><ion-icon name="list-circle"></ion-icon><p> Subjects Listing </p></a></li>
            <li><a href="/subjects/create "><ion-icon name="add-circle"></ion-icon><p>Add New Subject </p></a></li>
        @endsection

    @section('main-right') 

        <div id="main-right">

            <div class="Main-Title"><h1>Create New Subjects</h1></div>
            
            @if( !empty(session('success') ) )
                <div class="success" id="successMessage" style="color: white">{{ session('success') }}<ion-icon name="close-outline" onclick="closeSuccess()" style="font-size:24px; cursor:pointer; float:right;"></ion-icon></div>
                <script>
                        let success = document.querySelector('.success');
                        success.style.opacity=1;
                        success.style.display = "block";
                        success.style.transition = "all ease-in-out 4s";
                        setTimeout(() => {
                            success.style.opacity=0;
                            setTimeout(() => {
                                success.style.display = "none";
                            }, 4000);
                            
                        }, 3000);
                </script>
            @endif
            <form action="{{route('subjects.store')}}" method="POST">
                @csrf 

                <div class="data">
                    <label for="subject_name">Subject Name:</label>
                    <input type="text" id="subject_name" name="subject_name" required>
                </div> 

                <div class="button">
                        <input type="submit" value="SUBMIT" name="buttonSubmit" id="buttonSubmit">
                        <input type="reset" value="RESET" name="buttonReset" id="buttonReset">
                </div>

            </form>
            
        </div>
             
    @endsection    
