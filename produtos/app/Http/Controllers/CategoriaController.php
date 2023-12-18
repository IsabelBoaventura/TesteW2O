<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //metodo principal
    public function index(){
        return view('categorias');
    }

    //metodo de criacao
    public function create(){
        return view('categorias.create');
    }
}
