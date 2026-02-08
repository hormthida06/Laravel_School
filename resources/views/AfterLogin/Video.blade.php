@extends('layouts.UserAfter')

@section('pageTitle')
    About Us
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/video.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection

@section('container')
<div id="body">
        <div class="header">
        <h4>Education Video Resource For Student</h4>
        <input type="text" class="search-bar" placeholder="Search for a video...">
    </div>

     <div class="category">
        <h2>Chapter 1</h2>
        <div class="video-grid">
            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/_b8Io3wneFg" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
            <p>Chapter 1 - Introduction to C#</p>
            </div>

            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/V9RwEOh9yEw"
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Chapter 2 - Variables in C#</p>
            </div>

            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/kkL9i6v44EU"
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Chapter 2 - Type Conversion in C#</p>
            </div>

            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/hXqBm0AQws0" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Chapter 2 - Operators Part 1: Constants and Arithmetic Operator</p>
            </div>
        </div>
    </div>

    <div class="category">
        <h2>Chapter 2</h2>
        <div class="video-grid">
            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/_b8Io3wneFg" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Chapter 1 - Introduction to C#</p>
            </div>

            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/V9RwEOh9yEw"
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Chapter 2 - Variables in C#</p>
            </div>

            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/kkL9i6v44EU"
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Chapter 2 - Type Conversion in C#</p>
            </div>

            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/hXqBm0AQws0" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Chapter 2 - Operators Part 1: Constants and Arithmetic Operator</p>
            </div>
        </div>
    </div>

    <div class="category">
        <h2>Chapter 3</h2>
        <div class="video-grid">
            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/4aFqzaqBiww" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Chapter 3 - Nested for loop, while and do while Loop</p>
            </div>
            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/_b8Io3wneFg" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Video4: parallel SLOPE</p>
                <p>wanda1908</p>
            </div>
            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/_b8Io3wneFg" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Video3: TRICK: parallel vs perp</p>
                <p>wanda1908</p>
            </div>
            <div class="video-card">
                <div class="play-button">
                    <iframe width="560" height="315" 
                            src="https://www.youtube.com/embed/_b8Io3wneFg" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
                <p>Video2: perpendicular SLOPE</p>
                <p>wanda1908</p>
            </div>
        </div>
    </div>
</div>     
@endsection