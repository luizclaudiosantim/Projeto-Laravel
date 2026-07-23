@extends('layouts.main')

@section('title','LS Produções')


@section('content')

<div id="product-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de produto</h1>
    <form action="/products" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Nome Produto:</label>
            <input type="text" class="form-control" id="name" name="name"
            placeholder="Nome do produto">
        </div>
        <div class="form-group">
            <label for="title">Quantidade:</label>
            <input type="text" class="form-control" id="qtd" name="qtd"
            placeholder="Quantidade do produto">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
           <textarea name="description" id="description" class="form-control" placeholder="Descrição do produto"></textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Produto">
    </form>
</div>

@endsection