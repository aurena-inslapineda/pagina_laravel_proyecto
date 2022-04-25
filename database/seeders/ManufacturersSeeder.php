<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacturers;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturers::create([
            'manufacturer_name' => 'Robert Space Industries',
        ]);
    }
}
