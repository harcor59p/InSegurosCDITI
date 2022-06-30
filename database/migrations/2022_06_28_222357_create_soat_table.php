<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoatTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * 
     * 
     *
     *   @return void
     */
    public function up()
    {
        Schema::create('soat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id')->unsigned();
            $table->date('fecha_cot_soat');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->string('placa',6);
            $table->double('Modelo');
            $table->string('serie',1);
            $table->double('cilindraje');
            $table->string('marca',20);
            $table->string('color',20);
            $table->enum('servicio',['Particular' , 'Publico'])->default('Particular');
            $table->double('vr_soat');
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
        Schema::dropIfExists('soat');
    }
}
