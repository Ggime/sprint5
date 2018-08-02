<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';

    protected $guarded = [];

    public $timestamps = false;

    public function barrio(){
      return $this->belongsTo(Barrio::class);
    }

    public function categoria(){
      return $this->belongsTo(Categoria::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
