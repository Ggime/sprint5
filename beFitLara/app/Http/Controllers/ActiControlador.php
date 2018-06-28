<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;

class ActiControlador extends Controller
{
    public function listar(){
      $actividades = Actividad::all();
      return
      view('actividades.listar')->with('actividades', $actividades);
    }

    public function agregar(){
      return view ('actividades.agregar');  
    }
}
