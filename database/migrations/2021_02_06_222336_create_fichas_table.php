<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->String('ficha_caracterizacion');
            $table->bigInteger('programa_id')->unsigned();
            $table->bigInteger('jornada_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('programas');
            $table->foreign('jornada_id')->references('id')->on('jornadas');
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
        Schema::dropIfExists('fichas');
    }
}
