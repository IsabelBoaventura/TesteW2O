@extends('layouts.main')
@section('title', $movimento->id ) 
@section('content')

    <h1>Página que irá mostrar Detalhes da Movimentação com o ID:  {{$movimento->id }}</h1>
    <p>Produto desta movimentação: {{$movimento->produto_id}}</p>
    <p>Data em que ocorreu o Movimento: {{$movimento->data_movimento}} </p>
    <p>Tipo de movimento: {{ $movimento->tipo_movimento}}</p>
    <p>Quantidade movimentada: {{ $movimento->quantidade }}</p>


  
@endsection