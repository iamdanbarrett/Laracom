<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
Use App\User;
use Auth;

class UserController extends Controller
{

    public function profile(){
        $users = User::all();
    	return view('profile', array('user' => Auth::user()) );
    }


}
