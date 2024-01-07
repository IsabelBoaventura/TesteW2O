<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use App\Models\Movimentacao;
use App\Models\Produto;

class MovimentacaoController extends Controller
{
    
    //metodo principal
    public function index(){

        //buscando por todos os eventos do banco
        //
        $movimentacao  = Movimentacao::all();

    
        return view('welcome' , ['movimentacao'  =>  $movimentacao, 'search' => ''] );  
        
    }



    //metodo de criacao
    public function create(){
        //como aqui precisa do produto , nao pode ser apenas a movimentacao que ira na view

        $produtos  = Produto::all();


        return view('movimentacoes.create'  , ['produtos' => $produtos]);
    }

    //metodo para envio para o banco 
    public function store(Request $request){
        $mov = new Movimentacao  ;

        $mov->produto_id  = $request->produto;
        $mov->data_movimento = date('Y-m-d');
        $mov->tipo_movimento = $request->mov;
        $mov->quantidade = $request->qtd;
       // $mov->data_vencimento =  $request->data_venc;
       $mov->estoque_atual = $request->qtd;



       

    
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
