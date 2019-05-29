<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';

    protected $fillable = [
        'id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'cargo',
        'correo',
        'direccion',
        'telefono',
        'cumpleaños',
        'celular',
        'sec_part_nombre',
        'sec_part_telefono',
        'sec_part_correo',
        'foto',
        'puesto_id',
        
        
    ];

    public $timestamps = true;

    public function puesto()
    {
        return $this->belongsTo(Puesto::class);
    }

    #region Accesores
    public function getNamePuestoAttribute()
    {
        return "{$this->puesto->puesto_personal}";
    }
    #endregion


}
