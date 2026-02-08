<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @yield('headerBlock')
</head>
<body>    
<body>
    <div id="right">
        <div id="subRight">
            <ul>
                <li onclick="showHide()">
                    <ion-icon name="person-circle-sharp"></ion-icon>
                    <h1>Account</h1>
                    <div id="List">
                        <div id="allLinks">
                            <div id="linksSpacer">
                                    <ul>
                                        <li>
                                            <ion-icon name="person-circle-sharp"></ion-icon>
                                            <h1>hormthida06@gmail.com</h1>
                                            <button type="submit">Logout</button>
                                        </li>
                                        <li><a href="#">Notifications</a></li>
                                        <li><a href="#">Files</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li><a href="#">QR for Mobile Login</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/dashboard">
                        <ion-icon name="terminal"></ion-icon>
                        <h1>Dashboard</h1>
                    </a>    
                </li>
                <li>
                    <a href="/students">
                        <ion-icon name="list-circle"></ion-icon>
                        <h1>Student List</h1>
                    </a>
                </li>
            </ul>

        </div>
        <div id="subleft">
            <ul>
                <li><a href="/students/create">Home</a></li>
                <li><a href="#">Discussion</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="/students/create">Add New Student</a></li>
            </ul>
        </div>
  

    </div>
     <div id="left">
        @yield('leftContent')
    </div>
    
</body>
</html>