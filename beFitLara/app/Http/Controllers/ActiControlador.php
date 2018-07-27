<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Barrio;
use App\Categoria;
use App\UsuariosActividad;
class ActiControlador extends Controller
{
    public function listar(){
      $misActividades = \Auth::user()->actiParticipo;
      $actividades = Actividad::where('user_id', '=', \Auth::user()->id)->paginate(5);
      return
      view('actividades.listar')->with('actividades', $actividades)
          ->with('misActividades', $misActividades);
    }

    public function veracti(){
      if(\Auth::guest()){
        $actividades = Actividad::paginate(5);
      }else{
        $actividades = Actividad::where('user_id', '<>', \Auth::user()->id)->paginate(5);
      }

      return
      view('actividades.veracti')->with('actividades', $actividades);
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
       'dia' => 'required',
       //'user_id' => 'required',
       'hora' => 'required',
       'duracion' =>'required',
       'descripcion' => 'required',
       'precio' => 'required',
       'poster' => 'image'
     ];

     $mensajes = [
       'actividad.required' => 'Ingresa la actividad',
       'categoria_id.required' => 'Ingresa la categoria',
       'barrio_id.required' => 'Ingresa el barrio',
       'direccion.required' => 'Ingresa la dirección',
       'dia.required' => 'Que dias se da la clase',
       'hora.required' => 'Ingresa la hora de inicio',
       'duracion.required' => 'Ingresa la duracion de la clase',
       //'user_id' => 'required',
       'precio.required' => 'Ingresa el precio',
       'descripcion.required' => 'Descripción de la actividad',
     ];

     $this->validate($request, $reglas, $mensajes);

     //$ruta_imagen='';
     //if($request->file('poster')){
    //   $ruta_imagen= $request->file('poster')->store('poster','public'));
     //}


     $actividades = Actividad::create(
       ['actividad' => $request->input('actividad'),
       'categoria_id' => $request->input('categoria_id'),
       'barrio_id' => $request->input('barrio_id'),
       'direccion' => $request->input('direccion'),
       'dia' => $request->input('dia'),
       'user_id' => \Auth::user()->id,
       'hora' => $request->input('hora'),
       'duracion' => $request->input('duracion'),
       'descripcion' => $request->input('descripcion'),
       'precio' => $request->input('precio')
       //'ruta_imagen' => $request->input('ruta_imagen')
     ]
   );


    return redirect('/actividades/listar')
    ->with('mensaje', 'Actividad creada exitosamente');

   }

   public function editar($id){
      $actividad = Actividad::find($id);
      $barrios = Barrio::orderBy('barrio','ASC')->get();
      $categorias = Categoria::orderBy('categoria','ASC')->get();

     return view('actividades.editar')
     ->with('actividad',$actividad)
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
       'dia' => 'required',
       'hora' => 'required',
       'duracion' =>'required',
       'descripcion' => 'required',
       'precio' => 'required'
       //'poster'
     ]);
//me traigo la actividad
     $actividad = Actividad::find($id);
//guardo los nuevos valores
     $actividad->fill($request->except(['_token']) );
//guardar en la base de datos
     $actividad->save();

     echo 'se actualizo la activdad';

     dd($actividad);

   }
   public function delete(){
    $actividad = Actividad::find($id);
    return view('actividades.listar')
    ->with('actividades', $actividades);
  }
  public function anotarme(Request $request){
    $usuacti = UsuariosActividad::create(
          ['usuario_id' => \Auth::user()->id,
          'actividad_id' => $request->input('anotarme')]);

  }

}
