<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function afterRegis(Request $request){
        $dataValid = $request->validate([
            'username'=>'required|max:20|min:5|unique:users',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:20',
            'phone'=>'required|min:10|max:13',
            'address'=>'required|min:5'
        ]);

        $dataValid['password'] = bcrypt($dataValid['password']);
        User::create($dataValid);


        return redirect('/login')->with('success', 'Registration Success');
    }
}
