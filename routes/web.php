<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $origem="P";
    

    return view('welcome',['origem'=>$origem]);
});


Route::get('/teste', function () {
    return view('teste');
});

Route::get('/produtos', function () {
    $busca = request('search');
    return view('produtos',['busca'=>$busca]);
});


Route::get('/product/{id?}', function ($id=null) {
    return view('product', ['id' => $id]);
});