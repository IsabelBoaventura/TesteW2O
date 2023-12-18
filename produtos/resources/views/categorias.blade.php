


@extends('layouts.main')
	
@section('title', 'W2O - Categorias') 
	
@section('content')
    <h1> Tela das categorias </h1>

    <div id="search-container" class="col-md-12">
        <h1>Busque uma Categoria </h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>

    <div id="categorias-container" class="col-md-12">
        @if( $search)
            <h2>Buscando por: {{ $search }}</h2> 
        @else
            <h2>Próximas Categorias  </h2>
            <p class="subtitle">Veja outras categorias </p>
        @endif
      
        <div id="cards-container" class="row row-clos-1 row-cols-md-3 mb-3 text-center">
            @foreach( $categorias as $categoria)


                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">

                                     
                    <div class="card-body">
                        
                        <h5 class="card-title">{{ $categoria->nome }}</h5>
                        <p class="card-participants"> {{  $categoria->descricao }} </p>
                        <a href="/categorias/{{ $categoria->id}}" class="btn btn-primary">Saber mais</a>

                      
                    </div>

                    </div>
                </div>


                
            @endforeach
            @if( count( $categorias)==0  && $search )
                <p>Não foi possível encontrar nenhuma categoria com  {{ $search }}! <a href="/">Ver todos </a> </p>
            @elseif(  count( $categorias )==0 )
                <p>Não há categorias cadastradas. </p>
            @endif
        </div>
    </div> 





    @foreach($categorias as $categoria)
        <p>  {{ $categoria->nome }}  -  {{ $categoria->descricao }} </p>
       
           
    @endforeach
@endsection