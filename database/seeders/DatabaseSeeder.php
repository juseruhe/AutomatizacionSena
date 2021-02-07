<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use Database\Seeders\JornadaSeeder;


use Database\Seeders\ModalidadSeeder;

use Database\Seeders\Tipo_ProgramaSeeder;

use Database\Seeders\ProgramaSeeder;

use Database\Seeders\EstadoSeeder;

use Database\Seeders\FichaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(ModalidadSeeder::class);

        $this->call(JornadaSeeder::class);
      
        $this->call(Tipo_ProgramaSeeder::class);

        $this->call(ProgramaSeeder::class);

        $this->call(EstadoSeeder::class);

        $this->call(FichaSeeder::class);
      



    }
}
