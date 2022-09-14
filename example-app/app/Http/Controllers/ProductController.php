<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function listProduct(){
        return view('product-list');
    }

    public function detailProduct($id){

        return view('product-details', ['name' => $id] );
    }



}
