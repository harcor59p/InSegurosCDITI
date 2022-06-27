<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('placa',6);
            $table->double('Modelo');
            $table->string('serie',1);
            $table->double('cilindraje');
            $table->string('marca',20);
            $table->string('color',20);
            $table->enum('servicio',['Particular' , 'Publico'])->default('Particular');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
