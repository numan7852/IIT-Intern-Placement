<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    //

    public function change_password(){
        return view('change_Password');
    }
    
    public function profile(){
        $user = Auth::user();
        return view('profile',compact('user'));
    }
}
