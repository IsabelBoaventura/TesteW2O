<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use App\Models\Movimentacao;

class MovimentacaoController extends Controller
{
    
    //metodo principal
    public function index(){

        //buscando por todos os eventos do banco
        //
        $movimentacao  = Movimentacao::all();

        // echo '<pre>';
        // print_r($movimentacao );
        // echo '</pre>';
        // exit;
        // 

        return view('welcome' , ['movimentacao'  =>  $movimentacao ] );



         
        
    }



     //metodo de criacao
     public function create(){
        return view('movimentacoes.create');
    }

    //metodo para envio para o banco 
    public function store(Request $request){
        $mov = new Movimentacao  ;

        $mov->nome = strtoupper($request->nome);
        $mov->descricao = ucwords( $request->descricao);
       

        $mov->save();

       //redirecionar o usuario para a pagina principal
       return redirect('/')->with('msg', 'Movimentação  criada com sucesso!');



    }


    //metodo para mostrar determinada categoria 
    public function show( $id ){
        $mov   = Movimentacao::findOrFail($id);

        return view('movimentacoes.show', ['movimento' => $mov  ]);

    }
}
