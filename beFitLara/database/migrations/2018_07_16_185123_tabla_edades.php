<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaEdades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('edades', function (Blueprint $table){
        $table->increments('id');
        $table->string('edad', '50')->nullable();
        $table->timestamps();
      });

    \DB::table('edades')->insert([
        [ 'edad' => 'Menor de 13' ],
        [ 'edad' => 'Entre 13 y 18' ],
        [ 'edad' => 'Entre 18 y 35' ],
        [ 'edad' => 'Entre 35 y 50' ],
        [ 'edad' => 'Mayor a 50' ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('edades');
    }
}
