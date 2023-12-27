<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    //metodo principal
    public function index(){

       
        $search = request('search');
        if( $search ){
            $produtos = Produto::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        }else{
            //buscando por todos os eventos do banco
            $produtos = Produto::all();

        }

        return view('produtos', ['produtos' => $produtos, 'search' => $search]);
  

       
      
    }


    //metodo de criacao
    public function create(){

        $categorias = Categoria::all();
        return view('produtos.create', ['categorias' => $categorias]);
    }

    //Metodo para trazer as informações do Form
    public  function store ( Request $request){

        $produto = new Produto;
        //no singular, pois é a criação de um produto por vez
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        //$produto->categoria = $request->categoria;
        $produto->preco = $request->preco;
        $produto->data_vencimento  = $request->vencimento;
        $produto->sku = strtoupper( $request->sku);
        
        
        //Validação do upload, por enquanto apenas paraa imagem
        $validate = $request->validate(
            //regras 
            //imagem é obrigatória

            //5mb = 5120
            [ 'img' => 'required|image|mimes:jpeg,jpg,png|max:15'],
            //mensagem quando ela nao foi selecionada 
            [   'img.required' => 'A imagem é obrigatória ',
                'img.image' => 'Apenas imagens',
                'img.mimes' => 'Apenas alguns tipos de imagens são aceitas (jpeg, jpg, png)',
                'img.max' => 'A imagem não pode ultrapassar a 5 Mb'
            ]

            


        );

        //tratamento da imagem 
        if( $request->hasFile('img') && $request->file('img')->isValid() ){

            $requestImage = $request->img;
            
            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). '.'.$extension ;

            $requestImage->move(public_path('img/produtos'), $imageName);

            $produto->foto = $imageName;



            
          

        }
       


       $produto->save();

       //redirecionar o usuario para a pagina principal
       return redirect('/')->with('msg', 'Produto criado com sucesso!');


    }

    public function show( $id ){
        $produto = Produto::findOrFail($id);

       // $cat = Categoria::findOrFail($produto->categoria);
       //, 'categoria' => $cat

        return view('produtos.show', ['produto' => $produto]);

    }
}
