<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioBuscadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_buscados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('strComentario')->nullable();
            $table->timestamps();
            $table->integer('user_id')->nullable()->unsigned();    
            $table->integer('ubicacion_id')->unsigned(); 
            $table->integer('servicio_id')->unsigned();
            $table->foreign('servicio_id')->references('id')->on('servicios');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_buscados');
    }
}
