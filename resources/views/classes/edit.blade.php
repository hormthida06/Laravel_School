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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Class</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        .success { background-color: #dff0d8; color: #3c763d; padding: 10px; margin-bottom: 15px; border-radius: 4px; }
        .error { color: red; font-size: 0.9em; margin-top: 5px; }
        .form-group { margin-bottom: 15px; }
        .button { margin-top: 20px; }
        #buttonSubmit, #buttonReset { padding: 10px 20px; margin-right: 10px; }
    </style>
</head>
<body>
    <nav>
        <div id="hamburgerMenu">
            <input type="checkbox" name="chkMenu" id="chkMenu">
            <label for="chkMenu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </label>
            <div id="allLinks">
                <div id="linksSpacer">
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li class="sublink"><a href="#">Academic</a>
                            <ul>
                                <li><a href="#">Foundation Year</a></li>
                                <li><a href="#">Associate Degree</a></li>
                                <li><a href="#">Bachelor Degree</a></li>
                                <li><a href="#">Master Degree</a></li>
                                <li><a href="#">Bridging Course</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Internship</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="headerRight">
            <div class="logo">
                <a href="index.html"><img src="{{ URL::asset('img/LOGO.png') }}" alt="Logo"></a>
            </div>
        </div>

        <div class="header">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li class="sublink"><a href="#">Academic</a>
                    <ul>
                        <li><a href="#">Foundation Year</a></li>
                        <li><a href="#">Associate Degree</a></li>
                        <li><a href="#">Bachelor Degree</a></li>
                        <li><a href="#">Master Degree</a></li>
                        <li><a href="#">Bridging Course</a></li>
                    </ul>
                </li>
                <li><a href="#">Internship</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>

        <div class="headerLeft">
            <ul>
                <li><h1 id="logOut">LogOut</h1></li>
                <li><ion-icon name="call" style="color: rgb(211, 13, 10);"></ion-icon></li>
                <li><div class="profile"><img src="{{ URL::asset('img/iSquishy.jpg') }}" alt="Profile"></div></li>
            </ul>
        </div>
    </nav>

    <div id="Container">
        <div id="main-left">
            <div id="subRight">
                <div id="profil">
                    <ion-icon name="person-circle-sharp"></ion-icon>
                    <h1>Account</h1>
                    <p>hormthida06@gmail.com</p>
                    <button type="submit">Logout</button>
                </div>
                <ul>
                    <li><a href="#"><ion-icon name="home"></ion-icon><p>Home</p></a></li>
                    <li><a href="/dashboard"><ion-icon name="terminal"></ion-icon><p>Dashboard</p></a></li>
                    <li><a href="/classes"><ion-icon name="list-circle"></ion-icon><p>Classes List</p></a></li>
                    <li><a href="#"><ion-icon name="people-sharp"></ion-icon><p>Users</p></a></li>
                    <li><a href="#"><ion-icon name="notifications"></ion-icon><p>Notifications</p></a></li>
                </ul>
            </div>
        </div>

        <div id="main-right">
            <div class="header"><h1>Class Editing</h1></div>

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

            @if($errors->any())
                <div class="error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('classes/' . $class->id) }}" method="POST">
                @csrf
                @method('PUT')
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
    </div>

    <div id="footer">
        <div class="Col">
            <div class="logo">
                <img src="{{ URL::asset('img/LOGO.png') }}" alt="Logo">
            </div>
        </div>
        <div class="Col">
            <h1>About Us</h1>
            <p>The web site was the first of its kind when it was established back in 2000. Since that time it has become 
                the most popular and professional job announcements and classified advertising portal in Cambodia that offers 
                the most legitimate service available in the country.</p>
        </div>
        <div class="Col">
            <h1>Contact Us</h1>
            <p>#256A, Wat Prachum Sakor (Wat Thmey) Road, Sangkat Chroy Chanvar, Khan Chroy Changvar, Phnom Penh</p>
            <a href="#"><ion-icon name="alert-circle" style="font-size: 16px;padding:0 10px;color:white;"></ion-icon>more information...</a>
        </div>
        <div class="Col">
            <h1>Social Networks</h1>
            <div id="icon">
                <ul>
                    <li><a href="https://www.facebook.com/thida.horm.12?mibextid=ZbWKwL"><img src="{{ URL::asset('img/facebook.png') }}" alt="Facebook"></a></li>
                    <li><a href="https://m.me/thida.horm.12?hash=AbbZt2nV63W7642W&source=qr_link_share"><img src="{{ URL::asset('img/messenger.png') }}" alt="Messenger"></a></li>
                    <li><a href="https://www.instagram.com/thida.horm.12?igsh=MXBvd2Y0ejhpb21hMA=="><img src="{{ URL::asset('img/instagram.png') }}" alt="Instagram"></a></li>
                    <li><a href="https://t.me/Horm_Thida"><img src="{{ URL::asset('img/telegram.png') }}" alt="Telegram"></a></li>
                </ul>
            </div>
            <h3>SchoolManagementSystem(SMS) Apps</h3>
        </div>
    </div>

    <script>
        function closeSuccess() {
            document.getElementById('successMessage').style.display = 'none';
        }
        function closeError() {
            document.getElementById('errorMessage').style.display = 'none';
        }
    </script>
</body>
</html>