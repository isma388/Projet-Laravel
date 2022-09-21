<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{


//    public function listProduct(){
//        return view('product-list');
//    }
//
//    public function store(Request $request)
//    {
//        $products = [
//            'products' => [
//                'image' => $request->input('image'),
//                'price' => $request->input('price'),
//                'name'  =>$request->input('name')
//            ],
//        ];
//        return view('product-details', $products);
//    }


    public function index()
    {
        $products = DB::select('select * from products ');
        return view('product-list', ['products' => $products]);

    }

    public function detailProduct($id){

        $db = DB::select('SELECT * FROM products where id = ' . $id);

        return view('product-details',['db'=> $db[0]]);
    }


    public function byName()
    {
        $products = Product::orderBy('name')->get();

            return view('productName', ['products'=> $products]);
    }

    public function price()
    {

        $products = Product::orderBy('price','desc')->get();

        return view('price', ['products'=> $products]);
    }

    public function name_price($id)
    {
        $products = Product::find($id);
        return view('nameAndPrice', ['products'=> $products]);

    }

}





