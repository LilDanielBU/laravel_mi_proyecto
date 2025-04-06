<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'email',
        'direccion',
        'fecha_nacimiento',
        'tipo_documento',
        'numero_documento',
        'telefono',
        'password'
    ];
}
