<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ships;

class ShipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ships::create([
            'ship_name' => 'Enterprise',
            'manufacturer_id' => 1,
            'rol_id' => 1,
            'focus_id' => 1,
            'ship_image' => 'enterprise.avif',
            'crew_size' => 200,
            'length' => 200,
            'mass' => 200,
            'unit_price' => 200,
            'units_in_stock' => 200,
        ]);
    }
}
