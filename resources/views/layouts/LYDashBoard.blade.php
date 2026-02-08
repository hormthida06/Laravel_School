@extends('layouts.AfterLogin')

@section('container')

    <div id="content"> 
        <div id="main-left">
            <div id="subRight">
                <div id="profil">
                    <ion-icon name="person-circle-sharp"></ion-icon>
                    <h1>Account</h1>
                    <p>admin@gmail.com</p>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    
                </div>
                <ul>
                    <li><a href="/dashboard"><ion-icon name="home"></ion-icon><p>Home</p></a></li>
                    <li><a href="/dashboard"><ion-icon name="terminal"></ion-icon><p>Dashboard</p></a></li>
                    @yield('link') 
                    
                    <li><a href="#"><ion-icon name="people-sharp"></ion-icon><p>Users</p></a></li>
                    <li><a href="#"><ion-icon name="notifications"></ion-icon><p>Notifications</p></a></li>
                </ul>
            </div>
        </div>
        @yield('main-right') 

    </div>

@endsection