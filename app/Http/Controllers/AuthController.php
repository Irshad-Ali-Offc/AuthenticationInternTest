<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller


{
    function signup(){
        return view('signup');
    }
    function signupdata(Request $req){
     $req->validate([
        'name'=>'required|string|regex:/^[A-Za-z\s]+$/',
        'email'=>'required|:users,email',
        'password'=>'required|confirmed'

     ]);

     $user=User::create([
        'name'=>$req->name,
        'email'=>$req->email,
        'password'=>Hash::make($req->password),

     ]);

       if (!$user) {

            return redirect()->route('signup')->with('error', 'Something went wrong Please try again .');
        }

        return redirect()->route('login')->with('success', 'Signup successful! Please login.');


     }

     function login(){
        return view('login');
     }


     function logindata(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'

        ]);

        $credentials=$req->only('email','password');
        if(Auth::attempt($credentials)){
return redirect()->route('admin')->with('success', 'Signup successful! Please login.');

        }

                return redirect()->back()->withErrors(['email' => 'Invalid email or password'])->withInput();




     }
      function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');

     }



}
