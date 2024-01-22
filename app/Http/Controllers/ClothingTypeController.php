<?php

namespace App\Http\Controllers;

use App\Models\ClothingType;
use Illuminate\Http\Request;

class ClothingTypeController extends Controller
{
    public function create()
    {
        return view('clothing.createType');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $newClothingType = new ClothingType();
        $newClothingType->name = $request->input('name');

        $newClothingType->save();

        return redirect()->route('index')->with('success', 'Tipo de Ropa creado exitosamente.');
    }
}
