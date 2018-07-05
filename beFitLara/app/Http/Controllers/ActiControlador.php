<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Barrio;
use App\Categoria;
class ActiControlador extends Controller
{
    public function listar(){
      $actividades = Actividad::all();
      return
      view('actividades.listar')->with('actividades', $actividades);
    }

    public function agregar(){
      $barrios = Barrio::orderBy('barrio','ASC')->get();
      $categorias = Categoria::orderBy('categoria','ASC')->get();
      return view ('actividades.agregar')
      ->with('barrios', $barrios)
      ->with('categorias', $categorias);
    }

   public function guardar(Request $request){
     $reglas = [
       'actividad' => 'required',
       'categoria_id' => 'required',
       'barrio_id' => 'required',
       'direccion' => 'required',
       //'dia' => 'required',
       'responsable' => 'required',
       'hora' => 'required',
       'duracion' =>'required',
       'descripcion' => 'required',
       'precio' => 'required',
     ];

     $mensajes = [
       'actividad.required' => 'Ingresa tu nombre',
       'categoria_id.required' => 'Ingresa la categoria',
       'barrio_id.required' => 'Ingresa el barrio',
       'direccion.required' => 'Ingresa la dirección',
       //'dia.required' => 'Ingresa el dia',
       'responsable.required' => 'Quien dicta la clase',
       'hora.required' => 'Ingresa la hora de inicio',
       'duracion.required' => 'Ingresa la hora de finalización',
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
