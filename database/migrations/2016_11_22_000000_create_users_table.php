<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();          
            $table->integer('language_id')->nullable()->unsigned()->default(1);
            $table->integer('ubicacion_id')->nullable()->unsigned()->default(1);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
