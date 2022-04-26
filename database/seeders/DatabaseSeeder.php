<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // new FocusSeeder
        $this->call([
            AdminSeeder::class,
            ManufacturersSeeder::class,
            RolsSeeder::class,
            FocusSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
