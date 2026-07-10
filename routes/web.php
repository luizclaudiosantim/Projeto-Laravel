<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $origem="P";
    //teste para quando a tela vem de dois lugares diferentes e preciso saber de onde veio

    return view('welcome',['origem'=>$origem]);
});


Route::get('/teste', function () {
    return view('teste');
});