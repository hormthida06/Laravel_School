@extends('layouts.AfterLogin')

@section('pageTitle')
    After Login
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/calender.css')}}">
    <script src="{{ URL::asset('js/logined.js')}}"></script>
    <script src="{{ URL::asset('js/setting.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

@endsection

@section('container') 
    <div class="layer1">
        <div class="left">
            <h1>College and School Management Software</h1>
            <p>Automate Institute Daily Operations, Generate Insightful Reports, Make Better & Faster Decisions. Fedena is an online school
                management system software that simplifies the institute's academic & administrative process effortlessly.</p> 
        </div>
        <div class="right">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner"  style="border-radius: 20px;">
                <div class="carousel-item active">
                <img src="img/2.jpg" alt="Slide 1" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            </div>
        </div>
    </div>
        <div class="layer2">
            <ul>
                <li>
                    <img src="img/graduating-student.png" alt="">
                    <div class="text">
                        <h2>200+</h2>
                        <a href="#">Schools& Colleges</a>
                    </div>
                </li>
                <li>
                    <img src="img/online-course.png" alt="">
                    <div class="text">
                        <h2>40+</h2>
                        <a href="#">Position</a>
                    </div>
                </li>
                <li>
                    <img src="img/competence.png" alt="">
                    <div class="text">
                        <h2>150+</h2>
                        <a href="#">Skill</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="layer3">
            <div id="left">
                <div id="mainBox">
                        <div class="head">
                            <div class="text">
                                <ion-icon name="link"></ion-icon>
                                <h3>Quick Links</h3>
                               
                            </div>                            
                            <div class="box">
                                <ul>
                                    <li><a href="#">Student Name</a></li>
                                    <li><a href="#">Group Name</a></li>
                                    <li><a href="#">Max Score</a></li>
                                    <li><a href="#">Min Score</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="head">
                            <div class="text">
                                <ion-icon name="text"></ion-icon>
                                <h3>Students Starting Letter</h3>
                                
                            </div>
                            <div class="box">                          
                                <ul>
                                    <li>
                                        <div id="Character">
                                            <div class="link">
                                                <a href="Letter.php?Letter=A">A</a>
                                                <a href="Letter.php?Letter=B">B</a>
                                                <a href="Letter.php?Letter=C">C</a>
                                                <a href="Letter.php?Letter=D">D</a>
                                                <a href="Letter.php?Letter=E">E</a>
                                                <a href="Letter.php?Letter=F">F</a>
                                                <a href="Letter.php?Letter=G">G</a>
                                                <a href="Letter.php?Letter=H">H</a>
                                                <a href="Letter.php?Letter=I">I</a>
                                            </div> 
                                            <div class="link">        
                                                <a href="Letter.php?Letter=J">J</a>   
                                                <a href="Letter.php?Letter=K">K</a>
                                                <a href="Letter.php?Letter=L">L</a>
                                                <a href="Letter.php?Letter=M">M</a>
                                                <a href="Letter.php?Letter=N">N</a>                                          
                                                <a href="Letter.php?Letter=O">O</a> 
                                                <a href="Letter.php?Letter=P">P</a>
                                                <a href="Letter.php?Letter=Q">Q</a>
                                                <a href="Letter.php?Letter=R">R</a>
                                            </div>  
                                            <div class="link"> 
                                                <a href="Letter.php?Letter=S">S</a>
                                                <a href="Letter.php?Letter=T">T</a>     
                                                <a href="Letter.php?Letter=U">U</a>
                                                <a href="Letter.php?Letter=V">V</a>
                                                <a href="Letter.php?Letter=W">W</a>
                                                <a href="Letter.php?Letter=X">X</a>
                                                <a href="Letter.php?Letter=Y">Y</a>
                                                <a href="Letter.php?Letter=Z">Z</a>
                                            </div> 
                                        </div>    
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="head">
                            <div class="text">
                                <ion-icon name="link"></ion-icon>
                                <h3>Calendar</h3>
                                
                            </div>                            
                            <div class="box">
                                <div class="calendar">
                                    <div class="header">
                                        <button onclick="prevMonth()">❮</button>
                                        <h2 id="monthYear"></h2>
                                        <button onclick="nextMonth()">❯</button>
                                    </div>
                                    <div class="days">
                                        <div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div>
                                    </div>
                                    <div class="dates" id="dates"></div>
                                </div>
                                <script src="JS/calender.js"></script>

                            </div>
                        </div>
                        
                </div>    
            </div>
            <div id="right">

                <div id="info">
                    <div class="mainbox">
                    <h2>Your Stats</h2>
                    <div class="profile">
                        <div class="photos">
                            <img src="img/iSquishy.jpg" alt="">
                        </div>
                        <span>
                            <h3>Horm Thida</h3>
                            <p>MIS(Management Information System)</p>
                        </span>
                    </div>
                    <div class="info">
                        <ul class="uinfo">
                            <li>
                                <ion-icon name="male-female-outline"></ion-icon>    
                                <p>Female</p>
                            </li>
                            <li>
                                <h3>Group: </h3>
                                <p>SU44</p>
                            </li>
                            <li>
                                <h3>Promotion: </h3>
                                <p>21</p>
                            </li>
                            <li>
                                <h3>Skill:</h3>
                                <p>MIS</p>
                            </li>
                        </ul>
                    </div>
                    </div>

                    <div class="setting">
                        <div class="option">
                            <label for="bg">Back Ground : </label>                         
                            <select id="bg" name="bg" onchange="chang_bg()">
                                <option value="none">None</option>
                                <option value="bright">Bright</option>
                                <option value="dark">Dark</option>
                            </select>
                        </div>
                        <div class="option">
                            <label for="border">Profile Border : </label>
                            <select id="border" name="border">
                                <option value="none">None</option>
                                <option value="solid">Solid</option>
                                <option value="dashed">Dash</option>
                            </select>
                        </div>
                        <div class="option">
                            <label for="border" style="margin-right: 3px;">Profile Color : </label>
                            <select id="color" name="color">
                                <option value="Black">Black</option>
                                <option value="gold">Yellow</option>
                                <option value="rgb(5, 119, 195)">Blue</option>
                                <option value="rgb(255, 161, 161)">Pink</option>
                                <option value="white">white</option>
                            </select>
                        </div>
                        <div class="option">
                            <label for="font" style="margin-right: 20px;" >Font Style : </label>
                            <select id="font" name="font">
                                <option value="sans-serif">Sans Serif </option>
                                <option value="Cambria">Cambria</option>
                                <option value="Times New Roman">Times New Roman</option>
                                <option value="Arial">Arial</option>
                            </select>
                        </div>

                    </div>
 
                </div>
                
                <div class="Mainlist">
                    <div class="list">
                        <div class="title">
                            <h2>Student List (Total 130 result found - showing records from 1 to 10)</h2>  
                        </div>

                        <div class="select">
                            <select class="border rounded px-2 py-1">
                                <option>Filter</option>
                            </select>
                            <select class="border rounded px-2 py-1">
                                <option>Sort By</option>
                            </select>
                        </div>

                        <table>
                            <thead>
                                <tr class="bg-blue-100" style="padding: 0 50px;">
                                    <th class="p-2 border-b">No</th>
                                    <th class="p-2 border-b">photos</th>
                                    <th class="p-2 border-b">Name</th>
                                    <th class="p-2 border-b">gender</th>
                                    <th class="p-2 border-b">dob</th>
                                    <th class="p-2 border-b">email</th>
                                    <th class="p-2 border-b">phone</th>
                                    <th class="p-2 border-b">address</th>
                                    <th class="p-2 border-b">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            @foreach ($students as $student)
                                <tr class="bg-blue-100">
                                    <td>{{$student->id}}</td>                                 
                                    <td><div class="photo"><div class="profile"><img src="{{$student->photo}}" alt=""></div></div></td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->dob}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{ $student->schoolClass->class_name ?? 'Unassigned' }}</td>
                                    <td class="p-2 border-b"><button class="text-blue-500 hover:text-blue-700">View</button></td>
                                </tr>
                            @endforeach    
                            </tbody>
                        </table>
                        <div class="flex justify-between items-center mt-4">
                            <div class="text-gray-600">1 2 3 4 ... 13 »</div>
                            <select class="border rounded px-2 py-1">
                                <option>10 per page</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
@endsection