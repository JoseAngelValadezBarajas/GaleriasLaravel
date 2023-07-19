<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class ImagenController extends Controller
{
    public function create()
    {
        return view('imagen.create');
    }

    public function store(Request $request)
    {
        $imagen = new Imagen;
        $imagen->nombre = $request->nombre;
        $imagen->categoria = $request->categoria;
        $imagen->genero = $request->genero;
        $imagen->estilo = $request->estilo;

        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $imagen->imagen = $imageName;
        }

        $imagen->save();

        return redirect()->back()->with('success', 'Imagen subida exitosamente.');
    }
    public function index()
    {
        $imagenes = Imagen::all(); // Obtener todas las imágenes de la base de datos

        return view('imagen.index', ['imagenes' => $imagenes]);
    }

}
