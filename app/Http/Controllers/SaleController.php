<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SaleController extends Controller
{
    public function index(){

        $result = DB::table('admin')->get();
        return view('admin.sale')->with('data',$result);

    }
}
