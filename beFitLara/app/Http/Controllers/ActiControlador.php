<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Formato;
class ActiControlador extends Controller
{
    public function listar(){
      $actividades = Actividad::all();
      return
      view('actividades.listar')->with('actividades', $actividades);
    }

    public function agregar(){
      $formatos = Formato::orderBy('formato','ASC')->get();
      return view ('actividades.agregar');
    }

   public function guardar(Request $request){
     $reglas = [
       'actividad' => 'required',
       'id_categorias' => 'required',
       'id_barrios' => 'required',
       'direccion' => 'required',
       'dia' => 'required',
       'responsable' => 'required',
       'horario_desde' => 'required',
       'horario_hasta' => 'required',
       'id_formatos' => 'required',
       'descripcion' => 'required',
       'precio' => 'required',
     ];

     $mensajes = [
       'actividad.required' => 'Ingresa tu nombre',
       'id_categorias.required' => 'Ingresa la categoria',
       'id_barrios.required' => 'Ingresa el barrio',
       'direccion.required' => 'Ingresa la dirección',
       'dia.required' => 'Ingresa el dia',
       'responsable.required' => 'Quien dicta la clase',
       'horario_desde.required' => 'Ingresa la hora de inicio',
       'horario_hasta.required' => 'Ingresa la hora de finalización',
       'id_formatos.required' => 'Indoor o Outdoor',
       'descripcion.required' => 'Descripción de la actividad',
       'precio.required' => 'Ingresa el precio',

     ];

     $this->validate($request, $reglas, $mensajes);

     $actividades = Actividad::create(
      $request->except(['_token'])
    );
    echo 'Se guardo la actividad';
   }

  /*  public function editar($id){
      $actividad = Actividad::find($id);

     return view('actividades.editar')
     ->with('actividad',$actividad)
     ->with('barrio',$barrios);
   }*/

   public function actualizar($id, Request $request){
//me traigo la actividad
     $actividad = Actividad::find($id);
//guardo los nuevos valores
     $actividad->fill($request->except(['_token']));
//guardar en la base de datos
     $actividad->save();

   }
}
