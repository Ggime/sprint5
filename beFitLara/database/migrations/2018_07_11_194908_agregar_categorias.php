<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categorias', function (Blueprint $table){
        $table->increments('id');
        $table->string('categoria', '50')->nullable();
        $table->timestamps();
    });

    \DB::table('categorias')->insert([
      [ 'categoria' => 'Infantil' ],
      [ 'categoria' => 'Equipo' ],
      [ 'categoria' => 'Mayores' ],
      [ 'categoria' => 'Individual' ],
      [ 'categoria' => 'Jovenes' ],
      ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */


    public function down()
    {
        Schema::drop('categorias');
    }
}
