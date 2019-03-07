<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class ProductController extends Controller
{
    //

    public function showAll()
    {
        $products = Product::all();

        return view("layouts.product.showAll", [
            'products' => $products
        ]);

    }

    public function showByCat()
    {
        return  view("layouts.product.showByCat" ,['cat' => 'catalogue']);
    }

    public function showByCountry()
    {
        return  view("layouts.product.showByCountry" ,['name' => 'catalogue']);
    }

    public function getProduct($id)
    {
        $product = Product::where('id', $id)->get();

        return  view("layouts.product.getProduct" ,[
            'products' => $id
        ]);
    }

}
