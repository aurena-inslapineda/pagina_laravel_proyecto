<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rols;
use App\Models\Ships;

class RolsController extends Controller
{
    public function show()
    {
        $rols = Rols::get();
        return view('rol', [
            'rols' => $rols,
        ]);
    }

    public function add()
    {
        return view('rolForm', [
            'rols' => null,
        ]);
    }
    public function addConfirm(Request $request)
    {
        // Check if rol_name exist in database
        $rol = Rols::where('rol_name', $request->rol_name)->first();
        if ($rol) {
            return redirect()->route('rol.add')->with('error', 'El rol ya existe');
        } else {
            // Create rol
            $rol = new Rols();
            $rol->rol_name = $request->rol_name;
            $rol->save();
            return redirect()->route('rol')->with('success', 'El rol ha sido creado');
        }
    }

    public function delete($id_rol)
    {
        // Count ships using this rol and delete if 0
        $ships = Ships::where('id', $id_rol)->count();
        if ($ships == 0) {
            // Delete rol
            $rol = Rols::find($id_rol);
            $rol->delete();
            return redirect()->route('rol')->with('success', 'El rol ha sido eliminado');
        } else {
            return redirect()->route('rol')->with('error', 'El rol no se puede eliminar porque esta en uso');
        }
    }

    public function update($id_rol)
    {
        $rol = Rols::find($id_rol);
        return view('rolForm', [
            'rols' => $rol,
        ]);
    }
    public function updateConfirm($id_rol, Request $request)
    {
        // Check if rol_name exist in database
        $rol = Rols::where('rol_name', $request->rol_name)->first();
        if ($rol) {
            return redirect()->route('rol.update', $id_rol)->with('error', 'El rol ya existe');
        } else {
            // Update rol
            $rol = Rols::find($id_rol);
            $rol->rol_name = $request->rol_name;
            $rol->save();
            return redirect()->route('rol')->with('success', 'El rol ha sido actualizado');
        }
    }
}
