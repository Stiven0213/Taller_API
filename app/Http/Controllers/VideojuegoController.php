<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index()
    {
        return Videojuego::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'plataforma' => 'required|string|max:255',
            'fecha_lanzamiento' => 'required|date',
            'desarrollador' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'calificacion' => 'required|integer|between:1,10',
            'precio' => 'required|numeric',
            'descripcion' => 'nullable|string',
        ]);

        return Videojuego::create($validatedData);
    }

    public function show($id)
    {
        return Videojuego::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'genero' => 'sometimes|required|string|max:255',
            'plataforma' => 'sometimes|required|string|max:255',
            'fecha_lanzamiento' => 'sometimes|required|date',
            'desarrollador' => 'sometimes|required|string|max:255',
            'editorial' => 'sometimes|required|string|max:255',
            'calificacion' => 'sometimes|required|integer|between:1,10',
            'precio' => 'sometimes|required|numeric',
            'descripcion' => 'nullable|string',
        ]);

        $videojuego = Videojuego::findOrFail($id);
        $videojuego->update($validatedData);
        return $videojuego;
    }

    public function destroy($id)
    {
        $videojuego = Videojuego::findOrFail($id);
        $videojuego->delete();
        return response()->noContent();
    }
}
