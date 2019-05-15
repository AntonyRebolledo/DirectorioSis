<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $fillable = [
        'id',
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Cargo',
        'Cumpleaños',
        'correo',
        'Direccion',
        'Telefono',
        'Celular',
        'SecPartNombre',
        'SecPartTelefono',
        'SecPartCorreo',
        'Foto'
    ];

}
