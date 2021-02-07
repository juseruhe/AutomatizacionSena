<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidades')->insert([
        'nombre' => 'Presencial'
        ]);

        DB::table('modalidades')->insert([
            'nombre' => 'Semi-Presencial'
            ]);

            DB::table('modalidades')->insert([
                'nombre' => 'Virtual'
                ]);



    }
}
