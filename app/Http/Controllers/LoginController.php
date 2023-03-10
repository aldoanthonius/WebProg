<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function signin(){
        return view('signin');
    }
    public function login(Request $request){
        $credentials= $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required|min:5|max:20'
        ]);

        if($request->remember){
            Cookie::queue('emailCookie', $request->email, 5);
        }

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/member');
        }

        return back()->with('loginFailed', 'Login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
