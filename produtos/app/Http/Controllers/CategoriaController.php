<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    //metodo principal
    public function index(){

        //buscando por todos os eventos do banco
        $categorias = Categoria::all();

        return view('categorias', ['categorias' => $categorias]);
    }

    //metodo de criacao
    public function create(){
        return view('categorias.create');
    }
}
