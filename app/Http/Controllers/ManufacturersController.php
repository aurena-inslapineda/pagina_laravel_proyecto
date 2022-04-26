<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturers;


class ManufacturersController extends Controller
{
    public function show()
    {
        $manufacturers = Manufacturers::get();
        return view('manufacturers', [
            'manufacturers' => $manufacturers,
        ]);
    }

    public function delete($id_manufacturers)
    {
        $manufacturers = Manufacturers::find($id_manufacturers);
        $manufacturers->delete();
        return redirect()->route('manufacturers');
    }
}
