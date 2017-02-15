<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    private  $cursos = array(
        'Logica de programação',
        'Desenvolvimento Web com PHP',
        'Estrura de Dados'
      );

    public function index(){

      $cursos =  $this->cursos;

      return view('cursos.index', compact('cursos'));
      //cursos(é pasta dentro da view) .index (é o metodo)
      //'cursos/index'
      //compact funão que passa o array para a view
    }

    public function exibe($posicaoLivros){  //$posicaoLivros foi criada no Route
      //dd($posicaoLivros);   //dd é equivalente ao var_dump
      $cursos = $this->cursos[$posicaoLivros];
      return view('cursos.exibe', compact('cursos'));

    }
}
