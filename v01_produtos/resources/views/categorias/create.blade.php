@extends('layouts.main')
	
@section('title', 'Criar Categorias') 
	
@section('content')
    <h1>Tela de Criação de Novas Categorias </h1>
	<div id="categoria-create-container" class="col-md-6 offset-md-3">
        <h1>Crie uma categoria</h1>
        <form action="/categorias" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome da Categoria">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição da Categoria">
            </div>

            <input type="submit" value="Criar Categoria " class="btn btn-primary">
        </form>

    </div>
@endsection