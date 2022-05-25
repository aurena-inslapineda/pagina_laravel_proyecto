<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orders;
use App\Models\User;
// use App\Models\Order_ship;
// use App\Models\Ships;
// use App\Models\Manufacturers;
// use App\Models\Rols;
// use App\Models\Focus;


class OrdersController extends Controller
{
    public function show() {
        $orders = Orders::get();
        $user = User::get();
        // $ships = Ships::get();
        // $manufacturers = Manufacturers::get();
        // $rols = Rols::get();
        // $focus = Focus::get();
        return view('dashboard', [
            'orders' => $orders,
            'user' => $user,
            // 'ships' => $ships,
            // 'manufacturers' => $manufacturers,
            // 'rols' => $rols,
            // 'focus' => $focus,
        ]);
    }
}
