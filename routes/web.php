<?php

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
    return view('welcome');
});

//adicionando rota para a pagina 'ola.blade.php'
Route::get('/ola', function(){   //get envia dados para servidor
  return view('ola');
});


//adicionando rota para primeiro controller
Route::get('/cursos', 'CursosController@index');

Route::get('cursos/{posicaoLivros}', 'CursosController@exibe');

//{posicaoLivros} variavel criada
