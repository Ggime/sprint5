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
      $misActividades = \Auth::user()->actiParticipo()->paginate(4);
      $actividades = Actividad::where('user_id', '=', \Auth::user()->id)->paginate(4);
      return
      view('actividades.listar')->with('actividades', $actividades)
          ->with('misActividades', $misActividades);
    }


    public function veracti(){
      $barrios = Barrio::orderBy('barrio','ASC')->get();
      $categorias = Categoria::orderBy('categoria','ASC')->get();

      if(\Auth::guest()){
        $actividades = Actividad::Paginate(7);

      }else{
        $actividades = Actividad::where('user_id', '<>', \Auth::user()->id)->Paginate(7);
      }
      return
      view('actividades.veracti')->with('actividades', $actividades);
      //->with('barrios', $barrios)
      // ->with('categorias', $categorias);
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

     $ruta_imagen='';
     if($request->file('poster')){
     $ruta_imagen= $request->file('poster')->store('poster','public');
     }


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
       'precio' => $request->input('precio'),
       'ruta_imagen' => 'ruta_imagen'
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
     $this->validate(
       $request, [
       'actividad' =>'required|unique:actividades,actividad,'.$id,
       'categoria_id' => 'required',
       'barrio_id' => 'required',
       'direccion' => 'required',
       'dia' => 'required',
       //'user_id' => \Auth::user()->id,
       'hora' => 'required',
       'duracion' =>'required',
       'descripcion' => 'required',
       'precio' => 'required',
       //'ruta_imagen' => 'ruta_imagen'
       //'poster' =>
     ],
    $mensajes);


//me traigo la actividad
     $actividad = Actividad::find($id);
//guardo los nuevos valores
     $actividad->fill($request->except(['_token']) );
//guardar en la base de datos
     $actividad->save();

     return redirect('/actividades/listar')
     ->with('mensaje', 'Actividad editada exitosamente');

   }
   public function delete($id){
    $actividad = Actividad::find($id);
    $actividad->delete();


    return redirect('/actividades/listar');
  }

  public function desuscribirse($id){
   $actividad = UsuariosActividad::where('actividad_id', '=', $id)->where('usuario_id','=', \Auth::user()->id);
   $actividad->delete();

   $misActividades = \Auth::user()->actiParticipo;
   $actividades = Actividad::where('user_id', '=', \Auth::user()->id)->paginate(5);
     return redirect('/actividades/listar');
 }

  public function anotarme(Request $request){
    $usuacti = UsuariosActividad::create(
          ['usuario_id' => \Auth::user()->id,
          'actividad_id' => $request->input('anotarme')]);
          $misActividades = \Auth::user()->actiParticipo;
          $actividades = Actividad::where('user_id', '=', \Auth::user()->id)->paginate(5);
          return redirect('/actividades/listar');
        }



}
