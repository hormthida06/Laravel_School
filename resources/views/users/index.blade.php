
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Listing</title>
    <link rel="stylesheet" href="{{ URL::asset('css/table.css') }}">
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="JS/dashboard.js"></script>
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
                        <li><a href="DashBoard.html">Dashboard</a></li>
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
                <a href="index.html"><img src="img/1x/Artboard 61.png" alt=""></a>
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
                <li><h1 id="logOut" >LogOut</h1></li>
                <li><ion-icon name="call" style="color: rgb(211, 13, 10);"></ion-icon></li>
                <li><div class="profile"><img src="img/iSquishy.jpg" alt=""></div></li>
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
                    <li><a href="/dashboard"><ion-icon name="home"></ion-icon><p>Home</p></a></li>
                    <li><a href="/dashboard"><ion-icon name="terminal"></ion-icon><p>Dashboard</p></a></li>
                    <li><a href="/students"><ion-icon name="list-circle"></ion-icon><p>Student List</p></a></li>
                    <li><a href="/students/create"><ion-icon name="add-circle"></ion-icon><p>Add New Student</p></a></li>
                    <li><a href="#"><ion-icon name="people-sharp"></ion-icon><p>Users</p></a></li>
                    <li><a href="#"><ion-icon name="notifications"></ion-icon><p>Notifications</p></a></li>
                </ul>

            </div>

        </div>

        <div id="main-right">
            <div class="header"><h1>Students Listing</h1></div>
                <div id="body">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Full Name</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Class</th>
                                <th>Show</th>
                                <th>Edite</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->first_name}} {{$student->last_name}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->dob}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{ $student->schoolClass->class_name ?? 'Unassigned' }}</td>
                                    <td><a href="{{ url('students/' . $student->id) }}" class="show">Show</a></td>
                                    <td><a href="{{ url('students/' . $student->id . '/edit')}}" class="edit">Edit</a></td>
                                    <td><a href="{{ url('students/' . $student->id . '/delete') }}"
                                            class="delete"
                                            onclick="return confirm('Are you sure you want to delete this student?');">
                                            Delete
                                        </a>
                                    </td>
                                    <!-- <td><a href="{{ url('students/' . $student->id . '/delete')}}" class="delete">Delete</a></td> -->
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
        </div>

    </div>    
        

    <div id="footer">
            <div class="Col">
                <div class="logo">
                    <img src="img/1x/Artboard 61.png" alt="">
                </div>
            </div>
            <div class="Col">
                <h1>About Us</h1>
                <p>The web site was the first of it's kind when it was established back in 2000. Since that time it has become 
                    the most popular and professional job announcements and classified advertising portal in Cambodia that offers 
                    the most legitimate service available in the country.</p>
            </div>
            <div class="Col">
                <h1>Contact Us</h1>
                <p>#256A, Wat Prachum Sakor (Wat Thmey) Road, Sangkat Chroy Chanvar, Khan Chroy Changvar, Phnom Penh</p>
                <a href="#"><ion-icon name="alert-circle" style="font-size: 16px;padding:0 10px ;color:white;"></ion-icon>more information...</a>
            </div>
            <div class="Col">
                <h1>Social Networks</h1>
                <div id="icon">
                    <ul>
                        <li><a href="https://www.facebook.com/thida.horm.12?mibextid=ZbWKwL"><img src="img/facebook.png" alt="" ></a></li>
                        <li><a href="https://m.me/thida.horm.12?hash=AbbZt2nV63W7642W&source=qr_link_share"><img src="img/messenger.png" alt="" ></a></li>
                        <li><a href="https://www.instagram.com/thida.horm.12?igsh=MXBvd2Y0ejhpb21hMA=="><img src="img/instagram.png" alt="" ></a></li>
                        <li><a href="https://t.me/Horm_Thida"><img src="img/telegram.png" alt=""></a></li>
                    </ul>
                </div>
                <h3>SchoolManagmentSystem(SMS) Apps</h3>
            </div>
    </div>

</body>
</html>