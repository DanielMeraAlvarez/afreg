<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioSolicitadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_solicitados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('strOpinion')->nullable();           
            $table->integer('servicio_id')->unsigned();      
            $table->integer('ubicacion_id')->unsigned();      
            $table->integer('user_id')->unsigned();            
            $table->enum('serviciosSimilares',['si','no'])->default('no');
            $table->enum('recibirInformacion',['si','no'])->default('no');
            $table->foreign('servicio_id')->references('id')->on('servicios');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('servicio_solicitados');
    }
}
