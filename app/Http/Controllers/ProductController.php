<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public $products = [
        ["id"=> 1, "title"=>"title 1", "price"=>200, "image"=>'HP16D0195NF.jpg'],
        ["id"=> 2, "title"=>"title 2", "price"=>250, "image"=>'HP14424U3EA.jpg'],
        ["id"=> 3, "title"=>"title 1", "price"=>300, "image"=>'HUA6901443442959.jpg']
        ];

    public function index(){
        return view('products.index', ['products' => $this->products]);
    }
    public function show($id){
    $product = null;
    foreach ($this->products as $p){
        if ($p['id'] == $id) {
            $product = $p;
            break;
        }
    }

    return view('products.show', ['product' => $product]);
}
}