<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function profileM(){

        $profile = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('member_profile', compact('profile'));
    }
    public function profileA(){
        $profile = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('admin_profile', compact('profile'));
    }

}
