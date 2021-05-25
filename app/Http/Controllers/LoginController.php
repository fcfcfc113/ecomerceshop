<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return view('layoutLogin');
    }

    public function loginAdmin(Request $request){
        $user_name = $request->username;
        $pass_word = md5($request->password);
        $result = DB::table('admin as ad')->select('rfa.name as name')
        ->join('role_and_admin as raa' , 'raa.admin_id','=','ad.id')
        ->join('roles_for_admin as rfa','rfa.id', '=', 'raa.role_id')
        ->where('ad.username',$user_name)->where('ad.password',$pass_word)->first();
        if($result)
        {
            $request->session()->put('username', $user_name);
            $request->session()->put('password', $pass_word);
            $request->session()->put('status',$result->name);
            return Redirect::to('/admin');
        }
        else{
            $request->session()->put('message', "Sai tai khoan hoc mat khau ");
            return Redirect::to('/login-page');
        }
    }

    public function logoutAdmin(Request $request){
        
        $request->session()->put('username', null);
        $request->session()->put('password', null);
        $request->session()->put('message', " ");
        return redirect('/login-page');

    } 
}
