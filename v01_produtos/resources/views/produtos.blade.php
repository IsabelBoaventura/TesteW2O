@extends('layouts.main')
	
@section('title', 'W2O - Produtos') 
	
@section('content')


    <div id="search-container" class="col-md-12">
        <h1>Busque um produto </h1>
        <form action="/produtos" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>

    <div id="listas-container" class="col-md-12">
        @if( $search)
            <h2>Buscando por: {{ $search }}</h2> 
        @endif
      
        <div id="cards-container" class="row row-clos-1 row-cols-md-3 mb-3 text-center">
            @foreach( $produtos as $produto )


                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">

                    @if( $produto->foto != '' )
                        <img src="/img/produtos/{{$produto->foto}}" alt="{{ $produto->nome }}">
                    @else
                        <img src="/img/sem_imagem.jpg" alt="{{ $produto->nome }}">
                    @endif                 
                    {{--  --}}                    
                    <div class="card-body">
                        
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-participants"> {{  $produto->descricao }} </p>
                        <p class="card-participants"> R$ {{  $produto->preco }} </p>

                        <p class="card-participants">
                        @if( $produto->data_vencimento  != '' )
                            {{ date('d/m/Y', strtotime( $produto->data_vencimento ) )}}
                        @else
                            01/01/1010
                        @endif 

                        </p>

                        <p class="card-participants"> {{  $produto->sku }} </p>
                        
                        <a href="/produtos/{{ $produto->id}}" class="btn btn-primary">Saber mais</a>

                      
                    </div>

                    </div>
                </div>


              
                
            @endforeach


            @if( count( $produtos )==0  && $search )
                <p>Não foi possível encontrar nenhum produto com nome semelhante à  {{ $search }}! <a href="/">Ver todos </a> </p>
            @elseif(  count( $produtos )==0 )
                <p>Não há produtos cadastrados. </p>
            @endif
        </div>
    </div> 

  





  
@endsection
	
