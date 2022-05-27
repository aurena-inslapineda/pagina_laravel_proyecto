<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Focus;
use App\Models\Ships;

class FocusController extends Controller
{
    // Show all focus
    public function show()
    {
        $focus = Focus::get();
        return view('focus', [
            'focus' => $focus,
        ]);
    }

    // Add focus
    public function add()
    {
        return view('focusForm', [
            'focus' => null,
        ]);
    }

    // Add focus confirm
    public function addConfirm(Request $request)
    {
        // Check if focus_name exist in database
        $focus = Focus::where('focus_name', $request->focus_name)->first();
        if ($focus) {
            return redirect()->route('focus.add')->with('error', 'El focus ya existe');
        } else {
            // Create focus
            $focus = new Focus();
            $focus->focus_name = $request->focus_name;
            $focus->save();
            return redirect()->route('focus')->with('success', 'El focus ha sido creado');
        }
    }

    // Delete focus
    public function delete($id_focus)
    {
        // Count ships using this focus and delete if 0
        $ships = Ships::where('id', $id_focus)->count();
        if ($ships == 0) {
            // Delete focus
            $focus = Focus::find($id_focus);
            $focus->delete();
            return redirect()->route('focus')->with('success', 'El focus ha sido eliminado');
        } else {
            return redirect()->route('focus')->with('error', 'El focus no se puede eliminar porque esta en uso');
        }
    }

    // Update focus
    public function update($id_focus)
    {
        $focus = Focus::find($id_focus);
        return view('focusForm', [
            'focus' => $focus,
        ]);
    }

    // Confirm update focus
    public function updateConfirm($id_focus, Request $request)
    {

        $focus = Focus::where('focus_name', $request->focus_name)->first();
        if ($focus) {
            return redirect()->route('focus.add')->with('error', 'El focus ya existe');
        } else {
            // Create focus
            $focus = Focus::find($id_focus);
            $focus->focus_name = $request->input('focus_name');
            $focus->save();
            return redirect()->route('focus')->with('success', 'El focus ha sido actualizado');
        }

    }
}