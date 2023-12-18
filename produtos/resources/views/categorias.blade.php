


@extends('layouts.main')
	
@section('title', 'W2O - Produtos') 
	
@section('content')
    <h1> Tela das categorias </h1>
    @foreach($categorias as $categoria)
        <p>  {{ $categoria->nome }}  -  {{ $categoria->descricao }} </p>
       
           
    @endforeach
@endsection