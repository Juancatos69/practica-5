<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.index', compact('mesas'));
    }

    public function create()
    {
        return view('mesas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'material' => 'required|string|max:255',
            'dimensiones' => 'required|string|max:255',
            'estilo' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        Mesa::create($request->all());

        return redirect()->route('mesas.index')->with('success', 'Mesa creada correctamente.');
    }

    public function edit($id)
    {
        $mesa = Mesa::findOrFail($id);
        return view('mesas.edit', compact('mesa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'material' => 'required|string|max:255',
            'dimensiones' => 'required|string|max:255',
            'estilo' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        $mesa = Mesa::findOrFail($id);
        $mesa->update($request->all());

        return redirect()->route('mesas.index')->with('success', 'Mesa actualizada correctamente.');
    }

    public function destroy($id)
    {
        $mesa = Mesa::findOrFail($id);
        $mesa->delete();

        return redirect()->route('mesas.index')->with('success', 'Mesa eliminada correctamente.');
    }
}
