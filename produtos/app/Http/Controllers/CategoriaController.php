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

        return view('categorias', ['categorias' => $categorias,  'search'=> ''] );
    }

    //metodo de criacao
    public function create(){
        return view('categorias.create');
    }

    //metodo para envio para o banco 
    public function store(Request $request){
        $categoria = new Categoria ;

        $categoria->nome = strtoupper($request->nome);
        $categoria->descricao = ucwords( $request->descricao);
       

        $categoria->save();

       //redirecionar o usuario para a pagina principal
       return redirect('/')->with('msg', 'Categoria criada com sucesso!');



    }
}
