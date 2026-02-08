
@extends('layouts.LYDashBoard')

@section('pageTitle')
    Create New Teacher
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection

    @section('main-right') 

        @section('link')  
            <li><a href="/teachers"><ion-icon name="list-circle"></ion-icon><p>Teachers Listing </p></a></li>
            <li><a href="/teachers/create "><ion-icon name="add-circle"></ion-icon><p>Add New Teacher </p></a></li>
        @endsection

        <div id="main-right">

            <div class="Main-Title"><h1>Create New Teacher</h1></div>
            
            <!-- @if(session('success'))
                <div class="success" id="successMessage">
                    {{ session('success') }}
                    <ion-icon name="close-outline" onclick="closeSuccess()" style="font-size:24px; cursor:pointer; float:right;"></ion-icon>
                </div>
            @endif -->

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
            
            <form action="{{route('teachers.store')}}" method="POST">
                @csrf 
                <div class="data">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror       
                <div class="data">
                    <label for="gender">Gender:</label><br>
                    <select name="gender" id="gender">
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                    </select>
                </div>

                <div class="data">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror        
                <div class="data">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
                <div class="data">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
                <div class="data">
                    <label for="subject_id">Subject:</label><br>
                    <select name="subject_id" id="subject_id">
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
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
