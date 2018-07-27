<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosActividad extends Model
{
  protected $table = 'usuarios_actividades';

  protected $guarded = [];

  public $timestamps = false;

}
