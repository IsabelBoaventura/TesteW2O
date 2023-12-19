@extends('layouts.main')
	
@section('title', $categoria->nome) 
	
@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            
            <div id="info-container" class="col-md-6">
                <h1>{{ $categoria->nome }}</h1>
            </div>

            {{-- Descrição do evento--}}
            <div class="col-md-12" id="description-container">
                <h3>Sobre a Categoria</h3>
                <p class="lista-description">
                {{ $categoria->descricao}}
                </p>
               
            </div>
        </div>
        

    </div>


	
@endsection