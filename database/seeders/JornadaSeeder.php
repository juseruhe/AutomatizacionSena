<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class JornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('jornadas')->insert([
        'nombre' =>  'Mañana', 'modalidad_id' => 1
        ]);

        DB::table('jornadas')->insert([
            'nombre' =>  'Tarde' , 'modalidad_id' => 1
            ]);

        DB::table('jornadas')->insert([
                'nombre' =>  'Nocturna', 'modalidad_id' => 1
                ]);

                DB::table('jornadas')->insert([
                    'nombre' =>  'Madrugada',  'modalidad_id' => 1
                    ]);

                    DB::table('jornadas')->insert([
                        'nombre' =>  'Fin de Semana',  'modalidad_id' => 1
                        ]);

        DB::table('jornadas')->insert([
                    'nombre' =>  'Mixto', 'modalidad_id' => 2
                    ]);

        DB::table('jornadas')->insert([
                        'nombre' =>  'Virtual', 'modalidad_id' => 3
                        ]);

        
    }
}
