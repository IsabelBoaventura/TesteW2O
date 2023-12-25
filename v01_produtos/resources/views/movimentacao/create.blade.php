@extends('layouts.main')
	
@section('title', 'Movimentar o Estoque ') 
	
@section('content')
    <h1>Tela para o Movimento de Produtos </h1>

    <div id="lista-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um novo Movimento do Produto </h1>
        <form action="/" method="POST" >
            @csrf
           


           

            {{-- aqui terá um select dos produtos cadastrados --}}
            <div class="form-group">
                <label for="produto">Produto: </label>
                <select  name="produto" id="produto" class="form-control" >
                    <option value='0'> Escolha um produto</option>

                    @foreach( $produtos  as $produto )
                        <option value="{{$produto->id}}"> {{$produto->nome}}</option>
                    @endforeach
                   
                   
                </select>
            </div>

            {{-- Que tipo de Movimento será --}}
            <div class="form-group">
                <label for="mov">Movimento: </label>
                <select  name="mov" id="mov" class="form-control" >
                    <option value='E'> Entrada</option>
                    <option value='S'> Saída</option>
                </select>
            </div>

            {{-- Data do Movimento  --}}
            <div class="form-group">
                <label for="data_mov">Data de Vencimento:</label>
                <input type="date" name="data_mov" id="data_mov" class="form-control" >
            </div>



          


            <div class="form-group">
                <label for="qtd">Quantidade Movimentada:</label>
                <input type="text" name="qtd" id="qtd" class="form-control" placeholder="Quantidade Movimentada">
            </div>
            
            <!-- <div class="form-group">
                <label for="estoque">Estoque Atual:</label>
                <input type="text" name="estoque" id="estoque" class="form-control">
            </div> -->

            <input type="submit" value="Criar Produto" class="btn btn-primary">
            




        </form>

    </div>

    {{-- Apresentação das validações --}}
    <div>
        @if( $errors->any())
            <ul>
                @foreach( $errors->all() as $error )
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection