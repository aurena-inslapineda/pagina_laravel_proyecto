<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order_ship;

class order_shipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Order_ship::create([
            'order_id' => 1,
            'ship_id' => 1,
            'quantity' => 1,
            'unit_price' => 200,
        ]);
    }
}
