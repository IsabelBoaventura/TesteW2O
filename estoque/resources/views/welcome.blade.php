
	@extends('layouts.main')
	
	@section('title', 'Principal') 
	
	@section('content')

        
       


        {{-- 

            <h1>Tela principal</h1>
        <h2>Movimentação estará aqui depois </h2>
            
         @foreach($numeros as $cd_num )
            <p>{{ $cd_num }}</p>
            <p>{{ $loop->index }} </p>
        @endforeach
       


        @foreach($movimentacao  as $mov  )
            <p>{{ $loop->index }} </p>
            <p>Código do produto: {{ $mov->produto_id  }}</p>
            <p>Data: {{ $mov->data_movimento }}</p>
            <p>Tipo: {{ $mov->tipo_movimento  }}</p>
            <p>Quantidade: {{ $mov->quantidade }} </p>
            <p>Saldo: {{ $mov->estoque_atual  }}</p>
            
        @endforeach

        <h1> Tela das Movimentações </h1>
        --}}


      


      

        <div id="search-container" class="col-md-12">
            <h1>Busque um Movimento </h1>
            <form action="/categorias" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
            </form>
        </div>

        <div id="categorias-container" class="col-md-12">
            @if( $search)
                <h2>Buscando por: {{ $search }}</h2> 
            @endif
        
            <div id="cards-container" class="row row-clos-1 row-cols-md-3 mb-3 text-center">
            
                @if( count( $movimentacao )==0  && $search )
                    <p>Não foi possível encontrar nenhuma movimentação  com  {{ $search }}! <a href="/">Ver todos </a> </p>
                @elseif(  count($movimentacao  )==0 )
                    <p>Não há categorias cadastradas. </p>
                @endif
            </div>
        </div> 

        <table class="table  table-striped ">       
            <thead class=" table-primary ">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Produto </th>
                    <th scope="col">Data Movimento</th>
                    <th scope="col">Tipo Movimento</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $movimentacao as $mov )
                    <tr>
                        <th scope="row">{{ $mov->id }}</th>
                        <td> {{  $mov->produto_id }}</td>
                        <td>{{ $mov->data_movimento  }}</td>
                       
                       


                        @if (  $mov->tipo_movimento  == 'E' )
                            <td> Entrada </td>
                           
                        @elseif( $mov->tipo_movimento  == 'S' )
                          
                            <td> Saída </td>
                        @else
                        
                          
                            <td>{{ $mov->tipo_movimento   }}</td>
                        @endif
                       
                        <td>{{ $mov->quantidade  }}</td>
                        <td>
                            <a href="/mov/del/{{  $mov->id}}" > <ion-icon name="trash"></ion-icon></a>
                            <a href="/mov/{{  $mov->id}}" > <ion-icon name="create"></ion-icon></a> 
                        </td>
                    </tr>
                @endforeach          

            </tbody>
        </table>
        


        
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
	
	@endsection




   