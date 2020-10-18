<?php

namespace App\Http\Controllers\Codebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
        return view("codebase.product.create");
    }

    public function store(Request $request){
        echo "<br>" . __METHOD__;
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $input = $request->all();

        echo "<pre>";
        print_r($input);
        echo "</pre>";
        $productName = $input["product_name"];
        $productPrice = $input["product_price"];
        
        echo "<br>" . $productName;
        echo "<br>" . $productPrice;

        $productName = $request->input('product_name', '');
        $productPrice = $request->input('product_price', 0);
        echo "<br>" . $productName;
        echo "<br>" . $productPrice;
    }
}
