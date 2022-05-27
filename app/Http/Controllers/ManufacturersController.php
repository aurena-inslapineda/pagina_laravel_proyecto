<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturers;
use App\Models\Ships;



class ManufacturersController extends Controller
{
    public function show()
    {
        $manufacturers = Manufacturers::get();
        return view('manufacturers', [
            'manufacturers' => $manufacturers,
        ]);
    }

    public function add()
    {
        return view('manufacturersForm', [
            'manufacturers' => null,
        ]);
    }

    public function addConfirm(Request $request)
    {
        // Check if manufacturer_name exist in database
        $manufacturer = Manufacturers::where('manufacturer_name', $request->manufacturer_name)->first();
        if ($manufacturer) {
            return redirect()->route('manufacturers.add')->with('error', 'El fabricante ya existe');
        } else {
            // Create manufacturer
            $manufacturer = new Manufacturers();
            $manufacturer->manufacturer_name = $request->manufacturer_name;
            $manufacturer->save();
            return redirect()->route('manufacturers')->with('success', 'El fabricante ha sido creado');
        }
    }

    public function delete($id_manufacturers)
    {
        // Count ships using this manufacturers and delete if 0
        $ships = Ships::where('id', $id_manufacturers)->count();
        if ($ships == 0) {
            // Delete manufacturers
            $manufacturers = Manufacturers::find($id_manufacturers);
            $manufacturers->delete();
            return redirect()->route('manufacturers')->with('success', 'El fabricante ha sido eliminado');
        } else {
            return redirect()->route('manufacturers')->with('error', 'El fabricante no se puede eliminar porque esta en uso');
        }
    }

    public function update($id_manufacturers)
    {
        $manufacturers = Manufacturers::find($id_manufacturers);
        return view('manufacturersForm', [
            'manufacturers' => $manufacturers,
        ]);
    }

    public function updateConfirm($id_manufacturers, Request $request)
    {
        // Check if manufacturer_name exist in database
        $manufacturer = Manufacturers::where('manufacturer_name', $request->manufacturer_name)->first();
        if ($manufacturer) {
            return redirect()->route('manufacturers.update', $id_manufacturers)->with('error', 'El fabricante ya existe');
        } else {
            // Update manufacturer
            $manufacturers = Manufacturers::find($id_manufacturers);
            $manufacturers->manufacturer_name = $request->manufacturer_name;
            $manufacturers->save();
            return redirect()->route('manufacturers')->with('success', 'El fabricante ha sido actualizado');
        }
    }
}
