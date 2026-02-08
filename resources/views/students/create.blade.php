@extends('layouts.LYDashBoard')

@section('pageTitle')
    Create New Student
@endsection

@section('headerBlock')
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

            <div class="Main-Title"><h1>Create New Student</h1></div>
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
            <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                    <div class="data">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="data">
                    <label for="gender">Gender:</label><br>
                    <select name="gender" id="gender">
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                    </select>
                </div>

                <div class="data">
                    <label for="dob">Date Of Birth:</label>
                    <input type="text" id="dob" name="dob"  required>
                </div>

                <div class="data">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>

                <div class="data">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>

                <div class="data">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="data">
                    <div class="upload">
                        <label for="file">Select Photo:</label>
                        <input type="file" name="photo" id="photo">
                        <br><br>
                    </div>  
                </div>     
                
                <div class="data">
                    <label for="class_id">Select Class:</label><br>
                    <select name="class_id" id="class_id">
                        @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                        @endforeach
                    </select>
                </div>

                        
                    <div class="button">
                            <input type="submit" value="SUBMIT" name="buttonSubmit" id="buttonSubmit">
                            <input type="reset" value="RESET" name="buttonReset" id="buttonReset">
                    </div>

            </form>
            
        </div>
             
    @endsection    

