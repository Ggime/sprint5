<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarActividad extends Migration
{

    public function up(){


      Schema::create('actividades', function (Blueprint $table){
        $table->increments('id');
        $table->string('actividad', '50')->nullable();
        $table->integer('barrio_id')->index();
        $table->integer('categoria_id')->index();
        $table->string('direccion', '80');
        $table->integer('user_id')->index();
        $table->string('dia')->nullable();
        $table->integer('hora')->nullable();
        $table->integer('duracion')->nullable();
        $table->string('descripcion', '250');
        $table->string('precio','50');
        $table->string('ruta_imagen','150')->nullable();
        $table->timestamps();
      });

}



    public function down()
    {

      Schema::drop('actividades');
    }
}
