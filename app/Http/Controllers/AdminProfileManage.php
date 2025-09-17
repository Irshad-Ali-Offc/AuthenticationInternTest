<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\User;


use Illuminate\Http\Request;

class AdminProfileManage extends Controller
{
    function admin(){
        return view('admin');
     }


     function profile(){
        return view('profile');

    }

    function update(Request $req){

        $req->validate([
             'name'=>'required|string|regex:/^[A-Za-z\s]+$/',
        'email' => 'required|email|unique:users,email,' . Auth::id(),
        'password'=>'nullable|confirmed',
        'image'=>'nullable|image',
        ]);

        $user = User::find(Auth::id());
        $imagepath=NULL;
        if($req->hasFile('image')){
            $imagepath=$req->file('image')->store('photos','public');
            $user->image = $imagepath;

        }

        $user->name = $req->input('name');
        $user->email = $req->input('email');
        if ($req->filled('password')) {
            $user->password = Hash::make($req->input('password'));
        }

  if ($user->save()) {
        return back()->with('success', 'Profile updated!');
    } else {
        return back()->with('error', 'Failed to update profile. Please try again.');
    }




    }

        // Deleting An Account


    function delete(){
        $user = User::find(Auth::id());
        if($user){
            if ($user->image && Storage::disk('public')->exists($user->image)) {
                Storage::disk('public')->delete($user->image);
            }
            $user->delete();

            // Logout after deletion
            Auth::logout();

            return redirect('/login')->with('success', 'Your account has been deleted successfully.');
        }




    return back()->with('error', 'Unable to delete account.');
        }




        }



