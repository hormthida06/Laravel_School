@extends('layouts.master')

@section('pageTitle')
    Edit
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection
@section('leftContent')
    <div class="header"><h1>Students Editing</h1></div>
    @if(session('success'))
        <div class="success" id="successMessage">
            {{ session('success') }}
            <ion-icon name="close-outline" onclick="closeSuccess()" style="font-size:24px; cursor:pointer; float:right;"></ion-icon>
        </div>
    @endif
   <form action="{{ url('students/' . $student->id) }}" method="POST">
        @csrf
        @method('PUT')
            <label for="first_name">First Name:</label>
            <input value="{{ old('first_name', $student->first_name) }}" type="text" id="first_name" name="first_name" required>
            <label for="last_name">Last Name:</label>
            <input value="{{ old('last_name', $student->last_name) }}" type="text" id="last_name" name="last_name" required>
            <label for="gender">Gender:</label><br>
            <select name="gender" id="gender">
                <option value="F" {{ old('gender', $student->gender) == 'F' ? 'selected' : '' }}>Female</option>
                <option value="M" {{ old('gender', $student->gender) == 'M' ? 'selected' : '' }}>Male</option>
            </select>
            <label for="dob">Date Of Birth:</label>
            <input value="{{ old('dob', $student->dob) }}" type="text" id="dob" name="dob"  required>
            <label for="email">Email:</label>
            <input value="{{ old('email', $student->email) }}" type="text" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input value="{{ old('phone', $student->phone) }}" type="text" id="phone" name="phone" required>
            <label for="address">Address:</label>
            <input value="{{ old('address', $student->address) }}" type="text" id="address" name="address" required>
        <button type="submit">UPDATE</button>
    </form>
@endsection