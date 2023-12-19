@extends('layouts.main')
	
@section('title', $produto->nome ) 
	
@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                    @if( $produto->foto != '' )
                        <img src="/img/produtos/{{  $produto->foto  }}" class="img-fluid" alt="{{ $produto->nome}}">
                    @else
                        <img src="/img/plateia2.jpg" class="img-fluid" alt="{{ $produto->nome}}">
                    @endif                 
                    {{--  --}}
                
            </div>  
            <div id="info-container" class="col-md-6">
                <h1>{{ $produto->nome }}</h1>
               
                <p >Descrição:   {{ $produto->descricao }} </p>
                <p >Preço: R$ {{ $produto->preco }} </p>
                <p >SKU: {{ $produto->sku }} </p>
                <p class="card-date">Vencimento em: 
                        @if( $produto->data_vencimento  != '' )
                            {{ date('d/m/Y', strtotime( $produto->data_vencimento ) )}}
                        
                        @endif 

                </p>
                <p class="card-participants">Criado em: {{ date('d/m/Y h:m:i', strtotime( $produto->created_at ) )}}  </p>
                <p class="card-participants">Criado por:  </p>
                <p class="card-participants">Última Alteração em: {{ date('d/m/Y h:m:i', strtotime(  $produto->created_at   ) )}} </p>
                <p class="card-participants">Alterado por:  </p>

                <!-- <p >{{ $produto->sku }} </p> -->
                <!-- @if(  $produto->categoria  !== null  && $produto->categoria >0 )
                    <p >{{ $categoria->nome  }} </p>

                   
                      
                @endif -->
            </div>

            
        </div>
        

    </div>



@endsection