<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**Importando os controlleres  */
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MovimentacaoController;

/**Rota principal */
Route::get('/', [MovimentacaoController::class, 'index']);



/**Rota das Categorias  */
Route::get('/categorias', [CategoriaController::class, 'index'] );
Route::get('/categorias/create',  [CategoriaController::class, 'create'] );


/**Rota dos Produtos */
Route::get('/produtos', [ProdutoController::class, 'index'] );
Route::get('/produtos/criacao',  [ProdutoController::class, 'create'] );



//rota principal da movimentacao
Route::get('/mov',  [MovimentacaoController::class, 'index']);
// rota para abrir a tela de  criacao de um novo elenento
Route::get('/mov/criar',  [MovimentacaoController::class, 'create'] );
//rota para criar um novo elemento
Route::post('mov', [MovimentacaoController::class, 'store']);
//rota para mostrar um unico elemento 
Route::get('mov/{id}', [MovimentacaoController::class, 'show']);