<?php

namespace Database\Seeders;

use App\Models\Ficha;
use Illuminate\Database\Seeder;
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
        $this->call(FichaSeeder::class);
    }
}
