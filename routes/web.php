<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class,'index']);

Route::get('/produtos/cadastrar', [ProductController::class,'create']);



Route::get('/teste', function () {
    return view('teste');
});



Route::get('/product/{id?}', function ($id=null) {
    return view('product', ['id' => $id]);
});