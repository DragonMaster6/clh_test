<?php

namespace Database\Seeders;

use Database\Seeders\PatientsSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PatientsSeeder::class,
        ]);
    }
}
