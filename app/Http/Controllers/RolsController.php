<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rols;

class RolsController extends Controller
{
    public function show()
    {
        $rols = Rols::get();
        return view('rol', [
            'rols' => $rols,
        ]);
    }

    public function delete($id_rol)
    {
        $rol = Rols::find($id_rol);
        $rol->delete();
        return redirect()->route('rol');
    }
}
