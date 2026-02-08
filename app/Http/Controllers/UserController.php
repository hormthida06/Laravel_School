<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm(){
        if( !Auth::check()){
             return view('info.index');
        }
        return redirect()->route('home');
       return view('beforLogin.contact');
       return view('beforLogin.aboutUs');
       return view('beforLogin.internship');
    }

    public function processLogin(Request $request){
        $remember = !empty($request->remember) ? true : false;
        if( Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'is_admin' => 1,
            'is_active' => 1,
            'is_delete' => 0
        ], $remember )){
            return redirect()->route('home');
        }
        elseif( Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'is_admin' => 0,
            'is_active' => 1,
            'is_delete' => 0
        ], $remember )){
            return redirect()->route('SThome');
        }
        else{
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function logout() {
        if( Auth::check()){
            Auth::logout();
        }
        return redirect()->route('showLoginForm');
    }
}
