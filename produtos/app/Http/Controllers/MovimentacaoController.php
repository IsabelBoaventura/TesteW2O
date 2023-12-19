<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movimentacao;

class MovimentacaoController extends Controller
{
    
    //metodo principal
    public function index(){

        //buscando por todos os eventos do banco
        $movimentacao  = Movimentacao::all();

        // echo '<pre>';
        // print_r($movimentacao );
        // echo '</pre>';
        // exit;

        return view('welcome', ['movimentacao'  =>  $movimentacao ] );



         
        
    }
}
