<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
      $cursos = array(
        'Logica de programação',
        'Desenvolvimento Web com PHP',
        'Estrura de Dados'
      );
      return view('cursos.index', compact('cursos'));
    }
}
