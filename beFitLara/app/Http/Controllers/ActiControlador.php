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
      $dias = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];
      $barrios = Barrio::orderBy('barrio','ASC')->get();
      $categorias = Categoria::orderBy('categoria','ASC')->get();
      return view ('actividades.agregar')
      ->with('dias', $dias)
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

       'hora' => 'required',
       'duracion' =>'required',
       'descripcion' => 'required',
       'precio' => 'required',
     ];

     $mensajes = [
       'actividad.required' => 'Ingresa la actividad',
       'categoria_id.required' => 'Ingresa la categoria',
       'barrio_id.required' => 'Ingresa el barrio',
       'direccion.required' => 'Ingresa la dirección',
       //'dia.required' => 'Que dias se da la clase',
       'hora.required' => 'Ingresa la hora de inicio',
       'duracion.required' => 'Ingresa la duracion de la clase',

       'precio.required' => 'Ingresa el precio',
       'descripcion.required' => 'Descripción de la actividad',


     ];

     $this->validate($request, $reglas, $mensajes);

     $actividades = Actividad::create(
      $request->except(['_token'])
    );
    echo 'Se guardo la actividad';
   }

   public function editar($id){
      $actividad = Actividad::find($id);
      $barrios = Barrio::orderBy('barrio','ASC')->get();
      $categorias = Categoria::orderBy('categoria','ASC')->get();

     return view('actividades.editar')
     ->with('actividades',$actividad)
     ->with('barrios', $barrios)
     ->with('categorias', $categorias);

   }

   public function actualizar($id, Request $request){
     $this->validate($request, [
       'actividad' =>'required|unique:actividades,actividad,'.$id,
       'actividad' => 'required',
       'categoria_id' => 'required',
       'barrio_id' => 'required',
       'direccion' => 'required',
       //'dia' => 'required',
       'hora' => 'required',
       'duracion' =>'required',
       'descripcion' => 'required',
       'precio' => 'required'
     ]);
//me traigo la actividad
     $actividad = Actividad::find($id);
//guardo los nuevos valores
     $actividad->fill($request->except(['_token']));
//guardar en la base de datos
     $actividad->save();
     echo 'se actualizo la pelicula';
     dd($actividad);

   }

}
