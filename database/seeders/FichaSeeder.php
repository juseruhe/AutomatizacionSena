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
        (['jornada'=>'mañana','caracter'=>'18014785-G1','estado'=>'activado']);
    }
}
