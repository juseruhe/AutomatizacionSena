<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->id();
            $table->integer('documento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('correo');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('tipo_documento');
            $table->BigInteger('estado_id')->unsigned();
            $table->string('foto');
            $table->foreign('estado_id')->references('id')->on('estados');
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
        Schema::dropIfExists('instructores');
    }
}
