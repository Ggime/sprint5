<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuariosActividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usuarios_actividades', function (Blueprint $table){
        $table->increments('id');
        $table->integer('usuario_id')->nullable();
        $table->integer('actividad_id')->index();
        $table->timestamps();

          });
    }


    public function down()
    {
      Schema::drop('usuarios_actividades');
    }
}
