<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    //metodo principal
    public function index(){

        //buscando por todos os eventos do banco
        $produtos = Produto::all();

        return view('produtos', ['produtos' => $produtos ]);
  

       
      
    }


    //metodo de criacao
    public function create(){
        return view('produtos.create');
    }
}
