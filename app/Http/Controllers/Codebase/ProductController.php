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

    public function detail(Request $request, $id, $return){
        echo __METHOD__;
        echo "<br> id la:" . $id;
        echo "<br> return la:" . $return;

//        lay url
        $uri=$request->path();
        echo "<br> " . $uri;

        $url1 = $request->url();
        echo"<br>" . $url1;

        $url2 = $request->fullUrl();
        echo "<br>" . $url2;

        $abc = $request->query('abc', '');
        $t = $request->query('t', 1);

        echo "<br> abc la: " . $abc;
        echo "<br> t la: " . $t;

        $query = $request->query();

        echo "<pre>";
        print_r($query);
        echo "</pre>";
    }

    public function demoResponsel(){
        return response('chao cau', 200)
            ->header('Content-Type','text/plain');
    }

    public function demoResponsel2(){
        return response('<h1>day la the h1</h1>', 200)
            ->header('Content-Type', 'text/html;charset=utf-8');
    }

    public function demoResponsel3(){
        return redirect()->away('https://www.google.com');
    }

    public function demoResponsel4(){
        return redirect('/product/responsel');
    }

    public function demonResponse5(){
        return redirect()->route('responsel2');
    }

    public function demoResponse6(){
        return redirect()->route('response7', ['id' => 1]);
    }

    public function demoResponse7($id){
        echo "<br>" . __METHOD__;
        echo "<br> id " . $id;
    }

    public function demoResponse8(){
        return redirect()->action('Codebase\ProductController@create');
    }

    public function demoResponse9(){
        return redirect()->action('Codebase\ProductController@demoResponse7', ['id' =>1]);
    }
}
