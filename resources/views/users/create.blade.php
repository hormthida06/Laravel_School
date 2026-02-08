

@extends('layouts.LYDashBoard')

@section('pageTitle')
    Create New Users
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/DS_left.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <script src="{{ URL::asset('js/dashboard.js') }}"></script>
@endsection

    @section('main-right')
        <div id="main-right">
            <div class="Main-Title"><h1>Create New User</h1></div>

            @if(session('success'))
                <div class="success" id="successMessage">
                    {{ session('success') }}
                    <ion-icon name="close-outline" onclick="closeSuccess()" style="font-size:24px; cursor:pointer; float:right;"></ion-icon>
                </div>
            @endif

            @if(session('error'))
                <div class="error" id="errorMessage">
                    {{ session('error') }}
                    <ion-icon name="close-outline" onclick="closeError()" style="font-size:24px; cursor:pointer; float:right;"></ion-icon>
                </div>
            @endif

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="data">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="data">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="data">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="data">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="data">
                    <label for="is_admin">Admin:</label>
                    <select id="is_admin" name="is_admin" required>
                        <option value="1" {{ old('is_admin') == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('is_admin') == 0 ? 'selected' : '' }}>No</option>
                    </select>
                    @error('is_admin')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="data">
                    <label for="is_active">Active:</label>
                    <select id="is_active" name="is_active" required>
                        <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>No</option>
                    </select>
                    @error('is_active')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="data">
                    <label for="is_delete">Deleted:</label>
                    <select id="is_delete" name="is_delete" required>
                        <option value="0" {{ old('is_delete') == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ old('is_delete') == 1 ? 'selected' : '' }}>Yes</option>
                    </select>
                    @error('is_delete')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="button">
                    <input type="submit" value="SUBMIT" name="buttonSubmit" id="buttonSubmit">
                    <input type="reset" value="RESET" name="buttonReset" id="buttonReset">
                </div>
            </form>
        </div>
    @endsection  
