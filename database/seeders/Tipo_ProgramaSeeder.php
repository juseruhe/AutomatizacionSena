<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class Tipo_ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('tipos_programa')->insert([
            'nombre' => 'Técnico'
        ]);

        DB::table('tipos_programa')->insert([
            'nombre' => 'Tecnologo'
        ]);

    

    }
}
