<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
    public function viewEditPasswordM(){
        return view('memberEditPassword');
    }

    public function viewEditPasswordA(){
        return view('adminEditPassword');
    }

    public function editPasswordM(Request $request){
        $request->validate([
            'old_password'=> 'required|min:5|max:20',
            'new_password'=> 'required|min:5|max:20|different:old_password'
        ]);

        if(Hash::check($request->old_password, auth()->user()->password)){
            auth()->user()->update(['password'=> Hash::make($request->new_password)]);
            return redirect('profileM')->with('updatedPassword','Your password has been updated');
        }

        else{
            return redirect('editPasswordM')->with('failedUpdatePassword', 'Your current password does not exist');
        }
    }

    public function editPasswordA(Request $request){
        $request->validate([
            'old_password'=> 'required|min:5|max:20',
            'new_password'=> 'required|min:5|max:20|different:old_password'
        ]);

        if(Hash::check($request->old_password, auth()->user()->password)){
            auth()->user()->update(['password'=> Hash::make($request->new_password)]);
            return redirect('profileA')->with('updatedPassword','Your password has been updated');
        }

        else{
            return redirect('editPasswordA')->with('failedUpdatePassword', 'Your current password does not exist');
        }
    }
}



