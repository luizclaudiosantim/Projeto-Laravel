<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){

        $origem="P";
    

        return view('welcome',['origem'=>$origem]);
    }

    public function create(){

        $busca = request('search');
        return view('produtos',['busca'=>$busca]);
    }

}
