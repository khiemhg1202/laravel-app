<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        //variable
        $title = 'Châu Hoàng Khiêm';
        $age = 23;
        $myphone = [
            'name'=> 'Samsung A52s 5G',
            'price'=>'$400',
            'isFavorited' => true,
        ];

        //return view('products.index', compact('title'));

        //send multiple 
        //return view('products.index', compact('title','age'));

        // 'with' method can only send 1 parameter
        //return view('products.index') -> with('age',$age);

        // send an associative array
        //return view('products.index', compact('myphone'));

        //send directly
        return view('products.index',[
            'myphone' => $myphone
        ]);
    }
    public function detail ($id, $productName) {
        //Cách 1
        return "Product's id = ".$id.
                " Product name = ".$productName;
        //Cách 2
        // $phone = [
        //     'iphone10' => 'iphone 10',
        //     'iphone11' => 'iphone 11',
        //     'iphone12' => 'iphone 12',
        //     'iphone13' => 'iphone 13',
        //     'iphone14' => 'iphone 14',
        // ];
        // return view('products.index',[
        //     'product' => [
        //         'name' => 'Samsung A52s 5G',
        //         'price' => '$450',
        //     ]
        // ]);
        // return view('products.index', [
        //     'products' => $phone[$productName] ?? 'unknown product'
        // ]);

        
    }

    
}
