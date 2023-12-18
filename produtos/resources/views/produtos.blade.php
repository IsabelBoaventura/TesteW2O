@extends('layouts.main')
	
@section('title', 'W2O - Produtos') 
	
@section('content')

    

    <h1>Tela dos produtos </h1>


    @foreach($produtos  as $produto)
        <p>  {{ $produto->nome }}  --   {{ $produto->descricao }} --  {{ $produto->preco  }}   --  {{ $produto->data_vencimento  }}  --  {{ $produto->sku }} </p>
       
           
    @endforeach
@endsection
	
