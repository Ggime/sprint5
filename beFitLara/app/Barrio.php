<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
  public function actividades(){
    return $this->hasMany(Actividad::class);
  }
}
