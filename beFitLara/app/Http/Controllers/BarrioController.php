<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barrio;

class BarrioController extends Controller
{

  public function listar(){
    $barrios = Barrio::all();
    return view('barrio.listar')
      ->with('barrios', $barrios);
  }

}
