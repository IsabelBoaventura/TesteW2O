@extends('layouts.main')
	
@section('title', 'Criar Produtos') 
	
@section('content')
    <h1>Tela de Criação de Novos Produtos </h1>

    <div id="categoria-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um Produto </h1>
        <form action="/produtos" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Adicionar a foto do produto  --}}
            <div class="form-group">
                <label for="foto">Imagem:</label>
                <input type="file" name="img" id="img" class="form-control-file" placeholder="Imagem do Produto">
            </div>


            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Produto">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição do Produto ">
            </div>

            {{-- aqui terá um select de categoria --}}
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select  name="categoria" id="categoria" class="form-control" >
                    <option value='0'> Sem categoria definida</option>

                    @foreach( $categorias as $categoria)
                    <option value="{{$categoria->id}}"> {{$categoria->nome}}</option>
                    @endforeach
                   
                   
                </select>
            </div>


            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" name="preco" id="preco" class="form-control" placeholder="Preço do Produto ">
            </div>
            {{-- aqui tenho de adicionar a mascara de número do celke--}}

            {{-- Data de vencimento --}}
            <div class="form-group">
                <label for="vencimento">Data de Vencimento:</label>
                <input type="date" name="vencimento" id="vencimento" class="form-control" >
            </div>


            {{--SKU ( Limitar a quantidade de caracteres --}}
            <div class="form-group">
                <label for="sku">SKU:</label>
                <input type="text" name="sku" id="sku" class="form-control" >
            </div>

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