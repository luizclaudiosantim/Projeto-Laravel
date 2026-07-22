<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index(){

        $products= Product::all();

        return view('welcome',['products'=>$products]);
    }

    public function create(){

        $busca = request('search');
        return view('produtos',['busca'=>$busca]);
    }

}
