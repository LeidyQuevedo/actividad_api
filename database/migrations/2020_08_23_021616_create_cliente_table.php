<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('names',75);
            $table->string('lastnames',75);
            $table->string('email',100)->unique();
            $table->string('phone',25);
            $table->string('address',255);
            $table->bigInteger('titulo_academico_id')->unsigned();
            $table->foreign('titulo_academico_id')->references('id')->on('titulo_academico');
            $table->bigInteger('estados_id')->unsigned();
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->bigInteger('experiencia_laboral_id')->unsigned();
            $table->foreign('experiencia_laboral_id')->references('id')->on('experiencia_laboral');
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
        Schema::dropIfExists('cliente');
    }
}
