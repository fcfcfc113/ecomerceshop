<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{       

        public function GetContentMenu(){
            $result = DB::table('roles_for_admin')   
            ->get();
            return $result;
        }
        public function GetMenuTheoRole($id){
         $result = DB::table('admin as ad')
            ->leftjoin('role_and_admin as raa', 'raa.admin_id','=','ad.id')
            ->leftjoin('roles_for_admin as rfa','rfa.id','=','raa.role_id')
            ->leftjoin('permission_and_role as par','par.role_id','=','rfa.id')
            ->leftjoin('permission_for_role as pfr','pfr.id','=','par.permission_id')
            ->where('par.role_id',$id)
            ->get();
            return $result;
        }
        

}
