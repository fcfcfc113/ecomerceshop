<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MenuController;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request){
       
       $user_name =  $request->session()->get('username');
       $password =  $request->session()->get('password');
       if(!isset($user_name) || !isset($password))
       {
        return view('layoutLogin');
       }
        return view('layoutAdmin');
    }
}
