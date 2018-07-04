<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
  public function actividades(){
    return $this->hasMany(Actividad::class);
  }
}
