<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Ships;
use App\Models\Manufacturers;
use App\Models\Rols;
use App\Models\Focus;



class ShipsController extends Controller
{

    public function userShow() {
        $ships = Ships::get();
        $manufacturers = Manufacturers::get();
        $rols = Rols::get();
        $focus = Focus::get();
        return view('welcome', [
            'ships' => $ships,
            'manufacturers' => $manufacturers,
            'rols' => $rols,
            'focus' => $focus,
        ]);
    }

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

    public function add()
    {
        $manufacturers = Manufacturers::get();
        $rols = Rols::get();
        $focus = Focus::get();
        return view('shipsForm', [
            'ships' => null,
            'manufacturers' => $manufacturers,
            'rols' => $rols,
            'focus' => $focus,
        ]);
    }

    public function addConfirm(Request $request)
    {
        // Check if ship_name exist in database
        $ship = Ships::where('ship_name', $request->ship_name)->first();
        if ($ship) {
            return redirect()->route('ships.add')->with('error', 'El nombre de la nave ya existe');
        } else {
            // Create ship
            $ship = new Ships();
            $ship->ship_name = $request->ship_name;
            $ship->id_manufacturers = $request->id_manufacturers;
            $ship->id_rols = $request->id_rols;
            $ship->id_focus = $request->id_focus;
            $ship->save();
            return redirect()->route('ships')->with('success', 'La nave ha sido creada');
        }
    }

    public function delete($id_ship)
    {
        $ship = Ships::find($id_ship);
        $ship->delete();
        return redirect()->route('ships');
    }

    public function update($id_ship)
    {
        $ship = Ships::find($id_ship);
        $manufacturers = Manufacturers::get();
        $rols = Rols::get();
        $focus = Focus::get();
        return view('shipsForm', [
            'ships' => $ship,
            'manufacturers' => $manufacturers,
            'rols' => $rols,
            'focus' => $focus,
        ]);
    }

    public function updateConfirm($id_ship, Request $request)
    {
            // Update ship
        $ship = Ships::find($id_ship);
        $ship->ship_name = $request->ship_name;
        $ship->manufacturer_id = $request->manufacturer_id;
        $ship->rol_id = $request->rol_id;
        $ship->focus_id = $request->focus_id;
        $ship->ship_image = $request->ship_image;
        $ship->crew_size = $request->crew_size;
        $ship->length = $request->length;
        $ship->mass = $request->mass;
        $ship->unit_price = $request->unit_price;
        $ship->units_in_stock = $request->units_in_stock;
        $ship->save();
        return redirect()->route('ships')->with('success', 'La nave ha sido actualizada');
    }
}
