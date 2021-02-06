<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FichaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fichas')->insert
        (['jornada'=>'mañana',
          'nombre'=>'Analisis y desarrollo de sistemas',
          'id_ficha_de_caracterizacion'=>'18014785-G1',
          'programa_de_formacion'=>'Tecnologo',
          'estado'=>'activado']);


    }
}
