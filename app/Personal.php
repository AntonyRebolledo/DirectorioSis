<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';

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
