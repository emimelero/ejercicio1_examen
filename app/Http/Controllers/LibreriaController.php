<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibreriaController extends Controller
{
    
    public function index()
    {
        $libros = Libro::all();
        return view('libreria.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libreria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Libro::create($request->all());
        return redirect()->route('libreria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $libros = Libro::findOrFail($id);
        return view('libreria.edit', compact('libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libreria = Libro::findOrFail($id);

        $libreria->titulo = $request['titulo'];
        $libreria->autor = $request['autor'];
        $libreria->editorial = $request['editorial'];
        $libreria->foto = $request['foto'];

        $libreria->save();

        return redirect()->route('libreria.index')->with('success', 'libreria actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $libreria = libreria::findOrFail($id);
        $libreria->delete();
        return redirect()->route('libreria.index')->with('success', 'libreria eliminado con éxito.');
    }
}