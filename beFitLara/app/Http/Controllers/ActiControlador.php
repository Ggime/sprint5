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

   public function guardar(Request $request){
     $reglas = [
       'nombre' => 'required',
       'id_categoria' => 'required',
       'id_barrio' => 'required',
       'direccion' => 'required',
       'dia' => 'required',
       'dictado' => 'required',
       'horario_desde' => 'required',
       'horario_hasta' => 'required',
       'formato' => 'required',
       'descripcion' => 'required',
       'precio' => 'required',
     ];

     $mensajes = [
       'nombre.required' => 'Ingresa tu nombre',
       'id_categoria.required' => 'Ingresa la categoria',
       'id_barrio.required' => 'Ingresa el barrio',
       'direccion.required' => 'Ingresa la dirección',
       'dia.required' => 'Ingresa el dia',
       'responsable.required' => 'Quien dicta la clase',
       'horario_desde.required' => 'Ingresa la hora de inicio',
       'horario_hasta.required' => 'Ingresa la hora de finalización',
       'formato.required' => 'Indoor o Outdoor',
       'descripcion.required' => 'Descripción de la actividad',
       'precio.required' => 'Ingresa el precio',

     ];

     $this->validate($request, $reglas, $mensajes);

     $actividades = Actividad::create(
      $request->except(['_token'])
    );
    echo 'Se guardo la actividad';
   }

   public function editar($id){
     $actividad = Actividad::find($id);

     return view('actividades.editar')
     ->with('actividad';$actividad)
     ->with('barrio';$barrio);
   }

   public function actualizar($id, Request $request){
//me traigo la actividad
     $actividad = Actividad::find($id);
//guardo los nuevos valores
     $actividad->fill($request->except(['_token']));
//guardar en la base de datos
     $actividad->save();

   }
}
