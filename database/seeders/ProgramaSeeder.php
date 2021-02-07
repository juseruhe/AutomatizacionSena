<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert([
            'nombre' => 'Análisis y Desarrollo de Sistemas de Información',
            'siglas' => 'ADSI',
            'tipo_programa_id' => 2

        ]);


        DB::table('programas')->insert([
            'nombre' => 'Sistemas',
            'siglas' => 'TS',
            'tipo_programa_id' => 1
        ]);


        DB::table('programas')->insert([
            'nombre' => 'Software',
            'siglas' => 'TSFT',
            'tipo_programa_id' => 1
        ]);



    }
}
