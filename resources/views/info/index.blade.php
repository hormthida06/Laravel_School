@extends('layouts.BeforeLogin')

@section('pageTitle')
    Home Page Befor Login
@endsection

@section('headerBlock')
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
        <h2>Why SMS School Management Software?</h2>
        <div id="main">
            <div class="left">
                
                <p>At SMS, we conduct up-to-date degree programs to equip our students with 
                    skills that companies nowadays are looking for. Other then designing the programs with 
                    important Management units like Public Relations, Marketing and Accounting, we also 
                    place emphasis on Business English. In summary, our programs will not only provide 
                    specialization in the respective majors, we also prepare our students for their career after graduation.</p><br>
                <p>
                    Our programs include theoretical lessons, hands-on practical lessons and we also organize
                    workshops and talks for our students to meet, learn and communicate with professionals in 
                    their field of expertise from recognized companies and organizations.</p><br>

            </div>
            <div class="right">
                <img src="img/Screenshot 2025-07-11 000640.png" alt="">
            </div>
        </div>    
    </div>

    <div class="layer5">
            <h1>Modules to Automate School Management</h1>
            <div class="subtitle">Single ERP Platform for All Your Education Need</div>
            <div class="modules">
                <div class="module">
                    <img src="{{URL::asset('img/icon/meeting.png')}}" alt="Parents Collaboration">
                    <h3>Parents Collaboration</h3>
                    <p>Parents can discuss their child's progress with the teacher and keep a track on their pupil's academic progress. Instant alert on upcoming events.</p>
                    <a href="#" onclick="alert('Learn more about Parents Collaboration!')">Learn More →</a>
                </div>
                <div class="module">
                    <img src="{{URL::asset('img/icon/timetable.png')}}" alt="Timetable & Attendance">
                    <h3>Timetable & Attendance</h3>
                    <p>Easily mark the attendance & create an error-free timetable. Do classroom-allocation, subject-allocation to teachers.</p>
                    <a href="#" onclick="alert('Learn more about Timetable & Attendance!')">Learn More →</a>
                </div>
                <div class="module">
                    <img src="{{URL::asset('img/icon/exam.png')}}" alt="Exam & Gradebook">
                    <h3>Exam & Gradebook</h3>
                    <p>Automate exam process. Effortlessly conduct online examinations. Create a digital report card and automate grade calculation.</p>
                    <a href="#" onclick="alert('Learn more about Exam & Gradebook!')">Learn More →</a>
                </div>
                <div class="module">
                    <img src="{{URL::asset('img/icon/receipt.png')}}" alt="Fees Management">
                    <h3>Fees Management</h3>
                    <p>Automatic fee collection, calculate tax on the types of fee transactions. Imply fine on late fees, add instant discounts, and monitor fee defaulters.</p>
                    <a href="#" onclick="alert('Learn more about Fees Management!')">Learn More →</a>
                </div>
                <div class="module">
                    <img src="{{URL::asset('img/icon/student-card.png')}}" alt="Student Admission">
                    <h3>Student Admission</h3>
                    <p>Track admission enquiries, manage admission details digitally, customize admission forms & verify documents digitally.</p>
                    <a href="#" onclick="alert('Learn more about Student Admission!')">Learn More →</a>
                </div>
            </div>
        </div>

        <div class="layer4">
            <h1>Perfect School Management System to Meet Your Institution Needs</h1>
            <div class="features">
                <div class="feature">
                    <div class="icons"><img src="{{URL::asset('img/icon/school2.png')}}" alt=""></div>
                    <h6><strong>Simple & Easy to use for Teachers</strong><br></h6>
                    <p>Designed to engage teachers and parents. No expertise is required to quickly accomplish a task.</p>
                </div>
                <div class="feature">
                    <div class="icons"><img src="{{URL::asset('img/icon/thunderbolt.png')}}" alt=""></div>
                    <h6><strong>Powerful features for your Institution</strong><br></h6>
                    <p>We provide everything you will ever need to run an education institution. No customization required.</p>
                </div>
                <div class="feature">
                    <div class="icons"><img src="{{URL::asset('img/icon/videocall (1).png')}}" alt=""></div>
                    <h6><strong>Online & On-site Customer Support</strong><br></h6>
                    <p>Along with online & on-site support, Fedena also offers on-demand & webinar-based training to their customers.</p>
                </div>
            </div>
        </div>

@endsection
