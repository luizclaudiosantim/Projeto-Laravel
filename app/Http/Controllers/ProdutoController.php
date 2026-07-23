<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    //

    public function index(){

        $products= Produto::all();

        return view('welcome',['products'=>$products]);
    }

    public function create(){

        $busca = request('search');
        return view('product',['busca'=>$busca]);
    }


    public function store(Request $request){
        $product = new Produto;

        $product->name = $request->name;
        $product->qtd = $request->qtd;
        $product->description = $request->description;


        $product->save();

        return redirect('/')->with('msg','Produto criado com sucesso');

    }
}
