<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profileM(){
        return view('member_profile');
    }
    public function profileA(){
        return view('admin_profile');
    }
}
