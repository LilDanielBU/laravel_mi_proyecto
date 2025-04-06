<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function autenticar(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if ($email === 'david25@gmail.com' && $password === '12345') {
            return redirect('/stock_inventario');
        } elseif ($email === 'david2503@gmail.com' && $password === '12345') {
            return redirect('/GerentedEntregas_2');
        } elseif ($email === 'david25032@gmail.com' && $password === '12345') {
            return redirect('/Distribuidor');
        } elseif ($email === 'david25033@gmail.com' && $password === '12345') {
            return redirect('/ventas');
        } else {
            return back()->withErrors(['email' => 'Correo o contraseña incorrectos'])->withInput();
        }
    }
}
