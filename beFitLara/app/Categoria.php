<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  public function actividades(){
    return $this->hasMany(Actividad::class);
  }
}
