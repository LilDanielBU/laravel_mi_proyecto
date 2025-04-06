<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class InventarioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('inventario.agregar');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombre.*' => 'required|string',
            'codigo.*' => 'required|string',
            'categoria.*' => 'required|string',
            'descripcion.*' => 'nullable|string',
            'cantidad.*' => 'required|integer|min:0',
            'precio.*' => 'required|numeric|min:0',
            'imagen.*' => 'nullable|image|max:2048',
        ]);

        $imagenes = [];

        if ($request->hasFile('imagen')) {
            foreach ($request->file('imagen') as $archivo) {
                if ($archivo && $archivo->isValid()) {
                    $nombre = uniqid() . '.' . $archivo->getClientOriginalExtension();
                    $archivo->move(public_path('uploads'), $nombre);
                    $imagenes[] = $nombre;
                } else {
                    $imagenes[] = null;
                }
            }
        }

        foreach ($request->nombre as $i => $nombre) {
            Producto::create([
                'nombre' => $nombre,
                'codigo' => $request->codigo[$i],
                'categoria' => $request->categoria[$i],
                'descripcion' => $request->descripcion[$i],
                'cantidad' => $request->cantidad[$i],
                'precio' => $request->precio[$i],
                'imagen' => $imagenes[$i] ?? null,
                'estado' => 1,
            ]);
        }

        Session::flash('mensaje', 'Productos agregados exitosamente');
        Session::flash('tipo_mensaje', 'success');

        return redirect()->route('inventario.formulario');
    }
}
