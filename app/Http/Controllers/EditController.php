<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    //
    public function editProfile(){
        $profile = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('editProfile', compact('profile'));
    }
    public function editedProfile(Request $request){
        $request->validate([
            'username'=>'required|max:20|min:5|unique:users',
            'email'=>'required|email:dns|unique:users',
            'phone'=>'required|min:10|max:13',
            'address'=>'required|min:5'
        ]);

        DB::table('users')->where('id', Auth::user()->id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address
        ]);

        return redirect('/profileM')->with('success', 'Update Success');

    }
}



