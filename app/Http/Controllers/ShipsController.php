<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Ships;
use App\Models\Manufacturers;
use App\Models\Rols;
use App\Models\Focus;



class ShipsController extends Controller
{
    public function show()
    {
        $ships = Ships::get();
        $manufacturers = Manufacturers::get();
        $rols = Rols::get();
        $focus = Focus::get();
        return view('ships', [
            'ships' => $ships,
            'manufacturers' => $manufacturers,
            'rols' => $rols,
            'focus' => $focus,
        ]);
    }

    public function delete($id_ship)
    {
        $ship = Ships::find($id_ship);
        $ship->delete();
        return redirect()->route('ships');
    }
}
