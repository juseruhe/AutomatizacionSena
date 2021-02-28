<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AprendizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aprendices')->insert([
            'documento' => '102', 'nombres' => 'Kun', 'apellidos' => 'Aguero',
            'correo'=> 'kunoficial@gmail.com',
    'fecha_nacimiento' => '1988-12-10','genero' => 'Masculino','tipo_documento' => 'Cédula Ciudadanía',
    'estado_id' => '1'
        ]);
    }
}
