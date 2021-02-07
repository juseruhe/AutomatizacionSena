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

        DB::table('fichas')->insert([
            'ficha_caracterizacion' => '1803183',
            'programa_id' => '1',
            'jornada_id' => 5,
            'estado_id' => 1
        ]);
    }
}
