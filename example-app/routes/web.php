<?php

;

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//
//});

Route::get('/',[HomeController:: class,'home']);

Route::get('/product', [ProductController::class,'product']);

Route::get('/product/{id}',[ProductController::class,'detailProduct']);

Route::get('/cart', CartController::class);

Route::get('/name', [ProductController::class,'byName']);

Route::get('/price', [ProductController::class,'price']);

Route::get('/name/{id}', [ProductController::class,'name_price']);

