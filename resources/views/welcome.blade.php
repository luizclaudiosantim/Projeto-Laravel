@extends('layouts.main')

@section('title','LS Produções')


@section('content')


        <h1>ola mundo</h1>
        @if(10>5)
            <p>Condição verdadeira</p>
        @endif
        @if( $origem =="P")
            {{-- COMENTARIO DO BLADE --}}
            <p>{{$origem}}</p>
        @endif       

        @endsection