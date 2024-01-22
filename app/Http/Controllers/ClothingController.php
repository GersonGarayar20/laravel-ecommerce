<?php

namespace App\Http\Controllers;

use App\Models\Clothing;
use App\Models\ClothingType;
use Illuminate\Http\Request;

class ClothingController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query("category");
        $search = $request->query("search");

        $type = ClothingType::where('name', $category)->first();

        // Incluir la lógica de búsqueda en la consulta
        if ($type === null) {
            // Si no se especifica un tipo de ropa, buscar en todos los elementos
            $query = Clothing::query();
        } else {
            // Si se especifica un tipo de ropa, buscar solo en ese tipo
            $query = Clothing::where('type_id', $type->id);
        }

        // Aplicar la búsqueda si se proporciona una palabra clave
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        // Obtener los resultados de la consulta
        $clothingItems = $query->get();

        $clothingTypes = ClothingType::all();

        return view('welcome', ['clothingItems' => $clothingItems, "clothingTypes" => $clothingTypes]);
    }

    public function show($id)
    {
        $clothingItem = Clothing::find($id);

        return view('clothing.show', ['clothingItem' => $clothingItem]);
    }

    // Puedes agregar más métodos para crear, editar, eliminar, etc.

    // Por ejemplo, un método para mostrar un formulario de creación
    public function create()
    {
        $clothingTypes = ClothingType::all();

        return view('clothing.create', ["clothingTypes" => $clothingTypes]);
    }

    public function store(Request $request)
    {
        $clothingItem = new Clothing;
        $clothingItem->name = $request->input('name');
        $clothingItem->price = $request->input('price');
        $clothingItem->image = $request->input('image');
        $clothingItem->size = $request->input('size');
        $clothingItem->color = $request->input('color');
        $clothingItem->type_id = $request->input('type_id');

        $clothingItem->save();

        return redirect()->route('index')->with('success', 'Ropa creada exitosamente.');
    }
}
