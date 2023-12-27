


@extends('layouts.main')
	
@section('title', 'W2O - Categorias') 
	
@section('content')
    <h1> Tela das categorias </h1>

    <div id="search-container" class="col-md-12">
        <h1>Busque uma Categoria </h1>
        <form action="/categorias" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>

    <div id="categorias-container" class="col-md-12">
        @if( $search)
            <h2>Buscando por: {{ $search }}</h2> 
        @endif
      
        <div id="cards-container" class="row row-clos-1 row-cols-md-3 mb-3 text-center">
           
            @if( count( $categorias)==0  && $search )
                <p>Não foi possível encontrar nenhuma categoria com  {{ $search }}! <a href="/">Ver todos </a> </p>
            @elseif(  count( $categorias )==0 )
                <p>Não há categorias cadastradas. </p>
            @endif
        </div>
    </div> 

    <table class="table  table-striped ">       
        <thead class=" table-primary ">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $categorias as $categoria)
                <tr>
                    <th scope="row">{{ $categoria->id }}</th>
                    <td>{{ $categoria->nome }}</td>
                    <td> {{  $categoria->descricao }}</td>
                    <td> deletar - <a href="/categorias/{{ $categoria->id}}" class="btn btn-primary">Saber mais</a> </td>
                </tr>
            @endforeach          
    
        </tbody>
    </table>





    @foreach($categorias as $categoria)
        <p>  {{ $categoria->nome }}  -  {{ $categoria->descricao }} </p>      
    @endforeach
@endsection