<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //metodo principal
    public function index(){
        return view('produtos');
    }


    //metodo de criacao
    public function create(){
        return view('produtos.create');
    }
}
