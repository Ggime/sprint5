<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarBarrios extends Migration
{

    public function up()
    {
      Schema::create('barrios', function (Blueprint $table){
        $table->increments('id');
        $table->string('barrio', '50')->nullable();
        $table->timestamps();
      });


    \DB::table('barrios')->insert([
        [ 'barrio' => 'Agronomia' ],
        [ 'barrio' => 'Almagro' ],
        [ 'barrio' => 'Balvanera' ],
        [ 'barrio' => 'Barracas' ],
        [ 'barrio' => 'Belgrano' ],
        [ 'barrio' => 'Boedo' ],
        [ 'barrio' => 'Caballito' ],
        [ 'barrio' => 'Coghlan' ],
        [ 'barrio' => 'Colegiales' ],
        [ 'barrio' => 'Constitución' ],
        [ 'barrio' => 'Chacarita' ],
        [ 'barrio' => 'Flores' ],
        [ 'barrio' => 'Floresta' ],
        [ 'barrio' => 'La Boca' ],
        [ 'barrio' => 'Paternal' ],
        [ 'barrio' => 'Liniers' ],
        [ 'barrio' => 'Mataderos' ],
        [ 'barrio' => 'Montserrat' ],
        [ 'barrio' => 'Monte Castro' ],
        [ 'barrio' => 'Pompeya' ],
        [ 'barrio' => 'Nunez' ],
        [ 'barrio' => 'Palermo' ],
        [ 'barrio' => 'Parque Avellaneda' ],
        [ 'barrio' => 'Parque Chacabuco' ],
        [ 'barrio' => 'Parque Chas' ],
        [ 'barrio' => 'Parque Patricios' ],
        [ 'barrio' => 'Puerto Madero' ],
        [ 'barrio' => 'Recoleta' ],
        [ 'barrio' => 'Retiro' ],
        [ 'barrio' => 'Saavedra' ],
        [ 'barrio' => 'San Cristobal' ],
        [ 'barrio' => 'San Nicolas' ],
        [ 'barrio' => 'San Telmo' ],
        [ 'barrio' => 'Velez Sarsfield' ],
        [ 'barrio' => 'Versalles' ],
        [ 'barrio' => 'Villa Crespo' ],
        [ 'barrio' => 'Villa del Parque' ],
        [ 'barrio' => 'Villa Devoto' ],
        [ 'barrio' => 'Villa Gral Mitre' ],
        [ 'barrio' => 'Villa Lugano' ],
        [ 'barrio' => 'Villa Luro' ],
        [ 'barrio' => 'Villa Soldati' ],
        [ 'barrio' => 'Villa Urquiza' ],
        [ 'barrio' => 'Villa Real' ],
        [ 'barrio' => 'Villa Riachuelo' ],
        [ 'barrio' => 'Villa Santa Rita' ],
        ]);
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('barrios');
    }
}
