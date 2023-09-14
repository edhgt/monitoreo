<?php

namespace App\Http\Controllers;

use App\Models\TipoMedicion;
use Illuminate\Http\Request;

class TipoMedicionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TipoMedicion::paginate(5);
        return view('tipomedicion.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipomedicion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TipoMedicion::create($request->all());
        return redirect(route('tipo-mediciones.index'))->with('status', 'Tipo de medición creado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoMedicion $tipoMedicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoMedicion $tipoMedicion)
    {
        return view('tipomedicion.edit', ['item' => $tipoMedicion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoMedicion $tipoMedicion)
    {
        $tipoMedicion->update($request->all());
        return redirect(route('tipo-mediciones.index'))->with('status', 'Tipo de medición actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoMedicion $tipoMedicion)
    {
        $tipoMedicion->delete();
        return redirect(route('tipo-mediciones.index'))->with('status', 'Tipo de medición eliminado!');
    }
}
