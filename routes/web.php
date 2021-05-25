<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web.home.home');
});

Route::get('/detail', function () {
    return view('web.product-detail.productDetail');
});


/*---------------- ADMIN ------------------------- */
Route::get('/admin',[AdminController::class , 'index']);

Route::get('/sale',[SaleController::class , 'index']);

/*---------------- end admin ------------------------- */

/*----------------LOGIN & LOGOUT---------------------- */
Route::get('/login-page',[LoginController::class , 'index']);
Route::post('/loginAdmin',[LoginController::class , 'loginAdmin']);
Route::get('/logoutAdmin',[LoginController::class , 'logoutAdmin']);
/*----------------END LOGIN & LOGOUT---------------------- */
