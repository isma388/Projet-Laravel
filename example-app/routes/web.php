<?php

;

use App\Http\Controllers\BackofficeController;
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

Route::get('/',[HomeController:: class,'home']);

Route::get('/product', [ProductController::class,'product']);

Route::get('/product/{id}',[ProductController::class,'detailProduct']);

Route::get('/cart', CartController::class);

Route::get('/name', [ProductController::class,'byName']);

Route::get('/price', [ProductController::class,'price']);

Route::get('/name/{id}', [ProductController::class,'name_price']);



//Route Backoffice

Route::get('/backoffice', [BackofficeController::class,'index']);
Route::get('/backoffice/products', [BackofficeController::class,'show']);

Route::get('/backoffice/products/addProduct', [BackofficeController::class,'creat']);
Route::post('/backoffice', [BackofficeController::class,'store']);
////
Route::delete('/backoffice/{id}/delete', [BackofficeController::class,'destroy']);

Route::get('/backoffice/products/uptade/{id}', [BackofficeController::class,'edit']);
Route::put('/backoffice/{id}', [BackofficeController::class,'uptade']);


