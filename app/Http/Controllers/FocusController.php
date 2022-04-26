<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Focus;

class FocusController extends Controller
{
    public function show()
    {
        $focus = Focus::get();
        return view('focus', [
            'focus' => $focus,
        ]);
    }

    public function delete($id_focus)
    {
        $focus = Focus::find($id_focus);
        $focus->delete();
        return redirect()->route('focus');
    }
}