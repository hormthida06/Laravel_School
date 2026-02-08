@extends('layouts.AfterLogin')

@section('pageTitle')
    Contact Page
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset('css/contact.css')}}">
@endsection

@section('container') 
    <div id="body">
        <div id="title">
            <h1>FOR MORE INFORMATION PLEASE CONTACT US</h1>
        </div>

        <div id="content">
            <div id="left">
                <div class="text">
                    <h6>Address:</h6>
                    <p>No. 86A, Street 110, Russian Federation Boulevard,
                    <br>  Sangkat Teuk Laak I, Khan Toul Kork, Phnom Penh, Cambodia</p>
                </div>
                <div class="text">
                    <h6>Tel / Fax :</h6>
                    <p>097 697 0127</p>
                </div>
                <div class="text">
                    <h6>E-mail :</h6>
                    <a>info@setecu.com</a>
                </div>
                <div class="text">
                    <h6>Telegram :</h6>
                    <a>https://t.me/setecu</a>
                </div>
                <div class="text">
                    <h6>QR Code :</h6>
                    <div class="QR"><img src="img/QR.png" alt=""></div>
                </div>
            </div>
            <div id="right">
                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125085.
                    58246146356!2d104.88053759999998!3d11.557273599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                    1!3m3!1m2!1s0x31095173761d4a53%3A0xcd09ff2f4d326e3f!2sSETEC%20Institute!5e0!3m2!1sen!2skh!
                    4v1752727407787!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
            </div>
        </div>
    </div>    
@endsection
