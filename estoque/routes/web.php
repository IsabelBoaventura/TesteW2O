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

Route::get('/', function () {
    $num = [10,20,30,40,50];
    return view('welcome' , ['numeros' => $num ] );
});


Route::get('/mov', function () {

   
    return view('movimentacao');
});
