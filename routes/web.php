<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;


Route::get('/', [ProdutoController::class,'index']);

Route::get('/produtos/cadastrar', [ProdutoController::class,'create']);

Route::post('/products',[ProdutoController::class,'store']);


Route::resource('/clientes', ClienteController::class);

Route::resource('produtos', ProdutoController::class);

Route::resource('pedidos', PedidoController::class);