@extends('layouts.main')

@section('title','LS Produções')


@section('content')
@if($busca)
    <p>O usuario esta buscando por: {{$busca}}</p>    
@endif
<a href="/">Voltar Inicio</a>

@endsection