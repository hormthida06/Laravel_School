<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/after_login.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    @yield('headerBlock')
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
                        <li><a href="/stCourse">Student Course</a></li>
                        <li class="sublink"><a href="#">Academic</a>
                            <ul>
                                <li><a href="#">Foundation Year</a></li>
                                <li><a href="#">Associate Degree</a></li>
                                <li><a href="#">Bachelor Degree</a></li>
                                <li><a href="#">Master Degree</a></li>
                                <li><a href="#">Bridging Course</a></li>
                            </ul>
                        </li>
                        <li><a href="/internship">Internship</a></li>
                        <li><a href="/contact_us">Contact Us</a></li>
                        <li><a href="/about_us">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="headerRight">
            <div class="logo">
                <a href="/SThome"><img src="{{URL::asset('img/LOGO.png')}}" alt=""></a>
            </div>
        </div>
    
        <div class="header">
            <ul>
                <li><a href="/AfstCourse">Student Course</a></li>
                <li class="sublink"><a href="#">Academic</a>
                    <ul>
                        <li><a href="#">Foundation Year</a></li>
                        <li><a href="#">Associate Degree</a></li>
                        <li><a href="#">Bachelor Degree</a></li>
                        <li><a href="#">Master Degree</a></li>
                        <li><a href="#">Bridging Course</a></li>
                    </ul>
                </li>
                <li><a href="/Afstinternship">Internship</a></li>
                <li><a href="/Afstcontact_us">Contact Us</a></li>
                <li><a href="/Afstabout_us">About Us</a></li>
            </ul>
        </div>

        <div class="headerLeft">
            <ul>
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </li>

                <li class="call"><ion-icon name="call" style="color: rgb(211, 13, 10);"></ion-icon>
                    <ul>
                        <li><a href="#">010 880612</a></li>
                        <li><a href="#">023 880612</a></li>
                        <li><a href="#">097 6970127</a></li>
                        <li><a href="#">088 7080912</a></li>
                    </ul>
                </li>

                <li><div class="profile"><img src="img/iSquishy.jpg" alt=""></div></li>
            </ul>
        </div>

    </nav>

    <div id="container">
        @yield('container')
        
    </div>
    <div id="footer">
            <div class="Col">
                <div class="logo">
                    <a href="/SThome"><img src="{{URL::asset('img/LOGO.png')}}" alt=""></a>
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
                        <li><a href="https://www.facebook.com/thida.horm.12?mibextid=ZbWKwL"><img src="{{URL::asset('img/facebook.png')}}" alt="" ></a></li>
                        <li><a href="https://m.me/thida.horm.12?hash=AbbZt2nV63W7642W&source=qr_link_share"><img src="{{URL::asset('img/messenger.png')}}" alt="" ></a></li>
                        <li><a href="https://www.instagram.com/thida.horm.12?igsh=MXBvd2Y0ejhpb21hMA=="><img src="{{URL::asset('img/instagram.png')}}" alt="" ></a></li>
                        <li><a href="https://t.me/Horm_Thida"><img src="{{URL::asset('img/telegram.png')}}" alt=""></a></li>
                    </ul>
                </div>
                <h3>SchoolManagmentSystem(SMS) Apps</h3>
            </div>
    </div>
</body>
</html>