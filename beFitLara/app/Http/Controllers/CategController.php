<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategController extends Controller
{
  public function listar(){
    $categorias = Categoria::all();
    return view('categoria.listar')
      ->with('categorias', $categorias);
  }
}
