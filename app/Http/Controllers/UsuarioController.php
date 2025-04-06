<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
{
    
    
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|unique:usuarios,email',
        'direccion' => 'required|string|max:255',
        'fecha_nacimiento' => 'required|date',
        'tipo_documento' => 'required|string',
        'numero_documento' => 'required|string|max:20',
        'telefono' => 'required|numeric',
        'password' => 'required|string|min:8',
    ]);

    Usuario::create([
        'nombre' => $request->nombre,
        'email' => $request->email,
        'direccion' => $request->direccion,
        'fecha_nacimiento' => $request->fecha_nacimiento,
        'tipo_documento' => $request->tipo_documento,
        'numero_documento' => $request->numero_documento,
        'telefono' => $request->telefono,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->back()->with('success', 'Usuario registrado correctamente.');
}}